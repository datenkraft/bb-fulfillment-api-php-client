<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class Brand implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $brandNumber;
    /**
     * Brand name
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['brandNumber' => 'brandNumber', 'name' => 'name'];
    }
}