<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class InboundDeliveryProduct implements AdditionalPropertiesInterface
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
    /**
     * Title of the product
     *
     * @var string
     */
    public string $productTitle;
    /**
     * Number of actual delivered products in the inbound delivery
     *
     * @var int
     */
    public int $deliveredCount;
    public function definedProperties(): array
    {
        return ['productNumber' => 'productNumber', 'announcedCount' => 'announcedCount', 'productTitle' => 'productTitle', 'deliveredCount' => 'deliveredCount'];
    }
}