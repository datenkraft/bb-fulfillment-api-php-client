<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class BundledOrderItemPrice implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The price value rounded to 2 decimals with a dot used as separator.
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
     * The VAT in percent.
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
    public function definedProperties(): array
    {
        return ['value' => 'value', 'type' => 'type', 'vat' => 'vat', 'currencyCode' => 'currencyCode'];
    }
}