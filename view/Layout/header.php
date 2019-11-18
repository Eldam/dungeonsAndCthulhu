<html>

<head>
    <title>Dungeons & Cthulhu</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/v4-shims.css">
    <link href="../resources/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../resources/css/lateralBar.css">
    <link rel="stylesheet" href="../resources/css/core.css">
</head>

<body class="bg-secondary">

    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">Personaje</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <!-- <div class="user-pic">
                        <img class="img-responsive img-rounded" id="img-lateral-bar" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" alt="User picture">
                    </div> -->
                    <div class="user-info">
                        <h5 class="user-name"><?php echo $_SESSION["actualCharacterName"] ?></h5>
                        <span class="user-role">Raza: <span class="text-primary"><?php echo $_SESSION["actualCharacterRaze"] ?></span></span>
                        <span class="user-role">Genero: <span class="text-primary"><?php echo $_SESSION["actualCharacterGender"] ?></span></span>
                        <span class="user-role">Nivel: <span class="text-primary"><?php echo $_SESSION["actualCharacterLvl"] ?></span></span>
                        <span class="user-status">
                            <span>Experiencia Actual: </span><span class="text-danger"><?php echo $_SESSION["actualCharacterExp"] ?></span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>Menú Personaje</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="far fa-user"></i>
                                <span>Mostrar personaje</span>
                                <span class="badge badge-pill badge-warning">New</span>
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
                                <span>Habilidades</span>
                                <!-- <span class="badge badge-pill badge-danger">3</span> -->
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Obtenidas

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
                                <span>Perks</span>
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
                                        <a href="#">Obtenidos</a>
                                    </li>
                                    <li>
                                        <a href="#">Todos los Objetos</a>
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
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>


            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <a href="#">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-pill badge-warning notification">3</span>
                </a>
                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span class="badge badge-pill badge-success notification">7</span>
                </a>
                <a href="#">
                    <i class="fa fa-cog"></i>
                    <span class="badge-sonar"></span>
                </a>
                <a href="#">
                    <i class="fa fa-power-off"></i>
                </a>
            </div>
        </nav>

        <main class="page-content">
            <div class="container-fluid">