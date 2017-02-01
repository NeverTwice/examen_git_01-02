<?php 

namespace tests\Lib;

use Lib\StringFormatter;

class StringFormatterTest extends \PHPUnit_Framework_TestCase {

	public function testToCamelCaseSuccess() {
		$myClass = new StringFormatter();
		$result = $myClass->toCamelCase("my", "method");
		$this->assertEquals($result, "myMethod");
	}

	public function testToCamelCaseError() {
		$myClass = new StringFormatter();
		$result = $myClass->toCamelCase("my", "method"); 
		$this->assertNotEquals($result, "mymethod");
	}
}