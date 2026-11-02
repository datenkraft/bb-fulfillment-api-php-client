<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class NewProductStockAdd implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Quantity (greater than zero) to be added to the stock.
     *
     * @var int
     */
    public int $quantity;
    public function definedProperties(): array
    {
        return ['quantity' => 'quantity'];
    }
}