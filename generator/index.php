<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Contract</title>
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
  
  <h1 style="text-transform:none; letter-spacing: 0.075em; font-size:2.5em;">Signable contract.php</h1>
  <hr>
  <h2 style="text-align:center;">You FTP it to your server and send your client  a link to it&#8230;</h2>
  <h2 style="text-align:center; font-family:'Open Sans Condensed', sans; font-weight:300; line-height:1.5em; letter-spacing:.05em">
    Once 
    <a title="Signable demo" href="../demo.php" target="_blank">
      <strong>signed</strong><svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 8 8">
      <path d="M6 0l-1 1 2 2 1-1-2-2zm-2 2l-4 4v2h2l4-4-2-2z" />
      </svg> 
    </a>
    by your client, this php file will delete itself from your server and leave behind an HTML version of the contract that can be 
    <a id="print-preview" title="Print demo" href="../demo.html" target="_blank">
      <strong>printed</strong><svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 8 8">
      <path d="M2 0v2h4v-2h-4zm-1.91 3c-.06 0-.09.04-.09.09v2.81c0 .05.04.09.09.09h.91v-2h6v2h.91c.05 0 .09-.04.09-.09v-2.81c0-.06-.04-.09-.09-.09h-7.81zm1.91 2v3h4v-3h-4z" />
      </svg> 
    </a>
    or downloaded as a 
    <a title="PDF demo" href="../demo.pdf" target="_blank">
      <strong>PDF</strong><svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 8 8">
      <path d="M0 0v8h7v-4h-4v-4h-3zm4 0v3h3l-3-3zm-3 2h1v1h-1v-1zm0 2h1v1h-1v-1zm0 2h4v1h-4v-1z" />
      </svg>
    </a>
  </h2>
  <hr>
  
  <svg xmlns="http://www.w3.org/2000/svg" class="large-icon" viewBox="0 0 8 8">
    <path d="M5 0l-3 6h1l3-6h-1zm-4 1l-1 2 1 2h1l-1-2 1-2h-1zm5 0l1 2-1 2h1l1-2-1-2h-1z" transform="translate(0 1)" />
  </svg>
  <h2>I. Contract HTML</h2>
  <p>The contract copy should be in HTML format. 
    Write it below, or paste its <span style="font-family:'Open Sans Condensed'; letter-spacing:.25px;font-size:1.2em; ">&lt;&gt; source code</span> from somewhere else, and replace 
    the default text in the editor.
  [Drag corner to resize editor box.]
  </p>
  <textarea id="input-html">
    <?php include('template/default-contract.html'); ?>
    
    <!-- You can generate a new signature at www.cdpn.io/JYpjvE -->
  </textarea>
  
  <svg xmlns="http://www.w3.org/2000/svg" class="large-icon right" viewBox="0 0 8 8">
    <path d="M6 0l-1 1 2 2 1-1-2-2zm-2 2l-4 4v2h2l4-4-2-2z" />
  </svg>
  <h2>II. Your signature</h2>
  <p>This goes on the bottom of the contract. Use your mouse cursor or the tip of your finger to sign in the dotted box below.
  <br>[<a href="#" id="reset">Reset sigature box?</a>]</p>
  
  <div id="signature"></div>

  <svg xmlns="http://www.w3.org/2000/svg" class="large-icon" viewBox="0 0 8 8">
    <path d="M4.5 0c-1.21 0-2.27.86-2.5 2-1.1 0-2 .9-2 2s.9 2 2 2h4.5c.83 0 1.5-.67 1.5-1.5 0-.65-.42-1.29-1-1.5v-.5c0-1.38-1.12-2.5-2.5-2.5z" transform="translate(0 1)" />
  </svg>
  <h2>III. Download & deploy</h2>
  <form method="post" id="signature-form" action="template/index.php">
    <p>Get the contract and upload it to your server using FTP.</p>
    <button id="submit">
      <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="12px" height="12px" viewBox="0 0 8 8">
        <path d="M3 0v3h-2l3 3 3-3h-2v-3h-2zm-3 7v1h8v-1h-8z" />
      </svg> Download Contract
    </button> <small><em>contract.php</em> (you can rename this)</small>
    <input type="hidden" id="file_name" name="file_name">
    <input type="hidden" id="signature_capture" name="signature_capture">
    <input type="hidden" id="html_capture" name="html_capture">
  </form>
  
  <svg xmlns="http://www.w3.org/2000/svg" class="large-icon" viewBox="0 0 8 8">
    <path d="M0 0v1l4 2 4-2v-1h-8zm0 2v4h8v-4l-4 2-4-2z" transform="translate(0 1)" />
  </svg>
  <h2>IV. Ask your client to review and sign.</h2>
  <p>Send your client a link to the contract (hosted under your domain).
  </p>
  <!--<p>The link could be short and random or long and descriptive, but not very obvious to guess: you probably don't want some clients to be able to find other clients' contracts.</p>-->
  
  <hr>
  <h3 style="text-align:center;">Resources</h3>
  <ul class="resources two-columns">
    <li><a target="_blank" href="http://vileworks.com/contract/demo.php">
      view a signable <strong>demo <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 8 8">
  <path d="M4.03 0c-2.53 0-4.03 3-4.03 3s1.5 3 4.03 3c2.47 0 3.97-3 3.97-3s-1.5-3-3.97-3zm-.03 1c1.11 0 2 .9 2 2 0 1.11-.89 2-2 2-1.1 0-2-.89-2-2 0-1.1.9-2 2-2zm0 1c-.55 0-1 .45-1 1s.45 1 1 1 1-.45 1-1c0-.1-.04-.19-.06-.28-.08.16-.24.28-.44.28-.28 0-.5-.22-.5-.5 0-.2.12-.36.28-.44-.09-.03-.18-.06-.28-.06z"
  transform="translate(0 1)" /></svg></strong></a></li>
    <li><a target="_blank" href="https://github.com/nonsalant/contract/blob/master/contract.php">
        get contract.php from <strong>github <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 8 8">
  <path d="M.09 0c-.06 0-.09.04-.09.09v7.81c0 .05.04.09.09.09h7.81c.05 0 .09-.04.09-.09v-7.81c0-.06-.04-.09-.09-.09h-7.81zm1.41.78l1.72 1.72-1.72 1.72-.72-.72 1-1-1-1 .72-.72zm2.5 2.22h3v1h-3v-1z" />
</svg></strong></a></li>
    <li><a target="_blank" href="https://github.com/nonsalant/contract/issues">
      report an <strong>issue <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 8 8">
  <path d="M3.5 0c-1.19 0-1.98 1.69-1.19 2.5-.09.07-.2.14-.28.22l-1.31-.66a.5.5 0 0 0-.34-.06.5.5 0 0 0-.09.94l1.16.56c-.09.16-.19.33-.25.5h-.69a.5.5 0 0 0-.09 0 .5.5 0 1 0 .09 1h.5c0 .23.02.45.06.66l-.78.41a.5.5 0 1 0 .44.88l.66-.34c.25.46.62.85 1.03 1.09.35-.19.59-.44.59-.72v-1.44a.5.5 0 0 0 0-.09v-.81a.5.5 0 0 0 0-.22c.05-.23.26-.41.5-.41.28 0 .5.22.5.5v.88a.5.5 0 0 0 0 .09v.06a.5.5 0 0 0 0 .09v1.34c0 .27.24.53.59.72.41-.25.79-.63 1.03-1.09l.66.34a.5.5 0 1 0 .44-.88l-.78-.41c.04-.21.06-.43.06-.66h.5a.5.5 0 1 0 0-1h-.69c-.06-.17-.16-.34-.25-.5l1.16-.56a.5.5 0 0 0-.31-.94.5.5 0 0 0-.13.06l-1.31.66c-.09-.08-.19-.15-.28-.22.78-.83 0-2.5-1.19-2.5z"
  /></svg></strong></a></li>
    
    <li><a target="_blank" href="http://www.wpbeginner.com/showcase/6-best-ftp-clients-for-wordpress-users/">
      recommended <strong>ftp clients <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 8 8">
  <path d="M4 0c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 1c.33 0 .64.09.94.19-.21.2-.45.38-.41.56.04.18.69.13.69.5 0 .27-.42.35-.13.66.35.35-.64.98-.66 1.44-.03.83.84.97 1.53.97.42 0 .53.2.5.44-.54.77-1.46 1.25-2.47 1.25-.38 0-.73-.09-1.06-.22.22-.44-.28-1.31-.75-1.59-.23-.23-.72-.14-1-.25-.09-.27-.18-.54-.19-.84.03-.05.08-.09.16-.09.19 0 .45.38.59.34.18-.04-.74-1.31-.31-1.56.2-.12.6.39.47-.16-.12-.51.36-.28.66-.41.26-.11.45-.41.13-.59-.06-.03-.13-.1-.22-.19.45-.27.97-.44 1.53-.44zm2.31 1.09c.18.22.32.46.44.72 0 .01 0 .02 0 .03-.04.07-.11.11-.22.22-.28.28-.32-.21-.44-.31-.13-.12-.6.02-.66-.13-.07-.18.5-.42.88-.53z"
  /></svg></strong></a></li>
    <li><a target="_blank" href="http://www.smashingmagazine.com/2012/08/free-download-useful-legal-documents-for-designers-pdf/">
      useful <strong>legal documents <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 8 8">
  <path d="M4 0c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 1c.33 0 .64.09.94.19-.21.2-.45.38-.41.56.04.18.69.13.69.5 0 .27-.42.35-.13.66.35.35-.64.98-.66 1.44-.03.83.84.97 1.53.97.42 0 .53.2.5.44-.54.77-1.46 1.25-2.47 1.25-.38 0-.73-.09-1.06-.22.22-.44-.28-1.31-.75-1.59-.23-.23-.72-.14-1-.25-.09-.27-.18-.54-.19-.84.03-.05.08-.09.16-.09.19 0 .45.38.59.34.18-.04-.74-1.31-.31-1.56.2-.12.6.39.47-.16-.12-.51.36-.28.66-.41.26-.11.45-.41.13-.59-.06-.03-.13-.1-.22-.19.45-.27.97-.44 1.53-.44zm2.31 1.09c.18.22.32.46.44.72 0 .01 0 .02 0 .03-.04.07-.11.11-.22.22-.28.28-.32-.21-.44-.31-.13-.12-.6.02-.66-.13-.07-.18.5-.42.88-.53z"
  /></svg></strong></a></li>
    <li><a target="_blank" href="http://www.wikihow.com/Write-a-Freelance-Contract">
      wikihow: <strong>freelance contract <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 8 8">
  <path d="M4 0c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 1c.33 0 .64.09.94.19-.21.2-.45.38-.41.56.04.18.69.13.69.5 0 .27-.42.35-.13.66.35.35-.64.98-.66 1.44-.03.83.84.97 1.53.97.42 0 .53.2.5.44-.54.77-1.46 1.25-2.47 1.25-.38 0-.73-.09-1.06-.22.22-.44-.28-1.31-.75-1.59-.23-.23-.72-.14-1-.25-.09-.27-.18-.54-.19-.84.03-.05.08-.09.16-.09.19 0 .45.38.59.34.18-.04-.74-1.31-.31-1.56.2-.12.6.39.47-.16-.12-.51.36-.28.66-.41.26-.11.45-.41.13-.59-.06-.03-.13-.1-.22-.19.45-.27.97-.44 1.53-.44zm2.31 1.09c.18.22.32.46.44.72 0 .01 0 .02 0 .03-.04.07-.11.11-.22.22-.28.28-.32-.21-.44-.31-.13-.12-.6.02-.66-.13-.07-.18.5-.42.88-.53z"
  />
</svg></strong></a></li>
    
  </ul>  
  
  <hr>
  <p class="footer">Created by <a href="http://twitter.com/nonsalant/">Stefan Matei</a> for <a href="http://vileworks.com">VileWorks.com</a></p>
</div> <!--#content-->

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script src="https://cdn.rawgit.com/willowsystems/jSignature/master/libs/jSignature.min.js"></script>

<script src="http://www.vileworks.com/combined.js"></script>
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
