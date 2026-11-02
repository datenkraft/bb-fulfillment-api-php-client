<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class BaseOrderOptions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Whether a delivery slip (Lieferschein) is printed and included with the shipment of this order.
     * If not provided, the shop `meta.printOrderDocument` value is used; if that is also unset, the default of
     * `true` applies. Always `true` for deliveries into customs-required countries.
     *
     * @var bool|null
     */
    public ?bool $printOrderDocument = true;
    public function definedProperties(): array
    {
        return ['printOrderDocument' => 'printOrderDocument'];
    }
}