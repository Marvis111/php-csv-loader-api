<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Model\Country;
 
class TestCountries extends PHPUnit_Framework_TestCase {
    public $country;

    protected function setUp()
    {
        $this->country = new Country();
    }
 
    protected function tearDown()
    {
        $this->country = NULL;
    }
 
    public function testCountry()
    {
        $result = $this->country->find();
        $this->assertEquals('success', $result->status);
    }
 
}


?>