<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class BaseOrder
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
     * @var BaseOrderCustomer
     */
    protected $customer;
    /**
     * 
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
    * @var OrderDeliveryCosts|null
    */
    protected $deliveryCosts;
    /**
     * Additional optional options for the order.
     *
     * @var mixed|null
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
     * @return BaseOrderCustomer
     */
    public function getCustomer() : BaseOrderCustomer
    {
        return $this->customer;
    }
    /**
     * 
     *
     * @param BaseOrderCustomer $customer
     *
     * @return self
     */
    public function setCustomer(BaseOrderCustomer $customer) : self
    {
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
    * @return OrderDeliveryCosts|null
    */
    public function getDeliveryCosts() : ?OrderDeliveryCosts
    {
        return $this->deliveryCosts;
    }
    /**
    * The delivery costs of the order, which will be charged to the customer.\
    Note: This field is required if customs clearance is necessary for the delivery address of the order.
    *
    * @param OrderDeliveryCosts|null $deliveryCosts
    *
    * @return self
    */
    public function setDeliveryCosts(?OrderDeliveryCosts $deliveryCosts) : self
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
}