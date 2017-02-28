<?php
/**
 * Created by PhpStorm.
 * User: 1408143
 * Date: 28/02/2017
 * Time: 15:31
 */
$username="bob";
$password="pass";
header("http://phpintro.azurewebsites.net/homePage.php");
$received_username=$_POST['username'];
//echo $received_username;
$received_password=$_POST['password'];
//echo $received_password;
if($username==$received_username && $password==$received_password){
    setcookie("access_level","standard_user",0);
    //echo $_COOKIE["access_level"];
    header("http://phpintro.azurewebsites.net/homePage.php");
}else{
    echo "nope";
}