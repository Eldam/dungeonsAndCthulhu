<?php

session_start();
//incluir funcion autenticacion
include_once '../core/functions/authentications.php';
// si no esta autenticado
if (!IsAuthenticated()) {
    header('../index.php');
} else {

    $statusOk = true;

    if (isset($_POST["exist"])) {
        if (isset($_FILES["file"])) {

            $target_dir = "../resources/img/object/" . $_POST["id"] . "/";
            if(!is_dir($target_dir)){
                mkdir($target_dir);
            }
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                $response = array("status" => true, "mensaje" => "Se ha creado correctamente");
                echo json_encode($response);
                exit;
            } else {
                $response = array("status" => false, "mensaje" => "Se ha producido un error");
                echo json_encode($response);
                exit;
            }
        } else {
            $response = array("status" => false, "mensaje" => "Se ha producido un error");
            echo json_encode($response);
            exit;
        }
    }



    try {

        include_once '../models/objectDAO.php';
        $object = new objectDAO();
        $object->setName($_POST["name"]);
        $object->setDescription($_POST["description"]);
        $object->setPrice($_POST["price"]);
        $object->setTypeCoin($_POST["typeCoin"]);
        $object->setWeight($_POST["weight"]);
        $object->setVolume($_POST["volume"]);
        $object->setLimitationStrength($_POST["limitationStrength"]);
        $object->setLimitationDex($_POST["limitationDex"]);
        $object->setLimitationCons($_POST["limitationCons"]);
        $object->setLimitationInt($_POST["limitationInt"]);
        $object->setLimitationWis($_POST["limitationWis"]);
        $object->setTypeObject($_POST["typeObject"]);
        $object->setPrimal($_POST["typePrimal"]);

        $object->createObject();

        switch ($_POST["typeObject"]) {
            case "armor":
                include_once '../models/armorDAO.php';
                $objectArmor = new armorDAO();
                $objectArmor->setIdObj($object->getId());
                $objectArmor->setCa($_POST["objectData"]["ca"]);
                $objectArmor->setType($_POST["objectData"]["type"]);
                $objectArmor->createObject();
                break;
            case "accesory":
                include_once '../models/accesoryDAO.php';
                $objectAccesory = new accesoryDAO();
                $objectAccesory->setIdObj($object->getId());
                $objectAccesory->setCost($_POST["objectData"]["cost"]);
                $objectAccesory->setEffect($_POST["objectData"]["effect"]);
                $objectAccesory->setDuration($_POST["objectData"]["duration"]);
                $objectAccesory->setDurability($_POST["objectData"]["durability"]);
                $objectAccesory->createObject();
                break;
            case "weapon":
                include_once '../models/weaponDAO.php';
                $objectWeapon = new weaponDAO();
                $objectWeapon->setIdObj($object->getId());
                $objectWeapon->setDamage($_POST["objectData"]["damage"]);
                $objectWeapon->setCritical($_POST["objectData"]["critical"]);
                $objectWeapon->setType($_POST["objectData"]["type"]);
                $objectWeapon->setHand($_POST["objectData"]["hand"]);
                $objectWeapon->setSubtle($_POST["objectData"]["subtle"]);
                $objectWeapon->setScope($_POST["objectData"]["scope"]);
                $objectWeapon->createObject();
                break;
            case "potion":
                include_once '../models/potionDAO.php';
                $objectPotion = new potionDAO();
                $objectPotion->setIdObj($object->getId());
                $objectPotion->setEffect($_POST["objectData"]["effect"]);
                $objectPotion->setDuration($_POST["objectData"]["duration"]);
                $objectPotion->setExpiration($_POST["objectData"]["expiration"]);
                $objectPotion->setType($_POST["objectData"]["type"]);
                $objectPotion->createObject();
                break;
            case "food":
                include_once '../models/foodDAO.php';
                $objectFood = new foodDAO();
                $objectFood->setIdObj($object->getId());
                $objectFood->setEffect($_POST["objectData"]["effect"]);
                $objectFood->setDuration($_POST["objectData"]["duration"]);
                $objectFood->setExpiration($_POST["objectData"]["expiration"]);
                $objectFood->createObject();
                break;
            case "magicStone":
                include_once '../models/magicStoneDAO.php';
                $objectMagicStone = new magicStoneDAO();
                $objectMagicStone->setIdObj($object->getId());
                $objectMagicStone->setCapacity($_POST["objectData"]["capacity"]);
                $objectMagicStone->setEfficiency($_POST["objectData"]["efficency"]);
                $objectMagicStone->createObject();
                break;
            default:
                break;
        }

        switch ($_POST["typePrimal"]) {
            case "1":
                include_once '../models/primalDAO.php';
                $primalObject = new primalDAO();
                $primalObject->setIdObj($object->getId());
                $primalObject->setStrength($_POST["primalData"]["strength"]);
                $primalObject->setDexterity($_POST["primalData"]["dexterity"]);
                $primalObject->setConstitution($_POST["primalData"]["constitution"]);
                $primalObject->setInteligence($_POST["primalData"]["inteligence"]);
                $primalObject->setWisdom($_POST["primalData"]["wisdom"]);
                $primalObject->setCharisma($_POST["primalData"]["charisma"]);
                $primalObject->setSynchronizationCost($_POST["primalData"]["synchronizationCost"]);
                $primalObject->setTS($_POST["primalData"]["TS"]);
                $primalObject->setMax($_POST["primalData"]["max"]);
                $primalObject->setMin($_POST["primalData"]["min"]);
                $primalObject->setRatk($_POST["primalData"]["Ratk"]);
                $primalObject->setRdamage($_POST["primalData"]["Rdamage"]);
                $primalObject->setEffect($_POST["primalData"]["effect"]);
                $primalObject->setRTSalv($_POST["primalData"]["RTSalv"]);
                $primalObject->setInitiative($_POST["primalData"]["initiative"]);
                $primalObject->setSpeed($_POST["primalData"]["speed"]);
                $primalObject->setDeathEnergy($_POST["primalData"]["deathEnergy"]);
                $primalObject->setLifeEnergy($_POST["primalData"]["lifeEnergy"]);
                $primalObject->setKiMulti($_POST["primalData"]["kiMulti"]);
                $primalObject->setManaMulti($_POST["primalData"]["manaMulti"]);
                $primalObject->setRAtkSpell($_POST["primalData"]["rAtkSpell"]);
                $primalObject->setRDmgSpell($_POST["primalData"]["rDmgSpell"]);
                $primalObject->createObject();
                break;
            case "0":
                break;
            default:
                break;
        }
        $response = array("status" => true, "mensaje" => "Se ha creado correctamente", "id" => $object->getId());
        echo json_encode($response);
        exit;
    } catch (Exception $e) {
        $response = array("status" => false, "mensaje" => "Se ha producido un error");
        echo json_encode($response);
    }
}
