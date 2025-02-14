<?php

class Blog
{
    public static function getCategory()
    {
        $sql = "SELECT * FROM blog_category";
        $db = DBConnection::getConnection();
        return DBConnection::requestInDB($sql, $db);
    }
}