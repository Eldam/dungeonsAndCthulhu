<!-- Modal -->
<link rel="stylesheet" href="../resources/css/core.css">

<div class="modal fade bd-example-modal-xl" id="createObjectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear objeto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="name" class="col-form-label">Nombre</label>
                            <div class="col-12">
                                <input type="text" class="form-control" id="name" placeholder="Nombre objeto">
                                <div class="invalid-feedback" id="nameError">
                                    Campo incorrecto.
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label for="description" class="col-form-label">Descripción</label>
                            <div class="col-12">
                                <textarea rows="5" class="form-control" id="description"> </textarea>
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="price" class="col-form-label">Precio</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="price">
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="typeCoin" class="col-form-label">Tipo de moneda</label>
                            <div class="col-12">
                                <select class="custom-select" id="typeCoin">
                                    <option value="gem">Gema</option>
                                    <option value="Money">Moneda</option>
                                    <option value="">Desconocido</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group col-6">
                            <label for="weight" class="col-form-label">Peso</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="weight">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="volume" class="col-form-label">Volumen</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="volume">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="limitationStrength" class="col-form-label">Limitación de fuerza</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="limitationStrength">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="limitationDex" class="col-form-label">Limitación de destreza</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="limitationDex">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="limitationCons" class="col-form-label">Limitación de constitución</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="limitationCons">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="limitationInt" class="col-form-label">Limitación de inteligencia</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="limitationInt">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="limitationWis" class="col-form-label">Limitación de sabiduría</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="limitationWis">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="image" class="col-form-label">Imagen</label>
                            <div class="col-12">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="fileUpload">
                                    <label class="custom-file-label" id="textFile" for="fileUpload">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="objetOption" class="col-form-label">Tipo de objeto</label>
                        <div class="col-12">
                            <select id="objetOption" class="custom-select">
                                <option value="normal"selected>Corriente</option>
                                <option value="armor">Armadura</option>
                                <option value="accesory">Accesorio</option>
                                <option value="weapon">Arma</option>
                                <option value="potion">Poción</option>
                                <option value="food">Comida</option>
                                <option value="magicStone">Piedra magica</option>
                            </select>
                        </div>
                    </div>

                    <div id="accesory" class="hide objetDiv row">
                        <hr>
                        <div class="form-group col-6">
                            <label for="costAccesory" class="col-form-label">Coste de uso</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="costAccesory">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="durabilityAccesory" class="col-form-label">Durabilidad</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="durabilityAccesory">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="durationAccesory" class="col-form-label">Duración</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="durationAccesory">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="effectAccesory" class="col-form-label">Efecto</label>
                            <div class="col-12">
                                <textarea rows="5" class="form-control" id="effectAccesory"></textarea>
                            </div>
                        </div>
                    </div>
                    <div id="armor" class="hide objetDiv row">
                        <hr>
                        <div class="form-group col-6">
                            <label for="ca" class="col-form-label">Clase de Armadura</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="ca">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="typeArmor" class="col-form-label">Tipo de armadura</label>
                            <div class="col-12">
                                <select class="custom-select" id="typeArmor">
                                    <option value="helmet">Casco</option>
                                    <option value="boots">Botas</option>
                                    <option value="gauntlets">guanteletes</option>
                                    <option value="shoulderPads">Hombreras</option>
                                    <option value="pants">pantalones</option>
                                    <option value="armband">brazalete</option>
                                    <option value="clothes">Ropa generica</option>
                                    <option value="cloak">Capa</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="food" class="hide objetDiv row">
                        <hr>
                        <div class="form-group col-12">
                            <label for="effectFood" class="col-form-label">efecto</label>
                            <div class="col-12">
                                <textarea rows="5" class="form-control" id="effectFood"></textarea>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="expirationFood" class="col-form-label">Caducidad</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="expirationFood">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="durationFood" class="col-form-label">Duración</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="durationFood">
                            </div>
                        </div>
                    </div>
                    <div id="magicStone" class="hide objetDiv row">
                        <hr>
                        <div class="form-group col-6">
                            <label for="capacityMS" class="col-form-label">Capacidad</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="capacityMS">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="efficencyMS" class="col-form-label">eficiencia</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="efficencyMS">
                            </div>
                        </div>
                    </div>
                    <div id="potion" class="hide objetDiv row">
                        <hr>
                        <div class="form-group col-6">
                            <label for="effectPotion" class="col-form-label">efecto</label>
                            <div class="col-12">
                                <textarea rows="5" class="form-control" id="effectPotion"></textarea>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="expirationPotion" class="col-form-label">Caducidad</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="expirationPotion">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="durationPotion" class="col-form-label">Duración</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="durationPotion">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="typePotion" class="col-form-label">Tipo de poción</label>
                            <div class="col-12">
                                <select class="custom-select" id="typePotion">
                                    <option value="other">Otros</option>
                                    <option value="heal">Curación</option>
                                    <option value="posion">Veneno</option>
                                    <option value="restoration">Recuperación</option>
                                    <option value="effect">efecto</option>
                                    <option value="hidden">Ocultación</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="weapon" class="row hide objetDiv">
                        <hr>
                        <div class="form-group col-6">
                            <label for="damage" class="col-form-label">Daño</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="damage">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="critical" class="col-form-label">Crítico</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="critical">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="hand" class="col-form-label">Manos necesarias</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="hand">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="subtle" class="col-form-label">Sutil</label>
                            <div class="col-12">
                                <select class="custom-select" id="subtle">
                                    <option value="no">No</option>
                                    <option value="yes">Si</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="typeWeapon" class="col-form-label">Tipo de arma</label>
                            <div class="col-12">
                                <select class="custom-select" id="typeWeapon">
                                    <option value="distance">Distancia</option>
                                    <option value="overwhelming">Contundente</option>
                                    <option value="edge">filo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="scope" class=" col-form-label">Alcance</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="scope">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="primalSelect" class=" col-form-label">Primigenio</label>
                        <div class="col-12">
                            <select id="primalSelect">
                                <option value="0">No</option>
                                <option value="1">Si</option>
                            </select>
                        </div>
                    </div>

                    <div id="primalDiv" class="row hide">
                        <hr>
                        <div class="col-4">
                            <label for="strength" class="col-form-label">Fuerza</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="strength">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="dexterity" class="col-form-label">Destreza</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="dexterity">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="constitution" class="col-form-label">Constitución</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="constitution">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="inteligence" class="col-form-label">Inteligencia</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="inteligence">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="wisdom" class="col-form-label">Sabiduría</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="wisdom">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="charisma" class="col-form-label">Carisma</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="charisma">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="synchronizationCost" class="col-form-label">Coste de sincronización</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="synchronizationCost">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="TS" class="col-form-label">Tirada de Salvación al sincronizarse</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="TS">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="max" class="col-form-label">Dado en caso de fallar TS</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="max">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="min" class="col-form-label">Dado en caso de superar TS</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="min">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="Ratk" class="col-form-label">Rango de ataque</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="Ratk">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="Rdamage" class="col-form-label">Rango daño</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="Rdamage">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="Rheal" class="col-form-label">Rango de curacion</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="rheal">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="effect" class="col-form-label">Efecto</label>
                            <div class="col-12">
                                <textarea type="number" class="form-control" id="effect"></textarea>
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="RTSalv" class="col-form-label">Rango de tirada de salvación</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="RTSalv">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="initiative" class="col-form-label">Iniciativa</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="initiative">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="speed" class="col-form-label">Velocidad</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="speed">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="deathEnergy" class="col-form-label">Energía de muerte</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="deathEnergy">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="lifeEnergy" class="col-form-label">Energía de vida</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="lifeEnergy">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="kiMulti" class="col-form-label">Multiplicador de Ki</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="kiMulti">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="manaMulti" class="col-form-label">Multiplicador de maná</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="manaMulti">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="rAtkSpell" class="col-form-label">Rango ataque de hechizo</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="rAtkSpell">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="rDmgSpell" class="col-form-label">Rango daño de hechizo</label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="rDmgSpell">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="createObject">Crear Objeto</button>
            </div>
        </div>
    </div>
</div>