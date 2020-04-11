<link rel="stylesheet" href="../resources/css/imageSelector.css">


<ul id="viewerDrop" class="connectedSortable row"></ul>

<br>
<div id="showButtomDiv">
  <button id="showButtom" type="button" class="btn btn-primary btn-lg btn-block">Mostrar</button>
</div>
<div id="dirs" class="row"></div>

<br>
<div class="container center m-5 row ">
  <ul id="gallery" class="connectedSortable row"></ul>

</div>
<br>
<br>
<br>
<br>
<div id="loadButomDiv">
  <button id="loadButom" type="button" class="btn btn-secondary btn-lg btn-block">Subir Imagenes</button>
</div>

<!-- ImageDrop Modal -->
<div id="dropImageModal" class="modal modal-lg" style="z-index: 9999999!important;" tabindex="1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header"> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div id="dropError">Solo se pueden subir imgenes con formato jpg o png</div>
      <div class="modal-body">
        <div id="imageDrop" class="row dz-message">
          <h1>Drop Images here</h1>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>
<!-- END ImageDrop Modal -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="../resources/js/dropzone/dist/dropzone.js"></script>
<!-- <script src="../resources/js/jquery-ui/TouchPunch.js"></script> -->
<script src="../resources/js/masterImageSelector.js"></script>