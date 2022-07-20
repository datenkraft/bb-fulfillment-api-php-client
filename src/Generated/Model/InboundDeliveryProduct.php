<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class InboundDeliveryProduct
{
    /**
     * Product number
     *
     * @var string
     */
    protected $productNumber;
    /**
     * Number of announced products in the inbound delivery
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
        $this->productNumber = $productNumber;
        return $this;
    }
    /**
     * Number of announced products in the inbound delivery
     *
     * @return int
     */
    public function getAnnouncedCount() : int
    {
        return $this->announcedCount;
    }
    /**
     * Number of announced products in the inbound delivery
     *
     * @param int $announcedCount
     *
     * @return self
     */
    public function setAnnouncedCount(int $announcedCount) : self
    {
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
        $this->deliveredCount = $deliveredCount;
        return $this;
    }
}