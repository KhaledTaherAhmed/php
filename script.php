   
<?php
include 'firebaseLib.php';

$url = 'https://systemsecurity-e8ddc.firebaseio.com';

//$arduino_data = $_GET['arduino_data'];

$firebasePath = '/arduinos/2/notifications/' ;
//$firebasePath = '/' ;
$fb = new fireBase($url);

/*$arr = ['date' => '2002-11-3', 'location'=>'room2', 'seen'=>'no', 'type'=>'motion'] ;
$response = $fb->push($firebasePath, $arr );
*/

$SSpath1 = '/arduinos/2/alert/' ;
$SSpath2 = '/arduinos/2/' ;

$SS = $fb->get($SSpath1) ;
$fb->update($SSpath2, ['alert'=>'no']) ;
echo ($SS) ;

//sleep(2);
?>ss