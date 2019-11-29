<?php


session_start();
//incluir funcion autenticacion
include_once './functions/authentications.php';
//si no esta autenticado
if (!IsAuthenticated()) {
    if(isset($_POST["action"])){
        if($_POST["action"] == "register"){

        }else{
            if(isset($_POST["user"]) && isset($_POST["password"])){
                //set login
            }else{
                header('../view/login.php');
            }
        }
    }else{
        header('../view/login.php');
    }
}
//esta autenticado


if (isset($_COOKIE["actualCharacterId"])) {
    $_SESSION["actualCharacterId"] = $_COOKIE["actualCharacterId"];
    header("../core/showCharacter.php");
} else {
    header('../core/characterSelector.php');
}
