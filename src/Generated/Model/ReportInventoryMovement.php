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
     * Title of the product
     *
     * @var string|null
     */
    protected $productTitle;
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
     * Stock subtracted (internal and external) in the period
     *
     * @var int
     */
    protected $stockSubtracted;
    /**
    * Stock subtracted in the period.\
    Note: 'stockSubtracted' already contains 'stockSubtractedExternal'.
    *
    * @var int
    */
    protected $stockSubtractedExternal;
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
     * Stock returned (internal and external) in the period
     *
     * @var int
     */
    protected $stockReturned;
    /**
    * Stock subtracted in the period.\
    Note: 'stockReturned' already contains 'stockReturnedExternal'.
    *
    * @var int
    */
    protected $stockReturnedExternal;
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
     * Title of the product
     *
     * @return string|null
     */
    public function getProductTitle() : ?string
    {
        return $this->productTitle;
    }
    /**
     * Title of the product
     *
     * @param string|null $productTitle
     *
     * @return self
     */
    public function setProductTitle(?string $productTitle) : self
    {
        $this->initialized['productTitle'] = true;
        $this->productTitle = $productTitle;
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
     * Stock subtracted (internal and external) in the period
     *
     * @return int
     */
    public function getStockSubtracted() : int
    {
        return $this->stockSubtracted;
    }
    /**
     * Stock subtracted (internal and external) in the period
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
    * Stock subtracted in the period.\
    Note: 'stockSubtracted' already contains 'stockSubtractedExternal'.
    *
    * @return int
    */
    public function getStockSubtractedExternal() : int
    {
        return $this->stockSubtractedExternal;
    }
    /**
    * Stock subtracted in the period.\
    Note: 'stockSubtracted' already contains 'stockSubtractedExternal'.
    *
    * @param int $stockSubtractedExternal
    *
    * @return self
    */
    public function setStockSubtractedExternal(int $stockSubtractedExternal) : self
    {
        $this->initialized['stockSubtractedExternal'] = true;
        $this->stockSubtractedExternal = $stockSubtractedExternal;
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
     * Stock returned (internal and external) in the period
     *
     * @return int
     */
    public function getStockReturned() : int
    {
        return $this->stockReturned;
    }
    /**
     * Stock returned (internal and external) in the period
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
    * Stock subtracted in the period.\
    Note: 'stockReturned' already contains 'stockReturnedExternal'.
    *
    * @return int
    */
    public function getStockReturnedExternal() : int
    {
        return $this->stockReturnedExternal;
    }
    /**
    * Stock subtracted in the period.\
    Note: 'stockReturned' already contains 'stockReturnedExternal'.
    *
    * @param int $stockReturnedExternal
    *
    * @return self
    */
    public function setStockReturnedExternal(int $stockReturnedExternal) : self
    {
        $this->initialized['stockReturnedExternal'] = true;
        $this->stockReturnedExternal = $stockReturnedExternal;
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