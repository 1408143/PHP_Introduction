<?php
/**
 * Created by PhpStorm.
 * User: 1408143
 * Date: 28/02/2017
 * Time: 15:31
 */
$username="bob";
$password="pass";

$received_username=$_POST['username'];
echo $received_username;
$received_password=$_POST['password'];
echo $received_password;
if($username==$received_username && $password==$received_password){
    setcookie("access_level","standard_user",0);
    //echo $_COOKIE["access_level"];
    echo "yup";
    header("homePage.php");
    echo "yes";
}else{
    echo "nope";
}