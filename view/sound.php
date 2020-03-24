<?php

$newTrack = file_get_contents("../resources/actualTrack");
?>

<div class="center">
  <audio id="player" controls autoplay loop>
    <source src="../resources/music/<?php echo $newTrack; ?>" type="audio/mp3">
  </audio>
</div>


<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>