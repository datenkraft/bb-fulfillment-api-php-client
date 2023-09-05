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
     * External id of the shipment
     *
     * @var string|null
     */
    protected $externalShipmentId;
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
        $this->initialized['externalShipmentId'] = true;
        $this->externalShipmentId = $externalShipmentId;
        return $this;
    }
}