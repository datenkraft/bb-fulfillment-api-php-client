<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class NewStockCheck implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Kind of stock check to be performed in the warehouse:
     * - `inventory`: count the stock of the product (inventory list)
     * - `expiration_date`: check the expiration dates of the stock (control list)
     * - `ean`: check the EAN codes of the stock (control list)
     *
     * @var string
     */
    public string $type;
    public function definedProperties(): array
    {
        return ['type' => 'type'];
    }
}