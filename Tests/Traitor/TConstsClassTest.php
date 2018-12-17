<?php
namespace Traitor;


use PHPUnit\Framework\TestCase;


class TestObject_TConstsClassTest_Helper
{
	use TConstsClass;
	
	
	const A = 'a';
	const B = 2;
	const ARR = ['1', '2'];
	
	public static $NOT_CONST = 5;
}


class TConstsClassTest extends TestCase
{
	public function test_getConstsAsArray()
	{
		self::assertEquals(
			[
				'A'	=> TestObject_TConstsClassTest_Helper::A,
				'B'	=> TestObject_TConstsClassTest_Helper::B,
				'ARR' => TestObject_TConstsClassTest_Helper::ARR
			],
			TestObject_TConstsClassTest_Helper::getConstsAsArray()
		);
	}
	
	public function test_getConstNames()
	{
		self::assertEquals(
			['A', 'B', 'ARR'],
			TestObject_TConstsClassTest_Helper::getConstNames()
		);
	}
	
	public function test_getConstValues()
	{
		self::assertEquals(
			['a', 2, ['1', '2']],
			TestObject_TConstsClassTest_Helper::getConstValues()
		);
	}
	
	public function test_getConstsCount()
	{
		self::assertEquals(3, TestObject_TConstsClassTest_Helper::getConstsCount());
	}
	
	public function test_isConstExists()
	{
		self::assertTrue(TestObject_TConstsClassTest_Helper::isConstExists('A'));
		self::assertFalse(TestObject_TConstsClassTest_Helper::isConstExists('NOT_CONST'));
		self::assertFalse(TestObject_TConstsClassTest_Helper::isConstExists('NOT_FOUND'));
	}
	
	public function test_isConstValueExists()
	{
		self::assertTrue(TestObject_TConstsClassTest_Helper::isConstValueExists('a'));
		self::assertTrue(TestObject_TConstsClassTest_Helper::isConstValueExists(['1', '2']));
		self::assertTrue(TestObject_TConstsClassTest_Helper::isConstValueExists(2));
		
		self::assertFalse(TestObject_TConstsClassTest_Helper::isConstValueExists('2'));
		self::assertFalse(TestObject_TConstsClassTest_Helper::isConstValueExists(5));
		self::assertFalse(TestObject_TConstsClassTest_Helper::isConstValueExists(['1', 2]));
	}
}