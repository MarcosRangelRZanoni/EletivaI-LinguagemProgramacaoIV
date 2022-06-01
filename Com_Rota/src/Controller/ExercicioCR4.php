<?php

namespace Aluno\Rangel\Controller;

class ExercicioCR3
{
    public static function mostrar()
    {
        require_once("../src/View/exercicio4.php");
    }

    public static function mostrarResultado()
    {
        $valor = $_POST['valor'];
    
    if($valor > 10){
      $result = "O valor é maior que 10.";
    }
    else
    {
      $result = "O valor é menor que 10.";
    }

        require_once("../src/View/resultado.php");
    }
}
