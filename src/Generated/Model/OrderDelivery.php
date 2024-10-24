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
    - delivered: The delivery is packed and ready to be picked up by the delivery service.
    *
    * @var string
    */
    protected $status;
    /**
     * Indicates whether the delivery was delivered partially or not
     *
     * @var bool
     */
    protected $deliveredPartially;
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
    - delivered: The delivery is packed and ready to be picked up by the delivery service.
    *
    * @return string
    */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
    * Status of the delivery.
    - delivered: The delivery is packed and ready to be picked up by the delivery service.
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
    /**
     * Indicates whether the delivery was delivered partially or not
     *
     * @return bool
     */
    public function getDeliveredPartially() : bool
    {
        return $this->deliveredPartially;
    }
    /**
     * Indicates whether the delivery was delivered partially or not
     *
     * @param bool $deliveredPartially
     *
     * @return self
     */
    public function setDeliveredPartially(bool $deliveredPartially) : self
    {
        $this->initialized['deliveredPartially'] = true;
        $this->deliveredPartially = $deliveredPartially;
        return $this;
    }
}