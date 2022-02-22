<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class Order
{
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
     * @var mixed
     */
    protected $options;
    /**
    * The current status of the order.
    - new: The order was created but not every required information was given. The order can not be processed without manual intervention.
    - processing: The order is being processed. For split deliveries, some of the shipments might have already been transferred to the delivery agent.
    - delivered: The orders shipments have all been transferred to the delivery agent.
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
     * 
     *
     * @var OrderDelivery[]
     */
    protected $delivery;
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
    /**
    * The current status of the order.
    - new: The order was created but not every required information was given. The order can not be processed without manual intervention.
    - processing: The order is being processed. For split deliveries, some of the shipments might have already been transferred to the delivery agent.
    - delivered: The orders shipments have all been transferred to the delivery agent.
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
    - new: The order was created but not every required information was given. The order can not be processed without manual intervention.
    - processing: The order is being processed. For split deliveries, some of the shipments might have already been transferred to the delivery agent.
    - delivered: The orders shipments have all been transferred to the delivery agent.
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
     * 
     *
     * @return OrderDelivery[]
     */
    public function getDelivery() : array
    {
        return $this->delivery;
    }
    /**
     * 
     *
     * @param OrderDelivery[] $delivery
     *
     * @return self
     */
    public function setDelivery(array $delivery) : self
    {
        $this->delivery = $delivery;
        return $this;
    }
}