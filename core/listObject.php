<?php

$limitPage = isset($_POST["limitPage"])?$_POST["limitPage"]:"";
$page = isset($_POST["page"])?$_POST["page"]:"";

include_once '../models/objectDAO.php';
$object = new objectDAO();
$data = $object->getAllObjects($page, $limitPage);

echo json_encode($data);

