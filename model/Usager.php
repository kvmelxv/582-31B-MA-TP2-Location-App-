<?php

class Usager extends CRUD {

    protected $table = 'utilisateur';
    protected $primaryKey = 'Username';

    protected $fillable = ['Username', 'Nom', 'Prenom', 'Courriel', 'Telephone', 'Type_idType'];

}

?>