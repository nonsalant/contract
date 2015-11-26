<?php /*
client@example.com
dev@example.com
contract-1448515317.php
data:image/png;base64,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

###################################
1. If you got this file from GitHub and its name is still contract.php, you should RENAME the file to something harder to guess.
The 4th line is a timestamp outputed by the online generator and an example of a more secure filename.

2. The 2nd and 3rd lines (the emails) are read by this PHP script (from itself).
When a signature is submitted, this script will send both parties an email with a link to the signed contract.

3. The 5th line ($lines[4] below) is the data for $DEV_SIGNATURE.
If you got this file from GitHub, the default developer signature just says "John Doe".
You can generate a new signature @ http://cdpn.io/JYpjvE and replace the data above.

4. The $CLIENT_SIGNATURE is received by this script from itself when Client signs the contract.
*/
$CLIENT_SIGNATURE = isset($_POST['client_signature']) ? $_POST['client_signature'] : null;
if (substr( $CLIENT_SIGNATURE, 0, 22 ) === 'data:image/png;base64,') {
    $CLIENT_SIGNATURE = '<img id="hk" src="' . htmlspecialchars($CLIENT_SIGNATURE) . '" >';
} else {
  $CLIENT_SIGNATURE = null;
}

$lines = file(__FILE__);
$clientEmail = trim($lines[1]);
$devEmail = trim($lines[2]);
$DEV_SIGNATURE = trim($lines[4]);
$DEV_SIGNATURE = '<img id="dev_signature" src="' . $DEV_SIGNATURE . '" >';

$phpName  = basename($_SERVER['PHP_SELF']) ? basename($_SERVER['PHP_SELF']) : 'index.php';
$fileName = substr($phpName , 0, -4);
$htmlName = $fileName.'.html';

// If the filename is (or starts with) "test" or "demo" the PHP file won't delete itself, nor will it redirect to the HTML contract (when one exists)
if ( substr($fileName,0,4) == 'test' || substr($fileName,0,4) == 'demo' ) { $selfDelete = 0; }
else { $selfDelete = 1; }

/**
The HTML code (and some PHP) is kept in PHP variables like $HEADER, $CONTRACT_HTML, $FOOTER_UNSIGNED, and $FOOTER_SIGNED_PHP.
**/
$HEADER ='<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Signed Contract</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<meta name="robots" content="noindex">
<style>
@import url(http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic);
@import url(http://fonts.googleapis.com/css?family=Arapey);
@import url(http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700);
@import url(http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800);
body {
    font-family: "Libre Baskerville", serif;
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
    font-family: "Arapey", serif;
    font-weight: normal;
    margin: 1em 0;
    position: relative;
    text-align: center;
    text-transform: uppercase;
    padding: .5em 0;
}
h2 {
    font-size:1.2em;
    line-height:1.2em;
    letter-spacing:.05em;
    font-family:"Open Sans Condensed",sans-serif;
    font-weight:700;
}
#signature {
    width:auto;
    border:dashed 2px #53777A;
    margin:0;
    text-align:center;
}
#hk,
#dev_signature {
    max-width:333px;
    display:block;
}
#date-ip {
    font-size:1.2em;
    line-height:1.2em;
    letter-spacing:.05em;
    font-family:"Open Sans Condensed",sans-serif;
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
    font-family: "Open Sans Condensed",sans-serif;
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

';
$CONTRACT_HTML='<h1>Contract of work for website design and development</h1>
<p>Between <strong>Alice</strong>, referred to below as "Designer", and <strong>Bob</strong>, referred to below as "Customer".</p>
<h2>1. Agreement of parties</h2>
<p>Customer hires Designer to redesign the current website, <strong>bobswebsite.com</strong>, for the estimated total price of <strong>$PRICE</strong>. Designer agrees to provide quality service and to answer to the Customers requests in a timely manner.</p>
<p>The agreed payment plan is at the end of the document.</p>
<h2>2. Legal matters and copyrights</h2>
<p>The Customer will guarantee to the Designer that any elements of text, graphics, photos, trademarks or other artwork that the Customer provides for inclusion in the website are either owned by him or that he has the permission to use them. When the Designer receives the final payment, copyright is automatically assigned as follows: Customer will own the graphics, virtual elements, text content photographs and other data provided, unless someone else owns them. The Designer owns the XHTML markup, CSS and other code and he licenses it to the Customer for use on only this project. Designer can reserve the right to display, with Customer\'s consent, the work as part of the portfolio.</p>
<h2>3. Term and termination</h2>
<ol style="list-style-type: lower-alpha;">
<li>This contract shall commence upon the first payment, as outlined in the payment plan and shall remain effective until the services are completed and delivered.</li>
<li>This contract may be terminated at any time by either party effective immediately upon notice, or the mutual agreement of the parties.</li>
<li>In the event of termination, Designer shall be compensated for the service performed through the date of termination in the amount (a) any advanced payment, (b) a prorated portion of the fees due, or (c) hourly fees for work performed by the Designer at the time of the termination, whichever is greater, together with any additional costs incurred trough and up to the date of cancellation.</li>
<li>This Contract may be modified by parties; any modification must be in writing.</li>
<li>All notices to be given hereunder shall be transmitted in writing by electronic mail and will only be effective upon return confirmation.</li>
</ol>
<h2>4. Force majeure</h2>
<p>Designer shall not be deemed in breach of this contract if Designer is unable to complete the services or any portion by reason of fire, earthquake, labor dispute, illness, internet breaches or any technical issues that may appear beyond Designer\'s control. Upon occurrence of any Force Majeure Event, Designer shall give notice to the Customer of his inability to perform or of delay in completing the services and shall propose revisions to the schedule for completion of the services.</p>
<h2>5. Payment plan</h2>
<p>Payment shall be done as follows:</p>
<ul>
<li>50% of total estimated fee will be required to commence work, after this contract has been approved and signed by both parties.</li>
<li>50% upon project closure.</li>
</ul>
<p>Any extra time required outside the project timeline/services mentioned at point 1 of this contract, will be billed at a rate of <strong>$FEE</strong> per hour.</p>
<h2>Both parties agree to the terms stipulated above:</h2>';
$FOOTER_UNSIGNED = '
  <form method="post" class="noprint" id="signature_form">
    <div id="signature">
      <!-- Client Signature Canvas -->
    </div>

    <div class="buttons">
      <button id="reset" type="button">Reset</button>
      <button id="submit" type="submit">Done &rarr;</button>
    </div>

    <input type="hidden" id="client_signature" name="client_signature" />
  </form>

</div> <!-- #content -->

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- https://github.com/brinley/jSignature/blob/master/README.md -->
<script src="https://cdn.rawgit.com/willowsystems/jSignature/master/libs/jSignature.min.js"></script>
<script>
$(document).ready(function() {
  $("#signature").jSignature();
  var $sigdiv = $("#signature");
  var datapair = $sigdiv.jSignature("getData", "svgbase64");

  $("#signature").bind("change", function(e) {
    var data = $("#signature").jSignature("getData");
    $("#client_signature").val(data);
  });

  $("#reset").click(function(e){
    $("#signature").jSignature("clear");
    var data = $("#signature").jSignature("getData");
    $("#client_signature").val("");
    e.preventDefault();
  });

  $("#submit").click(function(e) {
    $("#signature_form").slideUp(200);
    //$(".buttons").slideUp(300);
    $("#signature_form").after("<img id=\"hk\" class=\"hidden\" />");
    var data = $("#signature").jSignature("getData");
    $("#hk").attr("src", data );
    $("#hk").slideDown(200);
    // Loading text
    $("#dev_signature").css("opacity",".625")
    $("#content").css({"color":"#aaa","list-style-color":"#aaa !important"}).append("<div id=\"loading_area\"></div>");
    $("#loading_area").append("<h2 id=\"loading\" style=\"text-align:center; color:green; display:none;\">Saving Contract…</h2>");
    $("#loading_area").append("<p id=\"loading2\" style=\"text-align:center; color:#222; display:none;\">This shouldn\'t take more than a minute.</p>");
    $("#loading").slideDown(300, function() {
		 		$("#loading2").delay(2000).slideDown(300);
  	});
	});
});
</script>
</body>
</html>';

if ($CLIENT_SIGNATURE) { $FOOTER_SIGNED_PHP ='
  $phpName  = basename($_SERVER["PHP_SELF"]) ? basename($_SERVER["PHP_SELF"]) : "index.php";
  $fileName = substr($phpName , 0, -4);
  $htmlName = $fileName.".html";
  $pdfName = $fileName.".pdf";
  ?>

  <div id="date-ip">
    <strong>Signed on:</strong> <?php echo date("j F Y"); ?>
    <br><strong>IP address:</strong>
    <?php echo get_client_ip_env(); ?><br>
  </div>

  <?php // Function to get the client ip address
  function get_client_ip_env() {
  	$ipaddress = "";
  	if (getenv("HTTP_CLIENT_IP"))
  		$ipaddress = getenv("HTTP_CLIENT_IP");
  	else if(getenv("HTTP_X_FORWARDED_FOR"))
  		$ipaddress = getenv("HTTP_X_FORWARDED_FOR");
  	else if(getenv("HTTP_X_FORWARDED"))
  		$ipaddress = getenv("HTTP_X_FORWARDED");
  	else if(getenv("HTTP_FORWARDED_FOR"))
  		$ipaddress = getenv("HTTP_FORWARDED_FOR");
  	else if(getenv("HTTP_FORWARDED"))
  		$ipaddress = getenv("HTTP_FORWARDED");
  	else if(getenv("REMOTE_ADDR"))
  		$ipaddress = getenv("REMOTE_ADDR");
  	else
  		$ipaddress = "UNKNOWN";
  	return $ipaddress;
  } ?>

  <div class="noprint" id="print-pdf">
    <button id="print" type="button" class="button-secondary" onclick="printContract()">
    Print contract
    </button>
    <button id="pdf" type="button" class="button-secondary" onclick="generatePdf()">
    Download as PDF
    </button>
  </div>

</div> <!--#content-->

<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<script>
function printContract() {
  window.print();
}
function generatePdf() {
  // http://pdfcrowd.com/save-to-pdf/
  window.location.href = "//pdfcrowd.com/url_to_pdf/?use_print_media=1&height=-1&pdf_name=<?php echo $pdfName; ?>";
}
</script>

</body>
</html>';
} else $FOOTER_SIGNED_PHP = null;


if($CLIENT_SIGNATURE==null) {
  if ( $selfDelete && file_exists($htmlName) ) {
    header('Location: '.$htmlName.'#hk');
    die();
  }
  /** Waiting for Client to sign: include signature elements and javascript **/
  echo $HEADER;
  echo $CONTRACT_HTML;
  echo $DEV_SIGNATURE;
  eval (' ?>'. $FOOTER_UNSIGNED .'<?php ');
}
else {
  /** Contract was just signed: put $CLIENT_SIGNATURE and the other parts in the .html file **/
  file_put_contents($htmlName, $HEADER);
  file_put_contents($htmlName, $CONTRACT_HTML, FILE_APPEND | LOCK_EX);
  file_put_contents($htmlName, $DEV_SIGNATURE, FILE_APPEND | LOCK_EX);
  file_put_contents($htmlName, $CLIENT_SIGNATURE, FILE_APPEND | LOCK_EX);
  ob_start();
  eval($FOOTER_SIGNED_PHP); // https://cgd.io/2008/how-to-execute-php-code-in-a-php-string/
  $FOOTER_SIGNED_COMPILED = ob_get_contents();
  ob_end_clean();
  file_put_contents($htmlName, $FOOTER_SIGNED_COMPILED, FILE_APPEND | LOCK_EX);

  // Email client & dev, delete php, redirect to html
  if ($clientEmail) {
    $headers = "From: " . $devEmail . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $msg = 'The contract was signed. You can <a href="' .getUrl(). '">view or download this contract from here</a>.';
    mail($clientEmail,'Contract signed', $msg, $headers);
  }
  if ($devEmail) {
    $headers = "From: " . $clientEmail . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $msg = '<p>A new contract was signed. You can <a href="' .getUrl(). '">view or download this contract from here</a>.</p>';
    $msg.= 'The contract was signed by: ' .$clientEmail;
    mail($devEmail,'Contract signed!', $msg, $headers);
  }
  if ($selfDelete) unlink(__FILE__);
  header('Location: '.$htmlName.'#hk');
  die();
}

// Get the current file URL and replaces the .php extension with .html
function getUrl() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $url .= $_SERVER["REQUEST_URI"];
  $url = substr($url,0,-4) . '.html';
  return $url;
}
?>
