<?php


function calculateDice($dado)
    {

        $dadoDoce = "";

        if ($dado >= 12) {
            $dadoDoce = floor($dado / 12) . "D12 ";
            $dado = $dado % 12;
            if($dadoDoce != 0){
                $dadoDoce .= " + ";
            }
        }
        if ($dado == 0) {
            return $dadoDoce;
        }
        if ($dado == 1) {
            return $dadoDoce . "1 ";
        }

        if ($dado % 2 == 0) {
            return $dadoDoce . " 1D" . $dado ." ";
        } else {
            return $dadoDoce . " 1D" . ($dado-1) ." ";
        }
    }

function calculateModify($data){
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