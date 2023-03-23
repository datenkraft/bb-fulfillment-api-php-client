<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class DeliveryShipment
{
    /**
     * The shipment number
     *
     * @var string
     */
    protected $number;
    /**
    * Status of the delivery.
    - delivered: The delivery has been transferred to the delivery agent.
    *
    * @var string
    */
    protected $status;
    /**
    * The delivery service used to send this delivery.
    The codes of supported delivery services can be retrieved from the 'GET /delivery-service' endpoint.
    *
    * @var string|null
    */
    protected $deliveryService;
    /**
     * Carrier specific tracking code
     *
     * @var string
     */
    protected $code;
    /**
     * Link to the carrier's tracking site
     *
     * @var string
     */
    protected $link;
    /**
     * Weight
     *
     * @var float
     */
    protected $weight;
    /**
     * Weight unit
     *
     * @var string
     */
    protected $weightUnit;
    /**
     * Shipment lines
     *
     * @var ShipmentLine[]
     */
    protected $shipmentLines;
    /**
     * External id of the shipment
     *
     * @var string|null
     */
    protected $externalShipmentId;
    /**
     * The shipment number
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * The shipment number
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
    * Status of the delivery.
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
    * The delivery service used to send this delivery.
    The codes of supported delivery services can be retrieved from the 'GET /delivery-service' endpoint.
    *
    * @return string|null
    */
    public function getDeliveryService() : ?string
    {
        return $this->deliveryService;
    }
    /**
    * The delivery service used to send this delivery.
    The codes of supported delivery services can be retrieved from the 'GET /delivery-service' endpoint.
    *
    * @param string|null $deliveryService
    *
    * @return self
    */
    public function setDeliveryService(?string $deliveryService) : self
    {
        $this->deliveryService = $deliveryService;
        return $this;
    }
    /**
     * Carrier specific tracking code
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Carrier specific tracking code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Link to the carrier's tracking site
     *
     * @return string
     */
    public function getLink() : string
    {
        return $this->link;
    }
    /**
     * Link to the carrier's tracking site
     *
     * @param string $link
     *
     * @return self
     */
    public function setLink(string $link) : self
    {
        $this->link = $link;
        return $this;
    }
    /**
     * Weight
     *
     * @return float
     */
    public function getWeight() : float
    {
        return $this->weight;
    }
    /**
     * Weight
     *
     * @param float $weight
     *
     * @return self
     */
    public function setWeight(float $weight) : self
    {
        $this->weight = $weight;
        return $this;
    }
    /**
     * Weight unit
     *
     * @return string
     */
    public function getWeightUnit() : string
    {
        return $this->weightUnit;
    }
    /**
     * Weight unit
     *
     * @param string $weightUnit
     *
     * @return self
     */
    public function setWeightUnit(string $weightUnit) : self
    {
        $this->weightUnit = $weightUnit;
        return $this;
    }
    /**
     * Shipment lines
     *
     * @return ShipmentLine[]
     */
    public function getShipmentLines() : array
    {
        return $this->shipmentLines;
    }
    /**
     * Shipment lines
     *
     * @param ShipmentLine[] $shipmentLines
     *
     * @return self
     */
    public function setShipmentLines(array $shipmentLines) : self
    {
        $this->shipmentLines = $shipmentLines;
        return $this;
    }
    /**
     * External id of the shipment
     *
     * @return string|null
     */
    public function getExternalShipmentId() : ?string
    {
        return $this->externalShipmentId;
    }
    /**
     * External id of the shipment
     *
     * @param string|null $externalShipmentId
     *
     * @return self
     */
    public function setExternalShipmentId(?string $externalShipmentId) : self
    {
        $this->externalShipmentId = $externalShipmentId;
        return $this;
    }
}