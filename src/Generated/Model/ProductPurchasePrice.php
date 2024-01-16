<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ProductPurchasePrice extends \ArrayObject
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
     * The currency code (ISO 4217).
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Amount of purchased products.
     *
     * @var int
     */
    protected $amount;
    /**
     * The price per product unit.
     *
     * @var float
     */
    protected $pricePerUnit;
    /**
     * The currency code (ISO 4217).
     *
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }
    /**
     * The currency code (ISO 4217).
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(string $currencyCode) : self
    {
        $this->initialized['currencyCode'] = true;
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * Amount of purchased products.
     *
     * @return int
     */
    public function getAmount() : int
    {
        return $this->amount;
    }
    /**
     * Amount of purchased products.
     *
     * @param int $amount
     *
     * @return self
     */
    public function setAmount(int $amount) : self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * The price per product unit.
     *
     * @return float
     */
    public function getPricePerUnit() : float
    {
        return $this->pricePerUnit;
    }
    /**
     * The price per product unit.
     *
     * @param float $pricePerUnit
     *
     * @return self
     */
    public function setPricePerUnit(float $pricePerUnit) : self
    {
        $this->initialized['pricePerUnit'] = true;
        $this->pricePerUnit = $pricePerUnit;
        return $this;
    }
}