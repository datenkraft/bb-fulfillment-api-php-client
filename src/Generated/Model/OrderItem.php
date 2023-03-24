<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class OrderItem
{
    /**
     * 
     *
     * @var string
     */
    protected $productNumber;
    /**
     * Item title (optional)
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
     * Product number of the customer
     *
     * @var string|null
     */
    protected $externalProductNumber;
    /**
    * The selling price of the item.\
    Note: This field is required if the delivery address of the order requires customs clearance.
    *
    * @var OrderItemPrice|null
    */
    protected $price;
    /**
     * Additional options (optional, TBD)
     *
     * @var mixed|null
     */
    protected $options;
    /**
     * 
     *
     * @return string
     */
    public function getProductNumber() : string
    {
        return $this->productNumber;
    }
    /**
     * 
     *
     * @param string $productNumber
     *
     * @return self
     */
    public function setProductNumber(string $productNumber) : self
    {
        $this->productNumber = $productNumber;
        return $this;
    }
    /**
     * Item title (optional)
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * Item title (optional)
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
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
        $this->count = $count;
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
        $this->externalProductNumber = $externalProductNumber;
        return $this;
    }
    /**
    * The selling price of the item.\
    Note: This field is required if the delivery address of the order requires customs clearance.
    *
    * @return OrderItemPrice|null
    */
    public function getPrice() : ?OrderItemPrice
    {
        return $this->price;
    }
    /**
    * The selling price of the item.\
    Note: This field is required if the delivery address of the order requires customs clearance.
    *
    * @param OrderItemPrice|null $price
    *
    * @return self
    */
    public function setPrice(?OrderItemPrice $price) : self
    {
        $this->price = $price;
        return $this;
    }
    /**
     * Additional options (optional, TBD)
     *
     * @return mixed
     */
    public function getOptions()
    {
        return $this->options;
    }
    /**
     * Additional options (optional, TBD)
     *
     * @param mixed $options
     *
     * @return self
     */
    public function setOptions($options) : self
    {
        $this->options = $options;
        return $this;
    }
}