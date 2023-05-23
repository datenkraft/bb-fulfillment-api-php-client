<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class DeliveryService extends \ArrayObject
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
     * Code of the delivery service
     *
     * @var string
     */
    protected $code;
    /**
     * Name of the delivery service
     *
     * @var string
     */
    protected $name;
    /**
     * Code of the delivery service
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Code of the delivery service
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Name of the delivery service
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the delivery service
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