<?php

namespace Mk\Feed\Generators\Glami;

use Mk;
use Nette;

/**
 * Class ExtraMessage
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators\Glami
 */
class CategoryText
{

    use Nette\SmartObject;


    /** @var string */
    protected $text;

    /**
     * ExtraMessage constructor.
     * @param $text
     */
    public function __construct($text)
    {

        $this->text = (string)$text;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}
