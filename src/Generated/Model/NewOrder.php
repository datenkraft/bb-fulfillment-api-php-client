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
     * Additional optional options for a new order.
     *
     * @var NewOrderOptions|null
     */
    protected $options;
    /**
     * The external order ID e.g. from third party apps.
     *
     * @var string|null
     */
    protected $externalOrderId;
    /**
     * Order notes regarding the fulfillment
     *
     * @var string|null
     */
    protected $orderNotes;
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
    /**
     * The external order ID e.g. from third party apps.
     *
     * @return string|null
     */
    public function getExternalOrderId() : ?string
    {
        return $this->externalOrderId;
    }
    /**
     * The external order ID e.g. from third party apps.
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
}