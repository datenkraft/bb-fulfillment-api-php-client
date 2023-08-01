<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class NewProductStockAdd extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Quantity (greater than zero) to be added to the stock.
     *
     * @var int
     */
    protected $quantity;
    /**
     * Quantity (greater than zero) to be added to the stock.
     *
     * @return int
     */
    public function getQuantity() : int
    {
        return $this->quantity;
    }
    /**
     * Quantity (greater than zero) to be added to the stock.
     *
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity(int $quantity) : self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
}