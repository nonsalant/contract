# Electronically signable contract that lives in a single file

An open source generator for signable and portable contracts that can each live in a standalone file on your own server or domain.

You can generate a contract online (eg: using the [public Generator](https://stefanmatei.com/contract-generator/edit)), and then:
- **download it as a single file&ast;**,
- **upload it to your own server&ast;&ast;**,
- and **send your client a link to it.**

When signed by your client, the .php file will delete itself from existence and replace itself with a static HTML version that has a Print button (and, other than the .html extension, the same filename).

The client will be immediately redirected to the signed version and, optionally, email notifications will be sent out to both parties. 

The Generator is written in vanilla Javascript (doesn’t require PHP or have any jQuery or Node dependencies), and can be ran online without any registration or account (at [stefanmatei.com/contract-generator/](https://stefanmatei.com/contract-generator/edit) — where your data **stays only in your browser’s Local Storage** (and only until you click “reset data”)); or it can be downloaded and ran from your own server. 

If downloading and running the generator on your own, you have (by default) the option to use it without any build step — you can read more on this in the Readme.md from the [generator folder](https://github.com/nonsalant/contract/tree/master/generator) on github.

---

<b>&ast;</b> The generated contract file will have a signature input for your client and a QR code to make opening on a different device easier.

<b>&ast;&ast;</b> It can sit in a folder next to an existing site that's already running on PHP 💡
