<?php
$part4 = stripslashes ( $_POST['signature_capture'] ); 
if( $part4 ) {
  $part1 = file_get_contents('contract-parts/header.txt');
  $part2 = stripslashes ( $_POST['html_capture'] ); 
  $part3 = file_get_contents('contract-parts/middle.txt');
  $part5 = file_get_contents('contract-parts/footer.txt');
  
  echo $part1.$part2.$part3.$part4.$part5;
}
else {
  echo 'no signature received';
  die();
}

header("Content-Disposition: attachment; filename=contract123.txt");    
header("Content-Type: text/force-download");
header('Content-Type: text/plain');
header("Content-Type: application/download");
header("Content-Description: File Transfer");   
//header('Content-Type: text/plain');
//header("Content-Type: text/download");
header('Content-Disposition: attachment; filename="contract123.txt"');

?>
