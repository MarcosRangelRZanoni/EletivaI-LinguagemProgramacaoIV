<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Exercício 4</title>
</head>

<body class="container">
  <?php
  echo "<h1>Resultado</h1>";
  $altura = $_POST["altura"];
  $peso = $_POST["peso"];
  
  function IMC($altura, $peso)
  {

    $imc = $peso / ($altura * $altura);
    $format = number_format($imc, 2, '.', '');
    echo "$format";
    echo "<br>";
  }

  function Classificacao($altura, $peso)
  {
    $imc = $peso / ($altura * $altura);
    if ($imc < 18.5)
      echo "ABAIXO DO PESO";

    if ($imc >= 18.6 && $imc <= 24.9)
      echo "PESO IDEAL PARABENS!!";

    if ($imc >= 25 && $imc <= 29.9)
      echo "LEVEMENTE ACIMA DO PESO";

    if ($imc >= 30 && $imc <= 34.9)
      echo "OBESIDADE GRAU 1";

    if ($imc >= 35 && $imc <= 39.9)
      echo "OBESIDADE GRAU 2 (SEVERA)";

    if ($imc >= 40)
      echo "OBESIDADE 33 (MÓRBIDA)";
  }



  ?>

  <table class="table">
    <thead>
      <tr class="table-dark">
        <th scope="col">IMC</th>
        <th scope="col">CLASSIFICAÇÃO</th>
      </tr>
    </thead>
    <tbody>
      <tr >
        <th class="table-dark" scope="row">Abaixo de 18,5</th>
        <td>Abaixo Do Peso</td>
      </tr>
      <tr>
        <th class="table-dark" scope="row">Entre 18,6 e 24,9</th>
        <td>Peso Ideal Parabéns</td>
      </tr>
      <tr>
        <th class="table-dark" scope="row">Entre 25 e 29,9</th>
        <td colspan="2">Levemente Acima Do Peso</td>
      </tr>
      <tr>
        <th class="table-dark" scope="row">Entre 30 e 34,9</th>
        <td colspan="2">Obesidade Grau I</td>
      </tr>
      <tr>
        <th class="table-dark" scope="row">Entre 35 e 39,9</th>
        <td colspan="2">Obesidade Grau II (SEVERA)</td>
      </tr>
      <tr>
        <th class="table-dark" scope="row">Acima De 40</th>
        <td colspan="2">Obesidade Grau III (MÓRBIDA)</td>
      </tr>
      <tr class="table-danger">
        <th scope="row">Seu IMC: <?= IMC($altura, $peso) ?></th>
        <td colspan="2"> <?= Classificacao($altura, $peso) ?></td>
      </tr>
    </tbody>
  </table>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>