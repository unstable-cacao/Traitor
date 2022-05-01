<?php
namespace Traitor;


trait TStaticClass
{
	private function __construct() {}
	private function __clone() {}
	
	
	public function __wakeup()
	{
		throw new \Error('This method is not allowed');
	}
}