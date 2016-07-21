<?php
/**
 * Created by PhpStorm.
 * User: javierraya
 * Date: 21/7/16
 * Time: 9:09
 */

namespace Kata\manager;

class UserManager
{
    public static function getUserByUsername($username)
    {
        $sqlLite = new \SQLite3('./db/project.sqlite');
        $sentence = $sqlLite->prepare('select * from Users where username=:username');
        $sentence->bindValue(":username", $username, SQLITE3_TEXT);
        try {
            $result = $sentence->execute();
            $item = $result->fetchArray(SQLITE3_ASSOC);
            if (!$item) throw new DomainException("No hay usuarios en la bbdd");
            return $item;
        } catch (Exception $e) {
            throw new DomainException($e->getMessage());
        }
    }
}