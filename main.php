<?php
/**
 * Created by PhpStorm.
 * User: javierraya
 * Date: 21/7/16
 * Time: 10:10
 */
require 'vendor/autoload.php';

use Kata\services\KataService;

$services = new KataService();
$result = $services->getName('user2');


echo $result."\n";