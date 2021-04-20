<?php

namespace Mk\Feed\Generators;


use Mk, Nette;

/**
 * Class BaseItem
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators\Zbozi
 */
abstract class BaseItem implements Mk\Feed\Generators\IItem
{

	use Nette\SmartObject;

	/**
	 * Validate item
	 * @return bool return true if item is valid
	 */
	public function validate()
	{
		//$reflection = $this->getReflection();
		$class = class_exists(Reflection\ClassType::class) ? Reflection\ClassType::class : \ReflectionClass::class;
		$reflection = new $class(get_called_class());

		foreach ($reflection->getProperties(\ReflectionProperty::IS_PUBLIC) as $v) {
			if ($v->getAnnotation('required')) {
				if (!isset($this->{$v->getName()})) {
					return FALSE;
				}
			}
		}

		return TRUE;
	}
}
