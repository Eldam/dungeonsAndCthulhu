<?php

class UserDAO
{
    function __construct()
    {
        include_once 'accesDB.php';
        $this->mysqli = ConnectDB();
    }

    function login($user,$password){
        $pass = md5($password);
        $sql = "SELECT * FROM user WHERE name='$user'";
        $resultado = mysqli_query($this->mysqli, $sql);
        if(mysqli_num_rows($resultado) == 0){
            return 'El login no existe';
        }
        else{
            $tupla = $resultado->fetch_array();
            if ($tupla['password'] == $pass){
                return true;
            }
            else{
                return 'La password para este usuario no es correcta';
            }
        }
    }

    function idUser($user){
        $sql = "SELECT * FROM user WHERE name='$user'";
        $resultado = mysqli_query($this->mysqli, $sql);
        $tupla = $resultado->fetch_array();
        return $tupla['id'];
    }
    function createUser($user,$password){
        $sql = "SELECT * FROM user WHERE name='$user'";
        $resultado = mysqli_query($this->mysqli, $sql);
        if(mysqli_num_rows($resultado) != 0){
            return 'El usuario ya existe';
        }else{
            $sql = "INSERT INTO user (name,password) VALUES ($user,$password') ";
            return mysqli_query($this->mysqli, $sql);
        }
    }
}