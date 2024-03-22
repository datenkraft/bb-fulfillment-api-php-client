<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ProductJournalReference extends \ArrayObject
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
     * Company name. Is provided if Journal entry reason is 'niceshops_order' and a company is set.
     *
     * @var string|null
     */
    protected $companyName;
    /**
    * Inbound delivery number. Is provided if Journal entry reason is 'inbound' and an inboundDeliveryNumber is
    set.
    *
    * @var string|null
    */
    protected $inboundDeliveryNumber;
    /**
     * Order number. Is provided if Journal entry reason is 'fulfillment' or 'return' and an orderNumber is set.
     *
     * @var string|null
     */
    protected $orderNumber;
    /**
     * Company name. Is provided if Journal entry reason is 'niceshops_order' and a company is set.
     *
     * @return string|null
     */
    public function getCompanyName() : ?string
    {
        return $this->companyName;
    }
    /**
     * Company name. Is provided if Journal entry reason is 'niceshops_order' and a company is set.
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
    /**
    * Inbound delivery number. Is provided if Journal entry reason is 'inbound' and an inboundDeliveryNumber is
    set.
    *
    * @return string|null
    */
    public function getInboundDeliveryNumber() : ?string
    {
        return $this->inboundDeliveryNumber;
    }
    /**
    * Inbound delivery number. Is provided if Journal entry reason is 'inbound' and an inboundDeliveryNumber is
    set.
    *
    * @param string|null $inboundDeliveryNumber
    *
    * @return self
    */
    public function setInboundDeliveryNumber(?string $inboundDeliveryNumber) : self
    {
        $this->initialized['inboundDeliveryNumber'] = true;
        $this->inboundDeliveryNumber = $inboundDeliveryNumber;
        return $this;
    }
    /**
     * Order number. Is provided if Journal entry reason is 'fulfillment' or 'return' and an orderNumber is set.
     *
     * @return string|null
     */
    public function getOrderNumber() : ?string
    {
        return $this->orderNumber;
    }
    /**
     * Order number. Is provided if Journal entry reason is 'fulfillment' or 'return' and an orderNumber is set.
     *
     * @param string|null $orderNumber
     *
     * @return self
     */
    public function setOrderNumber(?string $orderNumber) : self
    {
        $this->initialized['orderNumber'] = true;
        $this->orderNumber = $orderNumber;
        return $this;
    }
}