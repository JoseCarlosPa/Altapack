<?php
class Color_objeto{

    //Variables tipo string de la clase bolsa
    private $color;
    private $tamanio;
    private $medidas;
    private $capacidad;
    private $laminacion;
    private $imagen;

    //Construtor de la clase bolsa
    public function __construct( $color, $tamanio, $medidas,$capacidad,$laminacion,$imagen) {
        $this->color = $color;
        $this->tamanio = $tamanio;
        $this->medidas = $medidas;
        $this->capacidad = $capacidad;
        $this->laminacion = $laminacion;
        $this->imagen = $imagen;

    }

    //Geters y seters de Clase bolsa
    public function get_color(){
        return $this->color;
    }
    public function set_color($color){
        $this->color = $color;
    }

    public function get_tamanio(){
        return $this->tamanio;
    }
    public function set_tamanio($tamanio){
        $this->tamanio = $tamanio;
    }

    public function get_medidas(){
        return $this->medidas;
    }
    public function set_medidas($medidas){
        $this->medidas = $medidas;
    }

    public function get_capacidad(){
        return $this->capacidad;
    }
    public function set_capacidad($capacidad){
        $this->capacidad = $capacidad;
    }

    public function get_laminacion(){
        return $this->laminacion;
    }
    public function set_laminiacion($laminacion){
        $this->capacidad = $laminacion;
    }

    public function get_imagen(){
        return $this->imagen;
    }
    public function set_imagen($imagen){
        $this->imagen = $imagen;
    }


}

$negro_standup = new Color_objeto('Negro',['Chicho,Mediano'],['150mm x 220mm + 90mm de fondo','200mm x 260mm + 90mm de fondo']
    ,['250 gr.','500 gr.'],'BOPPMAT + MPET + LLDPE','1.png');

$negro_Blanco = new Color_objeto('Blanco',['Chicho,Mediano'],['150mm x 220mm + 90mm de fondo','200mm x 260mm + 90mm de fondo']
    ,['250 gr.','500 gr.'],'BOPPMAT + MPET + LLDPE','2.png');

?>
