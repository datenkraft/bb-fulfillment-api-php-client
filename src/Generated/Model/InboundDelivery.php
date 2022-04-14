<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class InboundDelivery
{
    /**
     * Number of the supplier
     *
     * @var string
     */
    protected $supplierNumber;
    /**
     * Expected date of the delivery
     *
     * @var \DateTime
     */
    protected $expectedDeliveryDate;
    /**
     * Products in the inbound delivery
     *
     * @var InboundDeliveryProduct[]
     */
    protected $products;
    /**
     * 
     *
     * @var string
     */
    protected $inboundDeliveryNumber;
    /**
     * Number of the supplier
     *
     * @return string
     */
    public function getSupplierNumber() : string
    {
        return $this->supplierNumber;
    }
    /**
     * Number of the supplier
     *
     * @param string $supplierNumber
     *
     * @return self
     */
    public function setSupplierNumber(string $supplierNumber) : self
    {
        $this->supplierNumber = $supplierNumber;
        return $this;
    }
    /**
     * Expected date of the delivery
     *
     * @return \DateTime
     */
    public function getExpectedDeliveryDate() : \DateTime
    {
        return $this->expectedDeliveryDate;
    }
    /**
     * Expected date of the delivery
     *
     * @param \DateTime $expectedDeliveryDate
     *
     * @return self
     */
    public function setExpectedDeliveryDate(\DateTime $expectedDeliveryDate) : self
    {
        $this->expectedDeliveryDate = $expectedDeliveryDate;
        return $this;
    }
    /**
     * Products in the inbound delivery
     *
     * @return InboundDeliveryProduct[]
     */
    public function getProducts() : array
    {
        return $this->products;
    }
    /**
     * Products in the inbound delivery
     *
     * @param InboundDeliveryProduct[] $products
     *
     * @return self
     */
    public function setProducts(array $products) : self
    {
        $this->products = $products;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInboundDeliveryNumber() : string
    {
        return $this->inboundDeliveryNumber;
    }
    /**
     * 
     *
     * @param string $inboundDeliveryNumber
     *
     * @return self
     */
    public function setInboundDeliveryNumber(string $inboundDeliveryNumber) : self
    {
        $this->inboundDeliveryNumber = $inboundDeliveryNumber;
        return $this;
    }
}