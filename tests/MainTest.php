<?php

use PHPUnit\Framework\TestCase;
use pxgamer\dirtyApi\Beautifier;

class MainTest extends TestCase
{
    public function testCanBeInitialised()
    {
        $beautifier = new Beautifier;
        $this->assertInstanceOf(Beautifier::class, $beautifier);
    }

    public function testCanFixHTML()
    {
        $beautifier = new Beautifier;
        $response = $beautifier->html('<a href="https://github.com/">GitHub</a>');
        $response_object = json_decode($response);
        $this->assertObjectHasAttribute('clean', $response_object);
    }

    public function testCanFixCSS()
    {
        $beautifier = new Beautifier;
        $response = $beautifier->css('.test{ color: red } ');
        $response_object = json_decode($response);
        $this->assertObjectHasAttribute('clean', $response_object);
    }

    public function testCanFixJavascript()
    {
        $beautifier = new Beautifier;
        $response = $beautifier->js('function test() { var a= 0; console.log(a);}');
        $response_object = json_decode($response);
        $this->assertObjectHasAttribute('clean', $response_object);
    }
}
