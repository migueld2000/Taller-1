<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Ejercicio 4</title>
  </head>
  <body>

    <form action="Ejercicio4.php" method="post">
      <div class="container">
          <h3>Sucursal A</h3>
          <div class="row">
              <div class="col-lg-3">
                 <h4>Nombre</h4><input type="text" class="form-control" placeholder="Nombre" name="nombre1">
             </div>
             <div class="col-lg-2">
                 <h4>Telefono</h4><input type="text" class="form-control" placeholder="Telefono" name="telefono1">
             </div>
             <div class="col-lg-2">
                 <h4>Direccion</h4><input type="text" class="form-control" placeholder="Direccion" name="direccion1">
             </div>
             <div class="col-lg-3">
                 <h4>Salario</h4><input type="text" class="form-control" placeholder="Salario" name="salario1">
             </div>
             <div class="w-100"></div>
             <div class="col-lg-3">
                 <h4>Nombre</h4><input type="text" class="form-control" placeholder="Nombre" name="nombre2">
             </div>
             <div class="col-lg-2">
                 <h4>Telefono</h4><input type="text" class="form-control" placeholder="Telefono" name="telefono2">
             </div>
             <div class="col-lg-2">
                 <h4>Direccion</h4><input type="text" class="form-control" placeholder="Direccion" name="direccion2">
             </div>
             <div class="col-lg-3">
                 <h4>Salario</h4><input type="text" class="form-control" placeholder="Salario" name="salario2">
             </div>
             <div class="w-100"></div>
             <div class="col-lg-3">
                 <h4>Nombre</h4><input type="text" class="form-control" placeholder="Nombre" name="nombre3">
             </div>
             <div class="col-lg-2">
                 <h4>Telefono</h4><input type="text" class="form-control" placeholder="Telefono" name="telefono3">
             </div>
             <div class="col-lg-2">
                 <h4>Direccion</h4><input type="text" class="form-control" placeholder="Direccion" name="direccion3">
             </div>
             <div class="col-lg-3">
                 <h4>Salario</h4><input type="text" class="form-control" placeholder="Salario" name="salario3">
             </div>
             <div class="w-100"></div>
             <div class="col-lg-3">
                 <h4>Nombre</h4><input type="text" class="form-control" placeholder="Nombre" name="nombre4">
             </div>
             <div class="col-lg-2">
                 <h4>Telefono</h4><input type="text" class="form-control" placeholder="Telefono" name="telefono4">
             </div>
             <div class="col-lg-2">
                 <h4>Direccion</h4><input type="text" class="form-control" placeholder="Direccion" name="direccion4">
             </div>
             <div class="col-lg-3">
                 <h4>Salario</h4><input type="text" class="form-control" placeholder="Salario" name="salario4">
             </div>
             <div class="w-100"></div>
             <div class="col-lg-3">
                 <h4>Nombre</h4><input type="text" class="form-control" placeholder="Nombre" name="nombre5">
             </div>
             <div class="col-lg-2">
                 <h4>Telefono</h4><input type="text" class="form-control" placeholder="Telefono" name="telefono5">
             </div>
             <div class="col-lg-2">
                 <h4>Direccion</h4><input type="text" class="form-control" placeholder="Direccion" name="direccion5">
             </div>
             <div class="col-lg-3">
                 <h4>Salario</h4><input type="text" class="form-control" placeholder="Salario" name="salario5">
             </div>
             <div class="w-100"></div>
             <div class="col-lg-">
                 <button type="submit"class="btn btn-primary mt-5" name="calcular">Calcular</button>
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

    $SucursalB=40000000;
    $SucursalC=32000000;

    $nombre1=$_POST["nombre1"];
    $telefono1=$_POST["telefono1"];
    $direccion1=$_POST["direccion1"];
    $salario1=$_POST["salario1"];

    $nombre2=$_POST["nombre2"];
    $telefono2=$_POST["telefono2"];
    $direccion2=$_POST["direccion2"];
    $salario2=$_POST["salario2"];

    $nombre3=$_POST["nombre3"];
    $telefono3=$_POST["telefono3"];
    $direccion3=$_POST["direccion3"];
    $salario3=$_POST["salario3"];

    $nombre4=$_POST["nombre4"];
    $telefono4=$_POST["telefono4"];
    $direccion4=$_POST["direccion4"];
    $salario4=$_POST["salario4"];

    $nombre5=$_POST["nombre5"];
    $telefono5=$_POST["telefono5"];
    $direccion5=$_POST["direccion5"];
    $salario5=$_POST["salario5"];

    $sumatoriaSalarios;

    $sumatoriaSalarios=$salario1 + $salario2 + $salario3 + $salario4 + $salario5;

    echo("la suma total de los salarios de la sucursal A es de: ".$sumatoriaSalarios);
    echo("<br>");
    
    if($sumatoriaSalarios>$SucursalB or $sumatoriaSalarios>$SucursalC)
    {
        echo("La sucursal A posee la mejor sumatoria de salarios");
        echo("<br>");
        echo($nombre1.$telefono1.$direccion1.$salario1);
        echo("<br>");
        echo($nombre2.$telefono2.$direccion2.$salario2);
        echo("<br>");
        echo($nombre3.$telefono3.$direccion3.$salario3);
        echo("<br>");
        echo($nombre4.$telefono4.$direccion4.$salario4);
        echo("<br>");
        echo($nombre5.$telefono5.$direccion5.$salario5);
        echo("<br>");
    }
    elseif($sumatoriaSalarios<$SucursalB or $sumatoriaSalarios>$SucursalC)
    {
        echo("La sucursal A quedo de segundo lugar");
        echo("<br>");
        echo($nombre1.$telefono1.$direccion1.$salario1);
        echo("<br>");
        echo($nombre2.$telefono2.$direccion2.$salario2);
        echo("<br>");
        echo($nombre3.$telefono3.$direccion3.$salario3);
        echo("<br>");
        echo($nombre4.$telefono4.$direccion4.$salario4);
        echo("<br>");
        echo($nombre5.$telefono5.$direccion5.$salario5);
        echo("<br>");
    }
    else($sumatoriaSalarios<$SucursalB or $sumatoriaSalarios<$SucursalC);
    {
        echo("La sucursal A quedo de terser lugar");
        echo("<br>");
        echo($nombre1.$telefono1.$direccion1.$salario1);
        echo("<br>");
        echo($nombre2.$telefono2.$direccion2.$salario2);
        echo("<br>");
        echo($nombre3.$telefono3.$direccion3.$salario3);
        echo("<br>");
        echo($nombre4.$telefono4.$direccion4.$salario4);
        echo("<br>");
        echo($nombre5.$telefono5.$direccion5.$salario5);
        echo("<br>");
    }
?>


<?php endif  ?>