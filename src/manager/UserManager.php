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
        $dao = new \Kata\dao\UserDAO();
        return $dao->getUserByUsername($username);
    }
}