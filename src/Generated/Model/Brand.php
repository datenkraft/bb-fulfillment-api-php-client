<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class Brand extends \ArrayObject
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
    protected $brandNumber;
    /**
     * Brand name
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @return string
     */
    public function getBrandNumber() : string
    {
        return $this->brandNumber;
    }
    /**
     * 
     *
     * @param string $brandNumber
     *
     * @return self
     */
    public function setBrandNumber(string $brandNumber) : self
    {
        $this->initialized['brandNumber'] = true;
        $this->brandNumber = $brandNumber;
        return $this;
    }
    /**
     * Brand name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Brand name
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