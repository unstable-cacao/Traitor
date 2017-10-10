<?php
namespace Traitor;


use PHPUnit\Framework\TestCase;


class TestObject_TPrivateCallbackTest
{
	use TPrivateCallback;
	
	
	public $isCalled = false;
	public $params = [];
	
	
	/**
	 * @return \Closure
	 */
	public function getFunction()
	{
		return $this->createCallback('callMe');
	}
	
	/** @noinspection PhpUnusedPrivateMethodInspection
	 * @param $a
	 * @param $b
	 */
	private function callMe($a, $b)
	{
		$this->params = [$a, $b];
		$this->isCalled = true;
	}
}


class TPrivateCallbackTest extends TestCase
{
	public function test_Sanity()
	{
		$a = new TestObject_TPrivateCallbackTest();
		$func = $a->getFunction();
		
		$func(1, 'b');
		
		self::assertTrue($a->isCalled);
		self::assertEquals([1, 'b'], $a->params);
	}
}