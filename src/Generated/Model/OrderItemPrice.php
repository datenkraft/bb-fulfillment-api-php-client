<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class OrderItemPrice implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The price value rounded to 2 decimals with a dot used as separator.
     * Note:
     * - For Bundles: For products of productType 'bundle' this price value refers to and an aggregated price value
     * for all ordered bundles.
     * - Other Products: This price value refers to a single unit and is not an aggregated price value,
     * which may be calculated by multiplying this price value by the corresponding item count.
     *
     * @var float
     */
    public float $value;
    /**
     * The price type
     *
     * @var string
     */
    public string $type;
    /**
     * The VAT in percent. Null for bundles, bundled products may have divergent VAT percentages.
     *
     * @var float|null
     */
    public ?float $vat;
    /**
     * The currency code (ISO 4217)
     *
     * @var string
     */
    public string $currencyCode;
    public function definedProperties(): array
    {
        return ['value' => 'value', 'type' => 'type', 'vat' => 'vat', 'currencyCode' => 'currencyCode'];
    }
}