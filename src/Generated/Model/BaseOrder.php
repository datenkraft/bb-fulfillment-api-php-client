<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class BaseOrder extends \ArrayObject
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
     * @var BaseOrderCustomer
     */
    protected $customer;
    /**
     * 
     *
     * @var NewOrderItem[]
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
    * Notes for the steve team regarding the fulfillment. \
    If `meta.orderNotesPrecedingText` is set in the `shop` resource, it will be prepended to the notes.
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
    * Notes for the steve team regarding the fulfillment. \
    If `meta.orderNotesPrecedingText` is set in the `shop` resource, it will be prepended to the notes.
    *
    * @return string|null
    */
    public function getOrderNotes() : ?string
    {
        return $this->orderNotes;
    }
    /**
    * Notes for the steve team regarding the fulfillment. \
    If `meta.orderNotesPrecedingText` is set in the `shop` resource, it will be prepended to the notes.
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
}