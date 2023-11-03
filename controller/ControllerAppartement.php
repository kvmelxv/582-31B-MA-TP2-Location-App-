<?php

RequirePage::model('CRUD');
RequirePage::model('Appartement');

class ControllerAppartement extends controller {

    public function index(){

        $Appart = new Appartement;
        $select = $Appart->select('idAppartement', 'ASC');
        return Twig::render('appart-index.php', ['apparts'=>$select]);     
    }

    public function create(){

        $Appart = new Appartement;
        return Twig::render('appart-create.php');
    }

    public function store(){

        $Appart = new Appartement;
        $insert = $Appart->insert($_POST);  
        RequirePage::url('appartement/index');
        
    }

    public function edit($id){

        $Appart = new Appartement;
        $selectId = $Appart->selectId($id);
        return Twig::render('appart-edit.php', ['appart'=>$selectId]);
    }

    public function update(){
        
        $Appart = new Appartement;
        $update = $Appart->update($_POST);
        RequirePage::url('appartement/index');
    }

    
    public function destroy(){
        
        $Appart = new Appartement;
        $update = $Appart->delete($_POST['id']);
        RequirePage::url('appartement/index');
    }
}

?>