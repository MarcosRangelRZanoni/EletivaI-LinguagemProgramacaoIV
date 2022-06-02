<?php

namespace Aluno\Rangel\Controller;

class ExercicioCR5
{
    public static function mostrar()
    {
        require_once("../src/View/exercicio5.php");
    }

    public static function mostrarResultado()
    {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $nota4 = $_POST['nota4'];

        $media = $nota1 + $nota2 + $nota3 + $nota4 / 4;

        if ($media >= 7.0) {
            $result = "Aprovado!";
        } else {
            $result = "Reprovado!";
        }

        require_once("../src/View/resultado.php");
    }
}
