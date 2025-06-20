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
        $user = $model->auth($username);

        if (!$user) {
        // Jika belum ada, maka register otomatis (karena kamu tidak punya doRegister)
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $user_id = $model->register($username, $email , $hashedPassword);
        if ($user_id) {
            $_SESSION['user'] = [
                'user_id' => $user_id,
                'username' => $username
            ];
            header("Location: index.php?c=Community&m=home");
            } else {
            echo "Gagal mendaftarkan user!";
            }
        } else {
            if (password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user;
            header("Location: index.php?c=Community&m=home");
            } else {
                echo "Password salah!";
            }
        }
        exit();
    }
}



