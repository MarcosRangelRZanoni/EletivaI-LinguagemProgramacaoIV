<?php

namespace Aluno\Rangel\Controller;

class ExercicioCR1
{
    public static function mostrar()
    {
        require_once("../src/View/exercicio1.php");
    }

    public static function mostrarResultado()
    {
        $preco_pago = $_POST['pago'];
        $v_preco_produto = $_POST['preco'];
        $subtracao = ($preco_pago - $v_preco_produto);
        if ($subtracao == 0) {
            echo "Não retorna troco";
        } else {
            echo "Retornar: $subtracao";
        }

        require_once("../src/View/exercicio1.php");
    }
}
