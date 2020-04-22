<?php
require_once('config.php');
if (empty($_SESSION['token'])){
    echo "
        <a href='https://oauth.vk.com/authorize?client_id=".$appid."&display=page&redirect_uri=".$redirect_uri."&group_ids=1,2&scope=".$scope."&response_type=code&v=5.103'>Авторизация через вк</a>
    ";

}
else{
	echo "
    Авторизировались
	";
}
?>