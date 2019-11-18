
<?php
function IsAuthenticated(){
	return true;
	if (!isset($_SESSION['usuario'])){
		return false;
	}
	else{

		return true;
	}
}
?>