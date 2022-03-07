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
     * 
     *
     * @var mixed|null
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
     * 
     *
     * @return mixed
     */
    public function getShipping()
    {
        return $this->shipping;
    }
    /**
     * 
     *
     * @param mixed $shipping
     *
     * @return self
     */
    public function setShipping($shipping) : self
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