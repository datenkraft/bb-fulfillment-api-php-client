<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ShipmentLine extends \ArrayObject
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
     * Product number
     *
     * @var string
     */
    protected $productNumber;
    /**
     * Number of items contained in the delivery
     *
     * @var float
     */
    protected $count;
    /**
     * Product unit
     *
     * @var string|null
     */
    protected $unit;
    /**
     * Serial numbers
     *
     * @var string[]
     */
    protected $serialNumbers;
    /**
     * Product number
     *
     * @return string
     */
    public function getProductNumber() : string
    {
        return $this->productNumber;
    }
    /**
     * Product number
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
     * Number of items contained in the delivery
     *
     * @return float
     */
    public function getCount() : float
    {
        return $this->count;
    }
    /**
     * Number of items contained in the delivery
     *
     * @param float $count
     *
     * @return self
     */
    public function setCount(float $count) : self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * Product unit
     *
     * @return string|null
     */
    public function getUnit() : ?string
    {
        return $this->unit;
    }
    /**
     * Product unit
     *
     * @param string|null $unit
     *
     * @return self
     */
    public function setUnit(?string $unit) : self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;
        return $this;
    }
    /**
     * Serial numbers
     *
     * @return string[]
     */
    public function getSerialNumbers() : array
    {
        return $this->serialNumbers;
    }
    /**
     * Serial numbers
     *
     * @param string[] $serialNumbers
     *
     * @return self
     */
    public function setSerialNumbers(array $serialNumbers) : self
    {
        $this->initialized['serialNumbers'] = true;
        $this->serialNumbers = $serialNumbers;
        return $this;
    }
}