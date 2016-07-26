<?php
/**
 * Created by PhpStorm.
 * User: javierraya
 * Date: 26/7/16
 * Time: 11:28
 */

namespace Kata\dao;


class UserDAO
{
    private $dbPath;

    public function __construct($dbPath = './db/project.sqlite')
    {
        $this->dbPath = $dbPath;
    }


    public function getUserByUsername($username)
    {
        $sqlLite = new \SQLite3($this->dbPath);
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