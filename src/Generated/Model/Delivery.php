<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class Delivery implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The delivery number
     *
     * @var string
     */
    public string $number;
    /**
     * The order number. Note: This can be null if the delivery has no associated order.
     *
     * @var string|null
     */
    public ?string $orderNumber;
    /**
     * Status of the delivery.
     * - delivered: The delivery is packed and ready to be picked up by the delivery service.
     *
     * @var string
     */
    public string $status;
    /**
     * List of shipments (= package, parcel, pallet, ...)
     *
     * @var list<DeliveryShipment>
     */
    public array $shipments;
    public function definedProperties(): array
    {
        return ['number' => 'number', 'orderNumber' => 'orderNumber', 'status' => 'status', 'shipments' => 'shipments'];
    }
}