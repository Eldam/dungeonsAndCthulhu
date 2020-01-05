<?php


class characterSkillDAO
{
    //atributo id: guarda el id.
    var $id;
    //atributo nombre: guarda el nombre.
    var $name;
    //atributo password: guarda el password.
    var $lvl;
    var $list = array();
    //atributo para guardar un link a la BD.
    var $mysqli;
    //Constructor de la clase
    //parametros: nombre
    function __construct()
    {
        include_once 'accesDB.php';
        $this->mysqli = ConnectDB();
    }


    function setId($id)
    {
        $this->id = $id;
    }

    function getCharacterSkill()
    {

        $sql = "SELECT * from characterSkill WHERE idUser=$this->id";
        $resultado = mysqli_query($this->mysqli, $sql);
        if ($resultado) {
            return $resultado;
        }
        return "Error";
    }
    function getCharacterSkillByStrength()
    {

        $sql = "SELECT * from characterSkill WHERE idUser=$this->id and typeSkill='strength'";
        $resultado = mysqli_query($this->mysqli, $sql);
        if ($resultado) {
            return $resultado;
        }
        return "Error";
    }
    function getCharacterSkillByDexterity()
    {

        $sql = "SELECT * from characterSkill WHERE idUser=$this->id and typeSkill='dexterity'";
        $resultado = mysqli_query($this->mysqli, $sql);
        if ($resultado) {
            return $resultado;
        }
        return "Error";
    }
    function getCharacterSkillByConstitution()
    {

        $sql = "SELECT * from characterSkill WHERE idUser=$this->id and typeSkill='constitution'";
        $resultado = mysqli_query($this->mysqli, $sql);
        if ($resultado) {
            return $resultado;
        }
        return "Error";
    }
    function getCharacterSkillByInteligence()
    {

        $sql = "SELECT * from characterSkill WHERE idUser=$this->id and typeSkill='inteligence'";
        $resultado = mysqli_query($this->mysqli, $sql);
        if ($resultado) {
            return $resultado;
        }
        return "Error";
    }
    function getCharacterSkillByWisdom()
    {

        $sql = "SELECT * from characterSkill WHERE idUser=$this->id and typeSkill='wisdom'";
        $resultado = mysqli_query($this->mysqli, $sql);
        if ($resultado) {
            return $resultado;
        }
        return "Error";
    }
    function getCharacterSkillByCharisma()
    {

        $sql = "SELECT * from characterSkill WHERE idUser=$this->id and typeSkill='charisma'";
        $resultado = mysqli_query($this->mysqli, $sql);
        if ($resultado) {
            return $resultado;
        }
        return "Error";
    }
}
