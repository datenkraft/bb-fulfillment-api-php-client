<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class Supplier implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $supplierNumber;
    /**
     * Supplier name
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['supplierNumber' => 'supplierNumber', 'name' => 'name'];
    }
}