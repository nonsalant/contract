<?php
// Don't use this file. Use contract.php instead.
// This file is only used for testing, it does not delete itself and does not redirect to the HTML version once the contract is signed.

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
    font-size:14px;
    line-height:1.5em;
    color:#000;
    margin:0;
    background:#fff;
}
@media (max-width:600px) {
    body { font-size:12px; }
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
