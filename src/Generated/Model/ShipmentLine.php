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
     * Product number of the bundle which the product of the shipment line is part of.
     *
     * @var string
     */
    protected $productNumberBundle;
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
     * Allows the traceability of the products in the deliveries.
     *
     * @var string[]
     */
    protected $traceCodes;
    /**
     * Batches
     *
     * @var Batch[]
     */
    protected $batches;
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
     * Product number of the bundle which the product of the shipment line is part of.
     *
     * @return string
     */
    public function getProductNumberBundle() : string
    {
        return $this->productNumberBundle;
    }
    /**
     * Product number of the bundle which the product of the shipment line is part of.
     *
     * @param string $productNumberBundle
     *
     * @return self
     */
    public function setProductNumberBundle(string $productNumberBundle) : self
    {
        $this->initialized['productNumberBundle'] = true;
        $this->productNumberBundle = $productNumberBundle;
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
    /**
     * Allows the traceability of the products in the deliveries.
     *
     * @return string[]
     */
    public function getTraceCodes() : array
    {
        return $this->traceCodes;
    }
    /**
     * Allows the traceability of the products in the deliveries.
     *
     * @param string[] $traceCodes
     *
     * @return self
     */
    public function setTraceCodes(array $traceCodes) : self
    {
        $this->initialized['traceCodes'] = true;
        $this->traceCodes = $traceCodes;
        return $this;
    }
    /**
     * Batches
     *
     * @return Batch[]
     */
    public function getBatches() : array
    {
        return $this->batches;
    }
    /**
     * Batches
     *
     * @param Batch[] $batches
     *
     * @return self
     */
    public function setBatches(array $batches) : self
    {
        $this->initialized['batches'] = true;
        $this->batches = $batches;
        return $this;
    }
}