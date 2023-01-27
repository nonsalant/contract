# The data folder contains default content

The generator loads this content in the browser memory when you first open the app or after you click "Reset Data".

## What’s in each file?

### contract-content.html
Initial HTML for the contract content.

---
### signature.png

The signature for the 1st party. 

You can get a PNG file for a new signature by drawing it in the 
<a target="_blank" href="https://stefanmatei.com/contract-generator/edit#below-contract">generator</a>, 
clicking "Preview", and saving the signature image from the preview.

---
### contract-data.js
Initial names and emails for the 1st and 2nd party.
```javascript
export const contractData = {
    client: {
        name: "",
        email: ""
    },
    dev: {
        name: "",
        email: ""
    }
}
```

---
### style.min.css
All the styles needed for a contract, concatenated and minified.

---
### 📁 /more-data/ 
PostCSS source code, a template to make the downloadable PHP file, 2 HTML partials for the signed and un-signed versions of the contract, a way to control the initial filename (including disabling the default timestamp — in contract-settings.js).

See more info in the [/more-data/README](https://github.com/nonsalant/contract/tree/master/generator/data/more-data#readme) file.
