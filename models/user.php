<?php

class UserDAO
{
    var $mysqli;
    var $user;
    var $pass;


    /**
     * Get the value of user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }
    /**
     * Get the value of pass
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     *
     * @return  self
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    function __construct()
    {
        include_once 'accesDB.php';
        $this->mysqli = ConnectDB();
    }

    function login($user, $password)
    {
        $pass = md5($password);
        $sql = "SELECT * FROM user WHERE name='$user'";
        $resultado = mysqli_query($this->mysqli, $sql);
        if (mysqli_num_rows($resultado) == 0) {
            return 'El login no existe';
        } else {
            $tupla = $resultado->fetch_array();
            if ($tupla['password'] == $pass) {
                return true;
            } else {
                return 'La password para este usuario no es correcta';
            }
        }
    }

    function idUser($user)
    {
        $sql = "SELECT * FROM user WHERE name='$user'";
        $resultado = mysqli_query($this->mysqli, $sql);
        $tupla = $resultado->fetch_array();
        return $tupla['id'];
    }
    function createUser()
    {
        $sql = "SELECT * FROM user WHERE name='$this->user'";
        $resultado = mysqli_query($this->mysqli, $sql);
        if (mysqli_num_rows($resultado) != 0) {
            return "Ya existe el usuario";
        } else {
            $this->pass = md5($this->pass);
            $datetime = date('Y-m-d');
            $sql = "INSERT INTO user(`name`,`password`,`createDate`,`updateDate`) VALUES (?,?,?,?)";
            $stmt = $this->mysqli->prepare($sql);
            if($stmt){      
                $stmt->bind_param(
                    "ssss",
                    $this->user,
                    $this->pass,
                    $datetime,
                    $datetime
                );
                $stmt->execute();
                $stmt->close();
                return true;
            }else{
                return false;
            }
        }
    }
}
