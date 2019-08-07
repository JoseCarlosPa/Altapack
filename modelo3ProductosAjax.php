<?php

include("prodcutos_clases.php");

$_POST['idColor3'] = htmlentities($_POST['idColor3']);
$_POST['idSize3'] = htmlentities($_POST['idSize3']);
$idSize3 = $_POST['idSize3'];
$idColor3 = $_POST['idColor3'];
//------------------------------------------------Segundo producto-----------------------------------------------------
switch ($_POST['idColor3']) {
    case 0:
        $currentProduct3 = $plateada_fuelle;
        $nombreProducto3 = "FUELLE";
        $imagen1_3 = "img/productos/SUP-Negra.gif";
        $imagen2_3 = "img/productos/SUP-Negra.gif";
        $imagen3_3 = "img/productos/SUP-Negra.gif";
        break;
    case 1:
        $currentProduct3 = $Kraft_fuelle;
        $nombreProducto3 = "FUELLE";
        $imagen1_3 = "img/productos/SUP-Blanca2.gif";
        $imagen2_3 = "img/productos/SUP-Blanca2.gif";
        $imagen3_3 = "img/productos/SUP-Blanca2.gif";
        break;

}

echo '
    <!--Titulo de la bolsa-->
    <div class="row">
        <div class="col-sm-12">
            <p class="font_1">'.$nombreProducto3.'</p>
        </div>
    </div>

    <!----------Caracetristicas--------------->

    <div class="row">

        <!--Imagenes laterales-->
        <div class="col-sm-2">
            <div class ="row">
                <img src ="'.$imagen1_3.'" id="imagen1_3" width="50%" height="100%" style="display:none">
            </div>
            <div class ="row">
                <img src ="'.$imagen2_3.'" id="imagen2_3" width="50%" height="100%" style="display:none">
            </div>
            <div class ="row">
                <img src ="'.$imagen3_3.'" id="imagen3_3" width="50%" height="100%" style="display:none">
            </div>
        </div>

        <!--Imagen central-->
        <div class="col-sm-4">
        <img src ="'.$imagen1_3.'" id="imagen1_2" width="80%" height="70%">
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
                    <select class="form-control" id="size3" onchange="actualizarProducto3()">'
    .$currentProduct3->imprmir_tamanios().'
                    </select>
                </div>

                <div class="col-sm-6 select-outline">
                    <select class="form-control" id ="color3" onchange="actualizarProducto3()">
                        <option value="0">Plateado</option>
                        <option value="1">Kraft</option>
                       
                    </select>
                </div>
            </div>

            <!--Descripcio-->
            <div class="row">
                <div class="col-sm-11">
                    <br>
                    <h5>Descripcion</h5>
                    <ul>
                        <li>'.$currentProduct3->imprmir_medidas($idSize3).'</li> <!--Se le debera pasar el atributo dependiendo del tamaño-->
                        <li>'.$currentProduct3->imprmir_capacidad($idSize3).'</li><!--Se le debera pasar por atributo el mismo numero que el de la medida-->
                        <li>'.$currentProduct3->get_laminacion().'</li><!--Este es un atributo unico-->
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
      $("#color3").val('.$idColor3.');
      $("#size3").val('.$idSize3.');
      $("#imagen1_3").fadeIn(1500);
      $("#imagen2_3").fadeIn(1500);
      $("#imagen3_3").fadeIn(1500);
    </script>
';

?>

