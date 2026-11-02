<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class ReportInventoryMovement implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Number of the product
     *
     * @var string
     */
    public string $productNumber;
    /**
     * Title of the product
     *
     * @var string|null
     */
    public ?string $productTitle;
    /**
     * Stock at the start of the period
     *
     * @var int
     */
    public int $stockStart;
    /**
     * Stock at the end of the period
     *
     * @var int
     */
    public int $stockEnd;
    /**
     * Stock added in the period
     *
     * @var int
     */
    public int $stockAdded;
    /**
     * Stock subtracted (internal and external) in the period
     *
     * @var int
     */
    public int $stockSubtracted;
    /**
     * Stock subtracted in the period.\
     * Note: 'stockSubtracted' already contains 'stockSubtractedExternal'.
     *
     * @var int
     */
    public int $stockSubtractedExternal;
    /**
     * Stock corrections in the period
     *
     * @var int
     */
    public int $stockCorrected;
    /**
     * Stock used for internal purposes in the period
     *
     * @var int
     */
    public int $stockUsedForOwnPurposes;
    /**
     * Stock returned (internal and external) in the period
     *
     * @var int
     */
    public int $stockReturned;
    /**
     * Stock subtracted in the period.\
     * Note: 'stockReturned' already contains 'stockReturnedExternal'.
     *
     * @var int
     */
    public int $stockReturnedExternal;
    /**
     * @var list<ReportInventoryMovementEntry>
     */
    public array $movementEntries;
    public function definedProperties(): array
    {
        return ['productNumber' => 'productNumber', 'productTitle' => 'productTitle', 'stockStart' => 'stockStart', 'stockEnd' => 'stockEnd', 'stockAdded' => 'stockAdded', 'stockSubtracted' => 'stockSubtracted', 'stockSubtractedExternal' => 'stockSubtractedExternal', 'stockCorrected' => 'stockCorrected', 'stockUsedForOwnPurposes' => 'stockUsedForOwnPurposes', 'stockReturned' => 'stockReturned', 'stockReturnedExternal' => 'stockReturnedExternal', 'movementEntries' => 'movementEntries'];
    }
}