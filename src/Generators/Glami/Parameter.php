<?php

namespace Mk\Feed\Generators\Glami;

use Mk, Nette;

/**
 * Class Parameter
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators\Glami
 * @see https://www.glami.cz/info/feed/
 */
class Parameter
{

    use Nette\SmartObject;

    protected $name;
    protected $value;
    protected $unit;

    /**
     * Parameter constructor.
     * @param $name
     * @param $value
     * @param $unit
     */
    public function __construct($name, $value, $unit = null)
    {
        $this->name = (string)$name;
        $this->value = (string)$value;
        $this->unit = isset($unit) ? (string) $unit : null;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return null
     */
    public function getUnit()
    {
        return $this->unit;
    }
}
