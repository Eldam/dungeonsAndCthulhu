<?php

function ConnectDB()
{
    $mysqli = new mysqli("localhost","userDNC","userDNC","dungeonscthulhu");
    	
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