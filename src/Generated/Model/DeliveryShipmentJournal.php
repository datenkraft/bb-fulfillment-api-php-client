<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class DeliveryShipmentJournal implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The create date for the entry. Format in ISO 8601.
     *
     * @var \DateTime
     */
    public \DateTime $date;
    /**
     * The type code of the journal entry.
     *
     * @var string
     */
    public string $typeCode;
    public function definedProperties(): array
    {
        return ['date' => 'date', 'typeCode' => 'typeCode'];
    }
}