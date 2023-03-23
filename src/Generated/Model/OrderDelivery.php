<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class OrderDelivery
{
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
        $this->status = $status;
        return $this;
    }
}