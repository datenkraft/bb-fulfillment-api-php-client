<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class Order extends \ArrayObject
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
     * 
     *
     * @var OrderItem[]
     */
    protected $orderItems;
    /**
    * A not unique reference for the order which can be used for identifying a specific order or for
    mapping to a third party app.
    *
    * @var string|null
    */
    protected $externalOrderId;
    /**
     * Notes to be printed on the delivery slip.
     *
     * @var string|null
     */
    protected $deliverySlipNotes;
    /**
     * External reference for the order
     *
     * @var string|null
     */
    protected $externalOrderReference;
    /**
     * Notes for the steve team regarding the fulfillment.
     *
     * @var string|null
     */
    protected $orderNotes;
    /**
     * The amazon order id.
     *
     * @var string|null
     */
    protected $amazonOrderId;
    /**
     * 
     *
     * @var OrderDeliveryCosts[]|null
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
    Note: If this number is prefixed with 'NICE', it means that the order was created
    manually by niceshops (see 'source').
    *
    * @var mixed
    */
    protected $orderNumber;
    /**
    * The current status of the order.
    - new: The order was created but not every required information was given.
    The order can not be processed without manual intervention.
    - processing: The order is being processed. For split deliveries, some of the shipments might have
    already been transferred to the delivery agent.
    - delivered: The orders shipments have all been transferred to the delivery agent (Note that the
    update to this status might be delayed and not yet reflect the status of the linked deliveries).
    - deleted: The order has been marked as deleted.
    - canceled: The order has been canceled.
    - locked: The order is locked. The order can not be processed without manual intervention.
    - examination: The order has been manually locked. The order can not be processed without manual
    intervention.
    - redacted: The order has been redacted for GDPR reasons.
    *
    * @var string
    */
    protected $status;
    /**
     * The create date for the order. Format in ISO 8601
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
     * Options regarding the shipping of the order.
     *
     * @var OrderShipping
     */
    protected $shipping;
    /**
    * The source of the order.
    - shopify: This order was created via the steve by niceshops Shopify application
    - nice: This order was created manually by niceshops
    - api: This order was created via the Fulfillment API
    *
    * @var string
    */
    protected $source;
    /**
     * If available, a hyperlink to the application where this order was created is provided
     *
     * @var string|null
     */
    protected $sourceLink;
    /**
     * Indicates whether the order can be canceled or not
     *
     * @var bool
     */
    protected $cancelable;
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
        $this->initialized['shopCode'] = true;
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
        $this->initialized['customer'] = true;
        $this->customer = $customer;
        return $this;
    }
    /**
     * 
     *
     * @return OrderItem[]
     */
    public function getOrderItems() : array
    {
        return $this->orderItems;
    }
    /**
     * 
     *
     * @param OrderItem[] $orderItems
     *
     * @return self
     */
    public function setOrderItems(array $orderItems) : self
    {
        $this->initialized['orderItems'] = true;
        $this->orderItems = $orderItems;
        return $this;
    }
    /**
    * A not unique reference for the order which can be used for identifying a specific order or for
    mapping to a third party app.
    *
    * @return string|null
    */
    public function getExternalOrderId() : ?string
    {
        return $this->externalOrderId;
    }
    /**
    * A not unique reference for the order which can be used for identifying a specific order or for
    mapping to a third party app.
    *
    * @param string|null $externalOrderId
    *
    * @return self
    */
    public function setExternalOrderId(?string $externalOrderId) : self
    {
        $this->initialized['externalOrderId'] = true;
        $this->externalOrderId = $externalOrderId;
        return $this;
    }
    /**
     * Notes to be printed on the delivery slip.
     *
     * @return string|null
     */
    public function getDeliverySlipNotes() : ?string
    {
        return $this->deliverySlipNotes;
    }
    /**
     * Notes to be printed on the delivery slip.
     *
     * @param string|null $deliverySlipNotes
     *
     * @return self
     */
    public function setDeliverySlipNotes(?string $deliverySlipNotes) : self
    {
        $this->initialized['deliverySlipNotes'] = true;
        $this->deliverySlipNotes = $deliverySlipNotes;
        return $this;
    }
    /**
     * External reference for the order
     *
     * @return string|null
     */
    public function getExternalOrderReference() : ?string
    {
        return $this->externalOrderReference;
    }
    /**
     * External reference for the order
     *
     * @param string|null $externalOrderReference
     *
     * @return self
     */
    public function setExternalOrderReference(?string $externalOrderReference) : self
    {
        $this->initialized['externalOrderReference'] = true;
        $this->externalOrderReference = $externalOrderReference;
        return $this;
    }
    /**
     * Notes for the steve team regarding the fulfillment.
     *
     * @return string|null
     */
    public function getOrderNotes() : ?string
    {
        return $this->orderNotes;
    }
    /**
     * Notes for the steve team regarding the fulfillment.
     *
     * @param string|null $orderNotes
     *
     * @return self
     */
    public function setOrderNotes(?string $orderNotes) : self
    {
        $this->initialized['orderNotes'] = true;
        $this->orderNotes = $orderNotes;
        return $this;
    }
    /**
     * The amazon order id.
     *
     * @return string|null
     */
    public function getAmazonOrderId() : ?string
    {
        return $this->amazonOrderId;
    }
    /**
     * The amazon order id.
     *
     * @param string|null $amazonOrderId
     *
     * @return self
     */
    public function setAmazonOrderId(?string $amazonOrderId) : self
    {
        $this->initialized['amazonOrderId'] = true;
        $this->amazonOrderId = $amazonOrderId;
        return $this;
    }
    /**
     * 
     *
     * @return OrderDeliveryCosts[]|null
     */
    public function getDeliveryCosts() : ?array
    {
        return $this->deliveryCosts;
    }
    /**
     * 
     *
     * @param OrderDeliveryCosts[]|null $deliveryCosts
     *
     * @return self
     */
    public function setDeliveryCosts(?array $deliveryCosts) : self
    {
        $this->initialized['deliveryCosts'] = true;
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
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    /**
    * The order number.\
    Note: If this number is prefixed with 'NICE', it means that the order was created
    manually by niceshops (see 'source').
    *
    * @return mixed
    */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }
    /**
    * The order number.\
    Note: If this number is prefixed with 'NICE', it means that the order was created
    manually by niceshops (see 'source').
    *
    * @param mixed $orderNumber
    *
    * @return self
    */
    public function setOrderNumber($orderNumber) : self
    {
        $this->initialized['orderNumber'] = true;
        $this->orderNumber = $orderNumber;
        return $this;
    }
    /**
    * The current status of the order.
    - new: The order was created but not every required information was given.
    The order can not be processed without manual intervention.
    - processing: The order is being processed. For split deliveries, some of the shipments might have
    already been transferred to the delivery agent.
    - delivered: The orders shipments have all been transferred to the delivery agent (Note that the
    update to this status might be delayed and not yet reflect the status of the linked deliveries).
    - deleted: The order has been marked as deleted.
    - canceled: The order has been canceled.
    - locked: The order is locked. The order can not be processed without manual intervention.
    - examination: The order has been manually locked. The order can not be processed without manual
    intervention.
    - redacted: The order has been redacted for GDPR reasons.
    *
    * @return string
    */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
    * The current status of the order.
    - new: The order was created but not every required information was given.
    The order can not be processed without manual intervention.
    - processing: The order is being processed. For split deliveries, some of the shipments might have
    already been transferred to the delivery agent.
    - delivered: The orders shipments have all been transferred to the delivery agent (Note that the
    update to this status might be delayed and not yet reflect the status of the linked deliveries).
    - deleted: The order has been marked as deleted.
    - canceled: The order has been canceled.
    - locked: The order is locked. The order can not be processed without manual intervention.
    - examination: The order has been manually locked. The order can not be processed without manual
    intervention.
    - redacted: The order has been redacted for GDPR reasons.
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
     * The create date for the order. Format in ISO 8601
     *
     * @return \DateTime
     */
    public function getOrderDate() : \DateTime
    {
        return $this->orderDate;
    }
    /**
     * The create date for the order. Format in ISO 8601
     *
     * @param \DateTime $orderDate
     *
     * @return self
     */
    public function setOrderDate(\DateTime $orderDate) : self
    {
        $this->initialized['orderDate'] = true;
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
        $this->initialized['delivery'] = true;
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
        $this->initialized['payment'] = true;
        $this->payment = $payment;
        return $this;
    }
    /**
     * Options regarding the shipping of the order.
     *
     * @return OrderShipping
     */
    public function getShipping() : OrderShipping
    {
        return $this->shipping;
    }
    /**
     * Options regarding the shipping of the order.
     *
     * @param OrderShipping $shipping
     *
     * @return self
     */
    public function setShipping(OrderShipping $shipping) : self
    {
        $this->initialized['shipping'] = true;
        $this->shipping = $shipping;
        return $this;
    }
    /**
    * The source of the order.
    - shopify: This order was created via the steve by niceshops Shopify application
    - nice: This order was created manually by niceshops
    - api: This order was created via the Fulfillment API
    *
    * @return string
    */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
    * The source of the order.
    - shopify: This order was created via the steve by niceshops Shopify application
    - nice: This order was created manually by niceshops
    - api: This order was created via the Fulfillment API
    *
    * @param string $source
    *
    * @return self
    */
    public function setSource(string $source) : self
    {
        $this->initialized['source'] = true;
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
        $this->initialized['sourceLink'] = true;
        $this->sourceLink = $sourceLink;
        return $this;
    }
    /**
     * Indicates whether the order can be canceled or not
     *
     * @return bool
     */
    public function getCancelable() : bool
    {
        return $this->cancelable;
    }
    /**
     * Indicates whether the order can be canceled or not
     *
     * @param bool $cancelable
     *
     * @return self
     */
    public function setCancelable(bool $cancelable) : self
    {
        $this->initialized['cancelable'] = true;
        $this->cancelable = $cancelable;
        return $this;
    }
}