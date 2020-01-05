<?php
function IsAuthenticated(){
	if (!isset($_SESSION['actualUser'])){
		return false;
	}
	else{
		return true;
	}
}
