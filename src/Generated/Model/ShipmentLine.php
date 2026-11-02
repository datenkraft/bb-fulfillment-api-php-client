<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class ShipmentLine implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Product number
     *
     * @var string
     */
    public string $productNumber;
    /**
     * Product number of the bundle which the product of the shipment line is part of.
     *
     * @var string|null
     */
    public ?string $productNumberBundle;
    /**
     * Number of items contained in the delivery
     *
     * @var float
     */
    public float $count;
    /**
     * Product unit
     *
     * @var string|null
     */
    public ?string $unit;
    /**
     * Serial numbers
     *
     * @var list<string>
     */
    public array $serialNumbers;
    /**
     * Allows the traceability of the products in the deliveries.
     *
     * @var list<string>
     */
    public array $traceCodes;
    /**
     * Batches
     *
     * @var list<Batch>
     */
    public array $batches;
    public function definedProperties(): array
    {
        return ['productNumber' => 'productNumber', 'productNumberBundle' => 'productNumberBundle', 'count' => 'count', 'unit' => 'unit', 'serialNumbers' => 'serialNumbers', 'traceCodes' => 'traceCodes', 'batches' => 'batches'];
    }
}