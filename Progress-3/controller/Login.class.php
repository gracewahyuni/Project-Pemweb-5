<?php

class Login extends Controller {
    function index() {
        $this->view('login.php');
    }

    function doLogin(){
        session_start();
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $model = $this->model('UserModel');
        $user = $model->auth($username, $password);

        if (!$user) {
        // Jika belum ada, maka register otomatis (karena kamu tidak punya doRegister)
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $user_id = $model->register($username, $email , $hashedPassword);
        if ($user_id) {
            $_SESSION['user'] = [
                'user_id' => $user_id,
                'username' => $username
            ];
            header("Location: index.php?c=Home&m=index");
            } else {
            echo "Gagal mendaftarkan user!";
            }
        } else {
            if (password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user;
                header("Location: index.php?c=Home&m=index");
            } else {
                echo "Password salah!";
            }
        }
        exit();
    }
}




        // if($user) {
        //     session_start();
        //     $_SESSION['user'] = $user;
        //     header("location:index.php?c=Home&m=index");
        // } else {
        //     echo "Login Gagal!";
        // }

        // session_start();
        // $_SESSION['user'] = ['username' => $username];
        // header("location:index.php?c=Home&m=index");
        // exit();
        //}



