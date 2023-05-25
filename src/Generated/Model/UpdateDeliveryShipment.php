<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class UpdateDeliveryShipment extends \ArrayObject
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
        $this->initialized['externalShipmentId'] = true;
        $this->externalShipmentId = $externalShipmentId;
        return $this;
    }
}