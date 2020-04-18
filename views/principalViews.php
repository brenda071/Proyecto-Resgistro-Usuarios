<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="libs/bootstrap-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/menu.css">
</head>
<body>
    <style>
        h3{
    text-align: center;
    color: white;
}
.menu{
    background: #00bfac;
    list-style: none; 
    margin: 2px auto;
    line-height: 42px;
    position: fixed;
    left: 0px;
    padding-left: 0;
    width: 15em;
    top: -20px;
    height: 130%;
}
.menu a.h{
    padding-left: 42px;
    color: white;
    text-decoration: none;
    display: block;
    width: 100%;
    font-family: Arial;
    text-transform: uppercase;
}            

.menu a.j{
    color: white;
    text-decoration: none;
    display: block;
    width: 100%;
    font-family: Arial;
    text-transform: uppercase;
} 
.menu a.h1{ background: url(imgs/inicio3.png) no-repeat left top; }
.menu a.h2{ background: url(imgs/inscripciones3.png) no-repeat left top; }
.menu a.h3{ background: url(imgs/usuario3.png) no-repeat left top; }
.menu a.h4{ background: url(imgs/aprendiz3.png) no-repeat left top; }
.menu a.h5{ background: url(imgs/convocatoria3.png) no-repeat left top; }
.menu a.h6{ background: url(imgs/reportes3.png) no-repeat left top; }
.menu a.h7{ background: url(imgs/programa3.png) no-repeat left top; }
.menu a.h8{ background: url(imgs/configuracion3.png) no-repeat left top; }

.menu a:hover{
    margin-left: 5px;
    transition: .5s;
}
.menu li{
    box-shadow: 3px 0 rgba(255,255,255,.2) inset;
    margin-bottom: 5px;
    padding-left: 1.5em;
}
.menu li:hover{
    box-shadow: 290px 0 rgba(255,255,255,.2) inset; 
    transition: .5s;
}
    
ul#ins2 { display: none; }
ul#ins3 { display: none; }
ul#ins4 { display: none; }
ul#ins5 { display: none; }
ul#ins6 { display: none; }
ul#ins7 { display: none; }
ul#ins8 { display: none; }

ul#ins2 li { padding-left: 20px; color: white; text-decoration: none; display: block; font-size: 0.8em; width: 100%; font-family: Arial; text-transform: uppercase; }
ul#ins3 li { padding-left: 20px; color: white; text-decoration: none; display: block; font-size: 0.8em; width: 100%; font-family: Arial; text-transform: uppercase; }
ul#ins4 li { padding-left: 20px; color: white; text-decoration: none; display: block; font-size: 0.8em; width: 100%; font-family: Arial; text-transform: uppercase; }
ul#ins5 li { padding-left: 20px; color: white; text-decoration: none; display: block; font-size: 0.8em; width: 100%; font-family: Arial; text-transform: uppercase; }
ul#ins6 li { padding-left: 20px; color: white; text-decoration: none; display: block; font-size: 0.8em; width: 100%; font-family: Arial; text-transform: uppercase; }
ul#ins7 li { padding-left: 20px; color: white; text-decoration: none; display: block; font-size: 0.8em; width: 100%; font-family: Arial; text-transform: uppercase; }
ul#ins8 li { padding-left: 20px; color: white; text-decoration: none; display: block; font-size: 0.8em; width: 100%; font-family: Arial; text-transform: uppercase; }

    </style>    
    <script type="text/javascript" src="js/mostrar.js"></script>
        <ul class="menu">
            <h3><img src="imgs/empleado3.png"> FormUp</h3>
            <li onclick="Mostrar()"><a class="h h1"href="#">Inicio</a></li>
            <li onclick="Mostrar2()"><a class="h h2"href="#">Inscripciones</a>
                <ul id="ins2" >
                    <li><a class="j" href="#">Aceptadas</a> </li>
                    <li><a class="j" href="#">Espera</a> </li>
                    <li><a class="j" href="#">No evaluadas</a> </li>
                    <li><a class="j" href="#">Documentos Pendientes</a> </li>
                </ul>
            </li>
            <li onclick="Mostrar3()"><a class="h h3"href="#">Usuarios</a>
                <ul id="ins3">
                    <li><a class="j" href="#">Aprendiz</a> </li>
                    <li><a class="j" href="#">Usuario Persona</a> </li>
                    <li><a class="j" href="#">Usuario Empresa</a> </li>
                </ul>
            </li>
            <li onclick="Mostrar4()"><a class="h h4"href="#">Aprendices</a>
                <ul id="ins4">
                    <li><a class="j" href="#">Certificados</a> </li>
                    <li><a class="j" href="#">Activos</a> </li>
                    <li><a class="j" href="#">Anulado</a> </li>
                    <li><a class="j" href="#">Todas</a> </li>
                </ul>
            </li>
            <li onclick="Mostrar5()"><a class="h h5"href="#">Convocatorias</a>
                <ul id="ins5">
                    <li><a class="j" href="#">Nivel Reclutamientos</a> </li>
                    <li><a class="j" href="#">Nivel Administrativo</a> </li>
                    <li><a class="j" href="#">Nivel Cordinador</a> </li>
                </ul>
            </li>  
            <li onclick="Mostrar6()"><a class="h h6"href="#">Resportes y Observaciones</a>
                <ul id="ins6">
                    <li><a class="j" href="#">Documentos</a> </li>
                    <li><a class="j" href="#">Asistencias</a> </li>
                    <li><a class="j" href="#">Estado Aprendiz</a> </li>
                    <li><a class="j" href="#">Usuarios</a> </li>
                </ul>
            </li>
            <li onclick="Mostrar7()"><a class="h h7"href="#">Programa de Formacion</a>
                <ul id="ins7">
                    <li><a class="j" href="#">Activos</a> </li>
                    <li><a class="j" href="#">Finalizados</a> </li>
                </ul>
            </li>
            <li onclick="Mostrar8()"><a class="h h8"href="#">Configuraciones</a>
                <ul id="ins8">
                    <li><a class="j" href="#">Mi Perfil</a></li>
                </ul>
            </li>
        </ul>
        <div style="box-shadow: 10px 10px 35px -20px #333; width: 1100px; position: relative; left: 240px; height: 50px" class="card">
            <div class="card-body">
                <h2 style="position:absolute; left: 700px; top: 0px; color: #9D9D9D; font-size: 1.0em"><img style="position:absolute; left: -35px; top:-5px"src="imgs/pregunta.png">Ayuda</h2>
                <h2 style="position:absolute; left: 850px; top: 0px; color: #9D9D9D; font-size: 1.0em"><img style="position:absolute; left: -35px; top:-5px"src="imgs/notificacion.png">Notificaciones</h2>
                <a style="position:absolute; left: 1020px; top: 14px; color: #9D9D9D; font-size: 1.0em" href="index.php?controller=Login&action=logout">
                    Salir <img style="position:absolute; left: 35px; top: -5px"src="imgs/profesor2.png">
                </a>
            </div>
        </div>
        <div style="width: 1100px; position: relative; top: 20px; left: 240px; height: 710px" class="card">
            <div class="card-body">
                <div class="card" style="border-radius: 18px; border: 1px solid gray; background: white; width: 400px; position: relative; top: 20px; left: 40px; height: 300px">
                    <div class="card-body">
                        <h1 style="color: #008075; text-align: center; font-size: 1.2em">Usuario Persona</h1>
                        <hr>
                        <br>
                        <a style="position: absolute; left: 110px; border-radius: 8px; background-color: #008073; border: none; color: white; padding: 10px 22px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;"href="#">Crear</a>
                        <a style="position: absolute; left: 195px; border-radius: 8px; background-color: #00BFAC; border: none; color: white; padding: 10px 22px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;"href="#">Ver</a>
                        <h2 style="position: absolute; top: 120px; left: 50px; color: #00bfac; font-size: 1.1em">Agrega o vuelve <strong>Aprendices</strong> a los <strong>Usuarios</strong></h2>
                        <h2 style="position: absolute; top: 150px; left: 40px; color: #00bfac; font-size: 1.1em">Puedes ver a todos los usuarios y verificarlos</h2>
                    </div>
                </div>
                <br>
                <div class="card" style="border-radius: 18px; border: 1px solid gray; background: white; width: 400px; position: relative; top: 20px; left: 40px; height: 300px">
                    <div class="card-body">
                    <h1 style="color: #008075; text-align: center; font-size: 1.2em">Usuario Persona</h1>
                        <hr>
                        <br>
                        <a style="position: absolute; left: 110px; border-radius: 8px; background-color: #008073; border: none; color: white; padding: 10px 22px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;"href="#">Crear</a>
                        <a style="position: absolute; left: 195px; border-radius: 8px; background-color: #00BFAC; border: none; color: white; padding: 10px 22px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;"href="#">Ver</a>
                        <h2 style="position: absolute; top: 120px; left: 50px; color: #00bfac; font-size: 1.1em">Agrega o vuelve <strong>Aprendices</strong> a los <strong>Usuarios</strong></h2>
                        <h2 style="position: absolute; top: 150px; left: 40px; color: #00bfac; font-size: 1.1em">Puedes ver a todos los usuarios y verificarlos</h2>
                    </div>
                </div>
                <div class="card" style="border-radius: 18px; border: 1px solid gray; background: white; width: 400px; position: relative; top: -602px; left: 500px; height: 300px">
                    <div class="card-body">
                    <h1 style="color: #008075; text-align: center; font-size: 1.2em">Usuario Persona</h1>
                        <hr>
                        <br>
                        <a style="position: absolute; left: 110px; border-radius: 8px; background-color: #008073; border: none; color: white; padding: 10px 22px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;"href="#">Crear</a>
                        <a style="position: absolute; left: 195px; border-radius: 8px; background-color: #00BFAC; border: none; color: white; padding: 10px 22px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;"href="#">Ver</a>
                        <h2 style="position: absolute; top: 120px; left: 50px; color: #00bfac; font-size: 1.1em">Agrega o vuelve <strong>Aprendices</strong> a los <strong>Usuarios</strong></h2>
                        <h2 style="position: absolute; top: 150px; left: 40px; color: #00bfac; font-size: 1.1em">Puedes ver a todos los usuarios y verificarlos</h2>
                    </div>
                </div>
                <br>
                <div class="card" style="border-radius: 18px; border: 1px solid gray; background: white; width: 400px; position: relative; top: -602px; left: 500px; height: 300px">
                    <div class="card-body">
                    <h1 style="color: #008075; text-align: center; font-size: 1.2em">Usuario Persona</h1>
                        <hr>
                        <br>
                        <a style="position: absolute; left: 110px; border-radius: 8px; background-color: #008073; border: none; color: white; padding: 10px 22px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;"href="#">Crear</a>
                        <a style="position: absolute; left: 195px; border-radius: 8px; background-color: #00BFAC; border: none; color: white; padding: 10px 22px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;"href="#">Ver</a>
                        <h2 style="position: absolute; top: 120px; left: 50px; color: #00bfac; font-size: 1.1em">Agrega o vuelve <strong>Aprendices</strong> a los <strong>Usuarios</strong></h2>
                        <h2 style="position: absolute; top: 150px; left: 40px; color: #00bfac; font-size: 1.1em">Puedes ver a todos los usuarios y verificarlos</h2>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>