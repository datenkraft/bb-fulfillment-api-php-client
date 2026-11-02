<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class NewReconsignmentAnnouncementLine implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $productNumber;
    /**
     * Number of items included in the reconsignment announcement.
     *
     * @var int
     */
    public int $count;
    public function definedProperties(): array
    {
        return ['productNumber' => 'productNumber', 'count' => 'count'];
    }
}