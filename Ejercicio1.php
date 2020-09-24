<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Ejercicio 1</title>
  </head>
  <body>
    <div class="container">
      <h3>Calculadora</h3>
      <div class="row">
        <div class="col-lg-12">
          <form action="pagina1.php" method="POST">
          <form action="Ejercicio1.php" method="POST">
            <div class="form-group">
              <label for="exampleFormControlInput1">Numero 1</label>
              <input type="text" class="form-control" id="num1" name="num1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Numero 2</label>
                <input type="text" class="form-control" id="num2" name="num2">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Example select</label>
              <select class="form-control" id="operacion" name="operacion">
                <option value="1">Suma</option>
                <option value="2">Resta</option>
                <option value="3">Divicion</option>
                <option value="4">Multiplicacion</option>
              </select>
            </div>
            <button type="submit"class="btn btn-primary mt-5" name="calcular">Calcular</button>
        </form>
        </div>
      </div>
    </div>

    <?php if(isset($_POST["calcular"])): ?>
    
      <?php
      $num1=$_POST["num1"];
      $num2=$_POST["num2"];
      $operacion=$_POST["operacion"];
      $resultado;
     if($operacion==1)
     {
      $resultado=$num1+$num2;
      echo("el resultado es: ".$resultado);
     }
     else if($operacion==2)
     {
      $resultado=$num1-$num2;
      echo("el resultado es: ".$resultado);
     }
     else if($operacion==3)
     {
      $resultado=$num1/$num2;
      echo("el resultado es: ".$resultado);
     }
     else if($operacion==4)
     {
      $resultado=$num1*$num2;
      echo("el resultado es: ".$resultado);
     }
      ?>

    <?php endif?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
