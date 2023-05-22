<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class OrderDelivery extends \ArrayObject
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
    protected $number;
    /**
    * Status of the delivery.
    - delivered: The delivery has been transferred to the delivery agent.
    *
    * @var string
    */
    protected $status;
    /**
     * 
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number) : self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
    * Status of the delivery.
    - delivered: The delivery has been transferred to the delivery agent.
    *
    * @return string
    */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
    * Status of the delivery.
    - delivered: The delivery has been transferred to the delivery agent.
    *
    * @param string $status
    *
    * @return self
    */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}