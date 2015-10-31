<?php
// Don't use this file. Use contract.php instead.
// This file is only used for testing, it does not delete itself and 
// does not redirect to the HTML version once the contract is signed.

$email = ""; // Notify when contract is signed

$phpName  = basename($_SERVER['PHP_SELF']) ? basename($_SERVER['PHP_SELF']) : 'index.php';
$fileName = substr($phpName , 0, -4); // without extension
$htmlName = $fileName.'.html';
$pdfName = $fileName.'.pdf';
$contractData = stripslashes ( $_POST['contractdata'] ); 
$ip = get_client_ip_env();

// If the HTML file exists, redirect to it
//redirectIfExists(); 

// If the contractdata was received in the form, put it in an html file
if ($contractData) {
	file_put_contents($htmlName,$contractData);
	$msg = 'Your contract was signed. You can view it here: ' . getUrl();
	if ($email) mail($email,'Contract signed!',$msg);
	redirectIfExists();
} 

// If html file exists, delete php file, redirect to html, and die.
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
// Function that returns the current file URL and replaces the .php extension with .html
function getUrl() {
	$url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
	$url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
	$url .= $_SERVER["REQUEST_URI"];
       $url = substr($url,0,-4) . '.html'; 
	return $url;
}

?><!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Contract</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<style>
@import url(http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic);
@import url(http://fonts.googleapis.com/css?family=Arapey);
@import url(http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700);
@import url(http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800);
body { 
    font-family: 'Libre Baskerville', serif; 
    font-size:16px;
    line-height:1.5em;
    color:#000;
    margin:0;
    background:#fff;
}
@media (max-width:600px) {
    body { font-size:14px; }
}
@media print {
   .noprint { display:none !important; }
}
.hidden { 
    display:none; 
}
#content {
    max-width: 600px;
    margin: 0 auto;
    margin-bottom: 3em;
    padding: 0 2em;
    background: #fff;
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
#signature {
    width:auto;
    border:dashed 2px #53777A;
    margin:0;
    text-align:center;
}
#hk,
#hk-contractor {
    max-width:333px;
    display:block;
}
#hk {
    display:none;
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
.buttons { 
    text-align:center; 
    margin:1.5em auto;
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
<h1>Contract of work for website design and development</h1>
<p>Between <strong>Alice</strong>, referred to below as "Designer", and <strong>Bob</strong>, referred to below as "Customer".</p>
<h2>1. Agreement of parties</h2>
<p>Customer hires Designer to redesign the current website, <strong>bobswebsite.com</strong>, for the estimated total price of <strong>$PRICE</strong>.</p>
<p>The agreed payment plan is at the end of the document.</p>
<p>Designer agrees to provide quality service and to answer to the Customer&rsquo;s requests in a timely manner. The services provided will be:</p>
<ol style="list-style-type: lower-alpha;">
<li>service1;</li>
<li>service2;</li>
<li>service3;</li>
<li>service4.</li>
</ol>
<h2>2. Legal matters and copyrights</h2>
<p>The Customer will guarantee to the Designer that any elements of text, graphics, photos, trademarks or other artwork that the Customer provides for inclusion in the website are either owned by him or that he has the permission to use them. When the Designer receives the final payment, copyright is automatically assigned as follows: Customer will own the graphics, virtual elements, text content photographs and other data provided, unless someone else owns them. The Designer owns the XHTML markup, CSS and other code and he licenses it to the Customer for use on only this project. Designer can reserve the right to display, with Customer&rsquo;s consent, the work as part of the portfolio.</p>
<h2>3. Term and termination</h2>
<ol style="list-style-type: lower-alpha;">
<li>This contract shall commence upon the first payment, as outlined in the payment plan and shall remain effective until the services are completed and delivered.</li>
<li>This contract may be terminated at any time by either party effective immediately upon notice, or the mutual agreement of the parties.</li>
<li>In the event of termination, Designer shall be compensated for the service performed through the date of termination in the amount (a) any advanced payment, (b) a prorated portion of the fees due, or (c) hourly fees for work performed by the Designer at the time of the termination, whichever is greater, together with any additional costs incurred trough and up to the date of cancellation.</li>
<li>This Contract may be modified by parties; any modification must be in writing.</li>
<li>All notices to be given hereunder shall be transmitted in writing by electronic mail and will only be effective upon return confirmation.</li>
</ol>
<h2>4. Force majeure</h2>
<p>Designer shall not be deemed in breach of this contract if Designer is unable to complete the services or any portion by reason of fire, earthquake, labor dispute, illness, internet breaches or any technical issues that may appear beyond Designer&rsquo;s control. Upon occurrence of any Force Majeure Event, Designer shall give notice to the Customer of his inability to perform or of delay in completing the services and shall propose revisions to the schedule for completion of the services.</p>
<h2>5. Payment plan</h2>
<p>Payment shall be done as follows:</p>
<ul>
<li>50% of total estimated fee will be required to commence work, after this contract has been approved and signed by both parties.</li>
<li>50% upon project closure.</li>
</ul>
<p>Any extra time required outside the project timeline/services mentioned at point 1 of this contract, will be billed at a rate of <strong>$FEE</strong> per hour.</p>  <h2>Both parties agree to the terms stipulated above:</h2>
  <!-- You can generate a new signature at www.cdpn.io/JYpjvE -->
  <img id="hk-contractor" src="
data:image/png;base64,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" style="width:100%;">
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
    <strong>Signed on:</strong> <?php echo date('j F Y'); ?>
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
<!-- https://github.com/brinley/jSignature/blob/master/README.md -->
<script src="https://cdn.rawgit.com/willowsystems/jSignature/master/libs/jSignature.min.js"></script>

<script>
$(document).ready(function() { 
  $('#signature').jSignature();
  var $sigdiv = $('#signature');
  var datapair = $sigdiv.jSignature('getData', 'svgbase64');

  $('#signature').bind('change', function(e) {
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

  $('#submit').click(function(e) {
    $('#signature-form').hide();
    $('.results-page-only').show();
    pageHtml = '<!DOCTYPE html><html>' + $('html').html().toString() + '</html>';
    $("#signature_capture").val(pageHtml);
    // To avoid showing the Print/PDF buttons before the page is processed
    $('#print-pdf, #date-ip').html('<h2 id="loading" style="text-align:center; display:none;">Saving Contract...</h2>');
    $('#print-pdf, #date-ip').append('<p id="loading2" style="text-align:center; display:none;">This should only take a few seconds</p>');
    $('#loading').slideDown(300, function() {
  	$('#loading2').delay(2000).slideDown(300);
  });
}); 
 
});

function printContract() {
  window.print();
}
function generatePdf() {
  // http://pdfcrowd.com/save-to-pdf/ 
  window.location.href = '//pdfcrowd.com/url_to_pdf/?use_print_media=1&height=-1&pdf_name=<?php echo $pdfName; ?>';
}
</script>

</body>
</html>
