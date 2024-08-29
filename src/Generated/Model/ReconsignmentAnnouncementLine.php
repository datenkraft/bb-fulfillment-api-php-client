<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ReconsignmentAnnouncementLine extends \ArrayObject
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
     * Number of items included in the reconsignment announcement. Null for bundles
     *
     * @var int|null
     */
    protected $count;
    /**
     * 
     *
     * @var ReconsignmentAnnouncementLineBundledProduct[]|null
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
     * Number of items included in the reconsignment announcement. Null for bundles
     *
     * @return int|null
     */
    public function getCount() : ?int
    {
        return $this->count;
    }
    /**
     * Number of items included in the reconsignment announcement. Null for bundles
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
     * 
     *
     * @return ReconsignmentAnnouncementLineBundledProduct[]|null
     */
    public function getBundledProducts() : ?array
    {
        return $this->bundledProducts;
    }
    /**
     * 
     *
     * @param ReconsignmentAnnouncementLineBundledProduct[]|null $bundledProducts
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