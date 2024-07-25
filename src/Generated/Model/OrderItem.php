<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class OrderItem extends \ArrayObject
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
     * Valid product number
     *
     * @var string
     */
    protected $productNumber;
    /**
     * Item Title (optional)
     *
     * @var string|null
     */
    protected $title;
    /**
     * Positive number of items. Always null for bundles
     *
     * @var int|null
     */
    protected $count;
    /**
     * Product number of the customer. Not available for order items of type bundle'. Will be dismissed if given.
     *
     * @var string|null
     */
    protected $externalProductNumber;
    /**
     * Number of canceled items, null for bundles.
     *
     * @var int|null
     */
    protected $canceledCount;
    /**
     * Number of available items, null for bundles.
     *
     * @var int|null
     */
    protected $availableCount;
    /**
     * Number of delivered items, null for bundles.
     *
     * @var int|null
     */
    protected $deliveredCount;
    /**
     * Number of returned items, null for bundles.
     *
     * @var int|null
     */
    protected $returnedCount;
    /**
     * The selling price of the item.
     *
     * @var OrderItemPrice
     */
    protected $price;
    /**
     * Additional options
     *
     * @var mixed[]|null
     */
    protected $options;
    /**
     * 
     *
     * @var BundledOrderItem[]|null
     */
    protected $bundledProducts;
    /**
     * Valid product number
     *
     * @return string
     */
    public function getProductNumber() : string
    {
        return $this->productNumber;
    }
    /**
     * Valid product number
     *
     * @param string $productNumber
     *
     * @return self
     */
    public function setProductNumber(string $productNumber) : self
    {
        $this->initialized['productNumber'] = true;
        $this->productNumber = $productNumber;
        return $this;
    }
    /**
     * Item Title (optional)
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * Item Title (optional)
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * Positive number of items. Always null for bundles
     *
     * @return int|null
     */
    public function getCount() : ?int
    {
        return $this->count;
    }
    /**
     * Positive number of items. Always null for bundles
     *
     * @param int|null $count
     *
     * @return self
     */
    public function setCount(?int $count) : self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * Product number of the customer. Not available for order items of type bundle'. Will be dismissed if given.
     *
     * @return string|null
     */
    public function getExternalProductNumber() : ?string
    {
        return $this->externalProductNumber;
    }
    /**
     * Product number of the customer. Not available for order items of type bundle'. Will be dismissed if given.
     *
     * @param string|null $externalProductNumber
     *
     * @return self
     */
    public function setExternalProductNumber(?string $externalProductNumber) : self
    {
        $this->initialized['externalProductNumber'] = true;
        $this->externalProductNumber = $externalProductNumber;
        return $this;
    }
    /**
     * Number of canceled items, null for bundles.
     *
     * @return int|null
     */
    public function getCanceledCount() : ?int
    {
        return $this->canceledCount;
    }
    /**
     * Number of canceled items, null for bundles.
     *
     * @param int|null $canceledCount
     *
     * @return self
     */
    public function setCanceledCount(?int $canceledCount) : self
    {
        $this->initialized['canceledCount'] = true;
        $this->canceledCount = $canceledCount;
        return $this;
    }
    /**
     * Number of available items, null for bundles.
     *
     * @return int|null
     */
    public function getAvailableCount() : ?int
    {
        return $this->availableCount;
    }
    /**
     * Number of available items, null for bundles.
     *
     * @param int|null $availableCount
     *
     * @return self
     */
    public function setAvailableCount(?int $availableCount) : self
    {
        $this->initialized['availableCount'] = true;
        $this->availableCount = $availableCount;
        return $this;
    }
    /**
     * Number of delivered items, null for bundles.
     *
     * @return int|null
     */
    public function getDeliveredCount() : ?int
    {
        return $this->deliveredCount;
    }
    /**
     * Number of delivered items, null for bundles.
     *
     * @param int|null $deliveredCount
     *
     * @return self
     */
    public function setDeliveredCount(?int $deliveredCount) : self
    {
        $this->initialized['deliveredCount'] = true;
        $this->deliveredCount = $deliveredCount;
        return $this;
    }
    /**
     * Number of returned items, null for bundles.
     *
     * @return int|null
     */
    public function getReturnedCount() : ?int
    {
        return $this->returnedCount;
    }
    /**
     * Number of returned items, null for bundles.
     *
     * @param int|null $returnedCount
     *
     * @return self
     */
    public function setReturnedCount(?int $returnedCount) : self
    {
        $this->initialized['returnedCount'] = true;
        $this->returnedCount = $returnedCount;
        return $this;
    }
    /**
     * The selling price of the item.
     *
     * @return OrderItemPrice
     */
    public function getPrice() : OrderItemPrice
    {
        return $this->price;
    }
    /**
     * The selling price of the item.
     *
     * @param OrderItemPrice $price
     *
     * @return self
     */
    public function setPrice(OrderItemPrice $price) : self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * Additional options
     *
     * @return mixed[]|null
     */
    public function getOptions() : ?iterable
    {
        return $this->options;
    }
    /**
     * Additional options
     *
     * @param mixed[]|null $options
     *
     * @return self
     */
    public function setOptions(?iterable $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    /**
     * 
     *
     * @return BundledOrderItem[]|null
     */
    public function getBundledProducts() : ?array
    {
        return $this->bundledProducts;
    }
    /**
     * 
     *
     * @param BundledOrderItem[]|null $bundledProducts
     *
     * @return self
     */
    public function setBundledProducts(?array $bundledProducts) : self
    {
        $this->initialized['bundledProducts'] = true;
        $this->bundledProducts = $bundledProducts;
        return $this;
    }
}