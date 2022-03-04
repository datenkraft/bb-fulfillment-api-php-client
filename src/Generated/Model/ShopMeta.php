<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ShopMeta extends \ArrayObject
{
    /**
     * Hostname of the Shopify shop.
     *
     * @var string|null
     */
    protected $shopifyShopDomain;
    /**
     * Hostname of the Shopify shop.
     *
     * @return string|null
     */
    public function getShopifyShopDomain() : ?string
    {
        return $this->shopifyShopDomain;
    }
    /**
     * Hostname of the Shopify shop.
     *
     * @param string|null $shopifyShopDomain
     *
     * @return self
     */
    public function setShopifyShopDomain(?string $shopifyShopDomain) : self
    {
        $this->shopifyShopDomain = $shopifyShopDomain;
        return $this;
    }
}