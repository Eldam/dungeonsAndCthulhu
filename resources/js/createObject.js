$(function () {


    $("#objetOption").change(function () {
        hideOptions();
        $("#" + $("#objetOption option:selected").val()).removeClass("hide");
    });



    $("#primalSelect").change(function () {
        if ($("#primalSelect option:selected").val() == "") {
            $("#primalDiv").addClass("hide");
        } else {
            $("#primalDiv").removeClass("hide");
        }
    });


    $("#fileUpload").change(function () {
        if ($("#fileUpload").val() == "") {
            $("#textFile").val("Elige una imagen");
        } else {
            var filename = $("#fileUpload").val().split('\\');
            $("#textFile").text(filename[filename.length - 1]);
        }
    });

    $("#createObject").click(function () {
        uploadObject();
    });

})


function hideOptions() {
    $(".objetDiv").each(function () {
        $(this).addClass("hide");
    })
}

function uploadObject() {
    var correctField = true;
    if ($("#name").val() == "") {
        correctField = false;
        $("#name").addClass("is-invalid");
    } else {
        $("#name").removeClass("is-invalid");
    }




    if (!correctField) {
        showError("Campos Incorrectos, por favor revisa el formulario.");
        return;
    }

    var data = {
        name: $("#name").val(),
        description: $("#description").val(),
        price: $("#price").val(),
        typeCoin: $("#typeCoin").val(),
        weight: $("#weight").val(),
        volume: $("#volume").val(),
        limitationStrength:$("#limitationStrength").val(),
        limitationDex:$("#limitationDex").val(),
        limitationCons:$("#limitationCons").val(),
        limitationInt:$("#limitationInt").val(),
        limitationWis:$("#limitationWis").val(),
        typeObject: $("#objetOption option:selected").val(),
        objectData: {},
        primalData: {}
    }

    //TODO RELLENAR OBJECTDATA Y PRIMALDATA

    $.ajax({
        url: './createObject.php',
        data: data,
        type: "POST",
        success: function (respuesta) {
            console.log(respuesta);
        },
        error: function () {
            console.log("No se ha podido obtener la información");
        }
    });
}


function showError(text) {

}
