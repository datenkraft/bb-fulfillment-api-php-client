<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class Stock implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Product number
     *
     * @var string
     */
    public string $productNumber;
    /**
     * Amount stocked in the warehouse
     * - the reserved amount for ongoing orders is NOT subtracted
     *
     * @var int
     */
    public int $stocked;
    /**
     * Amount reserved for ongoing orders
     *
     * @var int
     */
    public int $reserved;
    /**
     * Amount available for orders
     * - the reserved amount for ongoing orders is subtracted
     * - includes the incoming amount if the overbookingPossibilityStatus is 'only_inbound_deliveries'
     *
     * @var int
     */
    public int $available;
    /**
     * Amount in ongoing inbound deliveries and processed in the receiving area but not yet stocked
     *
     * @var int
     */
    public int $incoming;
    /**
     * Amount processed in the receiving area but not yet stocked
     *
     * @var int
     */
    public int $locked;
    /**
     * Status regarding the possibility of overbooking
     * - possible: Overbooking is possible
     * - not_possible: Overbooking is not possible
     * - only_inbound_deliveries: Overbooking is only possible for the amount in ongoing inbound deliveries
     *
     * @var string
     */
    public string $overbookingPossibilityStatus;
    /**
     * Reserved stock of a product for a specific source
     *
     * @var ReservedFor
     */
    public ReservedFor $reservedFor;
    public function definedProperties(): array
    {
        return ['productNumber' => 'productNumber', 'stocked' => 'stocked', 'reserved' => 'reserved', 'available' => 'available', 'incoming' => 'incoming', 'locked' => 'locked', 'overbookingPossibilityStatus' => 'overbookingPossibilityStatus', 'reservedFor' => 'reservedFor'];
    }
}