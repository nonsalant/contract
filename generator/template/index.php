<?php
// The contract.php file is force-downloaded
// No need for sanitizing, nothing is saved on the server.
$DEV_SIGNATURE = stripslashes ( $_POST['signature_capture'] );
if( $DEV_SIGNATURE ) {
  $client_email = $_POST['client_email_capture'];
  $dev_email = $_POST['dev_email_capture'];
  $HEADER = file_get_contents('header.txt');
  //$CONTRACT_HTML = addslashes(file_get_contents('contract_html.txt'));
  $CONTRACT_HTML = str_replace( "'", "\'", stripslashes($_POST['contract_html_capture']) );
  $FOOTER = file_get_contents('footer.txt');

  $filename = stripslashes ( $_POST['file_name'] ) . '.php';
  if (!$filename) { $filename = 'contract.php'; }

  header('Content-Disposition: attachment; filename=' . $filename);
  header('Content-Type: text/force-download');
  header('Content-Type: text/plain');
  header('Content-Type: application/download');
  header('Content-Description: File Transfer');

  /**
  Concatenate everything into a single .php file
  **/
  echo "<?php /*\n";
  echo $client_email ."\n";
  echo $dev_email ."\n";
  echo $filename ."\n";
  echo $DEV_SIGNATURE."\n\n";

  echo $HEADER;

  echo "\$CONTRACT_HTML='";
  echo $CONTRACT_HTML;
  echo "';\n";

  echo $FOOTER;

}
else {
  echo '<h2 style="text-align:center;">No signature received</h2>';
  die();
}
?>
