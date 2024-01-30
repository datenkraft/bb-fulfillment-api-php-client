<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ReportInventoryMovementEntryReference extends \ArrayObject
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
     * Name of the Company
     *
     * @var string|null
     */
    protected $companyName;
    /**
     * Name of the Company
     *
     * @return string|null
     */
    public function getCompanyName() : ?string
    {
        return $this->companyName;
    }
    /**
     * Name of the Company
     *
     * @param string|null $companyName
     *
     * @return self
     */
    public function setCompanyName(?string $companyName) : self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
}