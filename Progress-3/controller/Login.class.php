<?php

class Login extends Controller {
    function index() {
        $this->view('login.php');
    }

    function doLogin(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        // $model = $this->model('UserModel');
        // $user = $model->auth($username, $password);

        // if($user) {
            // session_start();
            // $_SESSION['user'] = $user;
            // header("location:index.php?c=Home&m=index");
        // } else {
        //     echo "Login Gagal!";
        // }
        session_start();
        $_SESSION['user'] = ['username' => $username];
        header("location:index.php?c=Home&m=index");
        exit();
        }
    }
