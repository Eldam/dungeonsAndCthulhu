
<?php
function IsAuthenticated(){
	if (!isset($_SESSION['usuario'])){
		return false;
	}
	else{

		return true;
	}
}
?>