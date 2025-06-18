<?php

class Model {
    protected $db;
    function __construct(){
        $host = '127.0.0.1';
        $user = 'root';
        $pass = '';
        $db = 'umatter';

        $this->db =
            new mysqli($host, $user, $pass, $db);

        if(!$this->db) {
            echo "Database Error"; exit;
        }
    }
    
}