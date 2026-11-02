<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class ProductStockReferenceReference implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Company name. Is provided for "reserved" stock references with orders from other shops.
     *
     * @var string|null
     */
    public ?string $companyName;
    /**
     * Inbound delivery number. Is provided for "incoming" stock references.
     *
     * @var string|null
     */
    public ?string $inboundDeliveryNumber;
    /**
     * Order number. Is provided for "reserved" stock references with an order.
     *
     * @var string|null
     */
    public ?string $orderNumber;
    public function definedProperties(): array
    {
        return ['companyName' => 'companyName', 'inboundDeliveryNumber' => 'inboundDeliveryNumber', 'orderNumber' => 'orderNumber'];
    }
}