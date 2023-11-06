<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class Batch extends \ArrayObject
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
     * Batch number
     *
     * @var string
     */
    protected $number;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $expirationDate;
    /**
     * Batch number
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * Batch number
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
     * 
     *
     * @return \DateTime
     */
    public function getExpirationDate() : \DateTime
    {
        return $this->expirationDate;
    }
    /**
     * 
     *
     * @param \DateTime $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(\DateTime $expirationDate) : self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
}