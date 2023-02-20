<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class InboundDelivery
{
    /**
     * Optional free-text reference for inbound delivery.
     *
     * @var string|null
     */
    protected $inboundDeliveryName;
    /**
     * Number of the supplier. Available suppliers can be retrieved from the 'GET /supplier' endpoint.
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
     * @var InboundDeliveryProduct[]
     */
    protected $products;
    /**
     * Number of the inbound delivery
     *
     * @var string|null
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
     * The shopCode used internally to distinguish between clients.
     *
     * @var string|null
     */
    protected $shopCode;
    /**
     * Start date of the delivery (timezone CET/CEST)
     *
     * @var \DateTime|null
     */
    protected $startDate;
    /**
     * End date of the delivery (timezone CET/CEST)
     *
     * @var \DateTime|null
     */
    protected $endDate;
    /**
    * Number of the inbound delivery on the delivery slip.
    If the field is empty or not set in the database (e.g. the inbound delivery has not yet arrived in our warehouse), null will be returned.
    If an empty string (") is returned, it means that no delivery slip number is available for the inbound delivery.
    *
    * @var string|null
    */
    protected $deliverySlipNumber;
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
        $this->inboundDeliveryName = $inboundDeliveryName;
        return $this;
    }
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
     * Number of the inbound delivery
     *
     * @return string|null
     */
    public function getInboundDeliveryNumber() : ?string
    {
        return $this->inboundDeliveryNumber;
    }
    /**
     * Number of the inbound delivery
     *
     * @param string|null $inboundDeliveryNumber
     *
     * @return self
     */
    public function setInboundDeliveryNumber(?string $inboundDeliveryNumber) : self
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
     * The shopCode used internally to distinguish between clients.
     *
     * @return string|null
     */
    public function getShopCode() : ?string
    {
        return $this->shopCode;
    }
    /**
     * The shopCode used internally to distinguish between clients.
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
    /**
     * Start date of the delivery (timezone CET/CEST)
     *
     * @return \DateTime|null
     */
    public function getStartDate() : ?\DateTime
    {
        return $this->startDate;
    }
    /**
     * Start date of the delivery (timezone CET/CEST)
     *
     * @param \DateTime|null $startDate
     *
     * @return self
     */
    public function setStartDate(?\DateTime $startDate) : self
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * End date of the delivery (timezone CET/CEST)
     *
     * @return \DateTime|null
     */
    public function getEndDate() : ?\DateTime
    {
        return $this->endDate;
    }
    /**
     * End date of the delivery (timezone CET/CEST)
     *
     * @param \DateTime|null $endDate
     *
     * @return self
     */
    public function setEndDate(?\DateTime $endDate) : self
    {
        $this->endDate = $endDate;
        return $this;
    }
    /**
    * Number of the inbound delivery on the delivery slip.
    If the field is empty or not set in the database (e.g. the inbound delivery has not yet arrived in our warehouse), null will be returned.
    If an empty string (") is returned, it means that no delivery slip number is available for the inbound delivery.
    *
    * @return string|null
    */
    public function getDeliverySlipNumber() : ?string
    {
        return $this->deliverySlipNumber;
    }
    /**
    * Number of the inbound delivery on the delivery slip.
    If the field is empty or not set in the database (e.g. the inbound delivery has not yet arrived in our warehouse), null will be returned.
    If an empty string (") is returned, it means that no delivery slip number is available for the inbound delivery.
    *
    * @param string|null $deliverySlipNumber
    *
    * @return self
    */
    public function setDeliverySlipNumber(?string $deliverySlipNumber) : self
    {
        $this->deliverySlipNumber = $deliverySlipNumber;
        return $this;
    }
}