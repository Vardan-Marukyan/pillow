<?php

class Product
{

    const SHOW_PRODUCTS = 4;
    public static function getProducts($productCount = self::SHOW_PRODUCTS)
    {
        $sql = "SELECT * FROM product LIMIT $productCount";
        $db = DBConnection::getConnection();
        return DBConnection::requestInDB($sql, $db);
    }

    public static function getProductByID($id)
    {
        $sql = "SELECT * FROM product WHERE id = {$id}";
        $db = DBConnection::getConnection();
        return $db->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    public static function getProductsByCategoryID($id)
    {
        $sql = "SELECT * FROM product WHERE category_id = {$id}";
        $db = DBConnection::getConnection();
        return DBConnection::requestInDB($sql, $db);
    }

    public static function getProductsByTypeID($id)
    {
        $sql = "SELECT * FROM product WHERE type_id = {$id}";
        $db = DBConnection::getConnection();
        return DBConnection::requestInDB($sql, $db);
    }
}