<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Model\Country;
 
class Countries extends PHPUnit_Framework_TestCase {
    
    private $http;

    public function setUp()
    {
      //  http://localhost/phpcsv/api/countries

        $this->http = new GuzzleHttp\Client(['base_uri' => 'http://localhost/phpcsv/']);
    }

    public function tearDown() {
        $this->http = null;
    }

    public function testFind()
{
    $response = $this->http->request('GET', 'api/countries');

    $this->assertEquals(200, $response->getStatusCode());

    $contentType = $response->getHeaders()["Content-Type"][0];
    $this->assertEquals("application/json", $contentType);


}


 
}


?>