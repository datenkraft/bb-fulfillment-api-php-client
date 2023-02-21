<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class Delivery
{
    /**
     * Number
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
    - in_progress: The delivery is in the process of being packaged.
    - delivered: The delivery has been transferred to the delivery agent.
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
     * Number
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * Number
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number) : self
    {
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
        $this->orderNumber = $orderNumber;
        return $this;
    }
    /**
    * Status of the delivery.
    - in_progress: The delivery is in the process of being packaged.
    - delivered: The delivery has been transferred to the delivery agent.
    *
    * @return string
    */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
    * Status of the delivery.
    - in_progress: The delivery is in the process of being packaged.
    - delivered: The delivery has been transferred to the delivery agent.
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
        $this->shipments = $shipments;
        return $this;
    }
}