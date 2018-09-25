<?php

namespace Mk\Feed\Generators\Zbozi;

use Mk, Nette;

class ShopDepot{

    use Nette\SmartObject;

    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

}
