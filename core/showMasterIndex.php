<?php

session_start();
//incluir funcion autenticacion
include_once './functions/authentications.php';
//si no esta autenticado
if (!IsAuthenticated()) {
    header('../index.php');
    exit;
}else {

    if(!isset($_SESSION["typeUser"]) && !isset($_SESSION["actualUser"])){
        header('../index.php');
        exit;
    }else{
        
        setcookie('userId',$_SESSION['actualUser'],time()+2678400);
        setcookie('masterName',$_SESSION['masterName'],time()+2678400);
        setcookie('typeUser',$_SESSION['typeUser'],time()+2678400);

        include_once '../view/Layout/headerMaster.php';
        include_once '../view/masterIndex.php';
        include_once '../view/Layout/footerMaster.php';
    }

}




