<?php
/**
 * Created by PhpStorm.
 * User: 1408143
 * Date: 28/02/2017
 * Time: 15:36
 */
echo $_COOKIE["access_level"];
if($_COOKIE["access_level"]=="standard_user"){
    echo "Logged in!";
}else{
    echo "not?";
}
?>

