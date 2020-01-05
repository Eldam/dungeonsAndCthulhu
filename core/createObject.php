<?php

session_start();
//incluir funcion autenticacion
include_once '../core/functions/authentications.php';
// si no esta autenticado
if (!IsAuthenticated()) {
    header('../index.php');
} else {

    $statusOk = true;
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
        $response = array("status" => true, "mensaje" => "Se ha creado correctamente");
        echo json_encode($response);
        exit;
    } catch (Exception $e) {
        $response = array("status" => false, "mensaje" => "Se ha producido un error");
        echo json_encode($response);
    }
}
