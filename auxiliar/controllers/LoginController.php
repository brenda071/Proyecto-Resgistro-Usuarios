<?php
    class LoginController extends BaseController
    {
        public function __construct()
        {
            parent::__construct();
        }
        
        public function login()
        {
            require_once 'views/indexSession.php';
        }

        public function validar()
        {
            if(isset($_POST['txtEmail']) && isset($_POST['txtPassword']))
            {
                $user = isset($_POST['txtEmail']) ? trim($_POST['txtEmail']) : "";
                $password = isset($_POST['txtPassword']) ? trim($_POST['txtPassword']) : "";
                $errores = "";

                if($user == '' || $password == '')
                {
                    $errores = "El usuario y la contraseña no puden ser vacios";
                    require_once 'views/indexSession.php';
                } else {

                    $_SESSION['tipo_usuario'] = "auxiliar";
                    $_SESSION['nombre'] = "Salome";
                    $_SESSION['correo'] = "auxiliar@gmail.com";
                    $_SESSION['contraseña'] = "auxi";

                    if ($user == 'auxiliar@gmail.com' && $password == 'auxi')
                    {
                        require_once 'views/home.php';
                    } else {
                        $errores = "El usuario o contraseña son incorrectos";
                        require_once 'views/indexSession.php';
                    }
                }
            }
        }
    }
?>