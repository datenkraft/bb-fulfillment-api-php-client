<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class OrderPayment implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The payment method
     *
     * @var string
     */
    public string $type;
    public function definedProperties(): array
    {
        return ['type' => 'type'];
    }
}