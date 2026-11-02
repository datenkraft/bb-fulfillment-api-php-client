<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class NewOrderOptions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Whether a delivery slip (Lieferschein) is printed and included with the shipment of this order.
     * If not provided, the shop `meta.printOrderDocument` value is used; if that is also unset, the default of
     * `true` applies. Always `true` for deliveries into customs-required countries.
     *
     * @var bool|null
     */
    public ?bool $printOrderDocument = true;
    /**
     * By setting this option, the order will be processed into the defined state.\
     * This option is NOT available in the production systems.\
     * The autoprocessing of the state happens after the order has been successfully created.
     * In case of any errors during the autoprocessing of the state, error messages are shown but the
     * order will still have been created and will not be rolled back.\
     * Available states:
     * - order_completed_single_delivery: The order is completely delivered within one delivery.\
     * Note that it might not be possible to create a single delivery for the whole order, for example
     * because of weight restrictions. In those cases multiple deliveries will be created.
     * - order_completed_multiple_deliveries: The order is completely delivered and includes
     * several deliveries.
     * - order_partially_delivered: The order is in progress and one of several deliveries is delivered.
     * - order_canceled: The order is canceled.
     * - order_locked: The order is locked.
     *
     * @var string
     */
    public string $autoProcessState;
    public function definedProperties(): array
    {
        return ['printOrderDocument' => 'printOrderDocument', 'autoProcessState' => 'autoProcessState'];
    }
}