<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="libs/bootstrap-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mycss.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body style=" background: linear-gradient(90deg, #00bfac ,#008073);">
    <div class="container">
        <div class="row mt-5"></div>
        <div class="row mt-5">
            <div class="modal-content" style="border-radius: 10px;">
                <div class="modal-header">
                    <div class="modal-body">
                        <h2 style="font-size: 1.2em; text-align: center;">Registro de usuarios de alturas</h2>
                        <img style="position: relative; left: 93px; width: 250px;" src="imgs/profesor.png" alt="">
                    </div>
                    <div class="modal-body">
                        <form action="index.php?controller=login&action=validar" method="post">
                            <h2 style="text-align: center">Iniciar Sesión</h2>
                            <br>
                            <div>
                                <h1 style="font-size: 1.0em; text-align: center; color: #008073"> <?php echo (isset($errores) && $errores != "") ? $errores : "";?></h1>
                            </div>
                            <br>
                            <div class="col-12 form-group">
                                <input style="background: #EDEDF0; width: 380px; position: relative; left: 95px; border-radius: 18px;" type="text" name="txtEmail" class="form-control" placeholder="Correo Electronico">
                            </div>
                            <div class="col-12 form-group">
                                <input style="background: #EDEDF0; width: 380px; position: relative; left: 95px; border-radius: 18px;" type="text" name="txtPassword" class="form-control" placeholder="Contraseña">
                            </div>
                            <div class="col-12 form-group">
                                <input style="border-radius: 18px; width: 120px; position: relative; left: 225px;" type="submit" value="Ingresar" class="form-control btn btn-info" >
                            </div>
                            <h2 style="text-align: center; font-size: 0.7em"><a style="color: #008073" href="">Cambiar Contraseña</a>  / <a style="color: #008073" href="">¿Olvidaste tu contraseña?</a></h2>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>