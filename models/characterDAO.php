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
    function getCharacterByUser ($idUser){

        $sql = "SELECT * from characterpj WHERE idUser='$idUser'";
        $toRet = $this->mysqli->query($sql);
        return $toRet;

    }

    function getCharacter (){

        $sql = "SELECT * from characterpj WHERE id=$this->id";
        $toRet = $this->mysqli->query($sql);
        return mysqli_fetch_assoc($toRet);

    }

    function getPerks(){
        $sql = "SELECT * FROM charactersPerk WHERE idUser=$this->id";
        $resultado = mysqli_query($this->mysqli, $sql);
        if($resultado){
            return $resultado;
        }
        return "Error";
    }

    function setId($id){
        $this->id = $id;
    }

}
