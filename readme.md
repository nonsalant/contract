# FTP Contract
## A signable contract that lives in a **single file**

- Host the stand-alone file on your own domain
- Can only be singed once
- Final document has `Print` and `Download as PDF` buttons

## What's in each file:

### test.php 
**A demo** of the contract -- at the stage where it's waiting for the second signature. This runs on a live server and can be viewed (and ran) at: [vileworks.com/contract/test.php](http://vileworks.com/contract/test.php). The only difference between this file and `contract.php` (mentioned below) is that `test.php` doesn't delete itself when you sign it.

### [contract.php](https://github.com/nonsalant/contract/blob/master/contract.php)
**All code** (PHP, CSS, HTML, PNG-data, JS) required by a stand-alone contract file. Upon being signed this script deletes itself (or rather, it deletes its .php file) and leaves behind an .html file: a final version of the contract, signed by both parties.

### readme.md
The file containing the text you're currently reading.

## How it works:

When the **Contract Script** (`contract.php`) receives a signature from the **Second Party** (your Client/the last person who signs) it deletes itself from your server and and leaves behind a **Contract Document** (`contract.html`)

You can get the Contract Script in one of two ways:

Download and edit `contract.php` from this repo, follow the steps from the comments at the top of the file, and use [this online tool](http://cdpn.io/JYpjvE) to generate a new PNG signature. Give it a filename that is harder to guess.

Alternatively, you can generate a Contract Script [online](http://vileworks.com/contract/generator.php) with custom HTML for the contract copy, a signature for the first party, and filename like `contract-1447311912.php`. 

Send your Client a link to the contract, hosted under your own domain.

<img width="900" src="https://dl.dropboxusercontent.com/u/19848482/vileworks/email-contract.png" title="Send your Client a link to the contract" />

<a href="http://vileworks.com/contract/test.php" title="View &amp; Sign Demo Contract"><img  src="https://camo.githubusercontent.com/10c94b200adbd8f2e85111382e518082b406a6de/68747470733a2f2f646c2e64726f70626f7875736572636f6e74656e742e636f6d2f752f31393834383438322f76696c65776f726b732f7369676e65642d636f6e74726163742e706e67" alt="Signed Contract" data-canonical-src="https://dl.dropboxusercontent.com/u/19848482/vileworks/signed-contract.png"></a>

--

[MIT License](http://www.opensource.org/licenses/mit-license.php)
