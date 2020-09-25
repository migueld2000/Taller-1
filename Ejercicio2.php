<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Ejercicio 2</title>
  </head>
  <body>
      <form action="Ejercicio2.php" method="post">
          <div class="container">
            <h3>
              Consulte su IMC
            </h3>
              <div class="row">
                  <div class="col-lg-3">
                    <input type="text" class="form-control" placeholder="Nombre">
                  </div>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" placeholder="Peso" name="peso">
                  </div>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" placeholder="Talla" name="altura">
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
<?php  if(isset($_POST["calcular"])):  ?>

<?php
$peso=$_POST["peso"];
$altura=$_POST["altura"];
$imc;

$imc=$peso/$altura*$altura;

if($imc<18.5)
{
    echo("Su IMC es de:" . $imc."(peso insuficiente)");
}
 elseif ($imc>=18.5 or $imc<=24.9)
 {
    echo("Su IMC es de:" . $imc."(peso normal)");
 }   
 elseif ($imc>=25 or $imc<=26.9) 
 {
     echo("Su IMC es de:" . $imc."(sobrepeso grado 1)");
 }   

 elseif ($imc>=27 or $imc<=29.9)
 {
     echo("Su IMC es de:" . $imc."(sobrepeso grado 2/ preobesidad)");
 }   

 elseif ($imc>=30 or $imc<=34.9)
 {
     echo("Su IMC es de:" . $imc."(obesidad de tipo 1)");
 }   

 elseif ($imc>=35 or $imc<=39.9)
 {
     echo("Su IMC es de:" . $imc."(obesidad de tipo 2)");
 }   

 elseif ($imc>=40 or $imc<=49.9)
 {
     echo("Su IMC es de:" . $imc."(obesidad de tipo 3/mórbida)");
 }   

 elseif ($imc>=50)
 {
     echo("Su IMC es de:" . $imc."(obesidad de tipo 4/extrema)");
 }   
?>

<?php   endif  ?>

