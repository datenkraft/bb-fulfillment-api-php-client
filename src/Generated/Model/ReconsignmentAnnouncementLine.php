<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class ReconsignmentAnnouncementLine implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $productNumber;
    /**
     * Number of items included in the reconsignment announcement. Null for bundles
     *
     * @var int|null
     */
    public ?int $count;
    /**
     * @var list<ReconsignmentAnnouncementLineBundledProduct>|null
     */
    public ?array $bundledProducts;
    public function definedProperties(): array
    {
        return ['productNumber' => 'productNumber', 'count' => 'count', 'bundledProducts' => 'bundledProducts'];
    }
}