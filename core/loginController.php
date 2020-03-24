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
                $userDAO->setUserType($_POST["typeUser"]);
                $ok = $userDAO->createUser();
                if (!is_string($ok)) {
                    $response = $userDAO->login($_POST["userCreate"], $_POST["passCreate"]);
                    if (!is_string($response)) {
                        switch ($_POST["typeUser"]) {
                            case "PLAYER":
                                $_SESSION["actualUser"] = $userDAO->idUser($_POST["userCreate"]);
                                $_SESSION["typeUser"] = "PLAYER";
                                header('Location: ./characterSelector.php');
                                exit();
                                break;
                            case "MASTER":
                                $_SESSION["actualUser"] = $userDAO->idUser($_POST["userCreate"]);
                                $_SESSION["typeUser"] = "MASTER";
                                header('Location: ./showMasterIndex.php');
                                exit();
                                break;
                            case "VIEWER":
                                $_SESSION["actualUser"] = $userDAO->idUser($_POST["userCreate"]);
                                $_SESSION["typeUser"] = "VIEWER";
                                header('Location: ./characterSelector.php');
                                exit();
                                break;
                        }
                    } else {
                        $_SESSION["message"] = $response;
                        header('Location: ../index.php');
                        exit();
                    }
                } else {
                    $_SESSION["message"] = $ok . "No se ha podido crear al usuario -> " . $_POST["userCreate"] . " del tipo -> " . $userDAO->getUserTypeSaved();
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

                    if ($userDAO->getUserType($_SESSION["actualUser"]) == "MASTER") {
                        $_SESSION["typeUser"] = "MASTER";
                        $_SESSION["masterName"] = $_POST["user"];
                        header('Location: ./showMasterIndex.php');
                        exit();
                    } else {
                        if (isset($_COOKIE["actualCharacterId"])) {
                            $_SESSION["typeUser"] = "PLAYER";
                            $_SESSION["actualCharacterId"] = $_COOKIE["actualCharacterId"];
                            header("Location: ./showCharacter.php");
                            exit();
                        } else {
                            $_SESSION["typeUser"] = "PLAYER";
                            header('Location: ./characterSelector.php');
                            exit();
                        }
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
    if (isset($_SESSION["typeUser"])) {
        if ($_SESSION["typeUser"] == "MASTER") {
            header("Location: ../core/showMasterIndex.php");
            exit();
        }
        if ($_SESSION["typeUser"] == "PLAYER") {
            if (isset($_COOKIE["actualCharacterId"])) {
                $_SESSION["actualCharacterId"] = $_COOKIE["actualCharacterId"];
                header("Location: ../core/showCharacter.php");
                exit();
            } else {
                header('Location: ../core/characterSelector.php');
                exit();
            }
        }
        if ($_SESSION["typeUser"] == "VIEWER") {
            exit();
        }
    }
}
//esta autenticado
