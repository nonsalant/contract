<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Contract Generator</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<style>
@import url(css/style.css);
@import url(http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic);
@import url(http://fonts.googleapis.com/css?family=Arapey);
@import url(http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700);
@import url(http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800);
</style>
</head>
<body>
<ul class="top-menu">
<li class="currentt">
  <a title="WP Support & Development" href="http://vileworks.com"
     style="letter-spacing:.2em; font-size:1.1em;">
    <span style="color:#bf7883; text-shadow:none;">
      Vile</span><span style="font-weight:300;">Works
    </span>
  </a>
</li>
<li id="menu-item-1" ><a title="WordPress Develoment Services" href="/services/">Services</a></li>
<li id="menu-item-2" ><a title="WordPress Design Portfolio" href="/portfolio/">Portfolio</a></li>
<li id="menu-item-3" ><a title="Resources & Blog" href="/resources/">Resources</a></li>
<li id="menu-item-4" ><a title="Contact Us" href="/contact/">Contact</a></li>
</ul>

<!--<a class="site-title" href="http://www.vileworks.com" title="WP Support & Development">VileWorks</a>-->

<div id="content">

  <h1 style="text-transform:none; letter-spacing: 0.075em; font-size:2.5em;">FTP Contract</h1>
  <hr>
  <h2 style="text-align:center;">You FTP it to your server and send your client  a link to it&#8230;</h2>
  <h2 style="text-align:center; font-family:'Open Sans Condensed', sans; font-weight:300; line-height:1.5em; letter-spacing:.05em">
    Once
    <strong>signed</strong><svg class="icon" viewBox="0 0 8 8">
      <use xlink:href="css/sprite.svg#pencil"></use>
    </svg>
    by your client, this php file will delete itself from your server and leave behind an HTML version of the contract that can be
    <a id="print-preview" title="Print demo" href="../demo.html" target="_blank">
      <strong>printed</strong><svg class="icon" viewBox="0 0 8 8">
        <use xlink:href="css/sprite.svg#print"></use>
      </svg>
    </a>
    or downloaded as a
    <a title="PDF demo" href="../demo.pdf" target="_blank">
      <strong>PDF</strong><svg class="icon" viewBox="0 0 1024 1024">
        <use xlink:href="css/sprite.svg#pdf"></use>
      </svg>
    </a>
  </h2>
  <hr>

  <svg class="large-icon" viewBox="0 0 8 8">
    <use xlink:href="css/sprite.svg#envelope-open"></use>
  </svg>
  <h2>I. Email addresses</h2>
  <p>Both you and your client will be notified when the contract is signed. [They're both optional.]</p>
  <p><input type="email" name="client_email" id="client_email" placeholder="client@example.com"></p>
  <p><input type="email" name="dev_email" id="dev_email" placeholder="dev@example.com"></p>

  <svg class="large-icon" viewBox="0 0 8 8">
    <use xlink:href="css/sprite.svg#code"></use>
  </svg>
  <h2>II. Contract HTML</h2>
  <p>The contract copy should be in HTML format.
    Write it below, or paste its <span style="font-family:'Open Sans Condensed'; letter-spacing:.25px;font-size:1.2em; ">&lt;&gt; source code</span> from somewhere else, and replace
    the default text in the editor.
  [Drag corner to resize editor box.]
  </p>
  <textarea id="contract_html">
    <?php include('template/contract_html.txt'); ?>
  </textarea>

  <svg class="large-icon" viewBox="0 0 8 8">
    <use xlink:href="css/sprite.svg#pencil"></use>
  </svg>
  <h2>III. Your signature</h2>
  <p>This goes on the bottom of the contract. Use your mouse cursor or the tip of your finger to sign in the dotted box below.
  <br>[<a href="#" id="reset">Reset sigature box?</a>]</p>

  <div id="signature"></div>

  <svg class="large-icon" viewBox="0 0 8 8">
    <use xlink:href="css/sprite.svg#download"></use>
  </svg>
  <h2>IV. Download & deploy</h2>
  <form method="post" id="signature-form" action="template/index.php">
    <p>Download the contract and FTP it to your server.</p>

    <p style="">
      <label for="file_name" style="line-height: 2em; margin-right: 1em;">
        <input type="text" id="file_name" name="file_name" value="" style="text-align:right;">.php
      </label>
      <button id="submit"> Download Contract
        <svg class="icon" viewBox="0 0 8 8">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="css/sprite.svg#download"></use>
        </svg>
      </button>
    </p>

    <input type="hidden" id="client_email_capture" name="client_email_capture">
    <input type="hidden" id="dev_email_capture" name="dev_email_capture">
    <!-- <input type="hidden" id="file_name" name="file_name"> -->
    <input type="hidden" id="contract_html_capture" name="contract_html_capture">
    <input type="hidden" id="signature_capture" name="signature_capture">
  </form>

  <svg class="large-icon" viewBox="0 0 8 8">
    <use xlink:href="css/sprite.svg#link"></use>
  </svg>
  <h2>V. Ask your client to review and sign.</h2>
  <p>Send your client a link to the contract (hosted under your domain).
  </p>

  <hr>
  <h3 style="text-align:center;">Resources</h3>
  <ul class="resources two-columns">
    <li><a target="_blank" href="http://vileworks.com/contract/demo.html">
      view a <strong>demo <svg class="icon" viewBox="0 0 8 8">
        <use xlink:href="css/sprite.svg#eye"></use>
      </svg></strong></a>
    </li>
    <li><a target="_blank" href="https://github.com/nonsalant/contract/blob/master/contract.php">
        get contract.php from <strong>github <svg class="icon" viewBox="0 0 1024 1024">
        <use xlink:href="css/sprite.svg#github"></use>
        </svg></strong></a>
    </li>
    <li><a target="_blank" href="https://github.com/nonsalant/contract/issues">
      report an <strong>issue <svg class="icon" viewBox="0 0 8 8">
        <use xlink:href="css/sprite.svg#bug"></use>
      </svg></strong></a>
    </li>
    <li><a target="_blank" href="http://www.wpbeginner.com/showcase/6-best-ftp-clients-for-wordpress-users/">
      recommended <strong>ftp clients <svg class="icon" viewBox="0 0 8 8">
        <use xlink:href="css/sprite.svg#globe"></use>
      </svg></strong></a>
    </li>
    <li><a target="_blank" href="http://www.smashingmagazine.com/2012/08/free-download-useful-legal-documents-for-designers-pdf/">
      useful <strong>legal documents <svg class="icon" viewBox="0 0 8 8">
        <use xlink:href="css/sprite.svg#globe"></use>
      </svg></strong></a>
    </li>
    <li><a target="_blank" href="http://www.wikihow.com/Write-a-Freelance-Contract">
      wikihow: <strong>freelance contract <svg class="icon" viewBox="0 0 8 8">
        <use xlink:href="css/sprite.svg#globe"></use>
      </svg></strong></a>
    </li>
  </ul>

  <hr>
  <p><strong>Disclaimer:</strong> You generate, sign, and host this file yourself and you are responsible
  for its contents and how you use it. This is an open source project, the code for it, including the code
  for the generator, is freely available at <a href="https://github.com/nonsalant/contract/">Github</a>.
  We don't store anything you do on this page, to get a new contract you will have to generate and download it again.
  </p>
  <hr>
  <p class="footer">Created by <a href="http://twitter.com/nonsalant/">Stefan Matei</a> for <a href="http://vileworks.com">VileWorks.com</a></p>

</div> <!--#content-->

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script src="https://cdn.rawgit.com/willowsystems/jSignature/master/libs/jSignature.min.js"></script>

<script src="http://vileworks.com/combined.js"></script>
<script src="js/index.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-1028654-2', 'auto');
  ga('send', 'pageview');
</script>

</body>
</html>
