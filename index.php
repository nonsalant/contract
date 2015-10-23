<?
 
// Single File PHP Contract

$phpName  = basename($_SERVER['PHP_SELF']) ? basename($_SERVER['PHP_SELF']) : 'index.php';
$fileName = substr($phpName , 0, -4); // without extension
$htmlName = $fileName.'.html';
$contractData = stripslashes ( $_POST['contractdata'] ); 
$ip = get_client_ip_env();
$email = "nonsalant@gmail.com";

//redirectIfExists();

if ($contractData) {
	file_put_contents($htmlName,$contractData);
	$msg = 'Your contract was signed. You can view it here: ' . susbtr(getUrl(),0,-4);
	if ($email) mail($email,'Contract signed!',$msg);
	redirectIfExists();
} 

function redirectIfExists() {
	global $htmlName;
	if ( file_exists($htmlName ) ) {
		//unlink(__FILE__); // the php file deteles itself from the server
		header('Location: '.$htmlName.'#hk'); 
		die();
	}
}
// Function to get the client ip address
function get_client_ip_env() {
	$ipaddress = '';
	if (getenv('HTTP_CLIENT_IP'))
		$ipaddress = getenv('HTTP_CLIENT_IP');
	else if(getenv('HTTP_X_FORWARDED_FOR'))
		$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
	else if(getenv('HTTP_X_FORWARDED'))
		$ipaddress = getenv('HTTP_X_FORWARDED');
	else if(getenv('HTTP_FORWARDED_FOR'))
		$ipaddress = getenv('HTTP_FORWARDED_FOR');
	else if(getenv('HTTP_FORWARDED'))
		$ipaddress = getenv('HTTP_FORWARDED');
	else if(getenv('REMOTE_ADDR'))
		$ipaddress = getenv('REMOTE_ADDR');
	else
		$ipaddress = 'UNKNOWN';

	return $ipaddress;
}
// Function that returns the current file URL
function getUrl() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $url .= $_SERVER["REQUEST_URI"];
  return $url;
}

?><!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Contract</title>
<style>
@import url(http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic);
@import url(http://fonts.googleapis.com/css?family=Arapey);
@import url(http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700);
@import url(http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800);
body { 
    font-family: 'Libre Baskerville', serif; 
    font-size:14px;
    line-height:1.5em;
    color:#000;
    margin:0;
    background:#fff;
}
@media (max-width:600px) {
    body { font-size:12px; }
}
#content {
    max-width: 600px;
    margin: 0 auto;
    padding: 0 2em;
    background: #fff;
}
@media print {
   .noprint { display:none !important; }
}
.hidden { display:none; }
#signature {
  width:auto;
  border:dashed 2px #53777A;
  margin:0;
  text-align:center;
}
.buttons { 
  text-align:center; 
  margin:1.5em auto;
}
#hk,
#hk-contractor {
  max-width:333px;
  display:block;
}
#hk {
  display:none;
}

h1 {
    font-size: 2em;
    line-height: 1.2em;
    letter-spacing: 0.15em;
    font-family: 'Arapey', serif;
    font-weight: normal;
    margin: 1em 0;
    position: relative;
    text-align: center;
    text-transform: uppercase;
    border: solid 1px;
    border-width: 1px 0;
    padding: .5em 0;
}

h2 {
    font-size:1.2em;
    line-height:1.2em;
    letter-spacing:.05em;
    font-family:'Open Sans Condensed',sans-serif;
    font-weight:700;
}

#date-ip {
    font-size:1.2em;
    line-height:1.2em;
    letter-spacing:.05em;
    font-family:'Open Sans Condensed',sans-serif;
    font-weight:400;
}
#print-pdf {
    text-align:center; 
    padding:1.5em 0; 
    margin-top:2em; 
    border-top:solid 1px #ccc;
}
button {
    margin: 0 .5em;
    font-size:1.2em;
    line-height:1.5em;
    /* letter-spacing:.05em; */
    font-family: 'Open Sans Condensed',sans-serif;
    font-weight: 700;
    text-transform:uppercase;
    color: #0a3666;
}
button:hover {
    color: #136fd2;
}

</style>  
</head>

<body>

<div id="content">
  
  <h1>Contract for website development</h1>
  <p>Contract contents in HTML format.</p>
  
  <h2>1. Agreement of parties</h2>
  <p>Lorem ipsum dolor sit habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>  
  <h2>2. Legal matters and copyrights</h2>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>  
  <h2>3. Term and Termination</h2>
  <p>Lorem ipsum dolor sit habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>  
  <h2>4. Force majeure</h2>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec eu libero sit amet quam egestas semper.</p>  
  <h2>5. Payment plan</h2>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>  
  
  <h2>Both parties agree to the terms stipulated above:</h2>
  <!-- Create a new signature at www.cdpn.io/JYpjvE 
    -- replace the data in the src below -->
  <img id="hk-contractor" src="data:image/png;base64,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" style="width:100%;">
  <p>
    <img id="hk" class="results-page-only" src="data:image/png;base64,">
  </p>

  <form method="post" class="noprint" id="signature-form">
    <div id="signature"></div>
      <div class="buttons">
        <button id="reset" type="button">
        Reset
        </button>
        <button id="submit" type="submit">
        Done &rarr;
        </button>
      </div>
    <input type="hidden" id="signature_capture" name="contractdata" />
  </form>

  <div id="date-ip" class="results-page-only hidden">
    <strong>Signed on:</strong> <?php echo date('j F Y'); ?> at <?php echo date('g:ia'); ?>.
    <br><strong>IP address:</strong> 
    <?php echo $ip; ?><br>
  </div>
  
  <div class="results-page-only hidden noprint" id="print-pdf">
    <button id="print" type="button" class="button-secondary" onclick="printContract()">
    Print contract
    </button> 
    <button id="pdf" type="button" class="button-secondary" onclick="generatePdf()">
    Download as PDF
    </button>
  </div>

</div> <!--#content-->

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/willowsystems/jSignature/master/libs/jSignature.min.js"></script>

<script>

$(document).ready(function() { 

$('#signature').jSignature();
var $sigdiv = $('#signature');
var datapair = $sigdiv.jSignature('getData', 'svgbase64');

$('#submit').click(function(e) {
  $('#signature-form').hide();
  $('.results-page-only').show();
  $("#signature_capture").val('<!DOCTYPE html><html>' + $('html').html().toString() + '</html>');
}); 

$('canvas.jSignature').mouseup(function() {
  var data = $('#signature').jSignature('getData');
  $("#hk").attr('src',data);  
});
  
$('#reset').click(function(e){
  $('#signature').jSignature('clear');
  var data = $('#signature').jSignature('getData');
  $("#hk").attr('src',data);
  $("#signature_capture").val('');
  e.preventDefault();
});
 
  
});

function printContract() {
  window.print();
}
function generatePdf() {
  window.location.href = '//pdfcrowd.com/url_to_pdf/?use_print_media=1&footer_text=page%20%p%20%of%20%n&hmargin=1cm&pdf_name=<?php echo $pdfName; ?>';
}
</script>

</body>
