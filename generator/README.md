# Generator Readme

[![Netlify Status](https://api.netlify.com/api/v1/badges/dc7d73d9-c327-4bcd-a33a-657603bc64ab/deploy-status)](https://app.netlify.com/sites/stefanmatei/deploys)

## Running it online

You can run the generator online:
* [**Generate a contract** online →](https://stefanmatei.com/contract-generator/edit)

## Downloading and running the generator on your own server (4 options)

Alternatively, you can download the generator as a small app written in vanilla Javascript:

* [Download **generator.zip**](https://github.com/nonsalant/contract/releases/)

…and transfer it to your own server.

If running the generator locally, a local server will need to be started (eg: using the <a href="https://marketplace.visualstudio.com/items?itemName=yandeu.five-server" target="_blank">Five Server</a> extension in VS Code) in order for the generator to work (browsers block ES Javascript imports from being used locally).

### Optional build step
(for bundling styles and using postcss)

Based on the level of control you need over the styles for the generator and the contract itself, you can go with one of the following 3 options:
<br /><br />


### Option 1: No build setp

The generator can be used without any build step, with the existing contract styles (in regular/vanilla css) already compiled in `data/style.min.css`. 

---
### Option 2: Docker

Build your own docker image or use the latest [image](https://hub.docker.com/r/sarangcr03/nonsalant-contract) from Docker hub

### Deploy with the latest [image](https://hub.docker.com/r/sarangcr03/nonsalant-contract) 

To run the image as a standalone container, use the following commands:
```bash
docker pull sarangcr03/nonsalant-contract:latest
```
```bash
docker run -p 9090:80 sarangcr03/nonsalant-contract:latest
```
For those who prefer Docker Compose, below is a simple docker-compose.yml example that sets up the service:
```yaml
version: '3.8'
services:
  web:
    image: sarangcr03/nonsalant-contract:latest
    ports:
      - "9090:80"
```
Start the service using:
```bash
docker-compose up
```

### Deploy with nginx proxy manager for reverse proxy and SSL

*With this method you are not mapping an internal port to a host port in docker, so you must add a proxy host pointing to `"http://contract-app:80"` in the nginx proxy manager admin panel which will be located at `http://localhost:81/` (replace `localhost` with the ip address or hostname of the docker host)*

docker-compose.yml example:
```yaml
version: '3.8'

services:
  nginx-proxy-manager:
    image: jc21/nginx-proxy-manager:latest
    restart: unless-stopped
    ports:
      - '80:80'   # HTTP
      - '81:81'   # Admin interface
      - '443:443' # HTTPS
    volumes:
      - ./data:/data
      - ./letsencrypt:/etc/letsencrypt
    networks:
      - contract-net

  contract-app:
    image: sarangcr03/nonsalant-contract:latest
    restart: unless-stopped
    networks:
      - contract-net

networks:
  contract-net:
    driver: bridge
```
Start the service using:
```bash
docker-compose up
```
---
### Option 3: Build step for the contract styles
(in `📁data/more-data/css`)

The styles for the contract use postcss for:
* importing multiple CSS files into a single minified file
* enabling use of selector nesting

To edit the uncompilled postcss, a build step is needed with the following commands to “build” or “watch” (re-build on every change) the contract styles:

```bash
npm run postcss:build 
```
```bash
npm run postcss:watch
```

#### FYI

All the CSS for the contract styles (all files in the `📁data/more-data/css` folder, coming in through the `main.css` entrypoint) will be compilled from postcss to regular CSS (in `data/style.min.css`).

All CSS for the generator styles (all files in the `📁styles` folder, coming in through the `main.css` entrypoint) are currently written in regular CSS and loaded using CSS `@import`s. 

The contract's `data/style.min.css` is also imported in the generator's main.css entry point using a regular CSS `@import`.

Postcss configuration can be found in `postcss.config.js`

---

### Option 4: Enabling postcss for the generator styles
(in `📁styles`)

If you intend to write postcss in the generator's styles too (in addition to the contract styles mentioned above, where postcss is enabled by default), you will need a separate watch command to process the postcss:

```bash
postcss:watch-generator
```

...and the following files will need to be edited accordingly:

#### Inside the `package.json` file

replace:
```json
  "scripts": {
    "postcss:watch": "postcss data/more-data/css/main.css -o data/style.min.css -w",
    "postcss:build": "postcss data/more-data/css/main.css -o data/style.min.css"
  },
```
with:
```json
  "scripts": {
    "postcss:watch": "postcss data/more-data/css/main.css -o data/style.min.css -w",
    "postcss:watch-generator": "postcss styles/main.css -o styles/style.min.css -w",
    "postcss:build": "postcss data/more-data/css/main.css -o data/style.min.css & postcss styles/main.css -o style.min.css"
  },
```
#### Inside the `edit.html` file:

replace:
```html
    <link rel="stylesheet" href="styles/main.css">
    <!-- <link rel="stylesheet" href="styles/style.min.css"> -->
```
with:
```html
    <!-- <link rel="stylesheet" href="/styles/main.css"> -->
    <link rel="stylesheet" href="/style.min.css">
```

#### FYI

All the generator styles (all files in the `📁styles` folder, coming in through the `main.css` entrypoint) will now be compiled from postcss to regular CSS (in `styles/style.min.css`).

The styles for the contract itself (`data/style.min.css` mentioned above) are imported in the generator styles using a regular CSS `@import`.

Postcss configuration can be found in `postcss.config.js`
