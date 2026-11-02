<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class Manufacturer implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Number of the manufacturer
     *
     * @var string
     */
    public string $manufacturerNumber;
    /**
     * Manufacturer name
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['manufacturerNumber' => 'manufacturerNumber', 'name' => 'name'];
    }
}