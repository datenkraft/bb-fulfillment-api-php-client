<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class InboundDeliveryTrackingUrl extends \ArrayObject
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
     * Must be an absolute http or https url.
     *
     * @var string
     */
    protected $trackingUrl;
    /**
     * The API internal id of the tracking url
     *
     * @var int
     */
    protected $trackingUrlId;
    /**
     * Link to the tracking site of the carrier.\
     * Must be an absolute http or https url.
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
    /**
     * The API internal id of the tracking url
     *
     * @return int
     */
    public function getTrackingUrlId(): int
    {
        return $this->trackingUrlId;
    }
    /**
     * The API internal id of the tracking url
     *
     * @param int $trackingUrlId
     *
     * @return self
     */
    public function setTrackingUrlId(int $trackingUrlId): self
    {
        $this->initialized['trackingUrlId'] = true;
        $this->trackingUrlId = $trackingUrlId;
        return $this;
    }
}