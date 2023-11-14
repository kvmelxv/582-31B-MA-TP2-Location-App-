<?php

class ControllerLogin extends Controller {

    public function index(){
      
        return Twig::render('authentification/login.php');
    }

    public function forgot(){
        Twig::render('authentification/forgot-pwd.php');
    }

}

?>