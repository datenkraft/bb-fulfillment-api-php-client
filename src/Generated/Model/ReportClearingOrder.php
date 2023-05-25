<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ReportClearingOrder extends \ArrayObject
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
     * The order number. Note: This can be null if the order was not created via the API.
     *
     * @var string
     */
    protected $orderNumber;
    /**
     * The API internal id of the order.
     *
     * @var int
     */
    protected $shopOrderId;
    /**
     * 
     *
     * @var string
     */
    protected $deliveryZipCode;
    /**
     * 
     *
     * @var string
     */
    protected $deliveryCountryCode;
    /**
     * The order number. Note: This can be null if the order was not created via the API.
     *
     * @return string
     */
    public function getOrderNumber() : string
    {
        return $this->orderNumber;
    }
    /**
     * The order number. Note: This can be null if the order was not created via the API.
     *
     * @param string $orderNumber
     *
     * @return self
     */
    public function setOrderNumber(string $orderNumber) : self
    {
        $this->initialized['orderNumber'] = true;
        $this->orderNumber = $orderNumber;
        return $this;
    }
    /**
     * The API internal id of the order.
     *
     * @return int
     */
    public function getShopOrderId() : int
    {
        return $this->shopOrderId;
    }
    /**
     * The API internal id of the order.
     *
     * @param int $shopOrderId
     *
     * @return self
     */
    public function setShopOrderId(int $shopOrderId) : self
    {
        $this->initialized['shopOrderId'] = true;
        $this->shopOrderId = $shopOrderId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDeliveryZipCode() : string
    {
        return $this->deliveryZipCode;
    }
    /**
     * 
     *
     * @param string $deliveryZipCode
     *
     * @return self
     */
    public function setDeliveryZipCode(string $deliveryZipCode) : self
    {
        $this->initialized['deliveryZipCode'] = true;
        $this->deliveryZipCode = $deliveryZipCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDeliveryCountryCode() : string
    {
        return $this->deliveryCountryCode;
    }
    /**
     * 
     *
     * @param string $deliveryCountryCode
     *
     * @return self
     */
    public function setDeliveryCountryCode(string $deliveryCountryCode) : self
    {
        $this->initialized['deliveryCountryCode'] = true;
        $this->deliveryCountryCode = $deliveryCountryCode;
        return $this;
    }
}