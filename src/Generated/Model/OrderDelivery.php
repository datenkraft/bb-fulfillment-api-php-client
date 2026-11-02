<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class OrderDelivery implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
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
     * Indicates whether the delivery was delivered partially or not
     *
     * @var bool
     */
    public bool $deliveredPartially;
    public function definedProperties(): array
    {
        return ['number' => 'number', 'status' => 'status', 'deliveredPartially' => 'deliveredPartially'];
    }
}