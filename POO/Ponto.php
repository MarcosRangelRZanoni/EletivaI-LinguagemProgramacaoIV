<?php

class Ponto{

    private $x;
    private $y;
    private static $contador = 0;
    
    public function calcularDistancia(Ponto $p){
        $valorX = pow(($p->getX() - $this->x), 2);
        $valorY = pow(($p->getY() - $this->y), 2);

        return sqrt($valorX + $valorY);

    }

    public function calcular($x2, $y2){
        $valorX = pow(($x2 - $this->x), 2);
        $valorY = pow(($y2 - $this->y), 2);

        return sqrt($valorX + $valorY);

    }

    public function trazerParametro($x, $x2, $y, $y2){
        $valorX = pow(($x2 - $x), 2);
        $valorY = pow(($y2 - $y), 2);

        return sqrt($valorX + $valorY);
    }
    
    public function __construct($x, $y)
    {
        $this->setX($x);
        $this->setY($y);
        self::setContador();
    }

    private static function setContador(){
        self::$contador++;
    }

    public static function getContador(){
        return self::$contador;
    }

    public function getX(){
        return $this->x;
    }

    public function setX($x){
        $this->x = $x;
    }

    public function getY(){
        return $this->y;
    }

    public function setY($y){
        $this->y = $y;
    }



}

?>