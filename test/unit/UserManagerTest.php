<?php
/**
 * Created by PhpStorm.
 * User: javierraya
 * Date: 26/7/16
 * Time: 11:28
 */

require '../../vendor/autoload.php';


class UserManagerTest extends PHPUnit_Framework_TestCase
{

    /**
    * method: getName
    * when: calledWithUser
    * should: returnNameSurname
    */
    public function test_getName_calledWithUser_returnNameSurname()
    {
        //$userManager = new \Kata\manager\UserManager('../../db/project.sqlite');

        $testUsername = 'user1';
        $mock = $this->getMock('UserManager', ['getUserByUsername']);
        $mock->method('getUserByUsername')->willReturn(['name' => 'nombre', 'surname1' => 'apellido']);

        $sut = new \Kata\services\KataService($mock);
        $actual = $sut->getName($testUsername);
        //$expected = 'name1user1 surname1user1';
        $expected = 'nombre apellido';

        $this->assertEquals($expected, $actual);
    }

}