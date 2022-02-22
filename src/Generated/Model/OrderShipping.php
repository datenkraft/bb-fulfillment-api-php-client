<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class OrderShipping
{
    /**
     * The delivery service to recommend for usage.
     *
     * @var string
     */
    protected $deliveryService;
    /**
     * The delivery service to recommend for usage.
     *
     * @return string
     */
    public function getDeliveryService() : string
    {
        return $this->deliveryService;
    }
    /**
     * The delivery service to recommend for usage.
     *
     * @param string $deliveryService
     *
     * @return self
     */
    public function setDeliveryService(string $deliveryService) : self
    {
        $this->deliveryService = $deliveryService;
        return $this;
    }
}