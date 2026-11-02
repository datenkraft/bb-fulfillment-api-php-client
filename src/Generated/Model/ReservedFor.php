<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class ReservedFor implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Reserved stock of a product for shopify
     *
     * @var int
     */
    public int $shopify;
    public function definedProperties(): array
    {
        return ['shopify' => 'shopify'];
    }
}