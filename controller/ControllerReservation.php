<?php

RequirePage::model('CRUD');
requirePage::model('Reservation');
RequirePage::model('Appartement');
requirePage::model('Usager');

class ControllerReservation extends controller {

    public function index(){

        $book = new Reservation;
        $select = $book->select('DateDebut', 'ASC');
        return Twig::render('reserv-index.php', ['books'=>$select]);     
    }

    public function create(){

        $usager = new Usager;
        $Appart = new Appartement;
        $usersWithType1 = $usager->selectUsersWithType(1);
        $selectApp = $Appart->select('idAppartement', 'ASC');
        return Twig::render('reserv-create.php', ['usagers'=> $usersWithType1, 'apparts'=> $selectApp]);
    }

    public function store(){

         $reserv = new Reservation;
         $insert = $reserv->insert($_POST);  
         RequirePage::url('reservation/index');
        
    }

    public function edit($id){
        
        $reserv = new Reservation;
        $usager = new Usager;
        $Appart = new Appartement;
        $selectId = $reserv->selectId($id);
        $usersWithType1 = $usager->selectUsersWithType(1);
        $selectApp = $Appart->select('idAppartement', 'ASC');
        return Twig::render('reserv-edit.php', ['reserv'=>$selectId, 'usagers'=> $usersWithType1, 'apparts'=> $selectApp]);
    }

    public function update(){
        
        $reserv = new Reservation;
        $update = $reserv->update($_POST);
        RequirePage::url('reservation/index');
    }

    
    public function destroy(){
        
        $reserv = new Reservation;
        $update = $reserv->delete($_POST['id']);
        RequirePage::url('reservation/index');
    }
}

?>