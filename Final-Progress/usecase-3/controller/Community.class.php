<?php

class Community extends Controller {

    private function requireLogin() {
        session_start();
        if (!isset($_SESSION['user'])) {
            header("location:index.php?c=Login&m=index");
            exit;
        }
    }

    function index() {
        $this->requireLogin();
        $this->view('main-community.php');
    }

    function home() {
        $this->requireLogin();
        $this->view('home.php');
    }

    function mainCommunity() {
        $this->requireLogin();
        $this->view('main-community.php');
    }

    function communityCategory() {
        $this->requireLogin();
        $this->view('community-category.php');
    }

    function groupChat() {
        $this->requireLogin();
        $this->view('group-chat.php');
    }

    function mindSpace() {

        $posts = $_SESSION['mind_posts'] ?? [];
        $this->view('mind-space.php', ['posts' => $posts]);
    }



}
