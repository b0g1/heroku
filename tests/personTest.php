<?php

require dirname(__DIR__) . '/src/person.php';

class personTest extends PHPUnit_Framework_TestCase
{
  public function testConstructor()
  {
    $person = new person('pera');
    $this->assertAttributeEquals('pera', 'fname', $person);
  }

  public function testGetFname()
  {
    $person = new person('pera');
    $this->assertEquals('pera', $person->getFname());
  }
}
