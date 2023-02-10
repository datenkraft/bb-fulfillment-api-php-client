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
     * Flag to mark a shop in sandbox mode.
     *
     * @var bool|null
     */
    protected $sandboxMode = false;
    /**
     * Flag to mark if a test suffix should be added to internal references.
     *
     * @var bool|null
     */
    protected $addTestSuffixToInternalReference = false;
    /**
     * Flag to mark the shop as part of a Shopify installation that uses multiple shops.
     *
     * @var bool|null
     */
    protected $shopifyMultiShop = true;
    /**
    * Flag to mark the shop as the default shop for a Shopify installation that uses multiple shops.\
    The default shop is used for e.g. fetching stock levels.
    *
    * @var bool|null
    */
    protected $shopifyDefaultShop = true;
    /**
    * The order tags to identify which shop to use in a Shopify installation that uses multiple shops.\
    If a Shopify order matches a tag, it will be assigned to this shop.
    *
    * @var string[]|null
    */
    protected $shopifyOrderTags;
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
    /**
     * Flag to mark a shop in sandbox mode.
     *
     * @return bool|null
     */
    public function getSandboxMode() : ?bool
    {
        return $this->sandboxMode;
    }
    /**
     * Flag to mark a shop in sandbox mode.
     *
     * @param bool|null $sandboxMode
     *
     * @return self
     */
    public function setSandboxMode(?bool $sandboxMode) : self
    {
        $this->sandboxMode = $sandboxMode;
        return $this;
    }
    /**
     * Flag to mark if a test suffix should be added to internal references.
     *
     * @return bool|null
     */
    public function getAddTestSuffixToInternalReference() : ?bool
    {
        return $this->addTestSuffixToInternalReference;
    }
    /**
     * Flag to mark if a test suffix should be added to internal references.
     *
     * @param bool|null $addTestSuffixToInternalReference
     *
     * @return self
     */
    public function setAddTestSuffixToInternalReference(?bool $addTestSuffixToInternalReference) : self
    {
        $this->addTestSuffixToInternalReference = $addTestSuffixToInternalReference;
        return $this;
    }
    /**
     * Flag to mark the shop as part of a Shopify installation that uses multiple shops.
     *
     * @return bool|null
     */
    public function getShopifyMultiShop() : ?bool
    {
        return $this->shopifyMultiShop;
    }
    /**
     * Flag to mark the shop as part of a Shopify installation that uses multiple shops.
     *
     * @param bool|null $shopifyMultiShop
     *
     * @return self
     */
    public function setShopifyMultiShop(?bool $shopifyMultiShop) : self
    {
        $this->shopifyMultiShop = $shopifyMultiShop;
        return $this;
    }
    /**
    * Flag to mark the shop as the default shop for a Shopify installation that uses multiple shops.\
    The default shop is used for e.g. fetching stock levels.
    *
    * @return bool|null
    */
    public function getShopifyDefaultShop() : ?bool
    {
        return $this->shopifyDefaultShop;
    }
    /**
    * Flag to mark the shop as the default shop for a Shopify installation that uses multiple shops.\
    The default shop is used for e.g. fetching stock levels.
    *
    * @param bool|null $shopifyDefaultShop
    *
    * @return self
    */
    public function setShopifyDefaultShop(?bool $shopifyDefaultShop) : self
    {
        $this->shopifyDefaultShop = $shopifyDefaultShop;
        return $this;
    }
    /**
    * The order tags to identify which shop to use in a Shopify installation that uses multiple shops.\
    If a Shopify order matches a tag, it will be assigned to this shop.
    *
    * @return string[]|null
    */
    public function getShopifyOrderTags() : ?array
    {
        return $this->shopifyOrderTags;
    }
    /**
    * The order tags to identify which shop to use in a Shopify installation that uses multiple shops.\
    If a Shopify order matches a tag, it will be assigned to this shop.
    *
    * @param string[]|null $shopifyOrderTags
    *
    * @return self
    */
    public function setShopifyOrderTags(?array $shopifyOrderTags) : self
    {
        $this->shopifyOrderTags = $shopifyOrderTags;
        return $this;
    }
}