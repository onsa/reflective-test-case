<?php

namespace onsa\ReflectiveTestCase;

use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
		public function invokeMethod(&$object, $methodName, array $parameters = array())
		{
		    $reflection = new \ReflectionClass(get_class($object));
		    $method = $reflection->getMethod($methodName);
		    $method->setAccessible(true);
		    return $method->invokeArgs($object, $parameters);
		}
}
