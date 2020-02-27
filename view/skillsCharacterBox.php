
<div class="col-xl-12 container">
    <div class="row">
        <div class="col-xl-6 col-md-12" id="accordion">
            <div class="card bg-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Habilidades Fuerza
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse col-xl-6 col-md-12" aria-labelledby="headingOne" data-parent="#accordion">
                    <table class="table table-sm text-white">
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

            <div class="card bg-dark" type="button"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Habilidades Destreza
                        </button>
                    </h5>
                </div>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <table class="table table-sm text-white">
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
            
            <div class="card bg-dark" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Habilidades Constitucion
                        </button>
                    </h5>
                </div>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <table class="table table-sm text-white">
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

        <div class="col-xl-6 col-md-12" id="accordion2">
            <div class="card bg-dark" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Habilidades Inteligencia
                        </button>
                    </h5>
                </div>

                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion2">
                    <table class="table table-sm text-white">
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

            <div class="card bg-dark" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Habilidades Sabiduría
                        </button>
                    </h5>
                </div>

                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion2">
                    <table class="table table-sm text-white">
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
            
            <div class="card bg-dark" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                <div class="card-header" id="headingSix">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Habilidades Carisma
                        </button>
                    </h5>
                </div>

                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion2">
                    <table class="table table-sm text-white">
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