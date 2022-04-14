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
     * Number of products in the inbound delivery
     *
     * @var int
     */
    protected $count;
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
     * Number of products in the inbound delivery
     *
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }
    /**
     * Number of products in the inbound delivery
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
}