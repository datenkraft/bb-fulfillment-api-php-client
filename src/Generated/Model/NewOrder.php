<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class NewOrder
{
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
     * Additional options (optional, TBD)
     *
     * @var mixed|null
     */
    protected $options;
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
     * Additional options (optional, TBD)
     *
     * @return mixed
     */
    public function getOptions()
    {
        return $this->options;
    }
    /**
     * Additional options (optional, TBD)
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