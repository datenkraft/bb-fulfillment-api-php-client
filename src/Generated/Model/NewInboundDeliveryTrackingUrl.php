<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class NewInboundDeliveryTrackingUrl implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Link to the tracking site of the carrier.\
     * Must be an absolute http or https url.
     *
     * @var string
     */
    public string $trackingUrl;
    public function definedProperties(): array
    {
        return ['trackingUrl' => 'trackingUrl'];
    }
}