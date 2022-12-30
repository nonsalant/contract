# Contract Generator 

[![Netlify Status](https://api.netlify.com/api/v1/badges/dc7d73d9-c327-4bcd-a33a-657603bc64ab/deploy-status)](https://app.netlify.com/sites/stefanmatei/deploys)

## Running it online

You can run the generator online:
* **[Generate Contract →](https://stefanmatei.com/contract-generator/edit)**

## Downloading and running the generator folder on your own server (3 options)
* [Download **generator.zip**](https://github.com/nonsalant/contract/releases/)

Alternatively, you can download the contents of this folder and transfer them to your own server.

If running the generator locally, a local server will nedd to be started (eg: using the <em>Five Server</em> extension in VS Code) in order for the generator to work (browsers block ES6 imports from being used locally).

Based on the level of control you need over your styles, you can go with one of the following 3 options:
<br /><br />


### Option 1: No build setp

The generator can be used without any build step, with the existing contract styles (in regular/vanilla css) already compiled in `📁data/style.min.css`. 

---

### Ooption 2: Build step for the contract styles
(in `📁data/more-data/css`)

The styles for the contract use postcss for:
* importing multiple css files into a single minified file
* enabling use of selector nesting

To edit the uncompilled postcss, a build step is needed with the following commands to “build” or “watch” (re-build on every change) the contract styles:

```bash
npm run postcss:build 
```
```bash
npm run postcss:watch
```

Postcss configuration can be found in `postcss.config.js`

---

### Option 3: Enabling PostCSS for the generator styles
(in `📁styles`)

If using postcss in the generator's `📁styles` folder too (in addition to the contract styles in `📁data/more-data/css`), you will need a separate watch command for the generator styles:

```bash
postcss:watch-generator
```

...and the following files will need to be edited accordingly:

* package.json:

```json
  "scripts": {
    "postcss:watch": "postcss data/more-data/css/main.css -o data/style.min.css -w",
    "postcss:watch-generator": "postcss styles/main.css -o styles/style.min.css -w",
    "postcss:build": "postcss data/more-data/css/main.css -o data/style.min.css & postcss styles/main.css -o style.min.css"
  },
```
* index.html:
```html
    <!-- <link rel="stylesheet" href="/styles/main.css"> -->
    <link rel="stylesheet" href="/style.min.css">
```
