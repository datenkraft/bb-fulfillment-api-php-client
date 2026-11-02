<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class PatchProduct implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Minimum available stock level. \
     * Set to "null" to clear, or to a non-negative integer to set the level. \
     * "0" is a valid value and is distinct from "null".
     *
     * @var int|null
     */
    public ?int $minAvailableStock;
    public function definedProperties(): array
    {
        return ['minAvailableStock' => 'minAvailableStock'];
    }
}