<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Ejercicio5</title>
  </head>
  <body>
    <form action="Ejercicio5.php" method="post">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <h4>Salario</h4><input type="text" class="form-control"name="salario">
        </div>
        <div class="col-lg-3">
          <h4>Horas</h4><input type="text" class="form-control"name="horas">
        </div>
        <div class="col-lg-3">
          <h4>Horas extras</h4><input type="text" class="form-control"name="horasextras">
        </div>
        <div class="col-lg-3">
          <button type="submit"class="btn btn-primary btn-sm-4 mt-3" name="calcular">Calcular</button>
        </div>
      </div>
    </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

<?php if(isset($_POST["calcular"])): ?>

<?php 
    $salario=$_POST["salario"];
    $horas=$_POST["horas"];
    $horasextras=$_POST["horasextras"];
    $calcular;

    $calcular=$salario + 20000;
    echo("El sueldo semanal es de: " . $calcular);
    if($horasextras>=1)
    {
      $calcular=$salario + 25000 * $horasextras;
      echo(", y con las horas extras el sueldo es de: " . $calcular);
    }
    elseif($horasextras=="")
    {
      echo(" No se registran hoaras extras para calcular el sueldo");
    }



?>


<?php endif  ?>