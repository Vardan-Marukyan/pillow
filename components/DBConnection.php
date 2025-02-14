<?php

class DBConnection
{
    public static function requestInDB($sql, $db)
    {
        $request = $db->query($sql);
        $result = [];
        while ($row = $request->fetch(\PDO::FETCH_ASSOC)){
            $result[] = $row;
        }
        return $result;
    }


    public static function getConnection()
    {
        $host_name = 'localhost';
        $user = 'root';
        $password = '';
        $db_name = 'pillowmart';

        $db = new \PDO("mysql:host=".$host_name.";dbname=".$db_name, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        return $db;
    }
}