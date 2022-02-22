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
     * Status code of the delivery
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
     * Status code of the delivery
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * Status code of the delivery
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