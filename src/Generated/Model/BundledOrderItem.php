<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class BundledOrderItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Valid product number
     *
     * @var string
     */
    public string $productNumber;
    /**
     * Item Title (optional)
     *
     * @var string|null
     */
    public ?string $title;
    /**
     * Positive number of items
     *
     * @var int
     */
    public int $count;
    /**
     * Product number of the customer. Not available for order items of type bundle'. Will be dismissed if given.
     *
     * @var string|null
     */
    public ?string $externalProductNumber;
    /**
     * The selling price of the item.
     *
     * @var BundledOrderItemPrice
     */
    public BundledOrderItemPrice $price;
    /**
     * Number of canceled items
     *
     * @var int
     */
    public int $canceledCount;
    /**
     * Number of available items
     *
     * @var int
     */
    public int $availableCount;
    /**
     * Number of delivered items
     *
     * @var int
     */
    public int $deliveredCount;
    /**
     * Number of returned items
     *
     * @var int
     */
    public int $returnedCount;
    public function definedProperties(): array
    {
        return ['productNumber' => 'productNumber', 'title' => 'title', 'count' => 'count', 'externalProductNumber' => 'externalProductNumber', 'price' => 'price', 'canceledCount' => 'canceledCount', 'availableCount' => 'availableCount', 'deliveredCount' => 'deliveredCount', 'returnedCount' => 'returnedCount'];
    }
}