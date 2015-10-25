<?php
$part4 = stripslashes ( $_POST['signaturedata'] ); 
if( $part4 ) {
  $part1 = file_get_contents('contract-parts/header.txt');
  $part2 = stripslashes ( $_POST['contracthtml'] ); 
  $part3 = file_get_contents('contract-parts/middle.txt');
  $part5 = file_get_contents('contract-parts/footer.txt');
  
  echo $part1.$part2.$part3.$part4.$part5;
}
else echo 'no signature received';


?>
