<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class NewInboundDeliveryProduct implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Number of the product
     *
     * @var string
     */
    public string $productNumber;
    /**
     * Number of the announced products in the inbound delivery
     *
     * @var int
     */
    public int $announcedCount;
    public function definedProperties(): array
    {
        return ['productNumber' => 'productNumber', 'announcedCount' => 'announcedCount'];
    }
}