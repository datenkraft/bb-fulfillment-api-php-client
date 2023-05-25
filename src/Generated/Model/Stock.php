<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class Stock extends \ArrayObject
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
     * The product number the stock is available for
     *
     * @var string
     */
    protected $productNumber;
    /**
     * The available stock
     *
     * @var int
     */
    protected $stock;
    /**
     * The product number the stock is available for
     *
     * @return string
     */
    public function getProductNumber() : string
    {
        return $this->productNumber;
    }
    /**
     * The product number the stock is available for
     *
     * @param string $productNumber
     *
     * @return self
     */
    public function setProductNumber(string $productNumber) : self
    {
        $this->initialized['productNumber'] = true;
        $this->productNumber = $productNumber;
        return $this;
    }
    /**
     * The available stock
     *
     * @return int
     */
    public function getStock() : int
    {
        return $this->stock;
    }
    /**
     * The available stock
     *
     * @param int $stock
     *
     * @return self
     */
    public function setStock(int $stock) : self
    {
        $this->initialized['stock'] = true;
        $this->stock = $stock;
        return $this;
    }
}