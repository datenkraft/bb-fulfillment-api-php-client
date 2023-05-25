<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class Supplier extends \ArrayObject
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
        $this->initialized['supplierNumber'] = true;
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
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}