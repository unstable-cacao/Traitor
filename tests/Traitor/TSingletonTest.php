<?php
namespace Traitor;


use PHPUnit\Framework\TestCase;


class TestObject_TSingleton
{
	use TSingleton;
	
	
	public static $initializeParameter = null;
	public static $initializeCallCount = 0;
	
	
	protected static function initialize($calledWith)
	{
		self::$initializeCallCount++;
		self::$initializeParameter = $calledWith;
	}
}


class TSingletonTest extends TestCase
{
	public function test_SameInstance()
	{
		self::assertSame(TestObject_TSingleton::instance(), TestObject_TSingleton::instance());
	}
	
	public function test_initializeCalled()
	{
		TestObject_TSingleton::instance();
		TestObject_TSingleton::instance();
		
		self::assertSame(TestObject_TSingleton::instance(), TestObject_TSingleton::$initializeParameter);
		self::assertEquals(1, TestObject_TSingleton::$initializeCallCount);
	}
}