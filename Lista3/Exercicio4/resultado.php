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
  function imc($altura, $peso)
  {

    $imc = $peso / ($altura * $altura);
    $format = number_format($imc, 2, '.', '');
    echo "$format";
    echo "<br>";
  }

  function classificacao($altura, $peso)
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

  $altura = $_POST["altura"];
  $peso = $_POST["peso"];


  ?>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">IMC</th>
        <th scope="col">CLASSIFICAÇÃO</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">ABAIXO DE 18,5</th>
        <td>ABAIXO DO PESO</td>
      </tr>
      <tr>
        <th scope="row">ENTRE 18,6 E 24,9</th>
        <td>PESO IDEAL PARABÉNS!!!</td>
      </tr>
      <tr>
        <th scope="row">ENTRE 25 E 29,9</th>
        <td colspan="2">LEVEMENTE ACIMA DO PESO</td>
      </tr>
      <tr>
        <th scope="row">ENTRE 30 E 34,9</th>
        <td colspan="2">OBESIDADE GRAU I</td>
      </tr>
      <tr>
        <th scope="row">ENTRE 35 E 39,9</th>
        <td colspan="2">OBESIDADE GRAU II (SEVERA)</td>
      </tr>
      <tr>
        <th scope="row">ACIMA DE 40</th>
        <td colspan="2">OBESIDADE GRAU III (MÓRBIDA)</td>
      </tr>
      <tr class="table-dark">
        <th scope="row">SEU IMC <?= imc($altura, $peso) ?></th>
        <td colspan="2"> <?= classificacao($altura, $peso) ?></td>
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