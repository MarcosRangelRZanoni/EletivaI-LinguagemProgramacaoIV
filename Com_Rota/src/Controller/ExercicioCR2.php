<?php

namespace Aluno\Rangel\Controller;

class ExercicioCR2
{
    public static function mostrar()
    {
        require_once("../src/View/exercicio2.php");
    }

    public static function mostrarResultado()
    {
        $quilo = $_POST['quilo'];
        $qtd_quilo = $_POST['qtd_quilos'];

        $valor_final = $quilo * $qtd_quilo;

        $result = "O valor a ser pago é: $valor_final";

        require_once("../src/View/resultado.php");
    }
}
