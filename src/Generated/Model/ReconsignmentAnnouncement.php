<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class ReconsignmentAnnouncement implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The reason for reconsignment.
     *
     * @var string
     */
    public string $reconsignmentReason;
    /**
     * Additional options for a reconsignment announcement (optional).
     *
     * @var BaseReconsignmentAnnouncementOptions
     */
    public BaseReconsignmentAnnouncementOptions $options;
    /**
     * The number the reconsignmentAnnouncement is referred by.
     *
     * @var string
     */
    public string $reconsignmentAnnouncementNumber;
    /**
     * The date the reconsignmentAnnouncement was created.
     *
     * @var string
     */
    public string $reconsignmentAnnouncementDate;
    /**
     * The country, from where the reconsignment announcement is shipped (ISO 3166-1 alpha-2).
     *
     * @var string
     */
    public string $reconsignmentCountryCode;
    /**
     * The delivery service used for the reconsignmentAnnouncement.
     *
     * @var string
     */
    public string $reconsignmentDeliveryServiceCode;
    /**
     * The tracking code for the reconsignment.
     *
     * @var string
     */
    public string $reconsignmentTrackingCode;
    /**
     * The tracking link for the reconsignment.
     *
     * @var string
     */
    public string $reconsignmentTrackingLink;
    /**
     * Indicates whether the reconsignment announcement is completed.
     *
     * @var bool
     */
    public bool $reconsignmentAnnouncementCompleted;
    /**
     * The order number.
     *
     * @var string
     */
    public string $orderNumber;
    /**
     * External reference for the order.
     *
     * @var string|null
     */
    public ?string $externalOrderReference;
    /**
     * The delivery number associated with the reconsignment.
     *
     * @var string
     */
    public string $deliveryNumber;
    /**
     * @var list<ReconsignmentAnnouncementLine>
     */
    public array $reconsignmentAnnouncementLines;
    public function definedProperties(): array
    {
        return ['reconsignmentReason' => 'reconsignmentReason', 'options' => 'options', 'reconsignmentAnnouncementNumber' => 'reconsignmentAnnouncementNumber', 'reconsignmentAnnouncementDate' => 'reconsignmentAnnouncementDate', 'reconsignmentCountryCode' => 'reconsignmentCountryCode', 'reconsignmentDeliveryServiceCode' => 'reconsignmentDeliveryServiceCode', 'reconsignmentTrackingCode' => 'reconsignmentTrackingCode', 'reconsignmentTrackingLink' => 'reconsignmentTrackingLink', 'reconsignmentAnnouncementCompleted' => 'reconsignmentAnnouncementCompleted', 'orderNumber' => 'orderNumber', 'externalOrderReference' => 'externalOrderReference', 'deliveryNumber' => 'deliveryNumber', 'reconsignmentAnnouncementLines' => 'reconsignmentAnnouncementLines'];
    }
}