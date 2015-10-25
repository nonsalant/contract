<?php
$part4 = stripslashes ( $_POST['signature_capture'] ); 
if( $part4 ) {
  $part1 = file_get_contents('contract-parts/header.txt');
  $part2 = stripslashes ( $_POST['html_capture'] ); 
  $part3 = file_get_contents('contract-parts/middle.txt');
  $part5 = file_get_contents('contract-parts/footer.txt');
  
  echo $part1.$part2.$part3.$part4.$part5;
}
else echo 'no signature received';
// We'll be outputting a PDF
header('Content-Type: text/force-download');

// It will be called downloaded.pdf
header('Content-Disposition: attachment; filename="contract123.php"');

?>
