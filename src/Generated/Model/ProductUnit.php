<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class ProductUnit implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Code of the product unit
     *
     * @var string
     */
    public string $code;
    public function definedProperties(): array
    {
        return ['code' => 'code'];
    }
}