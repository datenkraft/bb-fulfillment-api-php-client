<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class ReportClearingOrder implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The order number. Note: This can be null if the order was not created via the API.
     *
     * @var string
     */
    public string $orderNumber;
    /**
     * The API internal id of the order.
     *
     * @var int
     */
    public int $shopOrderId;
    /**
     * @var string
     */
    public string $deliveryZipCode;
    /**
     * @var string
     */
    public string $deliveryCountryCode;
    public function definedProperties(): array
    {
        return ['orderNumber' => 'orderNumber', 'shopOrderId' => 'shopOrderId', 'deliveryZipCode' => 'deliveryZipCode', 'deliveryCountryCode' => 'deliveryCountryCode'];
    }
}