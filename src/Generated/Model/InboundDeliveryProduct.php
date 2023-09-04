<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class InboundDeliveryProduct extends \ArrayObject
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
     * Title of the product
     *
     * @var string
     */
    protected $productTitle;
    /**
     * Number of actual delivered products in the inbound delivery
     *
     * @var int
     */
    protected $deliveredCount;
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
    /**
     * Title of the product
     *
     * @return string
     */
    public function getProductTitle() : string
    {
        return $this->productTitle;
    }
    /**
     * Title of the product
     *
     * @param string $productTitle
     *
     * @return self
     */
    public function setProductTitle(string $productTitle) : self
    {
        $this->initialized['productTitle'] = true;
        $this->productTitle = $productTitle;
        return $this;
    }
    /**
     * Number of actual delivered products in the inbound delivery
     *
     * @return int
     */
    public function getDeliveredCount() : int
    {
        return $this->deliveredCount;
    }
    /**
     * Number of actual delivered products in the inbound delivery
     *
     * @param int $deliveredCount
     *
     * @return self
     */
    public function setDeliveredCount(int $deliveredCount) : self
    {
        $this->initialized['deliveredCount'] = true;
        $this->deliveredCount = $deliveredCount;
        return $this;
    }
}