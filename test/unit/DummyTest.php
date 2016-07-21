<?php
/**
 * Created by PhpStorm.
 * User: javierraya
 * Date: 21/7/16
 * Time: 8:59
 */

class DummyTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    /**
    * method: dummy
    * when: called
    * should: returnTrue
    */
    public function test_dummy_called_returnTrue()
    {
        $this->assertTrue(true);
    }


}