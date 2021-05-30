<?php
    require_once './Models/User.php';

    class UserController {

        public function login() {
            if(!isset($_POST['username']) || !isset($_POST['password']) || isset($_SESSION['username']))
                header('Location: http://localhost/MVC_example/index.php');
         
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            if( User::checkUserExists($username, $password) ){
                $_SESSION['username'] = $username;
                header('Location: http://localhost/MVC_example/Views/welcome.php');
            }

            $_SESSION['error'] = 'Username or password incorrect !';
            header('Location: http://localhost/MVC_example/index.php');
        }

        public function logout() {
            unset($_SESSION['username']);
            header('Location: http://localhost/MVC_example/index.php');
        }
    }