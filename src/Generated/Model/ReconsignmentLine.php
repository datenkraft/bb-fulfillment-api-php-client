<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class ReconsignmentLine implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $productNumber;
    /**
     * Number of items which have been put back to stock. Null for bundles
     *
     * @var int|null
     */
    public ?int $putBackToStockCount;
    /**
     * Number of items included in the reconsignment. Null for bundles
     *
     * @var int|null
     */
    public ?int $count;
    /**
     * Product unit.  Null for bundles
     *
     * @var string|null
     */
    public ?string $unit;
    /**
     * Weight of a single product.  Null for bundles
     *
     * @var float|null
     */
    public ?float $productWeight;
    /**
     * Product weight unit.  Null for bundles
     *
     * @var string|null
     */
    public ?string $productWeightUnit;
    /**
     * @var list<ReconsignmentLineBundledProduct>|null
     */
    public ?array $bundledProducts;
    public function definedProperties(): array
    {
        return ['productNumber' => 'productNumber', 'putBackToStockCount' => 'putBackToStockCount', 'count' => 'count', 'unit' => 'unit', 'productWeight' => 'productWeight', 'productWeightUnit' => 'productWeightUnit', 'bundledProducts' => 'bundledProducts'];
    }
}