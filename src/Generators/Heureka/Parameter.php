<?php

namespace Mk\Feed\Generators\Heureka;

use Mk, Nette;

/**
 * Class Parameter
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators\Heureka
 */
class Parameter {

    /* Použití smartobject viz php 7.2 to nette 2.4 */
    use \Nette\SmartObject;

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
        $this->name = $name;
        $this->value = $value;

        $this->unit = $unit;
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
     * @return mixed
     */
    public function getUnit() {
        return $this->unit;
    }


}
