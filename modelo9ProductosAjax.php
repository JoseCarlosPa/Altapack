<?php

include("prodcutos_clases.php");

$_POST['idColor9'] = htmlentities($_POST['idColor9']);
$_POST['idSize9'] = htmlentities($_POST['idSize9']);
$idSize9 = $_POST['idSize9'];
$idColor9 = $_POST['idColor9'];

switch ($_POST['idColor9']) {
    case 0:
        $currentProduct9 = $bolsa_SPV;
        $nombreProducto9 = "Standup Pouch con Ventana";
        $imagen1_9 = "img/productos/SUP-Negra.gif";
        $imagen2_9 = "img/productos/SUP-Negra.gif";
        $imagen3_9 = "img/productos/SUP-Negra.gif";
        break;

}

echo '
    <!--Titulo de la bolsa-->
    <div class="row">
        <div class="col-sm-12">
            <p class="font_1">'.$nombreProducto9.'</p>
        </div>
    </div>

    <!----------Caracetristicas--------------->

    <div class="row">

        <!--Imagenes laterales-->
        <div class="col-sm-2">
            <div class ="row">
                <img src ="'.$imagen1_9.'" id="imagen1_9" width="50%" height="100%" style="display:none">
            </div>
            <div class ="row">
                <img src ="'.$imagen2_9.'" id="imagen2_9" width="50%" height="100%" style="display:none">
            </div>
            <div class ="row">
                <img src ="'.$imagen3_9.'" id="imagen3_9" width="50%" height="100%" style="display:none">
            </div>
        </div>

        <!--Imagen central-->
        <div class="col-sm-4">
        <img src ="'.$imagen1_9.'" id="imagen1_9" width="80%" height="70%">
        </div>

        <!--Tamaño y descripcion-->
        <div class="col-sm-6 ">

            <!--Titulo-->
            <div class="row">

                <div class="col-sm-6">
                    <h5>Tamaños Disponibles</h5>
                </div>
                <div class="col-sm-6">
                    <h5>Colores</h5>
                </div>
            </div>

            <!--Select-->
            <div class="row">
                <div class="col-sm-6 select-outline">
                    <select class="form-control" id="size9" onchange="actualizarProducto9()">'
    .$currentProduct9->imprmir_tamanios().'
                    </select>
                </div>

                <div class="col-sm-6 select-outline">
                    <select class="form-control" id ="color9" onchange="actualizarProducto9()">
                        <option value="0">-</option>
                        
                    </select>
                </div>
            </div>

            <!--Descripcio-->
            <div class="row">
                <div class="col-sm-11">
                    <br>
                    <h5>Descripcion</h5>
                    <ul>
                        <li>'.$currentProduct9->imprmir_medidas($idSize9).'</li> <!--Se le debera pasar el atributo dependiendo del tamaño-->
                        <li>'.$currentProduct9->imprmir_capacidad($idSize9).'</li><!--Se le debera pasar por atributo el mismo numero que el de la medida-->
                        <li>'.$currentProduct9->get_laminacion().'</li><!--Este es un atributo unico-->
                    </ul>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-11 text-right">
                    <p>
                        <button class="boton_publicidad">Mas informacion</button>
                    </p>
                </div>
            </div>

        </div>

    </div>
    <!---------- FIn Caracetristicas----------------->

    <script>
      $("#color9").val('.$idColor9.');
      $("#size9").val('.$idSize9.');
      $("#imagen1_9").fadeIn(1500);
      $("#imagen2_9").fadeIn(1500);
      $("#imagen3_9").fadeIn(1500);
    </script>
';


?>
