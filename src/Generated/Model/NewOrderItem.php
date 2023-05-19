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
    * The price value rounded to 2 decimals with a dot used as separator. Note: This price value refers to
    a single unit and is not an aggregated price value, which may be calculated by multiplying this price value by the
    corresponding item count.
    *
    * @var float
    */
    protected $value;
    /**
     * The price type
     *
     * @var string
     */
    protected $type;
    /**
     * The VAT in percent
     *
     * @var float
     */
    protected $vat;
    /**
     * The currency code (ISO 4217)
     *
     * @var string
     */
    protected $currencyCode;
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
     * @return OrderItemPrice|null
     */
    public function getPrice() : ?OrderItemPrice
    {
        return $this->price;
    }
    /**
     * 
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
    /**
    * The price value rounded to 2 decimals with a dot used as separator. Note: This price value refers to
    a single unit and is not an aggregated price value, which may be calculated by multiplying this price value by the
    corresponding item count.
    *
    * @return float
    */
    public function getValue() : float
    {
        return $this->value;
    }
    /**
    * The price value rounded to 2 decimals with a dot used as separator. Note: This price value refers to
    a single unit and is not an aggregated price value, which may be calculated by multiplying this price value by the
    corresponding item count.
    *
    * @param float $value
    *
    * @return self
    */
    public function setValue(float $value) : self
    {
        $this->value = $value;
        return $this;
    }
    /**
     * The price type
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The price type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * The VAT in percent
     *
     * @return float
     */
    public function getVat() : float
    {
        return $this->vat;
    }
    /**
     * The VAT in percent
     *
     * @param float $vat
     *
     * @return self
     */
    public function setVat(float $vat) : self
    {
        $this->vat = $vat;
        return $this;
    }
    /**
     * The currency code (ISO 4217)
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
     * The currency code (ISO 4217)
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(string $currencyCode) : self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
}