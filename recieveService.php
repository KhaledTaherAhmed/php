
<?php
include 'firebaseLib.php';

$url = 'https://systemsecurity-e8ddc.firebaseio.com';

$id =  $_GET['id'] ;

$alertPath1 = '/arduinos/'.$id.'/alert/' ;
$securityPath = '/arduinos/'.$id.'/securityState/' ;

$fb = new fireBase($url);

$Alert = $fb->get($alertPath1) ;
$securityState = $fb->get($securityPath) ;

echo('$') ;
echo trim($securityState, '"') ;
echo('A') ;
echo trim($Alert, '"') ;

?>