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
            <span class="count_bottom">Mod:
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
            <span class="count_bottom">Mod:
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
            <span class="count_top"><i class="fas fa-shield-alt"></i> Constitución</span>
            <div class="count <?php if ($data["constitutionBase"] > 12) {
                                    echo "green";
                                } else {
                                    if ($data["constitutionBase"] < 12) {
                                        echo "red";
                                    } else {
                                        echo "gray";
                                    }
                                } ?>"><?php echo $data["constitutionBase"]; ?></div>
            <span class="count_bottom">Mod:
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
            <span class="count_bottom">Mod:
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
            <span class="count_bottom">Mod:
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
            <span class="count_bottom">Mod:
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