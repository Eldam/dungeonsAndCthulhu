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

</head>

<body class="bg-secondary">

    <div class="row my-4 d-flex justify-content-center baseline">
<?php
    foreach($pjs as $pj){
        echo '<div class="card col-lg-2 col-md-4 col-sm-12 mx-12 row m-4" >
        <img class="card-img-top" id="avatar" src="../resources/img/avatar/' . $pj['id'] . '.jpg" alt="Card image cap">'. 
        '<div class="card-body"> <h5 class="card-title">'. $pj['name']. '</h5> <p class="card-text">Nivel:'. $pj['level'].
        '</p> <p class="card-text">Raza:' . $pj['raze']. '</p> <a href="../core/showCharacter.php?actualCharacterId='. $pj['id']. '" class="btn btn-primary">Select</a> </div> </div>';
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

        <div class="card col-lg-2 col-md-4 col-sm-12 mx-12 row m-4" style="width: 18rem;">
            <img class="card-img-top" src="../resources/img/new.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Nuevo Personaje</h5>
                <p class="card-text">Crea un nuevo personaje</p>
                <a href="#" class="btn btn-primary">Select</a>
            </div>
        </div>

    </div>


</body>

</html>