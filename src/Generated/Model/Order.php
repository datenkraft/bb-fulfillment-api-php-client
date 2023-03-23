<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class Order
{
    /**
     * The shopCode used internally to distinguish between clients.
     *
     * @var string|null
     */
    protected $shopCode;
    /**
     * 
     *
     * @var OrderCustomer
     */
    protected $customer;
    /**
     * Note: canceled orderItems are NOT included.
     *
     * @var OrderItem[]
     */
    protected $orderItems;
    /**
    * The external order ID e.g. from third party apps. This field does not have to be unique.
    It can be used to link and refind multiple orders, for example, if there are multiple fulfilment orders possible for a
    single customer order.
    *
    * @var string|null
    */
    protected $externalOrderId;
    /**
    * A not unique reference for the order which can be used for identifiying a specific order or for
    mapping to a third party app.
    *
    * @var string|null
    */
    protected $externalOrderReference;
    /**
     * Notes for the delivery slip.
     *
     * @var string|null
     */
    protected $deliverySlipNotes;
    /**
     * Order notes regarding the fulfillment
     *
     * @var string|null
     */
    protected $orderNotes;
    /**
     * The amazon order Id
     *
     * @var string|null
     */
    protected $amazonOrderId;
    /**
    * The delivery costs of the order, which will be charged to the customer.\
    Note: This field is required if customs clearance is necessary for the delivery address of the order.
    *
    * @var OrderDeliveryCosts
    */
    protected $deliveryCosts;
    /**
     * Additional optional options for the order.
     *
     * @var mixed|null
     */
    protected $options;
    /**
    * The order number.\
    Note: If this number is prefixed with 'NICE', it means that the order was created was created manually by niceshops (see
    `source`).
    *
    * @var string|null
    */
    protected $orderNumber;
    /**
    * The current status of the order.
    - new: The order was created but not every required information was given. The order can not be processed without manual
    intervention.
    - processing: The order is being processed. For split deliveries, some of the shipments might have already been
    transferred to the delivery agent.
    - delivered: The orders shipments have all been transferred to the delivery agent (Note that the update to this status
    might be delayed and not yet reflect the status of the linked deliveries).
    - deleted: The order has been cancelled.
    - locked: The order is locked. The order can not be processed without manual intervention.
    - examination: The order has been manually locked.  The order can not be processed without manual intervention.
    *
    * @var string
    */
    protected $status;
    /**
     * The create date for the order. Default is the current date. Format in ISO 8601
     *
     * @var \DateTime
     */
    protected $orderDate;
    /**
     * Note that only deliveries with status 'delivered' are shown in this list.
     *
     * @var OrderDelivery[]|null
     */
    protected $delivery;
    /**
     * Options regarding the payment of the order
     *
     * @var OrderPayment
     */
    protected $payment;
    /**
     * Options regarding the shipping of the order
     *
     * @var OrderShipping
     */
    protected $shipping;
    /**
    * The source of the order.
    - shopify: This order was created via the steve by niceshops Shopify application
    - nice: This order was created manually by niceshops
    - api: This order was created via the Fulfillment API\
    If null, the source could not be determined
    *
    * @var string|null
    */
    protected $source;
    /**
     * If available, a hyperlink to the application where this order was created is provided
     *
     * @var string|null
     */
    protected $sourceLink;
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
     * 
     *
     * @return OrderCustomer
     */
    public function getCustomer() : OrderCustomer
    {
        return $this->customer;
    }
    /**
     * 
     *
     * @param OrderCustomer $customer
     *
     * @return self
     */
    public function setCustomer(OrderCustomer $customer) : self
    {
        $this->customer = $customer;
        return $this;
    }
    /**
     * Note: canceled orderItems are NOT included.
     *
     * @return OrderItem[]
     */
    public function getOrderItems() : array
    {
        return $this->orderItems;
    }
    /**
     * Note: canceled orderItems are NOT included.
     *
     * @param OrderItem[] $orderItems
     *
     * @return self
     */
    public function setOrderItems(array $orderItems) : self
    {
        $this->orderItems = $orderItems;
        return $this;
    }
    /**
    * The external order ID e.g. from third party apps. This field does not have to be unique.
    It can be used to link and refind multiple orders, for example, if there are multiple fulfilment orders possible for a
    single customer order.
    *
    * @return string|null
    */
    public function getExternalOrderId() : ?string
    {
        return $this->externalOrderId;
    }
    /**
    * The external order ID e.g. from third party apps. This field does not have to be unique.
    It can be used to link and refind multiple orders, for example, if there are multiple fulfilment orders possible for a
    single customer order.
    *
    * @param string|null $externalOrderId
    *
    * @return self
    */
    public function setExternalOrderId(?string $externalOrderId) : self
    {
        $this->externalOrderId = $externalOrderId;
        return $this;
    }
    /**
    * A not unique reference for the order which can be used for identifiying a specific order or for
    mapping to a third party app.
    *
    * @return string|null
    */
    public function getExternalOrderReference() : ?string
    {
        return $this->externalOrderReference;
    }
    /**
    * A not unique reference for the order which can be used for identifiying a specific order or for
    mapping to a third party app.
    *
    * @param string|null $externalOrderReference
    *
    * @return self
    */
    public function setExternalOrderReference(?string $externalOrderReference) : self
    {
        $this->externalOrderReference = $externalOrderReference;
        return $this;
    }
    /**
     * Notes for the delivery slip.
     *
     * @return string|null
     */
    public function getDeliverySlipNotes() : ?string
    {
        return $this->deliverySlipNotes;
    }
    /**
     * Notes for the delivery slip.
     *
     * @param string|null $deliverySlipNotes
     *
     * @return self
     */
    public function setDeliverySlipNotes(?string $deliverySlipNotes) : self
    {
        $this->deliverySlipNotes = $deliverySlipNotes;
        return $this;
    }
    /**
     * Order notes regarding the fulfillment
     *
     * @return string|null
     */
    public function getOrderNotes() : ?string
    {
        return $this->orderNotes;
    }
    /**
     * Order notes regarding the fulfillment
     *
     * @param string|null $orderNotes
     *
     * @return self
     */
    public function setOrderNotes(?string $orderNotes) : self
    {
        $this->orderNotes = $orderNotes;
        return $this;
    }
    /**
     * The amazon order Id
     *
     * @return string|null
     */
    public function getAmazonOrderId() : ?string
    {
        return $this->amazonOrderId;
    }
    /**
     * The amazon order Id
     *
     * @param string|null $amazonOrderId
     *
     * @return self
     */
    public function setAmazonOrderId(?string $amazonOrderId) : self
    {
        $this->amazonOrderId = $amazonOrderId;
        return $this;
    }
    /**
    * The delivery costs of the order, which will be charged to the customer.\
    Note: This field is required if customs clearance is necessary for the delivery address of the order.
    *
    * @return OrderDeliveryCosts
    */
    public function getDeliveryCosts() : OrderDeliveryCosts
    {
        return $this->deliveryCosts;
    }
    /**
    * The delivery costs of the order, which will be charged to the customer.\
    Note: This field is required if customs clearance is necessary for the delivery address of the order.
    *
    * @param OrderDeliveryCosts $deliveryCosts
    *
    * @return self
    */
    public function setDeliveryCosts(OrderDeliveryCosts $deliveryCosts) : self
    {
        $this->deliveryCosts = $deliveryCosts;
        return $this;
    }
    /**
     * Additional optional options for the order.
     *
     * @return mixed
     */
    public function getOptions()
    {
        return $this->options;
    }
    /**
     * Additional optional options for the order.
     *
     * @param mixed $options
     *
     * @return self
     */
    public function setOptions($options) : self
    {
        $this->options = $options;
        return $this;
    }
    /**
    * The order number.\
    Note: If this number is prefixed with 'NICE', it means that the order was created was created manually by niceshops (see
    `source`).
    *
    * @return string|null
    */
    public function getOrderNumber() : ?string
    {
        return $this->orderNumber;
    }
    /**
    * The order number.\
    Note: If this number is prefixed with 'NICE', it means that the order was created was created manually by niceshops (see
    `source`).
    *
    * @param string|null $orderNumber
    *
    * @return self
    */
    public function setOrderNumber(?string $orderNumber) : self
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }
    /**
    * The current status of the order.
    - new: The order was created but not every required information was given. The order can not be processed without manual
    intervention.
    - processing: The order is being processed. For split deliveries, some of the shipments might have already been
    transferred to the delivery agent.
    - delivered: The orders shipments have all been transferred to the delivery agent (Note that the update to this status
    might be delayed and not yet reflect the status of the linked deliveries).
    - deleted: The order has been cancelled.
    - locked: The order is locked. The order can not be processed without manual intervention.
    - examination: The order has been manually locked.  The order can not be processed without manual intervention.
    *
    * @return string
    */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
    * The current status of the order.
    - new: The order was created but not every required information was given. The order can not be processed without manual
    intervention.
    - processing: The order is being processed. For split deliveries, some of the shipments might have already been
    transferred to the delivery agent.
    - delivered: The orders shipments have all been transferred to the delivery agent (Note that the update to this status
    might be delayed and not yet reflect the status of the linked deliveries).
    - deleted: The order has been cancelled.
    - locked: The order is locked. The order can not be processed without manual intervention.
    - examination: The order has been manually locked.  The order can not be processed without manual intervention.
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
     * The create date for the order. Default is the current date. Format in ISO 8601
     *
     * @return \DateTime
     */
    public function getOrderDate() : \DateTime
    {
        return $this->orderDate;
    }
    /**
     * The create date for the order. Default is the current date. Format in ISO 8601
     *
     * @param \DateTime $orderDate
     *
     * @return self
     */
    public function setOrderDate(\DateTime $orderDate) : self
    {
        $this->orderDate = $orderDate;
        return $this;
    }
    /**
     * Note that only deliveries with status 'delivered' are shown in this list.
     *
     * @return OrderDelivery[]|null
     */
    public function getDelivery() : ?array
    {
        return $this->delivery;
    }
    /**
     * Note that only deliveries with status 'delivered' are shown in this list.
     *
     * @param OrderDelivery[]|null $delivery
     *
     * @return self
     */
    public function setDelivery(?array $delivery) : self
    {
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * Options regarding the payment of the order
     *
     * @return OrderPayment
     */
    public function getPayment() : OrderPayment
    {
        return $this->payment;
    }
    /**
     * Options regarding the payment of the order
     *
     * @param OrderPayment $payment
     *
     * @return self
     */
    public function setPayment(OrderPayment $payment) : self
    {
        $this->payment = $payment;
        return $this;
    }
    /**
     * Options regarding the shipping of the order
     *
     * @return OrderShipping
     */
    public function getShipping() : OrderShipping
    {
        return $this->shipping;
    }
    /**
     * Options regarding the shipping of the order
     *
     * @param OrderShipping $shipping
     *
     * @return self
     */
    public function setShipping(OrderShipping $shipping) : self
    {
        $this->shipping = $shipping;
        return $this;
    }
    /**
    * The source of the order.
    - shopify: This order was created via the steve by niceshops Shopify application
    - nice: This order was created manually by niceshops
    - api: This order was created via the Fulfillment API\
    If null, the source could not be determined
    *
    * @return string|null
    */
    public function getSource() : ?string
    {
        return $this->source;
    }
    /**
    * The source of the order.
    - shopify: This order was created via the steve by niceshops Shopify application
    - nice: This order was created manually by niceshops
    - api: This order was created via the Fulfillment API\
    If null, the source could not be determined
    *
    * @param string|null $source
    *
    * @return self
    */
    public function setSource(?string $source) : self
    {
        $this->source = $source;
        return $this;
    }
    /**
     * If available, a hyperlink to the application where this order was created is provided
     *
     * @return string|null
     */
    public function getSourceLink() : ?string
    {
        return $this->sourceLink;
    }
    /**
     * If available, a hyperlink to the application where this order was created is provided
     *
     * @param string|null $sourceLink
     *
     * @return self
     */
    public function setSourceLink(?string $sourceLink) : self
    {
        $this->sourceLink = $sourceLink;
        return $this;
    }
}