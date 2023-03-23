<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class NewOrder
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
     * @var NewOrderCustomer
     */
    protected $customer;
    /**
     * 
     *
     * @var NewOrderItem[]
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
     * 
     *
     * @var mixed|null
     */
    protected $deliveryCosts;
    /**
     * Additional optional options for a new order.
     *
     * @var NewOrderOptions|null
     */
    protected $options;
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
     * @return NewOrderCustomer
     */
    public function getCustomer() : NewOrderCustomer
    {
        return $this->customer;
    }
    /**
     * 
     *
     * @param NewOrderCustomer $customer
     *
     * @return self
     */
    public function setCustomer(NewOrderCustomer $customer) : self
    {
        $this->customer = $customer;
        return $this;
    }
    /**
     * 
     *
     * @return NewOrderItem[]
     */
    public function getOrderItems() : array
    {
        return $this->orderItems;
    }
    /**
     * 
     *
     * @param NewOrderItem[] $orderItems
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
     * 
     *
     * @return mixed
     */
    public function getDeliveryCosts()
    {
        return $this->deliveryCosts;
    }
    /**
     * 
     *
     * @param mixed $deliveryCosts
     *
     * @return self
     */
    public function setDeliveryCosts($deliveryCosts) : self
    {
        $this->deliveryCosts = $deliveryCosts;
        return $this;
    }
    /**
     * Additional optional options for a new order.
     *
     * @return NewOrderOptions|null
     */
    public function getOptions() : ?NewOrderOptions
    {
        return $this->options;
    }
    /**
     * Additional optional options for a new order.
     *
     * @param NewOrderOptions|null $options
     *
     * @return self
     */
    public function setOptions(?NewOrderOptions $options) : self
    {
        $this->options = $options;
        return $this;
    }
}