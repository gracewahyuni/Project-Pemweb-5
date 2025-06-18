<?php

class Home extends Controller {
    function index() {
        session_start();
        if (!isset($_SESSION['user'])) {
            header("location:index.php?c=Login&m=index");
            return;
        }
        $this->view('home.php');
    }
}