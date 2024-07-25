<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class BaseOrderItem extends \ArrayObject
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
}