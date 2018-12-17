<?php
namespace Traitor;


trait TSingletonLike
{
	/**
	 * @var static
	 */
	private static $instance = null;
	
	
	/**
	 * @param static|TSingletonLike $instance
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