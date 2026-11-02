<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class DeliveryExpensePrice implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The net price.
     *
     * @var float
     */
    public float $value;
    /**
     * @var string
     */
    public string $currency;
    public function definedProperties(): array
    {
        return ['value' => 'value', 'currency' => 'currency'];
    }
}