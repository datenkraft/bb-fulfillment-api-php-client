<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class OrderItem implements AdditionalPropertiesInterface
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
     * Number of canceled items, null for bundles.
     *
     * @var int|null
     */
    public ?int $canceledCount;
    /**
     * Number of available items
     *
     * @var int
     */
    public int $availableCount;
    /**
     * Number of delivered items, null for bundles.
     *
     * @var int|null
     */
    public ?int $deliveredCount;
    /**
     * Number of returned items, null for bundles.
     *
     * @var int|null
     */
    public ?int $returnedCount;
    /**
     * The selling price of the item.
     *
     * @var OrderItemPrice
     */
    public OrderItemPrice $price;
    /**
     * Additional options
     *
     * @var iterable<string, mixed>|null
     */
    public ?iterable $options;
    /**
     * @var list<BundledOrderItem>|null
     */
    public ?array $bundledProducts;
    public function definedProperties(): array
    {
        return ['productNumber' => 'productNumber', 'title' => 'title', 'count' => 'count', 'externalProductNumber' => 'externalProductNumber', 'canceledCount' => 'canceledCount', 'availableCount' => 'availableCount', 'deliveredCount' => 'deliveredCount', 'returnedCount' => 'returnedCount', 'price' => 'price', 'options' => 'options', 'bundledProducts' => 'bundledProducts'];
    }
}