<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class NewInboundDeliveryProduct
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
}