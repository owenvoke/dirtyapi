<?php
use pxgamer\dirtyAPI;

class MainTest extends PHPUnit_Framework_TestCase
{

    public function testCanBeInitialised()
    {
        $dirtyAPI = new dirtyAPI();
        $this->assertInstanceOf(dirtyAPI::class, $dirtyAPI);
    }

    public function testCanFixHTML()
    {
        $response = dirtyAPI::html('<a href="https://github.com/">GitHub</a>');
        $this->assertObjectHasAttribute('clean', $response);
    }

    public function testCanFixCSS()
    {
        $response = dirtyAPI::css('.test{ color: red } ');
        $this->assertObjectHasAttribute('clean', $response);
    }

    public function testCanFixJavascript()
    {
        $response = dirtyAPI::js('function test() { var a= 0; console.log(a);}');
        $this->assertObjectHasAttribute('clean', $response);
    }

}
