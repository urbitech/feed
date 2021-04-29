<?php

namespace Mk\Feed\Generators\Glami;

use Mk\Feed\Generators\BaseItem;

/**
 * Class Item
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators\Glami
 * @see https://www.glami.cz/info/feed/ Documentation
 */
class Item extends BaseItem
{
    /** @var string @required */
    protected $productName;
    /** @var string @required */
    protected $description;
    /**  @var string @required */
    protected $url;
    /** @var float @required */
    protected $priceVat;
    /** @var \DateTime|int @required */
    protected $deliveryDate;
    /** @var Delivery|null */
    protected $delivery;
    /** @var Delivery[] */
    protected $deliveries;
    /** @var string|null */
    protected $itemId;
    /** @var Image[] */
    protected $images;
    /** @var string|null */
    protected $itemGroupId;
    /** @var string|null */
    protected $manufacturer;
    /** @var CategoryText[] */
    protected $categoryTexts = array();
    /** @var string|null */
    protected $product;
    /** @var Parameter[] */
    protected $parameters = array();
    /** @var Parameter[] */
    protected $sizes = array();
    /** @var string|null */
    protected $sizeSystem;
    /** @var decimal|null */
    protected $glamiCPC;
    /** @var string|null */
    protected $imgUrl;
    /** @var string|null */
    protected $ean;

    /**
     * @param $url
     * @return $this
     */
    public function addImage($url)
    {
        $this->images[] = new Image($url);

        return $this;
    }

    /**
     * @param $text
     * @return $this
     */
    public function addCategoryText($text)
    {
        $this->categoryTexts[] = new CategoryText($text);

        return $this;
    }

    /**
     * @param $name
     * @param $val
     * @param null $unit
     * @return Item
     */
    public function addParameter($name, $val, $unit = null)
    {
        $this->parameters[] = new Parameter($name, $val, $unit);

        return $this;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     * @return Item
     */
    public function setProductName($productName)
    {
        $this->productName = (string)$productName;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Item
     */
    public function setDescription($description)
    {
        $this->description = (string)$description;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return Item
     */
    public function setUrl($url)
    {
        $this->url = (string)$url;

        return $this;
    }

    /**
     * @return float
     */
    public function getPriceVat()
    {
        return $this->priceVat;
    }

    /**
     * @param float $priceVat
     * @return Item
     */
    public function setPriceVat($priceVat)
    {
        $this->priceVat = (float)$priceVat;

        return $this;
    }

    /**
     * @return int|string
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate instanceof \DateTime ? $this->deliveryDate->format('Y-m-d') : $this->deliveryDate;
    }

    /**
     * @param int|\DateTime $deliveryDate
     * @return Item
     */
    public function setDeliveryDate($deliveryDate)
    {
        if (!is_int($deliveryDate) && !($deliveryDate instanceof \DateTime)) {
            throw new \InvalidArgumentException("Delivery date must be integer or DateTime");
        }
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param null|string $itemId
     * @return Item
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getItemGroupId()
    {
        return $this->itemGroupId;
    }

    /**
     * @param null|string $itemGroupId
     * @return Item
     */
    public function setItemGroupId($itemGroupId)
    {
        $this->itemGroupId = $itemGroupId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param null|string $manufacturer
     * @return Item
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCategoryTexts()
    {
        return $this->categoryTexts;
    }

    /**
     * @return Image[]
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @return Parameter[]
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @return Delivery|null
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * @param Delivery|null $delivery
     * @return Item
     */
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }


    /**
     * @param Delivery $delivery
     * @return $this
     */
    public function addDelivery(Delivery $delivery)
    {
        $this->deliveries[] = $delivery;

        return $this;
    }

    /**
     * @return Delivery[]
     */
    public function getDeliveries()
    {
        return $this->deliveries;
    }


    /**
     * @return null|string
     */
    public function getUrlSize()
    {
        return $this->urlSize;
    }

    /**
     * @param null|string $urlSize
     * @return Item
     */
    public function setUrlSize($urlSize)
    {
        $this->urlSize = $urlSize;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getImgUrl()
    {
        return $this->imgUrl;
    }

    /**
     * @param null|string $imgUrl
     * @return Item
     */
    public function setImgUrl($imgUrl)
    {
        $this->imgUrl = $imgUrl;

        return $this;
    }

    /**
     * @return null|decimal
     */
    public function getGlamiCPC()
    {
        return $this->glamiCPC;
    }

    /**
     * @param null|decimal $glamiCPC
     * @return Item
     */
    public function setGlamiCPC($glamiCPC)
    {
        $this->glamiCPC = $glamiCPC;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getSizeSystem()
    {
        return $this->sizeSystem;
    }

    /**
     * @param null|string $sizeSystem
     * @return Item
     */
    public function setSizeSystem($sizeSystem)
    {
        $this->sizeSystem = $sizeSystem;

        return $this;
    }

    /**
     * @param $name
     * @param $val
     * @return Item
     */
    public function addSize($name, $val)
    {
        $this->sizes[] = new Parameter($name, $val);

        return $this;
    }


    /**
     * @return Parameter[]
     */
    public function getSize()
    {
        return $this->sizes;
    }

    /**
     * @return null|string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @param null|string $ean
     * @return Item
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }
}
