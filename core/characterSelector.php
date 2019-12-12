<?php

session_start();
include_once './functions/authentications.php';

if (!IsAuthenticated()) {
    header('Location: ../index.php');
}else{
    include_once '../models/characterDAO.php';
    $characterDAO = new characterDAO();
    $pjs = $characterDAO->getCharacterByUser($_SESSION["actualUser"]);
    
    include_once '../view/characterSelector.php';
}



