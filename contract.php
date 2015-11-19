<?php /*
client@example.com
dev@example.com
1447929751.php
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
