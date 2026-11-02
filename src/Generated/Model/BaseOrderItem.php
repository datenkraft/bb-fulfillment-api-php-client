<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class BaseOrderItem implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['productNumber' => 'productNumber', 'title' => 'title', 'count' => 'count', 'externalProductNumber' => 'externalProductNumber'];
    }
}