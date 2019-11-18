<?php
class MESSAGE{
	private $string; 
	private $volver;
	function __construct($string, $volver){
		$this->string = $string;
		$this->volver = $volver;	
		$this->render();
	}
	function render(){
	/*	include './Strings_'.$_SESSION['idioma'].'.php';*/
		include './Layout/header.html';
?>

        <div class="MessageContainer">

            <div class="MessageString">
                <h1 class="errorMessage">
                <?php echo $this->string; ?>
                <link rel="stylesheet" href="../Locales/MESSAGE.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                </h1>
                <br>
                <br>
                <br>
                <a href="<?php echo $this->volver ?>"><i class="fa fa-arrow-circle-left" id="returnIcon"></i></a>
            </div>
        </div>
        