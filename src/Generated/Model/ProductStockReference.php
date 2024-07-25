<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ProductStockReference extends \ArrayObject
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
     * Type code of the product stock reference.
     *
     * @var string
     */
    protected $typeCode;
    /**
     * The amount of the stock associated with the reference.
     *
     * @var int
     */
    protected $count;
    /**
     * 
     *
     * @var ProductStockReferenceReference
     */
    protected $reference;
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
     * Type code of the product stock reference.
     *
     * @return string
     */
    public function getTypeCode() : string
    {
        return $this->typeCode;
    }
    /**
     * Type code of the product stock reference.
     *
     * @param string $typeCode
     *
     * @return self
     */
    public function setTypeCode(string $typeCode) : self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;
        return $this;
    }
    /**
     * The amount of the stock associated with the reference.
     *
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }
    /**
     * The amount of the stock associated with the reference.
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
     * 
     *
     * @return ProductStockReferenceReference
     */
    public function getReference() : ProductStockReferenceReference
    {
        return $this->reference;
    }
    /**
     * 
     *
     * @param ProductStockReferenceReference $reference
     *
     * @return self
     */
    public function setReference(ProductStockReferenceReference $reference) : self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;
        return $this;
    }
}