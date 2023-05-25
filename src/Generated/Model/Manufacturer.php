<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class Manufacturer extends \ArrayObject
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
     * Number of the manufacturer
     *
     * @var string
     */
    protected $manufacturerNumber;
    /**
     * Manufacturer name
     *
     * @var string
     */
    protected $name;
    /**
     * Number of the manufacturer
     *
     * @return string
     */
    public function getManufacturerNumber() : string
    {
        return $this->manufacturerNumber;
    }
    /**
     * Number of the manufacturer
     *
     * @param string $manufacturerNumber
     *
     * @return self
     */
    public function setManufacturerNumber(string $manufacturerNumber) : self
    {
        $this->initialized['manufacturerNumber'] = true;
        $this->manufacturerNumber = $manufacturerNumber;
        return $this;
    }
    /**
     * Manufacturer name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Manufacturer name
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