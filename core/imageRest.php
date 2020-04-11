<?php

include_once(__DIR__."/../Defines.php");

session_start();

$_SESSION["typeUser"] = "MASTER";
$_SESSION["masterName"] = "MasterTest";



if(!isset($_SESSION["masterName"])){
    echo "Not Master Sesion";
    exit;
}

if(!isset($_POST["action"])){
    echo "no_action_defined";
    exit;
}


switch($_POST["action"]){

    case "get":
        header('Content-Type: application/json');
        echo json_encode(getImages());
        exit;

    case "remove":
        // header('Content-Type: application/json');
        // echo json_encode(removeImage());
        exit;

    default:
        echo "action_not_exist";
        exit;

}

//Get Images
function getImages(){
    $imageRootFolder = "../resources/img/masterImages/". $_SESSION["masterName"];

    return getFilesOfDir($imageRootFolder);
    
}


//Remove Image
function removeImage($file){

    
}



//Get all the files of the direrctory recursively
function getFilesOfDir($dir){
    $files = Array();
    $dirs = Array(); 

    if(is_dir($dir)){
        $elements  = array_diff(scandir($dir), array('..', '.'));

        foreach ($elements as $key => $element){ 
            if(is_dir($dir."/".$element)){
                $dirs[$element]= getFilesOfDir($dir."/".$element);
            }else{
                $files[$element]= $dir . "/" . $element;
            }
         }
        
    }



    return ["files" => $files, "dirs" => $dirs];
    
}