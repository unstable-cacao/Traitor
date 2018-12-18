<?php
namespace Traitor;


trait TEnum
{
	use TStaticClass;
	
	
	/** @var array */
	private static $values = false;
	
	
	private static function loadConsts(): void
	{
		if (self::$values) return;
		
		foreach ((new \ReflectionClass(__CLASS__))->getConstants() as $value)
		{
			if (is_string($value) || is_int($value))
			{
				self::$values[$value] = $value;
			}
		}
	}
	
	
	public static function getAll(): array 
	{
		self::loadConsts();
		return array_keys(self::$values);
	}
	
	public static function implodeAll(string $glue = ','): string 
	{
		return implode($glue, self::getAll());
	}
	
	/**
	 * @param string|int $value
	 * @return bool
	 */
	public static function isExists($value): bool 
	{
		self::loadConsts();
		return (isset(self::$values[$value]) && self::$values[$value] === $value);
	}
	
	public static function getCount(): int 
	{
		self::loadConsts();
		return count(self::$values);
	}
}