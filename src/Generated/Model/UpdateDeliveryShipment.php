<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class UpdateDeliveryShipment implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * External id of the shipment
     *
     * @var string|null
     */
    public ?string $externalShipmentId;
    public function definedProperties(): array
    {
        return ['externalShipmentId' => 'externalShipmentId'];
    }
}