<?php 
    require_once 'config/Global.php';
    require_once 'core/BaseController.php';

    $controller = isset($_GET["controller"]) ? $_GET["controller"] : "";
    $action = isset($_GET["action"]) ? $_GET['action'] : "";

    switch (ucwords($controller))
    {
        case 'Login':
            $controller = 'LoginController';
            break;
        default:
            $controller = CONTROLADOR_DEFECTO;
        break;
    }
    $strFileController = 'controllers/' . $controller . '.php';

    if(is_file($strFileController))
    {
        require_once $strFileController;
        $controllerObj = new $controller();

        if($action == "")
        {
            $action = ACCTION_DEFECTO;
        }

        if(method_exists($controllerObj, $action))
        {
            $controllerObj->$action();
        } else {
            echo "No existe el metodo en el controlador";
        }
    }
?>