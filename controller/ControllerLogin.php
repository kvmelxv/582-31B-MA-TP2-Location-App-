<?php

RequirePage::model('CRUD');
RequirePage::model('Usager');
RequirePage::library('Validation');

class ControllerLogin extends Controller {

    public function index(){
      
        Twig::render('authentification/login.php');
    }

    public function authentification() {
        $validation = new Validation;
        extract($_POST);
        $validation->name('Username')->value($Username)->max(50)->required();
        $validation->name('Password')->value($Password)->max(20)->min(8)->required();

        if(!$validation->isSuccess()){
            $errors =  $validation->displayErrors();
         return Twig::render('authentification/login.php', ['errors' =>$errors,  'usager' => $_POST]);
         exit();

        }

        $usager = new Usager;
        $checkuser = $usager->checkuser($_POST['Username'], $_POST['Password']);
    }

    public function logout() {
        session_destroy();
        RequirePage::url('home');
    }


    public function forgot(){
        Twig::render('authentification/forgot-pwd.php');
    }

}

?>