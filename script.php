   
<?php
include 'firebaseLib.php';
// --- This is your Firebase URL
$url = 'https://arduino-6055f.firebaseio.com';
// --- Use your token from Firebase here
$token = 'R9EG1DfYCAFJOd6QZ0lTgmJiBaxpZBPchgzjRsY4';
// --- Here is your parameter from the http GET
$arduino_data = $_GET['arduino_data'];
// --- $arduino_data_post = $_POST['name'];
// --- Set up your Firebase url structure here
$firebasePath = '/';
/// --- Making calls
$fb = new fireBase($url, $token);
$response = $fb->push($firebasePath, $arduino_data);
echo ($response) ;
sleep(2);
?>