<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class NewOrderItem
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
     * 
     *
     * @var NewOrderItemPrice|null
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
     * 
     *
     * @return NewOrderItemPrice|null
     */
    public function getPrice() : ?NewOrderItemPrice
    {
        return $this->price;
    }
    /**
     * 
     *
     * @param NewOrderItemPrice|null $price
     *
     * @return self
     */
    public function setPrice(?NewOrderItemPrice $price) : self
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