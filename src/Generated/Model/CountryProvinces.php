<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class CountryProvinces implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The code of the province (ISO 3166-2)
     *
     * @var string
     */
    public string $provinceCode;
    /**
     * The name of the province
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['provinceCode' => 'provinceCode', 'name' => 'name'];
    }
}