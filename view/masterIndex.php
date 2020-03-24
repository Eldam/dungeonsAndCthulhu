<div class="row">
    <p class="h1 text-primary">MUSIC PLAYER:</p>
    <?php
    include_once "../view/sound.php";
    ?>
</div>

<div>
    <p class="h1 text-primary text-center">MUSIC SELECTOR</p>
    <?php
    $filelist = array();
    if ($handle = opendir("../resources/music/")) {
        while ($entry = readdir($handle)) {
            if (!is_dir($entry)) {
                $filelist[] = $entry;
            }
        }
        closedir($handle);
    }

    include_once "../view/master.php";
    ?>
</div>