<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class NewOrder extends \ArrayObject
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
     * The shopCode used in DISCO.
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
     * Additional options (optional, TBD)
     *
     * @var mixed[]|null
     */
    protected $options;
    /**
     * The shopCode used in DISCO.
     *
     * @return string|null
     */
    public function getShopCode() : ?string
    {
        return $this->shopCode;
    }
    /**
     * The shopCode used in DISCO.
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
        $this->initialized['customer'] = true;
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
        $this->initialized['orderItems'] = true;
        $this->orderItems = $orderItems;
        return $this;
    }
    /**
     * Additional options (optional, TBD)
     *
     * @return mixed[]|null
     */
    public function getOptions() : ?iterable
    {
        return $this->options;
    }
    /**
     * Additional options (optional, TBD)
     *
     * @param mixed[]|null $options
     *
     * @return self
     */
    public function setOptions(?iterable $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}