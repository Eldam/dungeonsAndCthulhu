<?php

class primalDAO
{

    var $strength;
    var $dexterity;
    var $constitution;
    var $inteligence;
    var $wisdom;
    var $charisma;
    var $synchronizationCost;
    var $TS;
    var $max;
    var $min;
    var $Ratk;
    var $Rdamage;
    var $effect;
    var $RTSalv;
    var $initiative;
    var $speed;
    var $deathEnergy;
    var $lifeEnergy;
    var $kiMulti;
    var $manaMulti;
    var $rAtkSpell;
    var $rDmgSpell;
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
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Set the value of strength
     *
     * @return  self
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;

        return $this;
    }
    public function getDexterity()
    {
        return $this->dexterity;
    }

    /**
     * Set the value of dexterity
     *
     * @return  self
     */
    public function setDexterity($dexterity)
    {
        $this->dexterity = $dexterity;

        return $this;
    }
    public function getConstitution()
    {
        return $this->constitution;
    }

    /**
     * Set the value of constitution
     *
     * @return  self
     */
    public function setConstitution($constitution)
    {
        $this->constitution = $constitution;

        return $this;
    }
    public function getInteligence()
    {
        return $this->inteligence;
    }

    /**
     * Set the value of inteligence
     *
     * @return  self
     */
    public function setInteligence($inteligence)
    {
        $this->inteligence = $inteligence;

        return $this;
    }
    public function getWisdom()
    {
        return $this->wisdom;
    }

    /**
     * Set the value of wisdom
     *
     * @return  self
     */
    public function setWisdom($wisdom)
    {
        $this->wisdom = $wisdom;

        return $this;
    }
    public function getCharisma()
    {
        return $this->charisma;
    }

    /**
     * Set the value of charisma
     *
     * @return  self
     */
    public function setCharisma($charisma)
    {
        $this->charisma = $charisma;

        return $this;
    }
    public function getSynchronizationCost()
    {
        return $this->synchronizationCost;
    }

    /**
     * Set the value of synchronizationCost
     *
     * @return  self
     */
    public function setSynchronizationCost($synchronizationCost)
    {
        $this->synchronizationCost = $synchronizationCost;

        return $this;
    }
    public function getTS()
    {
        return $this->TS;
    }

    /**
     * Set the value of TS
     *
     * @return  self
     */
    public function setTS($TS)
    {
        $this->TS = $TS;

        return $this;
    }
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set the value of max
     *
     * @return  self
     */
    public function setMax($max)
    {
        $this->max = $max;

        return $this;
    }
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Set the value of min
     *
     * @return  self
     */
    public function setMin($min)
    {
        $this->min = $min;

        return $this;
    }
    public function getRatk()
    {
        return $this->Ratk;
    }

    /**
     * Set the value of Ratk
     *
     * @return  self
     */
    public function setRatk($Ratk)
    {
        $this->Ratk = $Ratk;

        return $this;
    }
    public function getRdamage()
    {
        return $this->Rdamage;
    }

    /**
     * Set the value of Rdamage
     *
     * @return  self
     */
    public function setRdamage($Rdamage)
    {
        $this->Rdamage = $Rdamage;

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
    public function getRTSalv()
    {
        return $this->RTSalv;
    }

    /**
     * Set the value of RTSalv
     *
     * @return  self
     */
    public function setRTSalv($RTSalv)
    {
        $this->RTSalv = $RTSalv;

        return $this;
    }
    public function getInitiative()
    {
        return $this->initiative;
    }

    /**
     * Set the value of initiative
     *
     * @return  self
     */
    public function setInitiative($initiative)
    {
        $this->initiative = $initiative;

        return $this;
    }
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set the value of speed
     *
     * @return  self
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }
    public function getDeathEnergy()
    {
        return $this->deathEnergy;
    }

    /**
     * Set the value of deathEnergy
     *
     * @return  self
     */
    public function setDeathEnergy($deathEnergy)
    {
        $this->deathEnergy = $deathEnergy;

        return $this;
    }
    public function getLifeEnergy()
    {
        return $this->lifeEnergy;
    }

    /**
     * Set the value of lifeEnergy
     *
     * @return  self
     */
    public function setLifeEnergy($lifeEnergy)
    {
        $this->lifeEnergy = $lifeEnergy;

        return $this;
    }
    public function getKiMulti()
    {
        return $this->kiMulti;
    }

    /**
     * Set the value of kiMulti
     *
     * @return  self
     */
    public function setKiMulti($kiMulti)
    {
        $this->kiMulti = $kiMulti;

        return $this;
    }
    public function getManaMulti()
    {
        return $this->manaMulti;
    }

    /**
     * Set the value of manaMulti
     *
     * @return  self
     */
    public function setManaMulti($manaMulti)
    {
        $this->manaMulti = $manaMulti;

        return $this;
    }
    public function getRAtkSpell()
    {
        return $this->rAtkSpell;
    }

    /**
     * Set the value of rAtkSpell
     *
     * @return  self
     */
    public function setRAtkSpell($rAtkSpell)
    {
        $this->rAtkSpell = $rAtkSpell;

        return $this;
    }
    public function getRDmgSpell()
    {
        return $this->rDmgSpell;
    }

    /**
     * Set the value of rDmgSpell
     *
     * @return  self
     */
    public function setRDmgSpell($rDmgSpell)
    {
        $this->rDmgSpell = $rDmgSpell;

        return $this;
    }

    function __construct()
    {
        include_once 'accesDB.php';
        $this->mysqli = ConnectDB();
    }

    function createObject()
    {

        $stmt = $this->mysqli->prepare("INSERT INTO primal(`idObj`,`strength`,`dexterity`,`constitution`,`inteligence`,`wisdom`,`charisma`,`synchronizationCost`,`TS`,`max`,`min`, 
                                                        `Ratk`,`Rdamage`,`effect`,`RTSalv`,`initiative`,`speed`,`deathEnergy`,`lifeEnergy`,`kiMulti`,`manaMulti`,`rAtkSpell`,`rDmgSpell`) 
                                        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param(
            "iiiiiiiiiiiiisiiiiiiiii",
            $this->idObj,
            $this->strength,
            $this->dexterity,
            $this->constitution,
            $this->inteligence,
            $this->wisdom,
            $this->charisma,
            $this->synchronizationCost,
            $this->TS,
            $this->max,
            $this->min,
            $this->Ratk,
            $this->Rdamage,
            $this->effect,
            $this->RTSalv,
            $this->initiative,
            $this->speed,
            $this->deathEnergy,
            $this->lifeEnergy,
            $this->kiMulti,
            $this->manaMulti,
            $this->rAtkSpell,
            $this->rDmgSpell
        );
        $stmt->execute();
        $stmt->close();
    }
}
