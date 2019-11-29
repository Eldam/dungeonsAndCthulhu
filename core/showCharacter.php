<?php


session_start();
//incluir funcion autenticacion
include_once './functions/authentications.php';
//si no esta autenticado
if (!IsAuthenticated()) {
    header('../view/login.php');
}
//esta autenticado
else {
    include_once '../models/characterDAO.php';
    include_once '../models/characterSkillDAO.php';
    include_once '../core/functions/dice.php';
    if(!isset($_SESSION["actualCharacterId"])){
        header("../view/characterSelector.php");
    }

//COGEMOS DATOS
    $characterDAO = new characterDAO();
    $characterDAO->setId($_SESSION["actualCharacterId"]);
    $data = $characterDAO->getCharacter();
    $dataPerk = $characterDAO->getPerks();
    $_SESSION["actualCharacterName"] = $data["name"];
    $_SESSION["actualCharacterLvl"] = $data["level"];
    $_SESSION["actualCharacterExp"] = $data["actualExperience"];
    $_SESSION["actualCharacterRaze"] = $data["raze"];
    $_SESSION["actualCharacterGender"] = $data["gender"];
//MODIFICAMOS DATOS
echo "Antes de llamar a funcion -->".$data["wisdomBase"] . "<br>";
    $data = calculatePerkAttribute($data,$dataPerk);
    echo "Despues de llamar a funcion -->". $data["wisdomBase"];
    $modifierArray = calculateModify($data);
    
    $characterSkillDAO = new characterSkillDAO();
    $characterSkillDAO->setId($_SESSION["actualCharacterId"]);
    $strengthSkills = $characterSkillDAO->getCharacterSkillByStrength();
    $dexteritySkills = $characterSkillDAO->getCharacterSkillByDexterity();
    $constitutionSkills = $characterSkillDAO->getCharacterSkillByConstitution();
    $inteligenceSkills = $characterSkillDAO->getCharacterSkillByInteligence();
    $wisdomSkills = $characterSkillDAO->getCharacterSkillByWisdom();
    $charismaSkills = $characterSkillDAO->getCharacterSkillByCharisma();


//CREAMOS LAS VISTAS
    include_once '../view/Layout/header.php';
    include_once '../view/characterMainPage.php';
    include_once "../view/Layout/footer.php";
}
