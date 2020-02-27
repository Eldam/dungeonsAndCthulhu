
var page = 0;
var limitPage = 5;
var type = null;
var last = false;


function listObject(){
    var data={
        page : page,
        limitPage : limitPage
     }
    $.ajax({
        url: './listObject.php',
        data: data,
        type: "POST",
        success: function (respuesta) {
            respuesta= JSON.parse(respuesta);
            draw(respuesta);
            if(respuesta.length == 0){
                last = true;
            }
            page += limitPage;
        },
        error: function () {
        
        }
    });
}

$(function(){
    listObject();
})

function draw(data){

    for(var row in data){
        var card =  '  <div class="card cardPrimal" style="width: 18rem;">'+
                    '    <img class="card-img-top" src="../resources/img/object/1/1.jpg" alt="imgObject">'+
                    '    <div class="card-body">'+
                    '      <h5 class="name">'+ data[row]["name"]+'</h5>'+
                    '      <hr>'+
                    '      <p class="description">Some quick example text to build on the card title and make up the bulk of the cards content.</p>'+
                    '      <hr>'+
                    '      <p class="typePrimal">Primigenio: No.</p>'+
                    '      <div class="col-12 row">'+
                    '        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#detailModal">'+
                    '          Ver'+
                    '        </button>'+
                    '        <p class="col-8">1 <i class="fas fa-gem" style="color:red"></i> 12 <i class="fas fa-gem" style="color:dodgerblue"></i> 13 <i class="fas fa-gem" style="color: green"></i></p>'+
                    '      </div>'+
                    '    </div>'+
                    '  </div>';
        $("#card-container").append(card);
    }
}

var getPage = false;

$(window).scroll(function() {
    if($(window).scrollTop() + $(window).height() > $(document).height() - 100 && !getPage) {
        getPage = true;
        if(!last){
            listObject();
        }
        getPage = false;
    }
 });