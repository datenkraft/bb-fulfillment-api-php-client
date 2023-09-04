<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class NewInboundDeliveryProduct extends \ArrayObject
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
     * Number of the announced products in the inbound delivery
     *
     * @var int
     */
    protected $announcedCount;
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
     * Number of the announced products in the inbound delivery
     *
     * @return int
     */
    public function getAnnouncedCount() : int
    {
        return $this->announcedCount;
    }
    /**
     * Number of the announced products in the inbound delivery
     *
     * @param int $announcedCount
     *
     * @return self
     */
    public function setAnnouncedCount(int $announcedCount) : self
    {
        $this->initialized['announcedCount'] = true;
        $this->announcedCount = $announcedCount;
        return $this;
    }
}