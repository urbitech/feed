<?php

namespace Mk\Feed\Generators\Glami;

use Mk, Nette;

class Image
{

    use Nette\SmartObject;

    private $url;

    /**
     * Image constructor.
     * @param $url
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }
}
