<?php

class Category
{
    public static function getCategory()
    {
        $sql = "SELECT * FROM shop_category";
        $db = DBConnection::getConnection();
        return DBConnection::requestInDB($sql, $db);
    }

    public static function getCategoryByID($id)
    {
        $sql = "SELECT * FROM shop_category";
        $db = DBConnection::getConnection();
        return $db->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
}