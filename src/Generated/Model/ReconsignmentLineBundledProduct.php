<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class ReconsignmentLineBundledProduct implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $productNumber;
    /**
     * Number of items which have been put back to stock.
     *
     * @var int
     */
    public int $putBackToStockCount;
    /**
     * Number of items included in the reconsignment.
     *
     * @var int
     */
    public int $count;
    /**
     * Product unit
     *
     * @var string
     */
    public string $unit;
    /**
     * Weight of a single product
     *
     * @var float
     */
    public float $productWeight;
    /**
     * Product weight unit
     *
     * @var string
     */
    public string $productWeightUnit;
    public function definedProperties(): array
    {
        return ['productNumber' => 'productNumber', 'putBackToStockCount' => 'putBackToStockCount', 'count' => 'count', 'unit' => 'unit', 'productWeight' => 'productWeight', 'productWeightUnit' => 'productWeightUnit'];
    }
}