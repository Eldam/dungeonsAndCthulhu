<?php
if (!isset($_SESSION)) session_start();

if(isset($_SESSION["message"])){
?>
<div class="alert alert-danger" role="alert"> 
    <h1>ERROR! <?=$_SESSION["message"]?></h1>
</div>

<?php
unset($_SESSION['message']);
}