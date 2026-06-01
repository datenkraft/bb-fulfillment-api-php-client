<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ShopMeta extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
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
     * Flag to indicate whether firstname, lastname, and invoiceAddress fields are available for order
     * customers or not.
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
     * Flag to mark if it is allowed to set a customer's email in a third party app or via the API.
     * If false the shop email will be used as default.
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
     * Default notes to be printed on the delivery slip when an order is created without
     * deliverySlipNotes.
     *
     * @var string|null
     */
    protected $deliverySlipNotes;
    /**
     * Default for `options.printOrderDocument` of orders of this shop, controlling whether a
     * delivery slip (Lieferschein) is printed and included with the shipment. When unset, the
     * default of `true` applies. Always `true` for orders into customs-required
     * countries.
     *
     * @var bool|null
     */
    protected $printOrderDocument = true;
    /**
     * Domain of the Shopify shop.
     *
     * @return string|null
     */
    public function getShopifyShopDomain(): ?string
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
    public function setShopifyShopDomain(?string $shopifyShopDomain): self
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
    public function getTestShop(): ?bool
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
    public function setTestShop(?bool $testShop): self
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
    public function getTestShopResetNotBefore(): ?\DateTime
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
    public function setTestShopResetNotBefore(?\DateTime $testShopResetNotBefore): self
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
    public function getSandboxMode(): ?bool
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
    public function setSandboxMode(?bool $sandboxMode): self
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
    public function getAddTestSuffixToInternalReference(): ?bool
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
    public function setAddTestSuffixToInternalReference(?bool $addTestSuffixToInternalReference): self
    {
        $this->initialized['addTestSuffixToInternalReference'] = true;
        $this->addTestSuffixToInternalReference = $addTestSuffixToInternalReference;
        return $this;
    }
    /**
     * Flag to indicate whether firstname, lastname, and invoiceAddress fields are available for order
     * customers or not.
     *
     * @return bool|null
     */
    public function getInvoiceEnabled(): ?bool
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
    public function setInvoiceEnabled(?bool $invoiceEnabled): self
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
    public function getDefaultCurrency(): ?string
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
    public function setDefaultCurrency(?string $defaultCurrency): self
    {
        $this->initialized['defaultCurrency'] = true;
        $this->defaultCurrency = $defaultCurrency;
        return $this;
    }
    /**
     * Flag to mark if it is allowed to set a customer's email in a third party app or via the API.
     * If false the shop email will be used as default.
     *
     * @return bool|null
     */
    public function getOverwriteCustomerEmailEnabled(): ?bool
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
    public function setOverwriteCustomerEmailEnabled(?bool $overwriteCustomerEmailEnabled): self
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
    public function getOrderNotesPrecedingText(): ?string
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
    public function setOrderNotesPrecedingText(?string $orderNotesPrecedingText): self
    {
        $this->initialized['orderNotesPrecedingText'] = true;
        $this->orderNotesPrecedingText = $orderNotesPrecedingText;
        return $this;
    }
    /**
     * Default notes to be printed on the delivery slip when an order is created without
     * deliverySlipNotes.
     *
     * @return string|null
     */
    public function getDeliverySlipNotes(): ?string
    {
        return $this->deliverySlipNotes;
    }
    /**
    * Default notes to be printed on the delivery slip when an order is created without
    deliverySlipNotes.
    *
    * @param string|null $deliverySlipNotes
    *
    * @return self
    */
    public function setDeliverySlipNotes(?string $deliverySlipNotes): self
    {
        $this->initialized['deliverySlipNotes'] = true;
        $this->deliverySlipNotes = $deliverySlipNotes;
        return $this;
    }
    /**
     * Default for `options.printOrderDocument` of orders of this shop, controlling whether a
     * delivery slip (Lieferschein) is printed and included with the shipment. When unset, the
     * default of `true` applies. Always `true` for orders into customs-required
     * countries.
     *
     * @return bool|null
     */
    public function getPrintOrderDocument(): ?bool
    {
        return $this->printOrderDocument;
    }
    /**
    * Default for `options.printOrderDocument` of orders of this shop, controlling whether a
    delivery slip (Lieferschein) is printed and included with the shipment. When unset, the
    default of `true` applies. Always `true` for orders into customs-required
    countries.
    *
    * @param bool|null $printOrderDocument
    *
    * @return self
    */
    public function setPrintOrderDocument(?bool $printOrderDocument): self
    {
        $this->initialized['printOrderDocument'] = true;
        $this->printOrderDocument = $printOrderDocument;
        return $this;
    }
}