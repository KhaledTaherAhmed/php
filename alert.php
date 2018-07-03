<?php

include 'firebaseLib.php';

$url = 'https://systemsecurity-e8ddc.firebaseio.com';

$id =  $_GET['id'] ;

$alertPath2 = '/arduinos/'.$id.'/' ;

$fb = new fireBase($url);

$fb->update($alertPath2, ['alert'=>'no']) ;

?>