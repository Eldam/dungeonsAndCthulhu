<?php

class accesoryDAO
{
    var $idObj;
    var $cost;
    var $effect;
    var $duration;
    var $durability;
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
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set the value of cost
     *
     * @return  self
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }
    public function getEffect()
    {
        return $this->effect;
    }

    /**
     * Set the value of effect
     *
     * @return  self
     */
    public function setEffect($effect)
    {
        $this->effect = $effect;

        return $this;
    }
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set the value of duration
     *
     * @return  self
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }
    public function getDurability()
    {
        return $this->durability;
    }

    /**
     * Set the value of durability
     *
     * @return  self
     */
    public function setDurability($durability)
    {
        $this->durability = $durability;

        return $this;
    }

    function __construct()
    {
        include_once 'accesDB.php';
        $this->mysqli = ConnectDB();
    }

    function createObject()
    {

        $stmt = $this->mysqli->prepare("INSERT INTO accesory(`idObj`,`cost`,`effect`,`duration`,`durability`) VALUES ( ?,?,?,?,?)");
        $stmt->bind_param(
            "iisii",
            $this->idObj,
            $this->cost,
            $this->effect,
            $this->duration,
            $this->durability
        );
        $stmt->execute();
        $stmt->close();
    }
}
