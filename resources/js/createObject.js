$(function () {


    $("#objetOption").change(function () {
        hideOptions();
        $("#" + $("#objetOption option:selected").val()).removeClass("hide");
    });



    $("#primalSelect").change(function () {
        if ($("#primalSelect option:selected").val() == "0") {
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
    // var formData = new FormData();
    var data = {
        name: $("#name").val(),
        description: $("#description").val(),
        price: $("#price").val(),
        typeCoin: $("#typeCoin").val(),
        weight: $("#weight").val(),
        volume: $("#volume").val(),
        limitationStrength: $("#limitationStrength").val(),
        limitationDex: $("#limitationDex").val(),
        limitationCons: $("#limitationCons").val(),
        limitationInt: $("#limitationInt").val(),
        limitationWis: $("#limitationWis").val(),
        typeObject: $("#objetOption option:selected").val(),
        typePrimal: $("#primalSelect").val(),
        objectData: {},
        primalData: {}
    }

    //RELLENA OBJECTDATA
    switch (data.typeObject) {
        case "armor":
            data.objectData = {
                ca: $("#ca").val(),
                type: $("#typeArmor").val()
            }
            break;
        case "accesory":
            data.objectData = {
                cost: $("#costAccesory").val(),
                durability: $("#durabilityAccesory").val(),
                duration: $("#durationAccesory").val(),
                effect: $("#effectAccesory").val()
            }
            break;
        case "weapon":
            data.objectData = {
                damage: $("#damage").val(),
                critical: $("#critical").val(),
                hand: $("#hand").val(),
                subtle: $("#subtle").val(),
                type: $("#typeWeapon").val(),
                scope: $("#scope").val()
            }
            break;
        case "potion":
            data.objectData = {
                effect: $("#effectPotion").val(),
                expiration: $("#expirationPotion").val(),
                duration: $("#durationPotion").val(),
                type: $("#typePotion").val()
            }
            break;
        case "food":
            data.objectData = {
                duration: $("#durationFood").val(),
                effect: $("#effectFood").val(),
                expiration: $("#expirationFood").val()
            }
            break;
        case "magicStone":
            data.objectData = {
                capacity: $("#capacityMS").val(),
                efficency: $("#efficencyMS").val()
            }
            break;
        default:
            break;
    }

    //RELLENA PRIMALDATA

    if (data["typePrimal"] == 1) {
        data.primalData = {
            strength: $("#strength").val(),
            dexterity: $("#dexterity").val(),
            constitution: $("#constitution").val(),
            inteligence: $("#inteligence").val(),
            wisdom: $("#wisdom").val(),
            charisma: $("#charisma").val(),
            synchronizationCost: $("#synchronizationCost").val(),
            TS: $("#TS").val(),
            max: $("#max").val(),
            min: $("#min").val(),
            Ratk: $("#Ratk").val(),
            Rdamage: $("#Rdamage").val(),
            effect: $("#effect").val(),
            RTSalv: $("#RTSalv").val(),
            initiative: $("#initiative").val(),
            speed: $("#speed").val(),
            deathEnergy: $("#deathEnergy").val(),
            lifeEnergy: $("#lifeEnergy").val(),
            kiMulti: $("#kiMulti").val(),
            manaMulti: $("#manaMulti").val(),
            rAtkSpell: $("#rAtkSpell").val(),
            rDmgSpell: $("#rDmgSpell").val()
        }
    }
    //Envia json

    $.ajax({
        url: './createObject.php',
        data: data,
        type: "POST",
        success: function (respuesta) {
            try {
                respuesta = JSON.parse(respuesta);
                if (respuesta.status) {
                    showSucces(respuesta["mensaje"]);
                    $("#createObjectModal").modal('hide');
                } else {
                    showError(respuesta["mensaje"]);
                }

            } catch{
                showError("Se ha producido un error");
            }
        },
        error: function () {
            console.log("No se ha podido obtener la información");
        }
    });
}


function showError(text) {
    $("#dangerAlert").text(text);
    $("#dangerAlert").removeClass("hide");
    setTimeout(function () { $("#dangerAlert").addClass("hide"); }, 5000);
}


function showSucces(text) {
    $("#succesAlert").text(text);
    $("#succesAlert").removeClass("hide");
    $('#createObjectModal').modal('hide');
    $("input").each(function () {
        $(this).val("")
    });
    $("textarea").each(function () {
        $(this).val("")
    });
    setTimeout(function () { $("#succesAlert").addClass("hide"); }, 5000);
}
