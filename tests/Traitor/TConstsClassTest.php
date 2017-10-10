<?php
namespace Traitor;


use PHPUnit\Framework\TestCase;


class TestObject_TConstsClassTest
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
				'A'	=> TestObject_TConstsClassTest::A,
				'B'	=> TestObject_TConstsClassTest::B,
				'ARR' => TestObject_TConstsClassTest::ARR
			],
			TestObject_TConstsClassTest::getConstsAsArray()
		);
	}
	
	public function test_getConstNames()
	{
		self::assertEquals(
			['A', 'B', 'ARR'],
			TestObject_TConstsClassTest::getConstNames()
		);
	}
	
	public function test_getConstValues()
	{
		self::assertEquals(
			['a', 2, ['1', '2']],
			TestObject_TConstsClassTest::getConstValues()
		);
	}
	
	public function test_getConstsCount()
	{
		self::assertEquals(3, TestObject_TConstsClassTest::getConstsCount());
	}
	
	public function test_isConstExists()
	{
		self::assertTrue(TestObject_TConstsClassTest::isConstExists('A'));
		self::assertFalse(TestObject_TConstsClassTest::isConstExists('NOT_CONST'));
		self::assertFalse(TestObject_TConstsClassTest::isConstExists('NOT_FOUND'));
	}
	
	public function test_isConstValueExists()
	{
		self::assertTrue(TestObject_TConstsClassTest::isConstValueExists('a'));
		self::assertTrue(TestObject_TConstsClassTest::isConstValueExists(['1', '2']));
		self::assertTrue(TestObject_TConstsClassTest::isConstValueExists(2));
		
		self::assertFalse(TestObject_TConstsClassTest::isConstValueExists('2'));
		self::assertFalse(TestObject_TConstsClassTest::isConstValueExists(5));
		self::assertFalse(TestObject_TConstsClassTest::isConstValueExists(['1', 2]));
	}
}