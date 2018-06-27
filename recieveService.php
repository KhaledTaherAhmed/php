
<?php
include 'firebaseLib.php';

$url = 'https://systemsecurity-e8ddc.firebaseio.com';

$id =  $_GET['id'] ;

$alertPath1 = '/arduinos/'.$id.'/alert/' ;
$alertPath2 = '/arduinos/'.$id.'/' ;
$securityPath = '/arduinos/'.$id.'/securityState/' ;

$Alert = $fb->get($alertPath1) ;
$fb->update($alertPath2, ['alert'=>'no']) ;
$securityState = $fb->get($securityPath) ;

echo('$') ;
echo trim($securityState, '"') ;
echo('A') ;
echo trim($Alert, '"') ;

?>