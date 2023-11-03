<?php

class Appartement extends CRUD {

    protected $table = 'Appartement';
    protected $primaryKey = 'idAppartement';

    protected $fillable = ['idAppartement', 'Description', 'Adresse', 'NombreChambre', 'NombreSalleDeBain', 'Surface', 'Prix'];

}

?>