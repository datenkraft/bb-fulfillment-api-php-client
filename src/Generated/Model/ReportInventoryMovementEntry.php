<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class ReportInventoryMovementEntry implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The type code of the movement entry
     *
     * @var string
     */
    public string $typeCode;
    /**
     * The amount of moved stock
     *
     * @var int
     */
    public int $stock;
    /**
     * The reference of the movement entry
     *
     * @var ReportInventoryMovementEntryReference
     */
    public ReportInventoryMovementEntryReference $reference;
    public function definedProperties(): array
    {
        return ['typeCode' => 'typeCode', 'stock' => 'stock', 'reference' => 'reference'];
    }
}