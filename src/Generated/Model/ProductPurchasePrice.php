<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class ProductPurchasePrice implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The currency code (ISO 4217).
     *
     * @var string
     */
    public string $currencyCode;
    /**
     * Amount of purchased products.
     *
     * @var int
     */
    public int $amount;
    /**
     * The price per product unit.
     *
     * @var float
     */
    public float $pricePerUnit;
    public function definedProperties(): array
    {
        return ['currencyCode' => 'currencyCode', 'amount' => 'amount', 'pricePerUnit' => 'pricePerUnit'];
    }
}