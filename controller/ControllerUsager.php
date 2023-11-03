<?php

RequirePage::model('CRUD');
RequirePage::model('Usager');
RequirePage::model('Type');

class ControllerUsager extends controller {

    public function index(){

        $usager = new Usager;
        $select = $usager->select('Nom', 'ASC');
        return Twig::render('usager-index.php', ['usagers'=>$select]);     
    }

    public function create(){

        $type = new Type;
        $selectTypes = $type->select('type', '');
        return Twig::render('usager-create.php', ['types'=>$selectTypes]);
    }

    public function store(){

         $usager = new Usager;
         $insert = $usager->insert($_POST);  
         RequirePage::url('usager/index');
        
    }

    public function edit($Username){

        $usager = new Usager;
        $selectUsername = $usager->selectId($Username);
        $type = new Type;
        $selectTypes = $type->select('type', '');
        return Twig::render('usager-edit.php', ['usager'=>$selectUsername, 'types'=>$selectTypes]);
    }

    public function update(){
        
        $usager = new Usager;
        $update = $usager->update($_POST);
        RequirePage::url('usager/index');
    }

    
    public function destroy(){
        
        $usager = new Usager;
        $update = $usager->delete($_POST['username']);
        RequirePage::url('usager/index');
    }
}

?>