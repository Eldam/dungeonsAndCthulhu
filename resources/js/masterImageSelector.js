
var imageData = null;
var navigationStack = [];

$(function(){
    $("#imageDrop").dropzone(
        { 
            url: "/core/imageUpload.php",
            uploadMultiple: true , 
            accept: function(file, done) {
                if (!file.name.toLowerCase().endsWith(".jpg") && !file.name.toLowerCase().endsWith(".png" )) {
                    $(" #dropError").show();
                  done("Solo esta permitido la subida de imagenes");
                }
                else { done(); }
              },
            success: function() {
                    loadImages();
                  },
        }
        );


        
        loadImages()
       

        setTimeout(() => {$("#header").removeClass("toggled"); }, 500);

  

        $("#gallery").sortable({
            connectWith: ".connectedSortable",
            remove: function (event, ui) {
                ui.item.clone().appendTo('#viewerDrop');
                $(this).sortable('cancel');
            }
        }).disableSelection();

        $( "#viewerDrop" ).sortable({
            connectWith: ".connectedSortable"
            
          }).disableSelection();

 


        $("#showButtom").on("click",uploadShowContent);
        $("#loadButom").on("click",function(){
            $(" #dropError").hide();
            $("#dropImageModal").modal("show");
        });
    })


    function loadImages(){
        $.ajax({
            url: "imageRest.php",
            method: "POST", 
            data: {action: "get"}
          }).done(function(data) {
            imageData =  data;
            navigationStack.push(imageData);
            drawActualFolerContent();
          });
    }
 

    

    function drawActualFolerContent(){
        var content = navigationStack[navigationStack.length-1]; 
        if(content != null){

            $("#gallery").empty();
            // $("#viewerDrop").empty();
            $("#dirs").empty();

            for(var files in content["files"]){
                $("#gallery").append('<li class="ui-state-default image-dropable"><img src="'+content["files"][files]+'"></li>');
            }


            
            if(navigationStack.length>1){
                var dir =   '<div id="backDir" class="m-3" onclick="backDir()">'+
                                '<span class="dirname">Back</span>'+
                                '<span class="dirnumber"></span>'+
                            '</div>';
                $("#dirs").append(dir);
            }


            for(var directory in content["dirs"]){
                var numOfImages = Object.keys(content["dirs"][directory]["files"]).length;  
                var dir =   '<div class="dir m-3" onclick="changeActualFolder(\''+directory+'\')">'+
                                '<span class="dirname">'+directory+'</span>'+
                                '<span class="dirnumber">'+numOfImages+'</span>'+
                            '</div>';
                $("#dirs").append(dir);
            }
             
        }
    }

    function changeActualFolder( newDir){
        var content = navigationStack[navigationStack.length-1]; 
        if(content != null){
            navigationStack.push(content["dirs"][newDir]);
        }
        drawActualFolerContent();
    }


    function backDir(){ 
        if(navigationStack != null && navigationStack.length>1){
            navigationStack.pop();
        }
        drawActualFolerContent();
    }



    function uploadShowContent(){
        var data={}; 

        $("#viewerDrop li img").each(function(index ) {
            data["img"+index ]=$( this ).attr("src");
          });

        $.ajax({
            url: "viewerTraker.php",
            method: "POST", 
            data: data
          })
    }
