   
<?php
include 'firebaseLib.php';

$url = 'https://systemsecurity-e8ddc.firebaseio.com';

$id =  $_GET['id'] ;

$location = $_GET['location'];
$type = $_GET['type'] ;

if ($type == "fire")
    $type = "fire" ;

$firebasePath = '/arduinos/'.$id.'/notifications/' ;
//$firebasePath = '/' ;
$fb = new fireBase($url);

date_default_timezone_set("Africa/Cairo");
$arr = ['date' => date("Y/m/d").":".date("h:i:sa"), 'location'=> $location, 'seen'=>'no', 'type'=>$type] ;
$response = $fb->push($firebasePath, $arr );

$alertPath1 = '/arduinos/2/alert/' ;
$alertPath2 = '/arduinos/2/' ;
$securityPath = '/arduinos/2/securityState/' ;

$Alert = $fb->get($alertPath1) ;
$fb->update($alertPath2, ['alert'=>'no']) ;
$securityState = $fb->get($securityPath) ;

echo('$') ;
echo trim($securityState, '"') ;
echo('A') ;
echo trim($Alert, '"') ;

//sleep(2);
?>