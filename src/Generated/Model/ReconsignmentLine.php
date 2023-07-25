<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ReconsignmentLine
{
    /**
     * 
     *
     * @var string
     */
    protected $productNumber;
    /**
     * Number of items which have been put back to stock.
     *
     * @var int
     */
    protected $putBackToStockCount;
    /**
     * Number of items included in the reconsignment.
     *
     * @var int
     */
    protected $count;
    /**
     * Product unit
     *
     * @var string
     */
    protected $unit;
    /**
     * Weight of a single product
     *
     * @var float
     */
    protected $productWeight;
    /**
     * Product weight unit
     *
     * @var string
     */
    protected $productWeightUnit;
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
     * Number of items which have been put back to stock.
     *
     * @return int
     */
    public function getPutBackToStockCount() : int
    {
        return $this->putBackToStockCount;
    }
    /**
     * Number of items which have been put back to stock.
     *
     * @param int $putBackToStockCount
     *
     * @return self
     */
    public function setPutBackToStockCount(int $putBackToStockCount) : self
    {
        $this->putBackToStockCount = $putBackToStockCount;
        return $this;
    }
    /**
     * Number of items included in the reconsignment.
     *
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }
    /**
     * Number of items included in the reconsignment.
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
     * Product unit
     *
     * @return string
     */
    public function getUnit() : string
    {
        return $this->unit;
    }
    /**
     * Product unit
     *
     * @param string $unit
     *
     * @return self
     */
    public function setUnit(string $unit) : self
    {
        $this->unit = $unit;
        return $this;
    }
    /**
     * Weight of a single product
     *
     * @return float
     */
    public function getProductWeight() : float
    {
        return $this->productWeight;
    }
    /**
     * Weight of a single product
     *
     * @param float $productWeight
     *
     * @return self
     */
    public function setProductWeight(float $productWeight) : self
    {
        $this->productWeight = $productWeight;
        return $this;
    }
    /**
     * Product weight unit
     *
     * @return string
     */
    public function getProductWeightUnit() : string
    {
        return $this->productWeightUnit;
    }
    /**
     * Product weight unit
     *
     * @param string $productWeightUnit
     *
     * @return self
     */
    public function setProductWeightUnit(string $productWeightUnit) : self
    {
        $this->productWeightUnit = $productWeightUnit;
        return $this;
    }
}