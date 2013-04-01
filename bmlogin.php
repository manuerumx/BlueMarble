<?php
require_once('inc/bm_session.php');
use sess as sessionx;
$session = new sessionx\bm_session("bmlogin");

$type = $_POST['bmtype'];
if($type=='log'){
    $usr = $_POST['username'];
    $psw = $_POST['password'];
}elseif($type=='reg'){
    $usr = $_POST['username'];
    $psw = $_POST['password'];
    $eml = $_POST['email'];
}

require_once 'config/bm_config.php';
require_once 'inc/bm_user.php';

?>
