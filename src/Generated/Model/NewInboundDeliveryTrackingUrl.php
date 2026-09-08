<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class NewInboundDeliveryTrackingUrl extends \ArrayObject
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
    * Link to the tracking site of the carrier.\
    Must be an absolute http or https url.
    *
    * @var string
    */
    protected $trackingUrl;
    /**
    * Link to the tracking site of the carrier.\
    Must be an absolute http or https url.
    *
    * @return string
    */
    public function getTrackingUrl(): string
    {
        return $this->trackingUrl;
    }
    /**
    * Link to the tracking site of the carrier.\
    Must be an absolute http or https url.
    *
    * @param string $trackingUrl
    *
    * @return self
    */
    public function setTrackingUrl(string $trackingUrl): self
    {
        $this->initialized['trackingUrl'] = true;
        $this->trackingUrl = $trackingUrl;
        return $this;
    }
}