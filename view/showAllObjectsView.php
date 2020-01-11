<div class="col-12">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#createObjectModal">
    Crear Objeto
  </button>
  <?php include_once '../view/modals/createObjectModal.php'; ?>
  <?php include_once '../view/modals/viewObjectDetailModal.php'; ?>


</div>
<div class="col-12 mt-5 row">
  <div class="card cardPrimal" style="width: 18rem;">
    <img class="card-img-top" src="../resources/img/object/1/1.jpg" alt="imgObject">
    <div class="card-body">
      <h5 class="name">Card title</h5>
      <hr>
      <p class="description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <hr>
      <p class="typePrimal">Primigenio: No.</p>
      <div class="col-12 row">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#detailModal">
          Ver
        </button>
        <p class="col-8">1 <i class="fas fa-gem" style="color:red"></i> 12 <i class="fas fa-gem" style="color:dodgerblue"></i> 13 <i class="fas fa-gem" style="color: green"></i></p>
      </div>
    </div>
  </div>
</div>



























<script src="../resources/js/createObject.js"></script>