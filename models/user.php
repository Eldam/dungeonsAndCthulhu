<?php
//Clase : USUARIOS_Modelo
//Creado el : 22-09-2017
//Creado por: jrodeiro
//-------------------------------------------------------
class UserDAO
{
    //atributo id: guarda el id.
    var $Id;
    //atributo nombre: guarda el nombre.
    var $name;
    //atributo password: guarda el password.
    var $password;
    //atributo para guardar un link a la BD.
    var $mysqli;
    //Constructor de la clase
    //parametros: nombre
    function __construct( $name, $password)
    {
        include_once './accesDB.php';
        $this->mysqli = ConnectDB();
    }

    // funcion login: realiza la comprobación de si existe el usuario en la bd y despues si la pass
    // es correcta para ese usuario. Si es asi devuelve true, en cualquier otro caso devuelve el
    // error correspondiente
    function login(){
        $sql = "SELECT *
			FROM USUARIO
			WHERE (
				(login = '$this->login') 
			)";
        $resultado = mysqli_query($this->mysqli, $sql);
        if(mysqli_num_rows($resultado) == 0){
            return 'El login no existe';
        }
        else{
            $tupla = $resultado->fetch_array();
            if ($tupla['password'] == $this->password){
                return true;
            }
            else{
                return 'La password para este usuario no es correcta';
            }
        }
    }
}