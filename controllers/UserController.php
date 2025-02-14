<?php

class UserController
{
    public function actionLogin()
    {
        $errors = [];
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = User::loginUser($email, $password);

            if($user){
                User::authUser($user['id'],$user['role']);
            }
        }
        require_once ROOT."/views/auth/login.php";
        return true;
    }

    public function actionSignup()
    {
        $errors = [];
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $name = $_POST['name'];
            $password = $_POST['password'];

            if(!User::checkEmail($email)){
                $errors[] = "Ползватьел с таким email уже сушествует";
            }

            if(count($errors) == 0){
                User::signupUser($email, $name, $password);
            }
        }
        require_once ROOT."/views/auth/signup.php";
        return true;
    }

    public function actionLogout()
    {
        unset($_SESSION['user']);
        $path = '/';
        if($_SERVER['HTTP_REFERER']){
            $path = $_SERVER['HTTP_REFERER'];
        }
        header('Location: '.$path);
    }
}