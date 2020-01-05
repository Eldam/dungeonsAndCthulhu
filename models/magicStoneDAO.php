<?php

class magicStoneDAO
{
    var $idObj;
    var $capacity;
    var $efficiency;
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
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set the value of capacity
     *
     * @return  self
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }
    public function getEfficiency()
    {
        return $this->efficiency;
    }

    /**
     * Set the value of efficiency
     *
     * @return  self
     */
    public function setEfficiency($efficiency)
    {
        $this->efficiency = $efficiency;

        return $this;
    }

    function __construct()
    {
        include_once 'accesDB.php';
        $this->mysqli = ConnectDB();
    }

    function createObject()
    {

        $stmt = $this->mysqli->prepare("INSERT INTO magicStone(`idObj`,`capacity`,`efficiency`) VALUES ( ?,?,?)");
        $stmt->bind_param(
            "iii",
            $this->idObj,
            $this->capacity,
            $this->efficiency
        );
        $stmt->execute();
        $stmt->close();
    }
}
