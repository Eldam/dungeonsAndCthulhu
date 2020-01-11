<?php


session_start();
//incluir funcion autenticacion
include_once './functions/authentications.php';
//si no esta autenticado

if (!IsAuthenticated()) {

    if (isset($_POST["action"])) {
        if ($_POST["action"] == "register") {
            if ($_POST["passCreate"] == $_POST["passRepeat"]) {
                include_once '../models/user.php';
                $userDAO = new userDAO();
                $userDAO->setUser($_POST["userCreate"]);
                $userDAO->setPass($_POST["passCreate"]);
                $ok = $userDAO->createUser();
                if ($ok) {
                    $response = $userDAO->login($_POST["userCreate"], $_POST["passCreate"]);
                    if (!is_string($response)) {
                        $_SESSION["actualUser"] = $userDAO->idUser($_POST["userCreate"]);
                        header('Location: ./characterSelector.php');
                        exit();
                    } else {
                        $_SESSION["message"] = $response;
                        header('Location: ../index.php');
                        exit();
                    }
                } else {
                    $_SESSION["message"] = "No se ha podido crear al usuario";
                    header('Location: ../index.php');
                    exit();
                }
            } else {
                $_SESSION["message"] = "Las contraseñas no coinciden";
                header('Location: ../index.php');
                exit();
            }
        } else {
            if (isset($_POST["user"]) && isset($_POST["password"])) {
                //set login
                include_once '../models/user.php';
                $userDAO = new userDAO();
                $response = $userDAO->login($_POST["user"], $_POST["password"]);
                if (!is_string($response)) {
                    $_SESSION["actualUser"] = $userDAO->idUser($_POST["user"]);

                    if (isset($_COOKIE["actualCharacterId"])) {
                        $_SESSION["actualCharacterId"] = $_COOKIE["actualCharacterId"];
                        header("Location: ./showCharacter.php");
                        exit();
                    } else {
                        header('Location: ./characterSelector.php');
                        exit();
                    }
                } else {
                    $_SESSION["message"] = $response;
                    header('Location: ../index.php');
                    exit();
                }
            } else {
                $_SESSION["message"] = "BAD REQUEST";
                header('Location: ../index.php');
                exit();
            }
        }
    } else {
        $_SESSION["message"] = "NO ACTION";
        header('Location: ../index.php');
        exit();
    }
} else {
    if (isset($_COOKIE["actualCharacterId"])) {
        $_SESSION["actualCharacterId"] = $_COOKIE["actualCharacterId"];
        header("Location: ../core/showCharacter.php");
        exit();
    } else {
        header('Location: ../core/characterSelector.php');
        exit();
    }
}
//esta autenticado
