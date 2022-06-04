<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Exercício 1</title>
</head>

<body class="bg-secondary">
  <?php
  require_once('barra_navegacao.php');
  ?>
  <div class="container">

    <div class="row">
      <div class="col-2"></div>
      <div class="col-8 mt-5 p-5 bg-light border border-dark border-2 rounded shadow-lg">
        <h1>Exercício 1</h1>
        <div class="row">
          <div class="col">
            <form method="post" action="/ex1-resultado">
              <label from="pago" class="label-control">Informe o valor pago: </label>
              <input type="number" name="pago" id="pago" class="form-control" />
          </div>
          <div class="col">
            <label from="preco" class="label-control">Informe o preço do produto: </label>
            <input type="number" name="preco" id="preco" class="form-control" />
          </div>

        </div>
        <div class="row mt-5">
          <div class="col">
            <button type="submit" class="btn btn-danger">Enviar</button>
            </form>
          </div>
        </div>
      
      

      </div>
      <div class="col-2"></div>
    </div>


  </div>
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