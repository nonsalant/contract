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
