<?php
/**
 * Created by PhpStorm.
 * User: javierraya
 * Date: 21/7/16
 * Time: 9:08
 */

namespace Kata\services;

use Kata\dao\UserDAO;
use Kata\manager\UserManager;

class KataService
{
    private $dao;

    public function __construct($dao = null)
    {
        if(!$dao)
            $dao = new UserDAO();
        $this->dao = $dao;
    }
    
    public function getName($username)
    {
        $result = $this->dao->getUserByUsername($username);
        return $result['name'] . ' ' . $result['surname1'];
    }


    public function getPassword($username)
    {
        $result = UserManager::getUserByUsername($username);
        return $result['password'];
    }
}