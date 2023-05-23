<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ShopMeta extends \ArrayObject
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
    protected $shopifyMultiShop = false;
    /**
    * Flag to mark the shop as the default shop for a Shopify installation that uses multiple shops.\
    The default shop is used for e.g. fetching stock levels.
    *
    * @var bool|null
    */
    protected $shopifyDefaultShop = true;
    /**
    * The order country code (ISO 3166-1 alpha-2) to identify which shop to use in a Shopify
    installation that uses multiple shops.\
    If a Shopify order matches this country code, it will be assigned to this shop.
    *
    * @var string|null
    */
    protected $shopifyOrderCountryCode;
    /**
    * Flag to indicate whether firstname, lastname, and invoiceAddress fields are available for order
    customers or not.
    *
    * @var bool|null
    */
    protected $invoiceEnabled = false;
    /**
     * Overwrite currency of shopify orders.
     *
     * @var string|null
     */
    protected $defaultCurrency;
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
        $this->initialized['shopifyShopDomain'] = true;
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
        $this->initialized['testShop'] = true;
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
        $this->initialized['testShopResetNotBefore'] = true;
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
        $this->initialized['sandboxMode'] = true;
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
        $this->initialized['addTestSuffixToInternalReference'] = true;
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
        $this->initialized['shopifyMultiShop'] = true;
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
        $this->initialized['shopifyDefaultShop'] = true;
        $this->shopifyDefaultShop = $shopifyDefaultShop;
        return $this;
    }
    /**
    * The order country code (ISO 3166-1 alpha-2) to identify which shop to use in a Shopify
    installation that uses multiple shops.\
    If a Shopify order matches this country code, it will be assigned to this shop.
    *
    * @return string|null
    */
    public function getShopifyOrderCountryCode() : ?string
    {
        return $this->shopifyOrderCountryCode;
    }
    /**
    * The order country code (ISO 3166-1 alpha-2) to identify which shop to use in a Shopify
    installation that uses multiple shops.\
    If a Shopify order matches this country code, it will be assigned to this shop.
    *
    * @param string|null $shopifyOrderCountryCode
    *
    * @return self
    */
    public function setShopifyOrderCountryCode(?string $shopifyOrderCountryCode) : self
    {
        $this->initialized['shopifyOrderCountryCode'] = true;
        $this->shopifyOrderCountryCode = $shopifyOrderCountryCode;
        return $this;
    }
    /**
    * Flag to indicate whether firstname, lastname, and invoiceAddress fields are available for order
    customers or not.
    *
    * @return bool|null
    */
    public function getInvoiceEnabled() : ?bool
    {
        return $this->invoiceEnabled;
    }
    /**
    * Flag to indicate whether firstname, lastname, and invoiceAddress fields are available for order
    customers or not.
    *
    * @param bool|null $invoiceEnabled
    *
    * @return self
    */
    public function setInvoiceEnabled(?bool $invoiceEnabled) : self
    {
        $this->initialized['invoiceEnabled'] = true;
        $this->invoiceEnabled = $invoiceEnabled;
        return $this;
    }
    /**
     * Overwrite currency of shopify orders.
     *
     * @return string|null
     */
    public function getDefaultCurrency() : ?string
    {
        return $this->defaultCurrency;
    }
    /**
     * Overwrite currency of shopify orders.
     *
     * @param string|null $defaultCurrency
     *
     * @return self
     */
    public function setDefaultCurrency(?string $defaultCurrency) : self
    {
        $this->initialized['defaultCurrency'] = true;
        $this->defaultCurrency = $defaultCurrency;
        return $this;
    }
}