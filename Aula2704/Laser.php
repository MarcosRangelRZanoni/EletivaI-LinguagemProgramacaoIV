<?php 

class Matricial extends Impressora {

    private $frenteeVerso;
    private $capacidadedeToner;

    public function __construct($marca, $modelo, $frenteeVerso, $capacidadedeToner, $colorida, $imprimeVias, $peso)
    {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setNumAgulas($numAgulhas);
        $this->setColorida($colorida);
        $this->setImprimeVias($imprimeVias);
        $this->setPeso($peso);

    }

    public function getFrenteeVerso(){
        return $this->frenteeVerso;
    }

    public function setFrenteeVerso($frenteeVerso){
        $this->frenteeVerso = $frenteeVerso;
    }
    
    public function getCapacidadeToner(){
        return $this->capacidadeToner;
    }
    public function setCapacidadeToner($capacidadedeToner){
        $this->capacidadedeToner = $capacidadedeToner;
    }
}

?>