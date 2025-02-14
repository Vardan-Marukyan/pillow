<?php

class Type
{
    public static function getType()
    {
        $sql = "SELECT * FROM pillow_type";
        $db = DBConnection::getConnection();
        return DBConnection::requestInDB($sql, $db);
    }

    public static function getTypeByID($id)
    {
        $sql = "SELECT * FROM pillow_type WHERE id = {$id}";
        $db = DBConnection::getConnection();
        return $db->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
}