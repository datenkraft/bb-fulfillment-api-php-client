<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class NewProductStockAdd
{
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
        $this->quantity = $quantity;
        return $this;
    }
}