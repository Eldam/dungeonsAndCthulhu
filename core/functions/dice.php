<?php

function calculateDice($dice)
{

        $diceTwelve = "";

        if ($dice >= 12) {
            $diceTwelve = floor($dice / 12) . "D12 ";
            $dice = $dice % 12;
            if($diceTwelve != 0){
                $diceTwelve .= " + ";
            }
        }
        if ($dice == 0) {
            return $diceTwelve;
        }
        if ($dice == 1) {
            return $diceTwelve . "1 ";
        }

        if ($dice % 2 == 0) {
            return $diceTwelve . " 1D" . $dice ." ";
        } else {
            return $diceTwelve . " 1D" . ($dice-1) ." ";
        }
}

function calculateModify($data)
{
    $modifier = 0;
    $modifierArray = [
        0,
        0,
        0,
        0,
        0,
        0,
    ];
    $array = [
        $data["strengthBase"],
        $data["dexterityBase"],
        $data["constitutionBase"],
        $data["inteligenceBase"],
        $data["wisdomBase"],
        $data["charismaBase"],
    ];
    $j = 0;
    foreach ($array as $attribute) {
        if ($attribute < 12) {
            $modifier = ceil(($attribute - 13) / 2) * 2;
        } else {
            $modifier = ($attribute - 12) / 2;

            if ($attribute >= 24) {
                $modifier = ($attribute - 18);
                $multiplier = 1.0;
                $scalePosition = 0;
                $modifier = 5.0;

                for ($i = 24; $i <= $attribute; $i++) {
                    $modifier = ($modifier + $multiplier);
                    $scalePosition++;
                    if ($scalePosition >= 12) {
                        $scalePosition = 0;
                        $multiplier += 0.5;
                    }
                }
            }
        }
        $modifierArray[$j] = floor($modifier)<0? strval(floor($modifier)):"+".strval(floor($modifier));
        $j++;
    }
return $modifierArray;
}

function calculatePerkAttribute($dataPj,$dataPerk)
{
    foreach($dataPerk as $attribute)
    {
        if($attribute["type"] == "Atribute"){
            if($attribute["description"] == "Fuerza"){
                $dataPj["strengthBase"]++;
            }
            if($attribute["description"] == "Destreza"){
                $dataPj["dexterityBase"]++;
            }
            if($attribute["description"] == "Constitución"){
                $dataPj["constitutionBase"]++;
            }
            if($attribute["description"] == "Inteligencia"){
                $dataPj["inteligenceBase"]++;
            }
            if($attribute["description"] == "Sabiduría"){
                $dataPj["wisdomBase"]++;
            }
        }
    }
    return $dataPj;

}

function calculateDiceDmg($dataPerk)
{
    $dmgArray = [
        "modifierCc" => 0,
        "modifierWeapon" => 0,
        "modifierDistance" => 0,
        "modifierArcanus" => 0,
        "modifierDeath" => 0,
        "modifierLife" => 0,
    ];

    foreach($dataPerk as $dmg){
        if($dmg["RDmg"] == "Cuerpo a cuerpo"){
            $dmgArray["modifierCc"]++;
        }
        if($dmg["RDmg"] == "Arma"){
            $dmgArray["modifierWeapon"]++;
        }
        if($dmg["RDmg"] == "Distancia"){
            $dmgArray["modifierDistance"]++;
        }
        if($dmg["RDmg"] == "Arcano"){
            $dmgArray["modifierArcanus"]++;
        }
        if($dmg["RDmg"] == "Muerte"){
            $dmgArray["modifierDeath"]++;
        }
        if($dmg["RDmg"] == "Vida"){
            $dmgArray["modifierLife"]++;
        }
    }
    return $dmgArray;

}

function calculateDiceAtk($dataPerk)
{
    $atkArray = [
        "modifierCc" => 0,
        "modifierWeapon" => 0,
        "modifierDistance" => 0,
        "modifierArcanus" => 0,
        "modifierDeath" => 0,
        "modifierLife" => 0,
    ];

    foreach($dataPerk as $atk){
        if($atk["RAtk"] == "Cuerpo a cuerpo"){
            $atkArray["modifierCc"]++;
        }
        if($atk["RAtk"] == "Arma"){
            $atkArray["modifierWeapon"]++;
        }
        if($atk["RAtk"] == "Distancia"){
            $atkArray["modifierDistance"]++;
        }
        if($atk["RAtk"] == "Arcano"){
            $atkArray["modifierArcanus"]++;
        }
        if($atk["RAtk"] == "Muerte"){
            $atkArray["modifierDeath"]++;
        }
        if($atk["RAtk"] == "Vida"){
            $atkArray["modifierLife"]++;
        }
    }
    return $atkArray;

}

function MultiplierKi($dataPerk){
    $acount = 0;
    foreach($dataPerk as $multi){
        if($multi["type"] == "XKi"){
            $acount++;
        }
    }
    return calculateDice($acount);
}

function MultiplierMana($dataPerk){
    $acount = 0;
    foreach($dataPerk as $multi){
        if($multi["type"] == "XMana"){
            $acount++;
        }
    }
    return calculateDice($acount);
}

function acumulationDeath($dataPerk){
    $acount = 0;
    foreach($dataPerk as $multi){
        if($multi["type"] == "AcuDeath"){
            $acount++;
        }
    }
    return calculateDice($acount);
}

function acumulationLife($dataPerk){
    $acount = 0;
    foreach($dataPerk as $multi){
        if($multi["type"] == "AcuLife"){
            $acount++;
        }
    }
    return calculateDice($acount);
}

function rangeHeal($dataPerk){
    $acount = 0;
    foreach($dataPerk as $multi){
        if($multi["type"] == "RHeal"){
            $acount++;
        }
    }
    return calculateDice($acount);
}

function rangeNecro($dataPerk){
    $acount = 0;
    foreach($dataPerk as $multi){
        if($multi["type"] == "RNecro"){
            $acount++;
        }
    }
    return calculateDice($acount);
}