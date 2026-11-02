<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class ReportInventoryMovementEntryReference implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name of the Company
     *
     * @var string|null
     */
    public ?string $companyName;
    public function definedProperties(): array
    {
        return ['companyName' => 'companyName'];
    }
}