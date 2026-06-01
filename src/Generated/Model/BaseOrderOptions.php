<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class BaseOrderOptions extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * Whether a delivery slip (Lieferschein) is printed and included with the shipment of this order.
    If not provided, the shop `meta.printOrderDocument` value is used; if that is also unset, the default of
    `true` applies. Always `true` for deliveries into customs-required countries.
    *
    * @var bool|null
    */
    protected $printOrderDocument = true;
    /**
    * Whether a delivery slip (Lieferschein) is printed and included with the shipment of this order.
    If not provided, the shop `meta.printOrderDocument` value is used; if that is also unset, the default of
    `true` applies. Always `true` for deliveries into customs-required countries.
    *
    * @return bool|null
    */
    public function getPrintOrderDocument(): ?bool
    {
        return $this->printOrderDocument;
    }
    /**
    * Whether a delivery slip (Lieferschein) is printed and included with the shipment of this order.
    If not provided, the shop `meta.printOrderDocument` value is used; if that is also unset, the default of
    `true` applies. Always `true` for deliveries into customs-required countries.
    *
    * @param bool|null $printOrderDocument
    *
    * @return self
    */
    public function setPrintOrderDocument(?bool $printOrderDocument): self
    {
        $this->initialized['printOrderDocument'] = true;
        $this->printOrderDocument = $printOrderDocument;
        return $this;
    }
}