<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class NewInboundDelivery implements AdditionalPropertiesInterface
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
     * @var list<NewInboundDeliveryProduct>
     */
    public array $products;
    public function definedProperties(): array
    {
        return ['inboundDeliveryName' => 'inboundDeliveryName', 'supplierNumber' => 'supplierNumber', 'expectedDeliveryDate' => 'expectedDeliveryDate', 'products' => 'products'];
    }
}