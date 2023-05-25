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
     * product number
     *
     * @var string
     */
    protected $productNumber;
    /**
     * Number of items contained in the delivery
     *
     * @var int
     */
    protected $count;
    /**
     * product unit
     *
     * @var string|null
     */
    protected $unit;
    /**
     * serial numbers
     *
     * @var string[]
     */
    protected $serialNumbers;
    /**
     * product number
     *
     * @return string
     */
    public function getProductNumber() : string
    {
        return $this->productNumber;
    }
    /**
     * product number
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
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }
    /**
     * Number of items contained in the delivery
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
     * product unit
     *
     * @return string|null
     */
    public function getUnit() : ?string
    {
        return $this->unit;
    }
    /**
     * product unit
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
     * serial numbers
     *
     * @return string[]
     */
    public function getSerialNumbers() : array
    {
        return $this->serialNumbers;
    }
    /**
     * serial numbers
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