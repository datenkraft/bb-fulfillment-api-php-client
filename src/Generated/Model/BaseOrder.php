<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class BaseOrder extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
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
     * @var BaseOrderCustomer
     */
    protected $customer;
    /**
     * @var list<NewOrderItem>
     */
    protected $orderItems;
    /**
     * A not unique reference for the order which can be used for identifying a specific order or for
     * mapping to a third party app.
     *
     * @var string|null
     */
    protected $externalOrderId;
    /**
     * Notes to be printed on the delivery slip. If not provided, the shop meta.deliverySlipNotes value will be
     * used as a fallback.
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
     * If `meta.orderNotesPrecedingText` is set in the `shop` resource, it will be prepended to the notes.
     *
     * @var string|null
     */
    protected $orderNotes;
    /**
     * The Amazon seller order id used when the order is coming from the Amazon marketplace.
     *
     * @var string|null
     */
    protected $amazonSellerOrderId;
    /**
     * The Amazon vendor order id when sending orders to an Amazon warehouse for sales by Amazon.
     *
     * @var string|null
     */
    protected $amazonVendorOrderId;
    /**
     * The Amazon seller shipment id when sending a delivery to an Amazon warehouse for fulfillment by Amazon.
     *
     * @var string|null
     */
    protected $amazonFbaShipmentId;
    /**
     * The delivery costs of the order, which will be charged to the customer.\
     * Note: This field is required if the delivery address country requires customs clearance
     * (see `customsClearanceRequired` on the `country` resource).
     *
     * @var list<OrderDeliveryCosts>|null
     */
    protected $deliveryCosts;
    /**
     * Additional optional options for the order.
     *
     * @var BaseOrderOptions|null
     */
    protected $options;
    /**
     * The shopCode used internally to distinguish between clients.
     *
     * @return string|null
     */
    public function getShopCode(): ?string
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
    public function setShopCode(?string $shopCode): self
    {
        $this->initialized['shopCode'] = true;
        $this->shopCode = $shopCode;
        return $this;
    }
    /**
     * @return BaseOrderCustomer
     */
    public function getCustomer(): BaseOrderCustomer
    {
        return $this->customer;
    }
    /**
     * @param BaseOrderCustomer $customer
     *
     * @return self
     */
    public function setCustomer(BaseOrderCustomer $customer): self
    {
        $this->initialized['customer'] = true;
        $this->customer = $customer;
        return $this;
    }
    /**
     * @return list<NewOrderItem>
     */
    public function getOrderItems(): array
    {
        return $this->orderItems;
    }
    /**
     * @param list<NewOrderItem> $orderItems
     *
     * @return self
     */
    public function setOrderItems(array $orderItems): self
    {
        $this->initialized['orderItems'] = true;
        $this->orderItems = $orderItems;
        return $this;
    }
    /**
     * A not unique reference for the order which can be used for identifying a specific order or for
     * mapping to a third party app.
     *
     * @return string|null
     */
    public function getExternalOrderId(): ?string
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
    public function setExternalOrderId(?string $externalOrderId): self
    {
        $this->initialized['externalOrderId'] = true;
        $this->externalOrderId = $externalOrderId;
        return $this;
    }
    /**
     * Notes to be printed on the delivery slip. If not provided, the shop meta.deliverySlipNotes value will be
     * used as a fallback.
     *
     * @return string|null
     */
    public function getDeliverySlipNotes(): ?string
    {
        return $this->deliverySlipNotes;
    }
    /**
    * Notes to be printed on the delivery slip. If not provided, the shop meta.deliverySlipNotes value will be
    used as a fallback.
    *
    * @param string|null $deliverySlipNotes
    *
    * @return self
    */
    public function setDeliverySlipNotes(?string $deliverySlipNotes): self
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
    public function getExternalOrderReference(): ?string
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
    public function setExternalOrderReference(?string $externalOrderReference): self
    {
        $this->initialized['externalOrderReference'] = true;
        $this->externalOrderReference = $externalOrderReference;
        return $this;
    }
    /**
     * Notes for the steve team regarding the fulfillment. \
     * If `meta.orderNotesPrecedingText` is set in the `shop` resource, it will be prepended to the notes.
     *
     * @return string|null
     */
    public function getOrderNotes(): ?string
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
    public function setOrderNotes(?string $orderNotes): self
    {
        $this->initialized['orderNotes'] = true;
        $this->orderNotes = $orderNotes;
        return $this;
    }
    /**
     * The Amazon seller order id used when the order is coming from the Amazon marketplace.
     *
     * @return string|null
     */
    public function getAmazonSellerOrderId(): ?string
    {
        return $this->amazonSellerOrderId;
    }
    /**
     * The Amazon seller order id used when the order is coming from the Amazon marketplace.
     *
     * @param string|null $amazonSellerOrderId
     *
     * @return self
     */
    public function setAmazonSellerOrderId(?string $amazonSellerOrderId): self
    {
        $this->initialized['amazonSellerOrderId'] = true;
        $this->amazonSellerOrderId = $amazonSellerOrderId;
        return $this;
    }
    /**
     * The Amazon vendor order id when sending orders to an Amazon warehouse for sales by Amazon.
     *
     * @return string|null
     */
    public function getAmazonVendorOrderId(): ?string
    {
        return $this->amazonVendorOrderId;
    }
    /**
     * The Amazon vendor order id when sending orders to an Amazon warehouse for sales by Amazon.
     *
     * @param string|null $amazonVendorOrderId
     *
     * @return self
     */
    public function setAmazonVendorOrderId(?string $amazonVendorOrderId): self
    {
        $this->initialized['amazonVendorOrderId'] = true;
        $this->amazonVendorOrderId = $amazonVendorOrderId;
        return $this;
    }
    /**
     * The Amazon seller shipment id when sending a delivery to an Amazon warehouse for fulfillment by Amazon.
     *
     * @return string|null
     */
    public function getAmazonFbaShipmentId(): ?string
    {
        return $this->amazonFbaShipmentId;
    }
    /**
     * The Amazon seller shipment id when sending a delivery to an Amazon warehouse for fulfillment by Amazon.
     *
     * @param string|null $amazonFbaShipmentId
     *
     * @return self
     */
    public function setAmazonFbaShipmentId(?string $amazonFbaShipmentId): self
    {
        $this->initialized['amazonFbaShipmentId'] = true;
        $this->amazonFbaShipmentId = $amazonFbaShipmentId;
        return $this;
    }
    /**
     * The delivery costs of the order, which will be charged to the customer.\
     * Note: This field is required if the delivery address country requires customs clearance
     * (see `customsClearanceRequired` on the `country` resource).
     *
     * @return list<OrderDeliveryCosts>|null
     */
    public function getDeliveryCosts(): ?array
    {
        return $this->deliveryCosts;
    }
    /**
    * The delivery costs of the order, which will be charged to the customer.\
    Note: This field is required if the delivery address country requires customs clearance
    (see `customsClearanceRequired` on the `country` resource).
    *
    * @param list<OrderDeliveryCosts>|null $deliveryCosts
    *
    * @return self
    */
    public function setDeliveryCosts(?array $deliveryCosts): self
    {
        $this->initialized['deliveryCosts'] = true;
        $this->deliveryCosts = $deliveryCosts;
        return $this;
    }
    /**
     * Additional optional options for the order.
     *
     * @return BaseOrderOptions|null
     */
    public function getOptions(): ?BaseOrderOptions
    {
        return $this->options;
    }
    /**
     * Additional optional options for the order.
     *
     * @param BaseOrderOptions|null $options
     *
     * @return self
     */
    public function setOptions(?BaseOrderOptions $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}