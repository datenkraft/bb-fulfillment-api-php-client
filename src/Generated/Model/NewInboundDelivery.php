<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class NewInboundDelivery
{
    /**
     * Number of the supplier. Available suppliers can be retrieved from the 'GET /supplier' endpoint.
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
     * @var NewInboundDeliveryProduct[]
     */
    protected $products;
    /**
     * Number of the supplier. Available suppliers can be retrieved from the 'GET /supplier' endpoint.
     *
     * @return string
     */
    public function getSupplierNumber() : string
    {
        return $this->supplierNumber;
    }
    /**
     * Number of the supplier. Available suppliers can be retrieved from the 'GET /supplier' endpoint.
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
     * @return NewInboundDeliveryProduct[]
     */
    public function getProducts() : array
    {
        return $this->products;
    }
    /**
     * Products in the inbound delivery
     *
     * @param NewInboundDeliveryProduct[] $products
     *
     * @return self
     */
    public function setProducts(array $products) : self
    {
        $this->products = $products;
        return $this;
    }
}