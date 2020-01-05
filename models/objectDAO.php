<?php

class objectDAO
{
    var $id;
    var $name;
    var $description;
    var $price;
    var $typeCoin;
    var $weight;
    var $volume;
    var $limitationStrength;
    var $limitationDex;
    var $limitationCons;
    var $limitationInt;
    var $limitationWis;
    var $typeObject;
    var $primal;

    var $mysqli;
    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of typeCoin
     */
    public function getTypeCoin()
    {
        return $this->typeCoin;
    }

    /**
     * Set the value of typeCoin
     *
     * @return  self
     */
    public function setTypeCoin($typeCoin)
    {
        $this->typeCoin = $typeCoin;

        return $this;
    }

    /**
     * Get the value of weight
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get the value of volume
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set the value of volume
     *
     * @return  self
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get the value of limitationStrength
     */
    public function getLimitationStrength()
    {
        return $this->limitationStrength;
    }

    /**
     * Set the value of limitationStrength
     *
     * @return  self
     */
    public function setLimitationStrength($limitationStrength)
    {
        $this->limitationStrength = $limitationStrength;

        return $this;
    }

    /**
     * Get the value of limitationDex
     */
    public function getLimitationDex()
    {
        return $this->limitationDex;
    }

    /**
     * Set the value of limitationDex
     *
     * @return  self
     */
    public function setLimitationDex($limitationDex)
    {
        $this->limitationDex = $limitationDex;

        return $this;
    }

    /**
     * Get the value of limitationCons
     */
    public function getLimitationCons()
    {
        return $this->limitationCons;
    }

    /**
     * Set the value of limitationCons
     *
     * @return  self
     */
    public function setLimitationCons($limitationCons)
    {
        $this->limitationCons = $limitationCons;

        return $this;
    }

    /**
     * Get the value of limitationInt
     */
    public function getLimitationInt()
    {
        return $this->limitationInt;
    }

    /**
     * Set the value of limitationInt
     *
     * @return  self
     */
    public function setLimitationInt($limitationInt)
    {
        $this->limitationInt = $limitationInt;

        return $this;
    }

    /**
     * Get the value of limitationWis
     */
    public function getLimitationWis()
    {
        return $this->limitationWis;
    }

    /**
     * Set the value of limitationWis
     *
     * @return  self
     */
    public function setLimitationWis($limitationWis)
    {
        $this->limitationWis = $limitationWis;

        return $this;
    }

    /**
     * Get the value of typeObject
     */ 
    public function getTypeObject()
    {
        return $this->typeObject;
    }

    /**
     * Set the value of typeObject
     *
     * @return  self
     */ 
    public function setTypeObject($typeObject)
    {
        $this->typeObject = $typeObject;

        return $this;
    }

    /**
     * Get the value of primal
     */ 
    public function getPrimal()
    {
        return $this->primal;
    }

    /**
     * Set the value of primal
     *
     * @return  self
     */ 
    public function setPrimal($primal)
    {
        $this->primal = $primal;

        return $this;
    }




    function __construct()
    {
        include_once 'accesDB.php';
        $this->mysqli = ConnectDB();
    }

    function createObject()
    {
        /*
            $sql = "INSERT INTO object (`name`, `description`, `price`, `typeCoin`, `weight`, `volume`, `limitationStrength`,
            `limitationDex`, `limitationCons`, `limitationInt`, `limitationWis`) 
            VALUES ('$this->name','$this->description',$this->price,'$this->typeCoin',$this->weight,$this->volume,
            $this->limitationStrength,$this->limitationDex,$this->limitationCons,$this->limitationInt,$this->limitationWis)";
            */
        $stmt = $this->mysqli->prepare("INSERT INTO object(`name`, `description`, `price`, `typeCoin`, `weight`, `volume`, `limitationStrength`,
                                                            `limitationDex`, `limitationCons`, `limitationInt`, `limitationWis`,`typeObject`, `primal`)
                                         VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param(
            "ssisiiiiiiisi",
            $this->name,
            $this->description,
            $this->price,
            $this->typeCoin,
            $this->weight,
            $this->volume,
            $this->limitationStrength,
            $this->limitationDex,
            $this->limitationCons,
            $this->limitationInt,
            $this->limitationWis,
            $this->typeObject,
            $this->primal
        );
        $stmt->execute();
        $this->id = $this->mysqli->insert_id;
        $stmt->close();
    }

}
