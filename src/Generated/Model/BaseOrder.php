<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class BaseOrder
{
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