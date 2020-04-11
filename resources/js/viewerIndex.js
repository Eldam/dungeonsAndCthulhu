$(function() {  
    var lastModificationDate = 0.5;
    var lastRefreshRate = 2;

    function checkTrack(){
        $.ajax({
                url:   '../core/checkImagesOfViewer.php',
                type:  'post',
                beforeSend: function () {
                    console.log("Waiting...");
                },
                success:  function (response) { 
                    console.log("donne...");
                    
                    if(response.modificationDate != lastModificationDate){
                        console.log("Images Change!");
                        lastModificationDate = response.modificationDate;
                        $("#imgShow").empty();
                       
                        for(var img in response.images){
                            $("#imgShow").append('<img class="col-6" src="'+response.images[img]+'">');
                        }
                    }
                }
        });
    }

    function startDelay(){
        setTimeout(function() {
            checkTrack();
            startDelay();
        }, lastRefreshRate * 1000);
    }

    checkTrack()
    startDelay();
    
});