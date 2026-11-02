<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class OrderShipping implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The delivery service to recommend for usage.\
     * The codes of supported delivery services can be retrieved from the 'GET /delivery-service' endpoint.
     *
     * @var string
     */
    public string $deliveryService;
    public function definedProperties(): array
    {
        return ['deliveryService' => 'deliveryService'];
    }
}