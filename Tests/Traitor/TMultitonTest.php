<?php
namespace Traitor;


use PHPUnit\Framework\TestCase;


class TestObject_TMultiton
{
	use TMultiton;
	
	
	public static $initializeParameter = [];
	public static $initializeCallCount = [];
	
	
	protected static function initialize($calledWith, $key)
	{
		self::$initializeCallCount[$key] =
			isset(self::$initializeCallCount[$key]) ? self::$initializeCallCount[$key] + 1 : 1;
		
		self::$initializeParameter[$key] = $calledWith;
	}
}


class TMultitonTest extends TestCase
{
	public function test_SameKey_SameInstance()
	{
		self::assertSame(
			TestObject_TMultiton::instance(__FUNCTION__),
			TestObject_TMultiton::instance(__FUNCTION__));
	}
	
	public function test_DifferentKey_DifferentInstance()
	{
		self::assertNotSame(
			TestObject_TMultiton::instance(__FUNCTION__ . 1),
			TestObject_TMultiton::instance(__FUNCTION__ . 2));
	}
	
	public function test_initializeCalled()
	{
		TestObject_TMultiton::instance(__FUNCTION__);
		TestObject_TMultiton::instance(__FUNCTION__);
		TestObject_TMultiton::instance(__FUNCTION__ . 1);
		
		self::assertSame(TestObject_TMultiton::instance(__FUNCTION__), TestObject_TMultiton::$initializeParameter[__FUNCTION__]);
		self::assertEquals(1, TestObject_TMultiton::$initializeCallCount[__FUNCTION__]);
		self::assertEquals(1, TestObject_TMultiton::$initializeCallCount[__FUNCTION__ . 1]);
	}
}