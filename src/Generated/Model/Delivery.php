<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class Delivery extends \ArrayObject
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
     * The delivery number
     *
     * @var string
     */
    protected $number;
    /**
     * The order number. Note: This can be null if the delivery has no associated order.
     *
     * @var string|null
     */
    protected $orderNumber;
    /**
    * Status of the delivery.
    - delivered: The delivery is packed and ready to be picked up by the delivery service.
    *
    * @var string
    */
    protected $status;
    /**
     * List of shipments (= package, parcel, pallet, ...)
     *
     * @var DeliveryShipment[]
     */
    protected $shipments;
    /**
     * The delivery number
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * The delivery number
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number) : self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * The order number. Note: This can be null if the delivery has no associated order.
     *
     * @return string|null
     */
    public function getOrderNumber() : ?string
    {
        return $this->orderNumber;
    }
    /**
     * The order number. Note: This can be null if the delivery has no associated order.
     *
     * @param string|null $orderNumber
     *
     * @return self
     */
    public function setOrderNumber(?string $orderNumber) : self
    {
        $this->initialized['orderNumber'] = true;
        $this->orderNumber = $orderNumber;
        return $this;
    }
    /**
    * Status of the delivery.
    - delivered: The delivery is packed and ready to be picked up by the delivery service.
    *
    * @return string
    */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
    * Status of the delivery.
    - delivered: The delivery is packed and ready to be picked up by the delivery service.
    *
    * @param string $status
    *
    * @return self
    */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * List of shipments (= package, parcel, pallet, ...)
     *
     * @return DeliveryShipment[]
     */
    public function getShipments() : array
    {
        return $this->shipments;
    }
    /**
     * List of shipments (= package, parcel, pallet, ...)
     *
     * @param DeliveryShipment[] $shipments
     *
     * @return self
     */
    public function setShipments(array $shipments) : self
    {
        $this->initialized['shipments'] = true;
        $this->shipments = $shipments;
        return $this;
    }
}