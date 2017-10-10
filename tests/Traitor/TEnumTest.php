<?php
namespace Traitor;


use PHPUnit\Framework\TestCase;


class TestObject_TEnumTest
{
	use TEnum;
	
	
	const A = 'a';
	const B = 2;
	const ARR = ['1', '2'];
	
	public static $NOT_CONST = 5;
}


class TEnumTest extends TestCase
{
	public function test_getAll()
	{
		self::assertEquals(
			[
				'a',
				2
			],
			TestObject_TEnumTest::getAll()
		);
	}
	
	public function test_implodeAll()
	{
		self::assertEquals(
			'a,2', TestObject_TEnumTest::implodeAll(',')
		);
	}
	
	
	public function test_isExists()
	{
		self::assertTrue(TestObject_TEnumTest::isExists('a'));
		self::assertTrue(TestObject_TEnumTest::isExists(2));
		self::assertFalse(TestObject_TEnumTest::isExists('b'));
		self::assertFalse(TestObject_TEnumTest::isExists(3));
	}
	
	
	public function test_isExists_SameValueButDifferentType()
	{
		self::assertFalse(TestObject_TEnumTest::isExists('2'));
		self::assertFalse(TestObject_TEnumTest::isExists(2.0));
	}
	
	
	public function test_getCount()
	{
		self::assertEquals(2, TestObject_TEnumTest::getCount());
	}
}