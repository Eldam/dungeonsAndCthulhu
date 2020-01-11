<html>

<head>
    <title>Dungeons & Cthulhu</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/v4-shims.css">
    <link href="../resources/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../resources/css/core.css">
    <link rel="stylesheet" href="../resources/css/characterSelector.css">
    <link href="https://fonts.googleapis.com/css?family=Coming+Soon|Creepster|Mrs+Sheppards&display=swap" rel="stylesheet">

</head>

<body class="bg-secondary">
    <h1 class="display-1 text-center" style="color: white">SELECCIÓN DE PERSONAJE</h1>
    <div class="">
        <div class="card-columns col-10 col-md-8 col-xl-7 mx-auto" id="cardText">
            <?php
            foreach ($pjs as $pj) {
                echo '<div class="card">
            <img class="card-img-top" id="avatar" style="width: 100%; display: block;" src="../resources/img/avatar/' . $pj['id'] . '.jpg" alt="Card image cap">' .
                    '<div class="card-body"> <h5 class="card-title">' . $pj['name'] . '</h5> <p class="card-text">Nivel:' . $pj['level'] .
                    '</p> <p class="card-text">Raza:' . $pj['raze'] . '</p> <a href="../core/showCharacter.php?actualCharacterId=' . $pj['id'] . '" class="btn btn-primary">Select</a> </div> </div>';
            }
            ?>
            <!-- <div class="card col-lg-2 col-md-4 col-sm-4 mx-4" style="width: 1rem;">
            <img class="card-img-top" src="../resources/img/1(1).jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Lilith Vermillion</h5>
                <p class="card-text">Nivel: ??</p>
                <p class="card-text">Raza: ??</p>
                <a href="#" class="btn btn-primary">Select</a>
            </div>
        </div> -->

            <div class="card">
                <img class="card-img-top" style="height: 340px; width: 100%; display: block;" src="../resources/img/new.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Nuevo Personaje</h5>
                    <p class="card-text">Crea un nuevo personaje</p>
                    <a href="#" class="btn btn-primary">Select</a>
                </div>
            </div>


        </div>
        <button type="button" class="btn btn-danger btn-lg btn-block fixed-bottom">
            <a href="../core/logOut.php">
                <i class="fa fa-power-off" style="color: white"></i>
            </a>
        </button>
    </div>


</body>

</html>