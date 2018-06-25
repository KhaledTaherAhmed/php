   
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

$alertPath1 = '/arduinos/2/alert/' ;
$alertPath2 = '/arduinos/2/' ;
$securityPath = '/arduinos/2/securityState/' ;

$Alert = $fb->get($alertPath1) ;
$securityState = $fb->get($securityPath) ;
if (strcmp($securityState, "yes") == 0 )
    $fb->update($alertPath2, ['alert'=>'no']) ;
echo('A') ;
echo trim($Alert, '"') ;
echo("\n") ;
echo('$') ;
echo trim($securityState, '"') ;

//sleep(2);
?>