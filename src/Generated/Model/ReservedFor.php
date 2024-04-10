<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ReservedFor extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Reserved stock of a product for shopify
     *
     * @var int
     */
    protected $shopify;
    /**
     * Reserved stock of a product for shopify
     *
     * @return int
     */
    public function getShopify() : int
    {
        return $this->shopify;
    }
    /**
     * Reserved stock of a product for shopify
     *
     * @param int $shopify
     *
     * @return self
     */
    public function setShopify(int $shopify) : self
    {
        $this->initialized['shopify'] = true;
        $this->shopify = $shopify;
        return $this;
    }
}