<link href="../resources/css/custom.min.css" rel="stylesheet">

<div class="row my-4">
    <div class="tile_count col-xl-12 py-4 bg-dark text-molon">
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 tile_stats_count">
            <span class="count_top"><i class="fas fa-fist-raised"></i> Fuerza</span>
            <div class="count <?php if ($data["strengthBase"] > 12) {
                                    echo "green";
                                } else {
                                    if ($data["strengthBase"] < 12) {
                                        echo "red";
                                    } else {
                                        echo "gray";
                                    }
                                } ?>"><?php echo $data["strengthBase"]; ?></div>
            <span class="count_bottom">Modificador:
                <?php
                if ($modifierArray[0] > 0) {
                    echo '<i class="green">
                    <i class="fa fa-sort-asc"></i>' . $modifierArray[0] .
                        '</i>';
                } else {
                    if ($modifierArray[0] < 0) {
                        echo '<i class="red">
                        <i class="fa fa-sort-desc"></i>' . $modifierArray[0] .
                            '</i>';
                    } else {
                        echo $modifierArray[0] .
                            '</i>';
                    }
                }
                ?>
            </span>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 tile_stats_count">
            <span class="count_top"><i class="fas fa-running"></i> Destreza</span>
            <div class="count <?php if ($data["dexterityBase"] > 12) {
                                    echo "green";
                                } else {
                                    if ($data["dexterityBase"] < 12) {
                                        echo "red";
                                    } else {
                                        echo "gray";
                                    }
                                } ?>"><?php echo $data["dexterityBase"]; ?></div>
            <span class="count_bottom">Modificador:
                <?php
                if ($modifierArray[1] > 0) {
                    echo '<i class="green">
                    <i class="fa fa-sort-asc"></i>' . $modifierArray[1] .
                        '</i>';
                } else {
                    if ($modifierArray[1] < 0) {
                        echo '<i class="red">
                        <i class="fa fa-sort-desc"></i>' . $modifierArray[1] .
                            '</i>';
                    } else {
                        echo $modifierArray[1] .
                            '</i>';
                    }
                }
                ?>
            </span>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 tile_stats_count">
            <span class="count_top"><i class="far fa-heart"></i> Constitución</span>
            <div class="count <?php if ($data["constitutionBase"] > 12) {
                                    echo "green";
                                } else {
                                    if ($data["constitutionBase"] < 12) {
                                        echo "red";
                                    } else {
                                        echo "gray";
                                    }
                                } ?>"><?php echo $data["constitutionBase"]; ?></div>
            <span class="count_bottom">Modificador:
                <?php
                if ($modifierArray[2] > 0) {
                    echo '<i class="green">
                    <i class="fa fa-sort-asc"></i>' . $modifierArray[2] .
                        '</i>';
                } else {
                    if ($modifierArray[2] < 0) {
                        echo '<i class="red">
                        <i class="fa fa-sort-desc"></i>' . $modifierArray[2] .
                            '</i>';
                    } else {
                        echo $modifierArray[2] .
                            '</i>';
                    }
                }
                ?>
            </span>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 tile_stats_count">
            <span class="count_top"><i class="fas fa-hat-wizard"></i> Inteligencia</span>
            <div class="count <?php if ($data["inteligenceBase"] > 12) {
                                    echo "green";
                                } else {
                                    if ($data["inteligenceBase"] < 12) {
                                        echo "red";
                                    } else {
                                        echo "gray";
                                    }
                                } ?>"><?php echo $data["inteligenceBase"]; ?></div>
            <span class="count_bottom">Modificador:
                <?php
                if ($modifierArray[3] > 0) {
                    echo '<i class="green">
                    <i class="fa fa-sort-asc"></i>' . $modifierArray[3] .
                        '</i>';
                } else {
                    if ($modifierArray[3] < 0) {
                        echo '<i class="red">
                        <i class="fa fa-sort-desc"></i>' . $modifierArray[3] .
                            '</i>';
                    } else {
                        echo $modifierArray[3] .
                            '</i>';
                    }
                }
                ?>
            </span>
        </div>

        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 tile_stats_count">
            <span class="count_top"><i class="fas fa-yin-yang"></i> Sabiduría</span>
            <div class="count <?php if ($data["wisdomBase"] > 12) {
                                    echo "green";
                                } else {
                                    if ($data["wisdomBase"] < 12) {
                                        echo "red";
                                    } else {
                                        echo "gray";
                                    }
                                } ?>"><?php echo $data["wisdomBase"]; ?></div>
            <span class="count_bottom">Modificador:
                <?php
                if ($modifierArray[4] > 0) {
                    echo '<i class="green">
                    <i class="fa fa-sort-asc"></i>' . $modifierArray[4] .
                        '</i>';
                } else {
                    if ($modifierArray[4] < 0) {
                        echo '<i class="red">
                        <i class="fa fa-sort-desc"></i>' . $modifierArray[4] .
                            '</i>';
                    } else {
                        echo $modifierArray[4] .
                            '</i>';
                    }
                }
                ?>
            </span>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 tile_stats_count">
            <span class="count_top"><i class="far fa-smile-wink"></i> Carisma</span>
            <div class="count <?php if ($data["charismaBase"] > 12) {
                                    echo "green";
                                } else {
                                    if ($data["charismaBase"] < 12) {
                                        echo "red";
                                    } else {
                                        echo "gray";
                                    }
                                } ?>"><?php echo $data["charismaBase"]; ?></div>
            <span class="count_bottom">Modificador:
                <?php
                if ($modifierArray[5] > 0) {
                    echo '<i class="green">
                    <i class="fa fa-sort-asc"></i>' . $modifierArray[5] .
                        '</i>';
                } else {
                    if ($modifierArray[5] < 0) {
                        echo '<i class="red">
                        <i class="fa fa-sort-desc"></i>' . $modifierArray[5] .
                            '</i>';
                    } else {
                        echo $modifierArray[5] .
                            '</i>';
                    }
                }
                ?>
            </span>
        </div>
    </div>
</div>


<div class="col-xl-12 container">
    <div class="row">
        <div class="col-xl-6 col-md-12" id="accordion">
            <div class="card bg-dark">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Habilidades Fuerza
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <table class="table text-white">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Habilidad</th>
                                <th scope="col">Nivel</th>
                                <th scope="col">Dados</th>
                                <th scope="col">Marca</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($strengthSkills as $strengthSkill) {
                                if ($strengthSkill["typeSkill"] == "strength") {
                                    echo '<tr>
                                    <th scope="row">' . $i . '</th>'
                                        . '<td>' . $strengthSkill["name"] . '</td>'
                                        . '<td>' . $strengthSkill["level"] . '</td>'
                                        . '<td>' . "1D20 + " . calculateDice($strengthSkill["level"]) . $modifierArray[0] . '</td>'
                                        . '<td>' . $strengthSkill["mark"] . '</td>'
                                        . '</tr>';
                                    $i++;
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card bg-dark">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Habilidades Destreza
                        </button>
                    </h5>
                </div>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <table class="table text-white">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Habilidad</th>
                                <th scope="col">Nivel</th>
                                <th scope="col">Dados</th>
                                <th scope="col">Marca</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($dexteritySkills as $dexteritySkill) {
                                if ($dexteritySkill["typeSkill"] == "dexterity") {
                                    echo '<tr>
                                    <th scope="row">' . $i . '</th>'
                                        . '<td>' . $dexteritySkill["name"] . '</td>'
                                        . '<td>' . $dexteritySkill["level"] . '</td>'
                                        . '<td>' . "1D20 + " . calculateDice($dexteritySkill["level"]) . $modifierArray[1] . '</td>'
                                        . '<td>' . $dexteritySkill["mark"] . '</td>'
                                        . '</tr>';
                                    $i++;
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="card bg-dark">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Habilidades Constitucion
                        </button>
                    </h5>
                </div>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <table class="table text-white">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Habilidad</th>
                                <th scope="col">Nivel</th>
                                <th scope="col">Dados</th>
                                <th scope="col">Marca</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($constitutionSkills as $constitutionSkill) {
                                if ($constitutionSkill["typeSkill"] == "constitution") {
                                    echo '<tr>
                                    <th scope="row">' . $i . '</th>'
                                        . '<td>' . $constitutionSkill["name"] . '</td>'
                                        . '<td>' . $constitutionSkill["level"] . '</td>'
                                        . '<td>' . "1D20 + " . calculateDice($constitutionSkill["level"]) . $modifierArray[2] . '</td>'
                                        . '<td>' . $constitutionSkill["mark"] . '</td>'
                                        . '</tr>';
                                    $i++;
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-12" id="accordion">
            <div class="card bg-dark">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Habilidades Inteligencia
                        </button>
                    </h5>
                </div>

                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <table class="table text-white">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Habilidad</th>
                                <th scope="col">Nivel</th>
                                <th scope="col">Dados</th>
                                <th scope="col">Marca</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($inteligenceSkills as $inteligenceSkill) {
                                if ($inteligenceSkill["typeSkill"] == "inteligence") {
                                    echo '<tr>
                                    <th scope="row">' . $i . '</th>'
                                        . '<td>' . $inteligenceSkill["name"] . '</td>'
                                        . '<td>' . $inteligenceSkill["level"] . '</td>'
                                        . '<td>' . "1D20 + " . calculateDice($inteligenceSkill["level"]) . $modifierArray[3] . '</td>'
                                        . '<td>' . $inteligenceSkill["mark"] . '</td>'
                                        . '</tr>';
                                    $i++;
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card bg-dark">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Habilidades Sabiduría
                        </button>
                    </h5>
                </div>

                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <table class="table text-white">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Habilidad</th>
                                <th scope="col">Nivel</th>
                                <th scope="col">Dados</th>
                                <th scope="col">Marca</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($wisdomSkills as $wisdomSkill) {
                                if ($wisdomSkill["typeSkill"] == "wisdom") {
                                    echo '<tr>
                                    <th scope="row">' . $i . '</th>'
                                        . '<td>' . $wisdomSkill["name"] . '</td>'
                                        . '<td>' . $wisdomSkill["level"] . '</td>'
                                        . '<td>' . "1D20 + " . calculateDice($wisdomSkill["level"]) . $modifierArray[4] . '</td>'
                                        . '<td>' . $wisdomSkill["mark"] . '</td>'
                                        . '</tr>';
                                    $i++;
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="card bg-dark">
                <div class="card-header" id="headingSix">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Habilidades Carisma
                        </button>
                    </h5>
                </div>

                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                    <table class="table text-white">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Habilidad</th>
                                <th scope="col">Nivel</th>
                                <th scope="col">Dados</th>
                                <th scope="col">Marca</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($charismaSkills as $charismaSkill) {
                                if ($charismaSkill["typeSkill"] == "charisma") {
                                    echo '<tr>
                                    <th scope="row">' . $i . '</th>'
                                        . '<td>' . $charismaSkill["name"] . '</td>'
                                        . '<td>' . $charismaSkill["level"] . '</td>'
                                        . '<td>' . "1D20 + " . calculateDice($charismaSkill["level"]) . $modifierArray[5] . '</td>'
                                        . '<td>' . $charismaSkill["mark"] . '</td>'
                                        . '</tr>';
                                    $i++;
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>