<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class UpdateShopMeta extends \ArrayObject
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
     * Overwrite currency of shopify orders.
     *
     * @var string|null
     */
    protected $defaultCurrency;
    /**
    * Flag to mark if it is allowed to set a customer's email in a third party app or via the API.
    If false the shop email will be used as default.
    *
    * @var bool|null
    */
    protected $overwriteCustomerEmailEnabled;
    /**
     * Text to be added to the beginning of the orderNotes of every order created for the shop.
     *
     * @var string|null
     */
    protected $orderNotesPrecedingText;
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
    /**
    * Flag to mark if it is allowed to set a customer's email in a third party app or via the API.
    If false the shop email will be used as default.
    *
    * @return bool|null
    */
    public function getOverwriteCustomerEmailEnabled() : ?bool
    {
        return $this->overwriteCustomerEmailEnabled;
    }
    /**
    * Flag to mark if it is allowed to set a customer's email in a third party app or via the API.
    If false the shop email will be used as default.
    *
    * @param bool|null $overwriteCustomerEmailEnabled
    *
    * @return self
    */
    public function setOverwriteCustomerEmailEnabled(?bool $overwriteCustomerEmailEnabled) : self
    {
        $this->initialized['overwriteCustomerEmailEnabled'] = true;
        $this->overwriteCustomerEmailEnabled = $overwriteCustomerEmailEnabled;
        return $this;
    }
    /**
     * Text to be added to the beginning of the orderNotes of every order created for the shop.
     *
     * @return string|null
     */
    public function getOrderNotesPrecedingText() : ?string
    {
        return $this->orderNotesPrecedingText;
    }
    /**
     * Text to be added to the beginning of the orderNotes of every order created for the shop.
     *
     * @param string|null $orderNotesPrecedingText
     *
     * @return self
     */
    public function setOrderNotesPrecedingText(?string $orderNotesPrecedingText) : self
    {
        $this->initialized['orderNotesPrecedingText'] = true;
        $this->orderNotesPrecedingText = $orderNotesPrecedingText;
        return $this;
    }
}