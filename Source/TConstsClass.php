<?php
namespace Traitor;


trait TConstsClass
{
	use TStaticClass;
	
	
	/** @var array */
	private static $constsCollection = false;
	
	
	private static function loadConsts()
	{
		if (!self::$constsCollection)
			self::$constsCollection = (new \ReflectionClass(__CLASS__))->getConstants();
	}
	
	
	public static function getConstsAsArray(): array 
	{
		self::loadConsts();
		return self::$constsCollection;
	}
	
	public static function getConstNames(): array 
	{
		self::loadConsts();
		return array_keys(self::$constsCollection);
	}
	
	public static function getConstValues(): array 
	{
		self::loadConsts();
		return array_values(self::$constsCollection);
	}
	
	public static function getConstsCount(): int 
	{
		self::loadConsts();
		return count(self::$constsCollection);
	}
	
	public static function isConstExists($name): bool 
	{
		self::loadConsts();
		return isset(self::$constsCollection[$name]);
	}
	
	public static function isConstValueExists($value): bool 
	{
		self::loadConsts();
		return in_array($value, self::$constsCollection, true);
	}
}