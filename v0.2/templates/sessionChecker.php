<?php
/**
 * Created by PhpStorm.
 * User: ief.falot
 * Date: 3/04/2018
 * Time: 13:46
 */


//check if a session is set, if not initialize the session variable $_SESSION["currentUser"]
if(!isset($_SESSION)){

    session_start();
    $_SESSION["currentUser"]="guest";

}

$_SESSION["message"] = "Welcome ".$_SESSION["currentUser"];
$isUserLoggedIn = $_SESSION["currentUser"]=="guest"? false:true;

if($isUserLoggedIn){

    $_SESSION["message"].=", enjoy your stay!";

}else{

    $_SESSION["message"].=", please llogin!";

}
