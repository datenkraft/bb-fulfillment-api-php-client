<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class InboundDelivery extends \ArrayObject
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
     * @var InboundDeliveryProduct[]
     */
    protected $products;
    /**
    * The inbound delivery number.\
    Note: If this number is prefixed with 'NICE', it means that the inbound delivery was
    created was created manually by niceshops.
    *
    * @var string
    */
    protected $inboundDeliveryNumber;
    /**
     * Notes from the steve warehouse team
     *
     * @var string|null
     */
    protected $inboundDeliveryNote;
    /**
     * The API internal id of the inbound delivery
     *
     * @var int
     */
    protected $shopWAWIDeliveryId;
    /**
    * Status of the inbound delivery.\
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
     * @var string
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
    * Number of the inbound delivery on the delivery slip.\
    If the field is empty or not set in the database
    (e.g. the inbound delivery has not yet arrived in our warehouse), null will be returned.\
    If an empty string ("") is returned, it means that no delivery slip number is
    available for the inbound delivery.
    *
    * @var string|null
    */
    protected $deliverySlipNumber;
    /**
     * Creation date of the inbound delivery. Format in ISO 8601 (timezone CET/CEST)
     *
     * @var \DateTime
     */
    protected $createDate;
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
        $this->initialized['products'] = true;
        $this->products = $products;
        return $this;
    }
    /**
    * The inbound delivery number.\
    Note: If this number is prefixed with 'NICE', it means that the inbound delivery was
    created was created manually by niceshops.
    *
    * @return string
    */
    public function getInboundDeliveryNumber() : string
    {
        return $this->inboundDeliveryNumber;
    }
    /**
    * The inbound delivery number.\
    Note: If this number is prefixed with 'NICE', it means that the inbound delivery was
    created was created manually by niceshops.
    *
    * @param string $inboundDeliveryNumber
    *
    * @return self
    */
    public function setInboundDeliveryNumber(string $inboundDeliveryNumber) : self
    {
        $this->initialized['inboundDeliveryNumber'] = true;
        $this->inboundDeliveryNumber = $inboundDeliveryNumber;
        return $this;
    }
    /**
     * Notes from the steve warehouse team
     *
     * @return string|null
     */
    public function getInboundDeliveryNote() : ?string
    {
        return $this->inboundDeliveryNote;
    }
    /**
     * Notes from the steve warehouse team
     *
     * @param string|null $inboundDeliveryNote
     *
     * @return self
     */
    public function setInboundDeliveryNote(?string $inboundDeliveryNote) : self
    {
        $this->initialized['inboundDeliveryNote'] = true;
        $this->inboundDeliveryNote = $inboundDeliveryNote;
        return $this;
    }
    /**
     * The API internal id of the inbound delivery
     *
     * @return int
     */
    public function getShopWAWIDeliveryId() : int
    {
        return $this->shopWAWIDeliveryId;
    }
    /**
     * The API internal id of the inbound delivery
     *
     * @param int $shopWAWIDeliveryId
     *
     * @return self
     */
    public function setShopWAWIDeliveryId(int $shopWAWIDeliveryId) : self
    {
        $this->initialized['shopWAWIDeliveryId'] = true;
        $this->shopWAWIDeliveryId = $shopWAWIDeliveryId;
        return $this;
    }
    /**
    * Status of the inbound delivery.\
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
    * Status of the inbound delivery.\
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
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * The shopCode used internally to distinguish between clients.
     *
     * @return string
     */
    public function getShopCode() : string
    {
        return $this->shopCode;
    }
    /**
     * The shopCode used internally to distinguish between clients.
     *
     * @param string $shopCode
     *
     * @return self
     */
    public function setShopCode(string $shopCode) : self
    {
        $this->initialized['shopCode'] = true;
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
        $this->initialized['startDate'] = true;
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
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;
        return $this;
    }
    /**
    * Number of the inbound delivery on the delivery slip.\
    If the field is empty or not set in the database
    (e.g. the inbound delivery has not yet arrived in our warehouse), null will be returned.\
    If an empty string ("") is returned, it means that no delivery slip number is
    available for the inbound delivery.
    *
    * @return string|null
    */
    public function getDeliverySlipNumber() : ?string
    {
        return $this->deliverySlipNumber;
    }
    /**
    * Number of the inbound delivery on the delivery slip.\
    If the field is empty or not set in the database
    (e.g. the inbound delivery has not yet arrived in our warehouse), null will be returned.\
    If an empty string ("") is returned, it means that no delivery slip number is
    available for the inbound delivery.
    *
    * @param string|null $deliverySlipNumber
    *
    * @return self
    */
    public function setDeliverySlipNumber(?string $deliverySlipNumber) : self
    {
        $this->initialized['deliverySlipNumber'] = true;
        $this->deliverySlipNumber = $deliverySlipNumber;
        return $this;
    }
    /**
     * Creation date of the inbound delivery. Format in ISO 8601 (timezone CET/CEST)
     *
     * @return \DateTime
     */
    public function getCreateDate() : \DateTime
    {
        return $this->createDate;
    }
    /**
     * Creation date of the inbound delivery. Format in ISO 8601 (timezone CET/CEST)
     *
     * @param \DateTime $createDate
     *
     * @return self
     */
    public function setCreateDate(\DateTime $createDate) : self
    {
        $this->initialized['createDate'] = true;
        $this->createDate = $createDate;
        return $this;
    }
}