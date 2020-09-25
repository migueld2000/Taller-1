<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Ejercicio 3</title>
  </head>
  <body>
    <form action="Ejercicio3.php" method="post">
        <div class="container">
          <h3>
          Compre de zapatos      
        </h3>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Marca de zapatos</label>
                        <select class="form-control" name="marca" id="exampleFormControlSelect1">
                          <option>XTI</option>
                          <option>Nike</option>
                          <option>Adidas</option>
                          <option>Reebok</option>
                          <option>Bearcliff</option>
                        </select>
                      </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Cantidad</label>
                        <select class="form-control" name="cantidad" id="exampleFormControlSelect1">
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                        </select>
                      </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Precio</label>
                        <select class="form-control" name="precio" id="exampleFormControlSelect1">
                          <option>159900</option>
                          <option>180000</option>
                          <option>160000</option>
                          <option>130000</option>
                          <option>90000</option>
                        </select>
                      </div>
                </div>
                <div class="col-lg-3">
                    <button type="submit"class="btn btn-primary" name="calcular">Calcular</button>
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

$marca=$_POST["marca"];
$cantidad=$_POST["cantidad"];
$precio=$_POST["precio"];
$descuento;

if($cantidad==3)
{
    $descuento=(10*$precio)/100;
    echo("El descuento es de: ".$descuento);
}
elseif($cantidad>3 or $cantidad<=8)
{
    $descuento=(20*$precio)/100;
    echo("El descuento es de: ".$descuento);
}
elseif($cantidad>8)
{
    $descuento=(50*$precio)/100;
    echo("El descuento es de: ".$descuento);
}


?>


<?php endif  ?>
