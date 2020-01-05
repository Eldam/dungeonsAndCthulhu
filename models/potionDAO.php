<?php

class potionDAO
{
    var $idObj;
    var $effect;
    var $duration;
    var $expiration;
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

        $stmt = $this->mysqli->prepare("INSERT INTO potion(`idObj`,`effect`,`duration`,`expiration`,`type`) VALUES ( ?,?,?,?,?)");
        $stmt->bind_param(
            "isiis",
            $this->idObj,
            $this->effect,
            $this->duration,
            $this->expiration,
            $this->type
        );
        $stmt->execute();
        $stmt->close();
    }
}
