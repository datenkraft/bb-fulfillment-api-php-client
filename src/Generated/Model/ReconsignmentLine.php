<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ReconsignmentLine extends \ArrayObject
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
     * 
     *
     * @var string
     */
    protected $productNumber;
    /**
     * Number of items which have been put back to stock. Null for bundles
     *
     * @var int|null
     */
    protected $putBackToStockCount;
    /**
     * Number of items included in the reconsignment. Null for bundles
     *
     * @var int|null
     */
    protected $count;
    /**
     * Product unit.  Null for bundles
     *
     * @var string|null
     */
    protected $unit;
    /**
     * Weight of a single product.  Null for bundles
     *
     * @var float|null
     */
    protected $productWeight;
    /**
     * Product weight unit.  Null for bundles
     *
     * @var string|null
     */
    protected $productWeightUnit;
    /**
     * 
     *
     * @var ReconsignmentLineBundledProduct[]|null
     */
    protected $bundledProducts;
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
        $this->initialized['productNumber'] = true;
        $this->productNumber = $productNumber;
        return $this;
    }
    /**
     * Number of items which have been put back to stock. Null for bundles
     *
     * @return int|null
     */
    public function getPutBackToStockCount() : ?int
    {
        return $this->putBackToStockCount;
    }
    /**
     * Number of items which have been put back to stock. Null for bundles
     *
     * @param int|null $putBackToStockCount
     *
     * @return self
     */
    public function setPutBackToStockCount(?int $putBackToStockCount) : self
    {
        $this->initialized['putBackToStockCount'] = true;
        $this->putBackToStockCount = $putBackToStockCount;
        return $this;
    }
    /**
     * Number of items included in the reconsignment. Null for bundles
     *
     * @return int|null
     */
    public function getCount() : ?int
    {
        return $this->count;
    }
    /**
     * Number of items included in the reconsignment. Null for bundles
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
     * Product unit.  Null for bundles
     *
     * @return string|null
     */
    public function getUnit() : ?string
    {
        return $this->unit;
    }
    /**
     * Product unit.  Null for bundles
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
     * Weight of a single product.  Null for bundles
     *
     * @return float|null
     */
    public function getProductWeight() : ?float
    {
        return $this->productWeight;
    }
    /**
     * Weight of a single product.  Null for bundles
     *
     * @param float|null $productWeight
     *
     * @return self
     */
    public function setProductWeight(?float $productWeight) : self
    {
        $this->initialized['productWeight'] = true;
        $this->productWeight = $productWeight;
        return $this;
    }
    /**
     * Product weight unit.  Null for bundles
     *
     * @return string|null
     */
    public function getProductWeightUnit() : ?string
    {
        return $this->productWeightUnit;
    }
    /**
     * Product weight unit.  Null for bundles
     *
     * @param string|null $productWeightUnit
     *
     * @return self
     */
    public function setProductWeightUnit(?string $productWeightUnit) : self
    {
        $this->initialized['productWeightUnit'] = true;
        $this->productWeightUnit = $productWeightUnit;
        return $this;
    }
    /**
     * 
     *
     * @return ReconsignmentLineBundledProduct[]|null
     */
    public function getBundledProducts() : ?array
    {
        return $this->bundledProducts;
    }
    /**
     * 
     *
     * @param ReconsignmentLineBundledProduct[]|null $bundledProducts
     *
     * @return self
     */
    public function setBundledProducts(?array $bundledProducts) : self
    {
        $this->initialized['bundledProducts'] = true;
        $this->bundledProducts = $bundledProducts;
        return $this;
    }
}