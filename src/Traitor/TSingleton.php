<?php
namespace Traitor;


trait TSingleton
{
	use TStaticClass;
	
	
	/**
	 * @var static
	 */
	private static $instance = null;
	
	
	/**
	 * @param static|TSingleton $instance
	 */
	protected static function initialize($instance) {}
	
	
	public static function instance()
	{
		if (is_null(self::$instance))
		{
			self::$instance = new static();
			self::initialize(self::$instance);
		}
		
		return self::$instance;
	}
}