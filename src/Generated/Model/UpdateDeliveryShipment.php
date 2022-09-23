<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class UpdateDeliveryShipment
{
    /**
     * The external id of the shipment
     *
     * @var string
     */
    protected $externalShipmentId;
    /**
     * The external id of the shipment
     *
     * @return string
     */
    public function getExternalShipmentId() : string
    {
        return $this->externalShipmentId;
    }
    /**
     * The external id of the shipment
     *
     * @param string $externalShipmentId
     *
     * @return self
     */
    public function setExternalShipmentId(string $externalShipmentId) : self
    {
        $this->externalShipmentId = $externalShipmentId;
        return $this;
    }
}