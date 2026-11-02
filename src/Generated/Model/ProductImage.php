<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class ProductImage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var ProductImageDetail
     */
    public ProductImageDetail $detail;
    /**
     * @var ProductImageDetail
     */
    public ProductImageDetail $thumbnail;
    public function definedProperties(): array
    {
        return ['detail' => 'detail', 'thumbnail' => 'thumbnail'];
    }
}