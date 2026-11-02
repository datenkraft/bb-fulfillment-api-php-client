<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class DeliveryShipmentPackagingMaterial implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Packaging code of the used packaging material.\
     * Details of the packaging materials can be retrieved from the 'GET /packaging' endpoint.
     *
     * @var string
     */
    public string $code;
    /**
     * How the packaging material was used.
     * - default: The outer packaging of the shipment.
     * - nested: Additional packaging inside the shipment (e.g. ice packs).
     * - stuffing: Stuffing material inside the shipment.
     *
     * @var string
     */
    public string $type;
    /**
     * How many units of the packaging material were used
     *
     * @var int
     */
    public int $count;
    public function definedProperties(): array
    {
        return ['code' => 'code', 'type' => 'type', 'count' => 'count'];
    }
}