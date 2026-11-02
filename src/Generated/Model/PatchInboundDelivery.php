<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class PatchInboundDelivery implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Updated expected date of arrival in the warehouse (timezone CET/CEST)
     *
     * @var \DateTime
     */
    public \DateTime $expectedDeliveryDate;
    /**
     * Updated name of the inbound delivery. Must not be empty or consist only of whitespace characters.
     *
     * @var string
     */
    public string $inboundDeliveryName;
    /**
     * Updated note for the inbound delivery.
     *
     * @var string|null
     */
    public ?string $inboundDeliveryNote;
    /**
     * Products to update, add, or remove. Only listed products are affected; unlisted products remain unchanged.
     * - To update a product's announced count: include the product with the new announcedCount.
     * - To remove a product: include the product with announcedCount set to 0.
     * - To add a new product: include the product with a positive announcedCount.
     *
     * @var list<PatchInboundDeliveryProduct>
     */
    public array $products;
    public function definedProperties(): array
    {
        return ['expectedDeliveryDate' => 'expectedDeliveryDate', 'inboundDeliveryName' => 'inboundDeliveryName', 'inboundDeliveryNote' => 'inboundDeliveryNote', 'products' => 'products'];
    }
}