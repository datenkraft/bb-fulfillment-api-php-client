<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class Supplier
{
    /**
     * 
     *
     * @var string
     */
    protected $supplierNumber;
    /**
     * Supplier name
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @return string
     */
    public function getSupplierNumber() : string
    {
        return $this->supplierNumber;
    }
    /**
     * 
     *
     * @param string $supplierNumber
     *
     * @return self
     */
    public function setSupplierNumber(string $supplierNumber) : self
    {
        $this->supplierNumber = $supplierNumber;
        return $this;
    }
    /**
     * Supplier name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Supplier name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
}