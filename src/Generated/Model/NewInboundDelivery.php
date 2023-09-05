<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class NewInboundDelivery extends \ArrayObject
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
     * Optional free-text reference for inbound delivery.
     *
     * @var string|null
     */
    protected $inboundDeliveryName;
    /**
    * Number of the supplier.\
    Available suppliers can be retrieved from the 'GET /supplier' endpoint.
    *
    * @var string
    */
    protected $supplierNumber;
    /**
     * Expected date of the delivery (timezone CET/CEST)
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
     * Optional free-text reference for inbound delivery.
     *
     * @return string|null
     */
    public function getInboundDeliveryName() : ?string
    {
        return $this->inboundDeliveryName;
    }
    /**
     * Optional free-text reference for inbound delivery.
     *
     * @param string|null $inboundDeliveryName
     *
     * @return self
     */
    public function setInboundDeliveryName(?string $inboundDeliveryName) : self
    {
        $this->initialized['inboundDeliveryName'] = true;
        $this->inboundDeliveryName = $inboundDeliveryName;
        return $this;
    }
    /**
    * Number of the supplier.\
    Available suppliers can be retrieved from the 'GET /supplier' endpoint.
    *
    * @return string
    */
    public function getSupplierNumber() : string
    {
        return $this->supplierNumber;
    }
    /**
    * Number of the supplier.\
    Available suppliers can be retrieved from the 'GET /supplier' endpoint.
    *
    * @param string $supplierNumber
    *
    * @return self
    */
    public function setSupplierNumber(string $supplierNumber) : self
    {
        $this->initialized['supplierNumber'] = true;
        $this->supplierNumber = $supplierNumber;
        return $this;
    }
    /**
     * Expected date of the delivery (timezone CET/CEST)
     *
     * @return \DateTime
     */
    public function getExpectedDeliveryDate() : \DateTime
    {
        return $this->expectedDeliveryDate;
    }
    /**
     * Expected date of the delivery (timezone CET/CEST)
     *
     * @param \DateTime $expectedDeliveryDate
     *
     * @return self
     */
    public function setExpectedDeliveryDate(\DateTime $expectedDeliveryDate) : self
    {
        $this->initialized['expectedDeliveryDate'] = true;
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
        $this->initialized['products'] = true;
        $this->products = $products;
        return $this;
    }
}