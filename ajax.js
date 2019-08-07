

function actualizarProducto(){
  var select = document.getElementById("color");
  var idColor = select.options[select.selectedIndex].value;
  var select2 = document.getElementById("size");
  var idSize = select2.options[select2.selectedIndex].value;
         $.post('modeloProductosAjax.php', { idColor : idColor, idSize : idSize } )
        .done(function(data){
            $('#caracteristicasAjax').html(data);
            //restart Bootstrap features
        });
    }
