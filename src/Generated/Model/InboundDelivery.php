<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class InboundDelivery
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
     * The API internal id of the inbound delivery.
     *
     * @var int
     */
    protected $shopWAWIDeliveryId;
    /**
    * Status of the inbound delivery.
    The status for not yet completed is subject to change. you may poll for changes.
    - open: The inbound delivery has not yet been delivered.
    - in_progress: The inbound delivery is being processed in our warehouse.
    - completed: The inbound delivery has been processed in our warehouse.
    - deleted: The inbound delivery has been deleted.
    *
    * @var string
    */
    protected $status;
    /**
     * The shopCode used in DISCO.
     *
     * @var string|null
     */
    protected $shopCode;
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
    /**
     * The API internal id of the inbound delivery.
     *
     * @return int
     */
    public function getShopWAWIDeliveryId() : int
    {
        return $this->shopWAWIDeliveryId;
    }
    /**
     * The API internal id of the inbound delivery.
     *
     * @param int $shopWAWIDeliveryId
     *
     * @return self
     */
    public function setShopWAWIDeliveryId(int $shopWAWIDeliveryId) : self
    {
        $this->shopWAWIDeliveryId = $shopWAWIDeliveryId;
        return $this;
    }
    /**
    * Status of the inbound delivery.
    The status for not yet completed is subject to change. you may poll for changes.
    - open: The inbound delivery has not yet been delivered.
    - in_progress: The inbound delivery is being processed in our warehouse.
    - completed: The inbound delivery has been processed in our warehouse.
    - deleted: The inbound delivery has been deleted.
    *
    * @return string
    */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
    * Status of the inbound delivery.
    The status for not yet completed is subject to change. you may poll for changes.
    - open: The inbound delivery has not yet been delivered.
    - in_progress: The inbound delivery is being processed in our warehouse.
    - completed: The inbound delivery has been processed in our warehouse.
    - deleted: The inbound delivery has been deleted.
    *
    * @param string $status
    *
    * @return self
    */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * The shopCode used in DISCO.
     *
     * @return string|null
     */
    public function getShopCode() : ?string
    {
        return $this->shopCode;
    }
    /**
     * The shopCode used in DISCO.
     *
     * @param string|null $shopCode
     *
     * @return self
     */
    public function setShopCode(?string $shopCode) : self
    {
        $this->shopCode = $shopCode;
        return $this;
    }
}