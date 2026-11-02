<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class DiscoShop implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The disco shop code
     *
     * @var string
     */
    public string $shopCode;
    /**
     * The disco shop name
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['shopCode' => 'shopCode', 'name' => 'name'];
    }
}