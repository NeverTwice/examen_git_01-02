<?php 

namespace tests\Lib;

use Lib\StringFormatter;

class StringFormatterTest extends \PHPUnit_Framework_TestCase {

	/*****************************/
	/*     Suffix Method Tests   */
	/*****************************/

	/**
	 * [testSuffixConcatStringSuccess Checks if the method concats the string is done with success]
	 * @return [Assert] [If is equal, test is OK]
	 */
	public function testSuffixConcatStringSuccess() {
		$myClass = new StringFormatter();
		$result = $myClass->suffix("my", "method");
		$this->assertEquals($result, "methodmy");
	}

	/**
	 * [testSuffixConcatStringError Checks if the method concats the string handles an error]
	 * @return [Assert] [If is not equal, test is OK]
	 */
	public function testSuffixConcatStringError() {
		$myClass = new StringFormatter();
		$result = $myClass->suffix("my", "method");
		$this->assertNotEquals($result, "methodMy");
	}

	/**
	 * [testSuffixCamelCaseSuccess Checks if the method to camel case is done with success]
	 * @return [Assert] [If is equal, test is OK]
	 */
	public function testSuffixCamelCaseSuccess() {
		$myClass = new StringFormatter();
		$result = $myClass->suffix("my", "method", 1);
		$this->assertEquals($result, "methodMy");
	}

	/**
	 * [testSuffixCamelCaseError Checks if the method to camel case handles an error]
	 * @return [Assert] [If is not equal, test is OK]
	 */
	public function testSuffixCamelCaseError() {
		$myClass = new StringFormatter();
		$result = $myClass->suffix("my", "method", 1);
		$this->assertNotEquals($result, "methodmy");
	}

	/*****************************/
	/*     Prefix Method Tests   */
	/*****************************/

	/**
	 * [testPrefixConcatStringSuccess Checks if the method concats the string is done with success]
	 * @return [Assert] [If is equal, test is OK]
	 */
	public function testPrefixConcatStringSuccess() {
		$myClass = new StringFormatter();
		$result = $myClass->prefix("my", "method");
		$this->assertEquals($result, "mymethod");
	}

	/**
	 * [testPrefixConcatStringError Checks if the method concats the string handles an error]
	 * @return [Assert] [If is not equal, test is OK]
	 */
	public function testPrefixConcatStringError() {
		$myClass = new StringFormatter();
		$result = $myClass->prefix("my", "method");
		$this->assertNotEquals($result, "myMethod");
	}

	/**
	 * [testPrefixCamelCaseSuccess Checks if the method to camel case is done with success]
	 * @return [Assert] [If is equal, test is OK]
	 */
	public function testPrefixCamelCaseSuccess() {
		$myClass = new StringFormatter();
		$result = $myClass->prefix("my", "method", 1);
		$this->assertEquals($result, "myMethod");
	}

	/**
	 * [testPrefixCamelCaseError Checks if the method to camel case handles an error]
	 * @return [Assert] [If is not equal, test is OK]
	 */
	public function testPrefixCamelCaseError() {
		$myClass = new StringFormatter();
		$result = $myClass->prefix("my", "method", 1);
		$this->assertNotEquals($result, "mymethod");
	}

	/*****************************/
	/*  CamelCase Method Tests   */
	/*****************************/

	/**
	 * [testToCamelCaseSuccess Checks if the method to camel case is done with success]
	 * @return [Assert] [If is equal, test is OK]
	 */
	public function testToCamelCaseSuccess() {
		$myClass = new StringFormatter();
		$result = $myClass->toCamelCase("my", "method");
		$this->assertEquals($result, "myMethod");
	}

	/**
	 * [testToCamelCaseError Checks if the method to camel case hanbles an error]
	 * @return [Assert] [If is not equal, test is OK]
	 */
	public function testToCamelCaseError() {
		$myClass = new StringFormatter();
		$result = $myClass->toCamelCase("my", "method"); 
		$this->assertNotEquals($result, "mymethod");
	}

	/********************************/
	/*  ConcatString Method Tests   */
	/********************************/

	/**
	 * [testConcatStringSuccess Checks if the method concat string is done with success]
	 * @return [Assert] [If is equal, test is OK]
	 */
	public function testConcatStringSuccess() {
		$myClass = new StringFormatter();
		$result = $myClass->concatString("my", "method");
		$this->assertEquals($result, "mymethod");
	}

	/**
	 * [testConcatStringError Checks if the method concat string hanbles an error]
	 * @return [Assert] [If is not equal, test is OK]
	 */
	public function testConcatStringError() {
		$myClass = new StringFormatter();
		$result = $myClass->concatString("my", "method"); 
		$this->assertNotEquals($result, "myMethod");
	}
}