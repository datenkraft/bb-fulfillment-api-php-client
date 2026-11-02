<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class Batch implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Batch number
     *
     * @var string
     */
    public string $number;
    /**
     * @var \DateTime
     */
    public \DateTime $expirationDate;
    public function definedProperties(): array
    {
        return ['number' => 'number', 'expirationDate' => 'expirationDate'];
    }
}