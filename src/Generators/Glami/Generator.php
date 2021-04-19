<?php

namespace Mk\Feed\Generators\Glami;

use Mk\Feed\Generators\BaseGenerator;

/**
 * Class GlamiGenerator
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators
 * @see https://www.glami.cz/info/feed/ Documentation
 */
abstract class Generator extends BaseGenerator
{

    /**
     * @param $name
     * @return string
     */
    protected function getTemplate($name)
    {
        $reflection = new \ReflectionClass(__CLASS__);
        return dirname($reflection->getFileName()) . '/latte/' . $name . '.latte';
    }
}
