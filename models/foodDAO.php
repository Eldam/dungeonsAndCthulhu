<?php

class foodDAO
{
    var $idObj;
    var $effect;
    var $duration;
    var $expiration;
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
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Set the value of expiration
     *
     * @return  self
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }

    function __construct()
    {
        include_once 'accesDB.php';
        $this->mysqli = ConnectDB();
    }

    function createObject()
    {

        $stmt = $this->mysqli->prepare("INSERT INTO food(`idObj`, `effect`, `duration`, `expiration` ) VALUES ( ?,?,?,?)");
        $stmt->bind_param(
            "isii",
            $this->idObj,
            $this->effect,
            $this->duration,
            $this->expiration
        );
        $stmt->execute();
        $stmt->close();
    }
}
