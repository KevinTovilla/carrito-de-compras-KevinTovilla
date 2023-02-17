<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://getbootstrap.com/docs/4.3/components/forms/">
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>


<body>
<div class="container text-center">
    <div class="row justify-content-center my-4  col align-self-center border border-secondary pb-4" style="padding: 50px 0px 0px;">
     <form action="login.php" method="POST">
        <div class="form-group">
        <h2>Iniciar sesion:</h2>
        <br>
            <label for="nickname">Nombre de usuario</label>
            <input type="text" class="form-control" name="nickname" placeholder="introduce tu usuario">

            <label class="pt-3" for="password">Contraseña</label>
            <input type="text" class="form-control" name="password" placeholder="introduce tu contraseña">
        </div>
        <div><input type="submit" value="Iniciar sesion">
        </div>
     </form>
    </div>
</div>
           

<?php
if(isset($_GET["error"])){
    $error = $_GET["error"];
    if($error == "incorrecto"){
        //echo "<h10 class='mb-1 bg-danger text-white'>El usuario o contraseña son incorrectos</h10>";
        echo '<script language="javascript">alert("El usuario o contraseña son incorrectos");window.location.href="index.php"</script>';
    }
    if($error == "campos-vacios"){
        echo '<script language="javascript">alert("Los campos estan vacios");window.location.href="index.php"</script>';
    }
}
?>
     
</body>
</html> 