<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class OrderShipping extends \ArrayObject
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
    * The delivery service to recommend for usage.
    The codes of supported delivery services can be retrieved from the 'GET /delivery-service' endpoint.
    *
    * @var string
    */
    protected $deliveryService;
    /**
    * The delivery service to recommend for usage.
    The codes of supported delivery services can be retrieved from the 'GET /delivery-service' endpoint.
    *
    * @return string
    */
    public function getDeliveryService() : string
    {
        return $this->deliveryService;
    }
    /**
    * The delivery service to recommend for usage.
    The codes of supported delivery services can be retrieved from the 'GET /delivery-service' endpoint.
    *
    * @param string $deliveryService
    *
    * @return self
    */
    public function setDeliveryService(string $deliveryService) : self
    {
        $this->initialized['deliveryService'] = true;
        $this->deliveryService = $deliveryService;
        return $this;
    }
}