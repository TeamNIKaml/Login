<?php 
require_once 'openid.php';
$openid = new LightOpenID("http://localhost:9999/Login_Poc/");

if ($openid->mode) {
    if ($openid->mode == 'cancel') {
        echo "User has canceled authentication!";
    } elseif($openid->validate()) {
        $data = $openid->getAttributes();
        $email = $data['contact/email'];
        $first = $data['namePerson/first'];
		
		include "session.php";
		$session = new Session();
		$session->login( $first);		
		
    } else {
        echo "The user has not logged in";
    }
} else {
    echo "Go to index page to log in.";
}
?>