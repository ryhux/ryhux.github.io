<?php  
requere_once("config.php");
if(empty($_GET['code'])){header ("location:/");}
else{
	@$token = file_get_contents("https://oauth.vk.com/access_token?client_id="..$appid"&client_secret=".$appkey."&redirect_uri=".$redirect_uri."&code=".$_GET['code']);
		$token = json_decode($token,true);
		$_SESSION['token'] = $token['access_token'];
		$_SESSION['user_id'] = $token['user_id'];
		$_SESSION['email'] = $token['email'];
		header('location:/')
}

?>