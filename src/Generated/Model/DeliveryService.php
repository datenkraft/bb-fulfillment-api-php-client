<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class DeliveryService implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Code of the delivery service
     *
     * @var string
     */
    public string $code;
    /**
     * Name of the delivery service
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['code' => 'code', 'name' => 'name'];
    }
}