<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class ExternalListing implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Type of the external listing.
     *
     * @var string
     */
    public string $type;
    /**
     * Value of the external listing.
     *
     * @var string
     */
    public string $value;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'value' => 'value'];
    }
}