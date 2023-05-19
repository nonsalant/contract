- **What’s in each file/folder**
  * [contract-settings.js](#contract-settingsjs)
  * [css (folder)](#css-folder)
  * [html-partials (folder)](#html-partials-folder)
  * [php-partials (folder)](#php-partials-folder)
  * [scripts (folder)](#scripts-folder)

## What’s in each file/folder

### contract-settings.js
A way to control the initial filename, including disabling the default timestamp and changing the "-" separator.
```javascript
    filename: {
        name: "contract",
        has_timestamp: true,
        timestamp_separator: "-",
    }
```

---
### css (folder)

PostCSS source code with main.css as the entry point. 

If using this see the [readme file](https://github.com/nonsalant/contract/tree/master/generator#option-2-build-step-for-the-contract-styles)
in the generator folder for info on re-compiling the contract styles into a single minified CSS file.

```css
/* from css/main.css */
@layer reset, accessibility, animated-entrances, forms;
@layer from-quill-editor, from-quill-editor-overrides;
@layer utility;
@layer signatures, buttons;
@layer modal;
@layer contract-typography;
```
The resulting vanilla CSS uses CSS Layers to control the specificity and precedence of the different stylesheets.

---
### html-partials (folder)
2 HTML partials for the signed and un-signed versions of the contract:
* ui-signed.html.xml
* ui-unsigned.html.xml

These are HTML, but an .xml extension is used to prevent some local servers from injecting code (js for live-reloading) into them when they're being fetched.
HTML is a subset of XML so the syntax highlighting should work fine.

---
### php-partials (folder)

A template to make the downloadable PHP file, split in 2 files:
* contract_header.phpsrc
* contract_footer.phpsrc

These are to be treated as data files by the server (so they don't use a .php extension), but the .vscode/settings.json file in this repo should tell VS Code to apply the correct syntax highlighting for PHP.

---
### scripts (folder)
Javascript code for the signed and un-signed versions of the contract + Javascript to set up the QR code.
* contract-script-signed.js
* contract-script-unsigned.js
* qr-code.js
