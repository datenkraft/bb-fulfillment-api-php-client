<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class NewOrderItem extends \ArrayObject
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
     * Positive number of items to order
     *
     * @var int
     */
    protected $count;
    /**
     * Number of canceled items
     *
     * @var int
     */
    protected $canceledCount;
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
     * Product number of the customer
     *
     * @var string|null
     */
    protected $externalProductNumber;
    /**
    * The selling price of the item.\
    Note: This field is required if the delivery address of the order requires customs clearance.
    *
    * @var NewOrderItemPrice|null
    */
    protected $price;
    /**
     * Additional options (optional, TBD)
     *
     * @var mixed[]|null
     */
    protected $options;
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
     * Positive number of items to order
     *
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }
    /**
     * Positive number of items to order
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
    /**
     * Product number of the customer
     *
     * @return string|null
     */
    public function getExternalProductNumber() : ?string
    {
        return $this->externalProductNumber;
    }
    /**
     * Product number of the customer
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
    * The selling price of the item.\
    Note: This field is required if the delivery address of the order requires customs clearance.
    *
    * @return NewOrderItemPrice|null
    */
    public function getPrice() : ?NewOrderItemPrice
    {
        return $this->price;
    }
    /**
    * The selling price of the item.\
    Note: This field is required if the delivery address of the order requires customs clearance.
    *
    * @param NewOrderItemPrice|null $price
    *
    * @return self
    */
    public function setPrice(?NewOrderItemPrice $price) : self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * Additional options (optional, TBD)
     *
     * @return mixed[]|null
     */
    public function getOptions() : ?iterable
    {
        return $this->options;
    }
    /**
     * Additional options (optional, TBD)
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
}