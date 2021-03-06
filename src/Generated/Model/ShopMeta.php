<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ShopMeta extends \ArrayObject
{
    /**
     * Domain of the Shopify shop.
     *
     * @var string|null
     */
    protected $shopifyShopDomain;
    /**
     * Flag to mark a shop used for testing.
     *
     * @var bool|null
     */
    protected $testShop = false;
    /**
     * Date time to indicate that the test shop will not be reset before this time.
     *
     * @var \DateTime|null
     */
    protected $testShopResetNotBefore;
    /**
     * Domain of the Shopify shop.
     *
     * @return string|null
     */
    public function getShopifyShopDomain() : ?string
    {
        return $this->shopifyShopDomain;
    }
    /**
     * Domain of the Shopify shop.
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
    /**
     * Flag to mark a shop used for testing.
     *
     * @return bool|null
     */
    public function getTestShop() : ?bool
    {
        return $this->testShop;
    }
    /**
     * Flag to mark a shop used for testing.
     *
     * @param bool|null $testShop
     *
     * @return self
     */
    public function setTestShop(?bool $testShop) : self
    {
        $this->testShop = $testShop;
        return $this;
    }
    /**
     * Date time to indicate that the test shop will not be reset before this time.
     *
     * @return \DateTime|null
     */
    public function getTestShopResetNotBefore() : ?\DateTime
    {
        return $this->testShopResetNotBefore;
    }
    /**
     * Date time to indicate that the test shop will not be reset before this time.
     *
     * @param \DateTime|null $testShopResetNotBefore
     *
     * @return self
     */
    public function setTestShopResetNotBefore(?\DateTime $testShopResetNotBefore) : self
    {
        $this->testShopResetNotBefore = $testShopResetNotBefore;
        return $this;
    }
}