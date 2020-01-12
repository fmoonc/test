<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>
<body>
<div align="center">
        <h1>INICIO</h1>
       <?php
       if (isset($_GET['confirmacion'])) {
        $confirmacion=$_GET['confirmacion'];
        if ($confirmacion == "exito") {
        echo '<strong style="color:green">Usuario registrado</strong>';    
    }
}
       ?>
    </div>
    <hr>
    <div align="center">
            <a href="login.php" class="btn btn-success">login</a>
            <a href="registro.php" class="btn btn-success">registro</a>
    </div>
</body>
</html>