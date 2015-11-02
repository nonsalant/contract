<?php
/* 

Single File PHP Contract

Upload this single file to your server and send a link to your client. 
(You can rename this php, for example if there are other contracts in the same folder.)

Once they have signed, this php file will delete itself and leave behind an HTML version 
of the signed contract that can be printed or downloaded as a PDF.

*/ 

$email = ""; // Notify when contract is signed

$phpName  = basename($_SERVER['PHP_SELF']) ? basename($_SERVER['PHP_SELF']) : 'index.php';
$fileName = substr($phpName , 0, -4); // without extension
$htmlName = $fileName.'.html';
$pdfName = $fileName.'.pdf';
$contractData = stripslashes ( $_POST['contractdata'] ); 
$ip = get_client_ip_env();

// If the HTML file exists, redirect to it
redirectIfExists(); 

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
		unlink(__FILE__); // the php file deteles itself from the server
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
