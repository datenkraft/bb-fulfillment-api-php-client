<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class DeliveryShipmentJournal extends \ArrayObject
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
     * The create date for the entry. Format in ISO 8601.
     *
     * @var \DateTime
     */
    protected $date;
    /**
     * The type code of the journal entry.
     *
     * @var string
     */
    protected $typeCode;
    /**
     * The create date for the entry. Format in ISO 8601.
     *
     * @return \DateTime
     */
    public function getDate() : \DateTime
    {
        return $this->date;
    }
    /**
     * The create date for the entry. Format in ISO 8601.
     *
     * @param \DateTime $date
     *
     * @return self
     */
    public function setDate(\DateTime $date) : self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * The type code of the journal entry.
     *
     * @return string
     */
    public function getTypeCode() : string
    {
        return $this->typeCode;
    }
    /**
     * The type code of the journal entry.
     *
     * @param string $typeCode
     *
     * @return self
     */
    public function setTypeCode(string $typeCode) : self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;
        return $this;
    }
}