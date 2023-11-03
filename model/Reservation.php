<?php

class Reservation extends CRUD {

    protected $table = 'Reservation';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'DateDebut', 'DateFin', 'Utilisateur_Username', 'Appartement_idAppartement'];
    
}

?>