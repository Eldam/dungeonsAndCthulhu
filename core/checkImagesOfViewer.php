<?php
$images = json_decode(file_get_contents("../resources/viewerImages"));
$modificationDate = filemtime("../resources/viewerImages"); 

header('Content-Type: application/json');
echo json_encode([
        "images" => $images, 
        "modificationDate" => $modificationDate
    ]);
?>