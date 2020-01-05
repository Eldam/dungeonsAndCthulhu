<?php

class weaponDAO
{
    var $idObj;
    var $damage;
    var $critical;
    var $type;
    var $hand;
    var $subtle;
    var $scope;
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
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * Set the value of damage
     *
     * @return  self
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;

        return $this;
    }
    public function getCritical()
    {
        return $this->critical;
    }

    /**
     * Set the value of critical
     *
     * @return  self
     */
    public function setCritical($critical)
    {
        $this->critical = $critical;

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
    public function getHand()
    {
        return $this->hand;
    }

    /**
     * Set the value of hand
     *
     * @return  self
     */
    public function setHand($hand)
    {
        $this->hand = $hand;

        return $this;
    }
    public function getSubtle()
    {
        return $this->subtle;
    }

    /**
     * Set the value of subtle
     *
     * @return  self
     */
    public function setSubtle($subtle)
    {
        $this->subtle = $subtle;

        return $this;
    }
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Set the value of scope
     *
     * @return  self
     */
    public function setScope($scope)
    {
        $this->scope = $scope;

        return $this;
    }

    function __construct()
    {
        include_once 'accesDB.php';
        $this->mysqli = ConnectDB();
    }

    function createObject()
    {

        $stmt = $this->mysqli->prepare("INSERT INTO weapon(`idObj`,`damage`,`critical`,`type`,`hand`,`subtle`,`scope`) VALUES ( ?,?,?,?,?,?,?)");
        $stmt->bind_param(
            "iiisisi",
            $this->idObj,
            $this->damage,
            $this->critical,
            $this->type,
            $this->hand,
            $this->subtle,
            $this->scope
        );
        $stmt->execute();
        $stmt->close();
    }
}
