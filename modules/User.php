<?php

class User
{
    public static function signupUser($email, $name, $password)
    {
        $sql = "INSERT INTO user (email, name, password) VALUES ('$email', '$name', '$password')";
        $db = DBConnection::getConnection();
        $db->exec($sql);
    }

    public static function loginUser($email, $password)
    {
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $db = DBConnection::getConnection();
        return $db->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    public static function checkEmail($email)
    {
        $sql = "SELECT COUNT(*) FROM user WHERE email = '$email'";
        $db = DBConnection::getConnection();
        $count = $db->query($sql)->fetchColumn();
        if($count <= 0){
            return true;
        }return false;
    }

    public static function checkAuth()
    {
        if(isset($_SESSION['user'])){
            return true;
        }return false;
    }

    public static function checkAdmin()
    {
        if(isset($_SESSION['user']) and $_SESSION['role'] == 'admin'){
            return true;
        }return false;
    }

    public static function authUser($id, $role)
    {
        if(!isset($_SESSION['user'])){
            $_SESSION['user'] = $id;
            $_SESSION['role'] = $role;
        }
    }
}