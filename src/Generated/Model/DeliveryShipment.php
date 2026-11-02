<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class DeliveryShipment implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The shipment number
     *
     * @var string
     */
    public string $number;
    /**
     * Status of the delivery.
     * - delivered: The delivery is packed and ready to be picked up by the delivery service.
     *
     * @var string
     */
    public string $status;
    /**
     * The delivery service used to send this delivery.\
     * The codes of supported delivery services can be retrieved from the 'GET /delivery-service' endpoint.
     *
     * @var string|null
     */
    public ?string $deliveryService;
    /**
     * Carrier specific tracking code
     *
     * @var string
     */
    public string $code;
    /**
     * Link to the carrier's specific tracking site
     *
     * @var string
     */
    public string $link;
    /**
     * @var float
     */
    public float $weight;
    /**
     * Weight unit
     *
     * @var string
     */
    public string $weightUnit;
    /**
     * Shipment lines
     *
     * @var list<ShipmentLine>
     */
    public array $shipmentLines;
    /**
     * External id of the shipment
     *
     * @var string|null
     */
    public ?string $externalShipmentId;
    /**
     * Journal entries regarding the shipment
     *
     * @var list<DeliveryShipmentJournal>
     */
    public array $journal;
    /**
     * Packaging dimensions and materials
     *
     * @var DeliveryShipmentPackaging
     */
    public DeliveryShipmentPackaging $packaging;
    public function definedProperties(): array
    {
        return ['number' => 'number', 'status' => 'status', 'deliveryService' => 'deliveryService', 'code' => 'code', 'link' => 'link', 'weight' => 'weight', 'weightUnit' => 'weightUnit', 'shipmentLines' => 'shipmentLines', 'externalShipmentId' => 'externalShipmentId', 'journal' => 'journal', 'packaging' => 'packaging'];
    }
}