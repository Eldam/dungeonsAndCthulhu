<?php
session_start();
$_SESSION["typeUser"] = "MASTER";
$_SESSION["masterName"] = "MasterTest";


//Draw View
include_once '../view/Layout/headerMaster.php';
include_once '../view/masterImageSelector.php';
include_once '../view/Layout/footerMaster.php';
?>