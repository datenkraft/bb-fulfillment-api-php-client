<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class BundledOrderItem extends \ArrayObject
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
     * @var int
     */
    protected $count;
    /**
     * Product number of the customer. Not available for order items of type bundle'. Will be dismissed if given.
     *
     * @var string|null
     */
    protected $externalProductNumber;
    /**
     * The selling price of the item.
     *
     * @var BundledOrderItemPrice
     */
    protected $price;
    /**
     * Number of canceled items
     *
     * @var int
     */
    protected $canceledCount;
    /**
     * Number of available items
     *
     * @var int
     */
    protected $availableCount;
    /**
     * Number of delivered items
     *
     * @var int
     */
    protected $deliveredCount;
    /**
     * Number of returned items
     *
     * @var int
     */
    protected $returnedCount;
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
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }
    /**
     * Positive number of items. Always null for bundles
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count) : self
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
     * The selling price of the item.
     *
     * @return BundledOrderItemPrice
     */
    public function getPrice() : BundledOrderItemPrice
    {
        return $this->price;
    }
    /**
     * The selling price of the item.
     *
     * @param BundledOrderItemPrice $price
     *
     * @return self
     */
    public function setPrice(BundledOrderItemPrice $price) : self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * Number of canceled items
     *
     * @return int
     */
    public function getCanceledCount() : int
    {
        return $this->canceledCount;
    }
    /**
     * Number of canceled items
     *
     * @param int $canceledCount
     *
     * @return self
     */
    public function setCanceledCount(int $canceledCount) : self
    {
        $this->initialized['canceledCount'] = true;
        $this->canceledCount = $canceledCount;
        return $this;
    }
    /**
     * Number of available items
     *
     * @return int
     */
    public function getAvailableCount() : int
    {
        return $this->availableCount;
    }
    /**
     * Number of available items
     *
     * @param int $availableCount
     *
     * @return self
     */
    public function setAvailableCount(int $availableCount) : self
    {
        $this->initialized['availableCount'] = true;
        $this->availableCount = $availableCount;
        return $this;
    }
    /**
     * Number of delivered items
     *
     * @return int
     */
    public function getDeliveredCount() : int
    {
        return $this->deliveredCount;
    }
    /**
     * Number of delivered items
     *
     * @param int $deliveredCount
     *
     * @return self
     */
    public function setDeliveredCount(int $deliveredCount) : self
    {
        $this->initialized['deliveredCount'] = true;
        $this->deliveredCount = $deliveredCount;
        return $this;
    }
    /**
     * Number of returned items
     *
     * @return int
     */
    public function getReturnedCount() : int
    {
        return $this->returnedCount;
    }
    /**
     * Number of returned items
     *
     * @param int $returnedCount
     *
     * @return self
     */
    public function setReturnedCount(int $returnedCount) : self
    {
        $this->initialized['returnedCount'] = true;
        $this->returnedCount = $returnedCount;
        return $this;
    }
}