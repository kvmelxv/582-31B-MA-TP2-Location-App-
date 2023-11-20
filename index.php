<?php
session_start();


define('PATH_DIR', 'http://localhost/phpfiles/582-31B-MA-TP2-Location-App-/');
//define('PATH_DIR', 'https://e2395368.webdev.cmaisonneuve.qc.ca/582-31B-MA-TP2-Location-App-/');
require_once('controller/Controller.php');
require_once('library/RequirePage.php');
require_once __DIR__.'/vendor/autoload.php';
require_once('library/Twig.php');

//$url = isset($_SERVER['PATH_INFO'])? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : '/';
$url = isset($_GET["url"]) ? explode ('/', ltrim($_GET["url"], '/')) : '/';

if($url == '/'){
    require_once('controller/ControllerHome.php');
    $controller = new ControllerHome;
    echo $controller->index(); 
}else{
    $requestURL = $url[0];
    $requestURL = ucfirst($requestURL);
    $controllerPath = __DIR__."/controller/Controller".$requestURL.".php";

    if(file_exists($controllerPath)){
        require_once( $controllerPath);
        $controllerName = 'Controller'.$requestURL;
        $controller = new $controllerName;
        if(isset($url[1])){
            $method = $url[1];
            if(isset($url[2])){
                echo $controller->$method($url[2]);
            }else{
                echo $controller->$method();
            }
        }else{
            echo $controller->index();
        }

    }else{
        require_once('controller/ControllerHome.php');
        $controller = new ControllerHome;
        echo $controller->error('404'); 
    }

}

?>