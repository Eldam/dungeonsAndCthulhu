<?php


class characterDAO
{
    //atributo id: guarda el id.
    var $id;
    //atributo nombre: guarda el nombre.
    var $name;
    //atributo password: guarda el password.
    var $password;
    //atributo para guardar un link a la BD.
    var $mysqli;
    //Constructor de la clase
    //parametros: nombre
    function __construct()
    {
        include_once 'accesDB.php';
        $this->mysqli = ConnectDB();
    }
    function getCharacter (){

        $sql = "SELECT * from characterpj WHERE id=$this->id";
        $toRet = $this->mysqli->query($sql);
        return mysqli_fetch_assoc($toRet);

    }

    function setId($id){
        $this->id = $id;
    }



}
