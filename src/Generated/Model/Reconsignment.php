<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class Reconsignment implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The number the reconsignment is referred by.
     *
     * @var string
     */
    public string $reconsignmentNumber;
    /**
     * The date the reconsignment was created.
     *
     * @var string
     */
    public string $reconsignmentDate;
    /**
     * The reason for the reconsignment.
     *
     * @var string
     */
    public string $reconsignmentReason;
    /**
     * The order number. Note: This can be null if the order was not created via the API.
     *
     * @var string
     */
    public string $orderNumber;
    /**
     * The delivery service used for the creation of the order.
     *
     * @var string
     */
    public string $orderDeliveryServiceCode;
    /**
     * The delivery service used for the reconsignment.
     *
     * @var string
     */
    public string $reconsignmentDeliveryServiceCode;
    /**
     * Indicates whether the reconsignment was pre-announced or not.
     *
     * @var bool
     */
    public bool $reconsignmentWasPreAnnounced;
    /**
     * The country, from where the reconsignment was shipped (ISO 3166-1 alpha-2).
     *
     * @var string
     */
    public string $reconsignmentCountryCode;
    /**
     * @var list<ReconsignmentLine>
     */
    public array $reconsignmentLines;
    public function definedProperties(): array
    {
        return ['reconsignmentNumber' => 'reconsignmentNumber', 'reconsignmentDate' => 'reconsignmentDate', 'reconsignmentReason' => 'reconsignmentReason', 'orderNumber' => 'orderNumber', 'orderDeliveryServiceCode' => 'orderDeliveryServiceCode', 'reconsignmentDeliveryServiceCode' => 'reconsignmentDeliveryServiceCode', 'reconsignmentWasPreAnnounced' => 'reconsignmentWasPreAnnounced', 'reconsignmentCountryCode' => 'reconsignmentCountryCode', 'reconsignmentLines' => 'reconsignmentLines'];
    }
}