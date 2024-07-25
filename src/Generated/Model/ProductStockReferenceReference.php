<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ProductStockReferenceReference extends \ArrayObject
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
     * Company name. Is provided for "reserved" stock references with orders from other shops.
     *
     * @var string|null
     */
    protected $companyName;
    /**
     * Inbound delivery number. Is provided for "incoming" stock references.
     *
     * @var string|null
     */
    protected $inboundDeliveryNumber;
    /**
     * Order number. Is provided for "reserved" stock references with an order.
     *
     * @var string|null
     */
    protected $orderNumber;
    /**
     * Company name. Is provided for "reserved" stock references with orders from other shops.
     *
     * @return string|null
     */
    public function getCompanyName() : ?string
    {
        return $this->companyName;
    }
    /**
     * Company name. Is provided for "reserved" stock references with orders from other shops.
     *
     * @param string|null $companyName
     *
     * @return self
     */
    public function setCompanyName(?string $companyName) : self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * Inbound delivery number. Is provided for "incoming" stock references.
     *
     * @return string|null
     */
    public function getInboundDeliveryNumber() : ?string
    {
        return $this->inboundDeliveryNumber;
    }
    /**
     * Inbound delivery number. Is provided for "incoming" stock references.
     *
     * @param string|null $inboundDeliveryNumber
     *
     * @return self
     */
    public function setInboundDeliveryNumber(?string $inboundDeliveryNumber) : self
    {
        $this->initialized['inboundDeliveryNumber'] = true;
        $this->inboundDeliveryNumber = $inboundDeliveryNumber;
        return $this;
    }
    /**
     * Order number. Is provided for "reserved" stock references with an order.
     *
     * @return string|null
     */
    public function getOrderNumber() : ?string
    {
        return $this->orderNumber;
    }
    /**
     * Order number. Is provided for "reserved" stock references with an order.
     *
     * @param string|null $orderNumber
     *
     * @return self
     */
    public function setOrderNumber(?string $orderNumber) : self
    {
        $this->initialized['orderNumber'] = true;
        $this->orderNumber = $orderNumber;
        return $this;
    }
}