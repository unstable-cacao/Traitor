<?php
namespace Traitor;


trait TPrivateCallback
{
	private function createCallback($method)
	{
		return function() use ($method)
		{
			return call_user_func_array([$this, $method], func_get_args());
		};
	}
}