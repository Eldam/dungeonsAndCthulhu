<?php


session_start();
//incluir funcion autenticacion
include_once './functions/authentications.php';
//si no esta autenticado
if (!IsAuthenticated()) {
    header('../index.php');
}
else{

    // $primal=isset($_POST["primal"])?$_POST["primal"]:"";


    //CREAMOS LAS VISTAS
    if(isset($_COOKIE["typeUser"]) == "MASTER"){
        include_once '../view/Layout/headerMaster.php';
    }
    include_once '../view/Layout/header.php';
    include_once '../view/showAllObjectsView.php';
    include_once '../view/Layout/footer.php';
}