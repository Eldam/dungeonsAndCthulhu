<?php

class armorDAO
{

    var $idObj;
    var $ca;
    var $type;
    var $mysqli;

    public function getIdObj()
    {
        return $this->idObj;
    }

    /**
     * Set the value of idObj
     *
     * @return  self
     */
    public function setIdObj($idObj)
    {
        $this->idObj = $idObj;

        return $this;
    }
    public function getCa()
    {
        return $this->ca;
    }

    /**
     * Set the value of ca
     *
     * @return  self
     */
    public function setCa($ca)
    {
        $this->ca = $ca;

        return $this;
    }
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    function __construct()
    {
        include_once 'accesDB.php';
        $this->mysqli = ConnectDB();
    }

    function createObject()
    {
        $stmt = $this->mysqli->prepare("INSERT INTO armor (`idObj`,`ca`,`type`) VALUES ( ?,?,?)");

        $stmt->bind_param(
            "iis",
            $this->idObj,
            $this->ca,
            $this->type
        );
        $stmt->execute();
        $stmt->close();
    }
}
