<?php

class Model {
    protected $db;

    function __construct() {
        $host = '127.0.0.1';
        $user = 'root';
        $pass = '';
        $dbName = 'umatter';

        $this->db = new mysqli($host, $user, $pass, $dbName);

        if ($this->db->connect_error) {
            echo "Database Error: " . $this->db->connect_error;
            exit;
        }
    }
}
