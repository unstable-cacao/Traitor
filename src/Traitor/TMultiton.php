<?php
namespace Traitor;


trait TMultiton
{
	use TStaticClass;
	
	
	/** @var static[] */
	private static $instances = [];
	
	/**
	 * @param TMultiton $instance
	 * @param string|int $key
	 */
	protected static function initialize(TMultiton $instance, $key) {}
	
	
	/**
	 * @param string|int $key
	 * @return static
	 */
	public static function instance($key)
	{
		if (!isset(self::$instances[$key]))
		{
			$instance = new static();
			self::$instances[$key] = $instance;
			self::initialize($instance, $key);
		}
		
		return self::$instances[$key];
	}
}