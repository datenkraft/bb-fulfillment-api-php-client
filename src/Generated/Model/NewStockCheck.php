<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class NewStockCheck extends \ArrayObject
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
     * Kind of stock check to be performed in the warehouse:
     * - `inventory`: count the stock of the product (inventory list)
     * - `expiration_date`: check the expiration dates of the stock (control list)
     * - `ean`: check the EAN codes of the stock (control list)
     *
     * @var string
     */
    protected $type;
    /**
     * Kind of stock check to be performed in the warehouse:
     * - `inventory`: count the stock of the product (inventory list)
     * - `expiration_date`: check the expiration dates of the stock (control list)
     * - `ean`: check the EAN codes of the stock (control list)
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
    * Kind of stock check to be performed in the warehouse:
    - `inventory`: count the stock of the product (inventory list)
    - `expiration_date`: check the expiration dates of the stock (control list)
    - `ean`: check the EAN codes of the stock (control list)
    *
    * @param string $type
    *
    * @return self
    */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}