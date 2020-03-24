<html>

<head>
    <title>SacredLaws</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/v4-shims.css">
    <script src="https://kit.fontawesome.com/870d695b00.js"></script>
    <link href="../resources/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css'>
    <link rel="stylesheet" href="../resources/css/lateralBar.css">
    <link rel="stylesheet" href="../resources/css/core.css">
    <link rel="stylesheet" href="../resources/styles.css">
    <link href="../resources/css/custom.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../resources/js/sound.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.6/css/all.css'>
    <script src="../resources/js/master.js"></script>

</head>

<body>

    <div class="page-wrapper chiller-theme" id="header">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand" style="font-size: 18px">
                    <a href="../index.php" style="color:goldenrod"><i class="fas fa-dragon"></i> Sacred <span style="color:red;">Laws <i class="fas fa-gavel"></i></span>
                    </a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" id="img-lateral-bar" src="../resources/img/user/<?= $_SESSION["actualUser"] ?>.jpg" alt="User picture">
                    </div>
                    <div class="user-info">
                        <h4 class="user-name" style="color: #7ebcff"><?php echo $_SESSION["masterName"] ?></h4>
                    </div>
                </div>
                <!-- menu personaje -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span style="color: white">Menú Master</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="far fa-user"></i>
                                <span>Mostrar grupos (AUN NO)</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="http://localhost/core/showCharacter.php">Mostrar personaje
                                            <span class="badge badge-pill badge-success">Pro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/">Indice</a>
                                    </li>
                                    <li>
                                        <a href="#">Subir de nivel</a>
                                    </li>
                                    <li>
                                        <a href="#">Editar Personaje</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-book-open"></i>
                                <span>Habilidades (AUN NO)</span>
                                <!-- <span class="badge badge-pill badge-danger">3</span> -->
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="../view/test.php">Obtenidas

                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Todas</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-magic"></i>
                                <span>Perks (AUN NO)</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Hechizos Obtenidos</a>
                                    </li>
                                    <li>
                                        <a href="#">Todos los Hechizos</a>
                                    </li>
                                    <li>
                                        <a href="#">Dotes Obtenidas</a>
                                    </li>
                                    <li>
                                        <a href="#">Todas las Dotes</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-flask"></i>
                                <span>Objetos</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Equipados</a>
                                    </li>
                                    <li>
                                        <a href="#">Mis objetos</a>
                                    </li>
                                    <li>
                                        <a href="../core/showAllObjects.php">Todos los Objetos</a>
                                    </li>
                                    <li>
                                        <a href="#">Pociones</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-cogs"></i>
                                <span>Herramientas</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="../view/cardShuffle.html" tabindex="-1" role="button">Card Shuffling</a>
                                    </li>
                                    <li>
                                        <a href="../view/sound.php" tabindex="-1" role="button">Music</a>
                                    </li>
                                    <li>
                                        <a href="../core/master.php" tabindex="-1" role="button">Master</a>
                                    </li>
                                    <li>
                                        <a href="https://tabletopaudio.com/combat_siege_sp.html" tabindex="-1" role="button">Combat Siege</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-store"></i>
                                <span>Tienda</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#" tabindex="-1" role="button">Todas las tiendas</a>
                                    </li>
                                    <li>
                                        <a href="#" tabindex="-1" role="button">Loot</a>
                                    </li>
                                    <li>
                                        <a href="#" tabindex="-1" role="button">Crear Tienda</a>
                                    </li>
                                    <li>
                                        <a href="#" tabindex="-1" role="button">Crear Loot</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-menu">
                            <span>Extra</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Guía de Juego</span>
                                <span class="badge badge-pill badge-primary">Beta</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-calendar"></i>
                                <span>Calendario</span>
                            </a>
                        </li>
                        <li>
                            <a href="../core/characterSelector.php">
                                <i class="fas fa-user-friends"></i>
                                <span>Seleccionar Personaje</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>


            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <a href="#">
                    <i class="fa fa-bell"></i>
                </a>
                <a href="#">
                    <i class="fa fa-envelope"></i>
                </a>
                <a href="#">
                    <i class="fa fa-cog"></i>
                </a>
                <a href="../core/logOut.php">
                    <i class="fa fa-power-off"></i>
                </a>
            </div>
        </nav>

        <main class="page-content">
            <div class="container-fluid">