<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class ProductStockReference implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $productNumber;
    /**
     * Type code of the product stock reference.
     *
     * @var string
     */
    public string $typeCode;
    /**
     * The amount of the stock associated with the reference.
     *
     * @var int
     */
    public int $count;
    /**
     * @var ProductStockReferenceReference
     */
    public ProductStockReferenceReference $reference;
    public function definedProperties(): array
    {
        return ['productNumber' => 'productNumber', 'typeCode' => 'typeCode', 'count' => 'count', 'reference' => 'reference'];
    }
}