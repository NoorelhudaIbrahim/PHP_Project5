<?php

$db_name = 'mysql:host=localhost;dbname=shop_db1';
$user_name = 'root';
$user_password = '';

$conn = new PDO($db_name, $user_name, $user_password);

if(!$conn){
    echo 'error';
}
else{
    echo 'connect';
}

?>