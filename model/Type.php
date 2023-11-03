<?php

class Type extends CRUD {

    protected $table = 'Type';
    protected $primaryKey = 'idType';

    protected $fillable = ['idType', 'type'];
    
}

?>