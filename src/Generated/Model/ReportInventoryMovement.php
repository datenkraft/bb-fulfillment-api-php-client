<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ReportInventoryMovement extends \ArrayObject
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
     * Number of the product
     *
     * @var string
     */
    protected $productNumber;
    /**
     * Stock at the start of the period
     *
     * @var int
     */
    protected $stockStart;
    /**
     * Stock at the end of the period
     *
     * @var int
     */
    protected $stockEnd;
    /**
     * Stock added in the period
     *
     * @var int
     */
    protected $stockAdded;
    /**
     * Stock subtracted in the period
     *
     * @var int
     */
    protected $stockSubtracted;
    /**
     * Stock corrections in the period
     *
     * @var int
     */
    protected $stockCorrected;
    /**
     * Stock used for internal purposes in the period
     *
     * @var int
     */
    protected $stockUsedForOwnPurposes;
    /**
     * Stock returned in the period
     *
     * @var int
     */
    protected $stockReturned;
    /**
     * 
     *
     * @var ReportInventoryMovementEntry[]
     */
    protected $movementEntries;
    /**
     * Number of the product
     *
     * @return string
     */
    public function getProductNumber() : string
    {
        return $this->productNumber;
    }
    /**
     * Number of the product
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
     * Stock at the start of the period
     *
     * @return int
     */
    public function getStockStart() : int
    {
        return $this->stockStart;
    }
    /**
     * Stock at the start of the period
     *
     * @param int $stockStart
     *
     * @return self
     */
    public function setStockStart(int $stockStart) : self
    {
        $this->initialized['stockStart'] = true;
        $this->stockStart = $stockStart;
        return $this;
    }
    /**
     * Stock at the end of the period
     *
     * @return int
     */
    public function getStockEnd() : int
    {
        return $this->stockEnd;
    }
    /**
     * Stock at the end of the period
     *
     * @param int $stockEnd
     *
     * @return self
     */
    public function setStockEnd(int $stockEnd) : self
    {
        $this->initialized['stockEnd'] = true;
        $this->stockEnd = $stockEnd;
        return $this;
    }
    /**
     * Stock added in the period
     *
     * @return int
     */
    public function getStockAdded() : int
    {
        return $this->stockAdded;
    }
    /**
     * Stock added in the period
     *
     * @param int $stockAdded
     *
     * @return self
     */
    public function setStockAdded(int $stockAdded) : self
    {
        $this->initialized['stockAdded'] = true;
        $this->stockAdded = $stockAdded;
        return $this;
    }
    /**
     * Stock subtracted in the period
     *
     * @return int
     */
    public function getStockSubtracted() : int
    {
        return $this->stockSubtracted;
    }
    /**
     * Stock subtracted in the period
     *
     * @param int $stockSubtracted
     *
     * @return self
     */
    public function setStockSubtracted(int $stockSubtracted) : self
    {
        $this->initialized['stockSubtracted'] = true;
        $this->stockSubtracted = $stockSubtracted;
        return $this;
    }
    /**
     * Stock corrections in the period
     *
     * @return int
     */
    public function getStockCorrected() : int
    {
        return $this->stockCorrected;
    }
    /**
     * Stock corrections in the period
     *
     * @param int $stockCorrected
     *
     * @return self
     */
    public function setStockCorrected(int $stockCorrected) : self
    {
        $this->initialized['stockCorrected'] = true;
        $this->stockCorrected = $stockCorrected;
        return $this;
    }
    /**
     * Stock used for internal purposes in the period
     *
     * @return int
     */
    public function getStockUsedForOwnPurposes() : int
    {
        return $this->stockUsedForOwnPurposes;
    }
    /**
     * Stock used for internal purposes in the period
     *
     * @param int $stockUsedForOwnPurposes
     *
     * @return self
     */
    public function setStockUsedForOwnPurposes(int $stockUsedForOwnPurposes) : self
    {
        $this->initialized['stockUsedForOwnPurposes'] = true;
        $this->stockUsedForOwnPurposes = $stockUsedForOwnPurposes;
        return $this;
    }
    /**
     * Stock returned in the period
     *
     * @return int
     */
    public function getStockReturned() : int
    {
        return $this->stockReturned;
    }
    /**
     * Stock returned in the period
     *
     * @param int $stockReturned
     *
     * @return self
     */
    public function setStockReturned(int $stockReturned) : self
    {
        $this->initialized['stockReturned'] = true;
        $this->stockReturned = $stockReturned;
        return $this;
    }
    /**
     * 
     *
     * @return ReportInventoryMovementEntry[]
     */
    public function getMovementEntries() : array
    {
        return $this->movementEntries;
    }
    /**
     * 
     *
     * @param ReportInventoryMovementEntry[] $movementEntries
     *
     * @return self
     */
    public function setMovementEntries(array $movementEntries) : self
    {
        $this->initialized['movementEntries'] = true;
        $this->movementEntries = $movementEntries;
        return $this;
    }
}