<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class OrderPayment extends \ArrayObject
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
     * The payment method
     *
     * @var string
     */
    protected $type;
    /**
     * The payment method
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The payment method
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}