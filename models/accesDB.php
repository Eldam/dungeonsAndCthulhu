<?php

include_once(__DIR__."/../Defines.php");


function ConnectDB()
{

	$mysqli = new mysqli("localhost","userDNC","userDNC","dungeonscthulhu");
    //$mysqli = new mysqli(BD_HOST,"userDNC","userDNC","dungeonscthulhu",3306);
    	
	if ($mysqli->connect_errno) {
		echo "Can´t access to DB";
        return false;
	}
	else{
        $mysqli->set_charset("utf8");
		return $mysqli;
	}
}
?>