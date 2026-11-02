<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class OrderDeliveryCosts implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The price value rounded to 2 decimals with a dot used as separator. Note: This price value refers to
     * a single unit and is not an aggregated price value, which may be calculated by multiplying this price
     * value by the corresponding item count.
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
     * The VAT in percent (might be validated for country)
     *
     * @var float
     */
    public float $vat;
    /**
     * The currency code (ISO 4217)
     *
     * @var string
     */
    public string $currencyCode;
    /**
     * @var string|null
     */
    public ?string $title;
    public function definedProperties(): array
    {
        return ['value' => 'value', 'type' => 'type', 'vat' => 'vat', 'currencyCode' => 'currencyCode', 'title' => 'title'];
    }
}