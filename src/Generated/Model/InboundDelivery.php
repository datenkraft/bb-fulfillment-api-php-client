<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class InboundDelivery implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Optional free-text reference for inbound delivery.
     *
     * @var string|null
     */
    public ?string $inboundDeliveryName;
    /**
     * Number of the supplier.\
     * Available suppliers can be retrieved from the 'GET /supplier' endpoint.
     *
     * @var string
     */
    public string $supplierNumber;
    /**
     * Expected date of the delivery (timezone CET/CEST)
     *
     * @var \DateTime
     */
    public \DateTime $expectedDeliveryDate;
    /**
     * Products in the inbound delivery
     *
     * @var list<InboundDeliveryProduct>
     */
    public array $products;
    /**
     * The inbound delivery number.\
     * Note: If this number is prefixed with 'NICE', it means that the inbound delivery was
     * created was created manually by niceshops.
     *
     * @var string
     */
    public string $inboundDeliveryNumber;
    /**
     * Notes from the steve warehouse team
     *
     * @var string|null
     */
    public ?string $inboundDeliveryNote;
    /**
     * The API internal id of the inbound delivery
     *
     * @var int
     */
    public int $shopWAWIDeliveryId;
    /**
     * Status of the inbound delivery.\
     * The status for not yet completed is subject to change. you may poll for changes.
     * - open: The inbound delivery has not yet been delivered.
     * - in_progress: The inbound delivery is being processed in our warehouse.
     * - completed: The inbound delivery has been processed in our warehouse.
     * - deleted: The inbound delivery has been deleted.
     *
     * @var string
     */
    public string $status;
    /**
     * The shopCode used internally to distinguish between clients.
     *
     * @var string
     */
    public string $shopCode;
    /**
     * Start date of the delivery (timezone CET/CEST)
     *
     * @var \DateTime|null
     */
    public ?\DateTime $startDate;
    /**
     * End date of the delivery (timezone CET/CEST)
     *
     * @var \DateTime|null
     */
    public ?\DateTime $endDate;
    /**
     * Number of the inbound delivery on the delivery slip.\
     * If the field is empty or not set in the database
     * (e.g. the inbound delivery has not yet arrived in our warehouse), null will be returned.\
     * If an empty string ("") is returned, it means that no delivery slip number is
     * available for the inbound delivery.
     *
     * @var string|null
     */
    public ?string $deliverySlipNumber;
    /**
     * Creation date of the inbound delivery. Format in ISO 8601 (timezone CET/CEST)
     *
     * @var \DateTime
     */
    public \DateTime $createDate;
    /**
     * The tracking urls of the inbound delivery, managed via the tracking-url endpoints.\
     * If the inbound delivery has no tracking urls, null is returned.
     *
     * @var list<InboundDeliveryTrackingUrl>|null
     */
    public ?array $trackingUrls;
    public function definedProperties(): array
    {
        return ['inboundDeliveryName' => 'inboundDeliveryName', 'supplierNumber' => 'supplierNumber', 'expectedDeliveryDate' => 'expectedDeliveryDate', 'products' => 'products', 'inboundDeliveryNumber' => 'inboundDeliveryNumber', 'inboundDeliveryNote' => 'inboundDeliveryNote', 'shopWAWIDeliveryId' => 'shopWAWIDeliveryId', 'status' => 'status', 'shopCode' => 'shopCode', 'startDate' => 'startDate', 'endDate' => 'endDate', 'deliverySlipNumber' => 'deliverySlipNumber', 'createDate' => 'createDate', 'trackingUrls' => 'trackingUrls'];
    }
}