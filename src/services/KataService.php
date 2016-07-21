<?php
/**
 * Created by PhpStorm.
 * User: javierraya
 * Date: 21/7/16
 * Time: 9:08
 */

namespace Kata\services;

use Kata\manager\UserManager;

class KataService
{
    public function getName($username)
    {
        $manager = new UserManager();
        $result = $manager->getUserByUsername($username);
        return $result['name'];
    }
}