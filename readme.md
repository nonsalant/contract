# Single File Contract
## A contract that lives in a **single file** and becomes static HTML after it's been signed.

1. [**Generate** a contract file →](https://stefanmatei.com/contract-generator/edit)
1. **Upload** it to your server
1. **Send** your client a link to it
* **[View demo](https://stefanmatei.com/contract-generator/contract-demo.html)**

[![email-contract](https://user-images.githubusercontent.com/180561/209838611-9b40307e-de05-44c0-967a-54399d85ef53.png)](https://stefanmatei.com/contract-generator/contract-demo.html)

---

## How it works

* **[Contract Generator →](https://stefanmatei.com/contract-generator/edit)**

1. Click the link above to create a contract file with custom content or HTML, a signature for the first party, and filename like `contract-1234567890.php`.
2. Upload the generated file to your own server or domain. You can also rename this file and put it in a folder with a unique name, eg: `contract-1234567890/index.php`.
3. Once signed by both parties, **the PHP file will delete itself from your server and leave behind a static HTML file.**

---

[![Netlify Status](https://api.netlify.com/api/v1/badges/dc7d73d9-c327-4bcd-a33a-657603bc64ab/deploy-status)](https://app.netlify.com/sites/stefanmatei/deploys)

---

## What's in each file

### [contract.php](https://github.com/nonsalant/contract/blob/master/contract.php)

An example of a contract script: contains **all code** (PHP, CSS, HTML, PNG-data, JS) required by a stand-alone contract file. Upon being signed, this script deletes itself (or rather, it deletes its .php file), and leaves behind an .html file with the same name: a final version of the contract, signed by both parties.

The first 10 or so lines of the file are used to store contract metadata (one per line), ie:

```php
<?php /* ##########################
[client_email]
[dev_email]
[dev_signature]
[dev_ip]
[dev_timestamp]
[dev_timestamp_offset]
[dev_name]
[client_name]
###################################
```
---

### test.php 
A copy of `contract.php` -- the only difference is when the filename is `test.php` or `demo.php` the PHP file doesn't delete itself when signed.

---

### [📁/generator/](https://github.com/nonsalant/contract/tree/master/generator)

Folder containing all the code behind the [online generator](https://stefanmatei.com/contract-generator/).

The Contract Generator can be downloaded by getting the generator.zip archive from the [Releases section](https://github.com/nonsalant/contract/releases/).

[![contract-generator](https://user-images.githubusercontent.com/180561/209838852-20825cf1-ab25-4f09-8ec7-c26eb80c0a14.jpg)](https://stefanmatei.com/contract-generator/)


---

[MIT License](http://www.opensource.org/licenses/mit-license.php)
