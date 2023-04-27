<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ProductJournalReference
{
    /**
     * Company name. Set if Journal entry reason is 'niceshops_order' and a company is set.
     *
     * @var string
     */
    protected $companyName;
    /**
     * Inbound delivery number. Set if Journal entry reason is 'inbound'.
     *
     * @var string
     */
    protected $inboundDeliveryNumber;
    /**
     * Order number. Set if Journal entry reason is 'fulfillment' or 'return'.
     *
     * @var string
     */
    protected $orderNumber;
    /**
     * Company name. Set if Journal entry reason is 'niceshops_order' and a company is set.
     *
     * @return string
     */
    public function getCompanyName() : string
    {
        return $this->companyName;
    }
    /**
     * Company name. Set if Journal entry reason is 'niceshops_order' and a company is set.
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(string $companyName) : self
    {
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * Inbound delivery number. Set if Journal entry reason is 'inbound'.
     *
     * @return string
     */
    public function getInboundDeliveryNumber() : string
    {
        return $this->inboundDeliveryNumber;
    }
    /**
     * Inbound delivery number. Set if Journal entry reason is 'inbound'.
     *
     * @param string $inboundDeliveryNumber
     *
     * @return self
     */
    public function setInboundDeliveryNumber(string $inboundDeliveryNumber) : self
    {
        $this->inboundDeliveryNumber = $inboundDeliveryNumber;
        return $this;
    }
    /**
     * Order number. Set if Journal entry reason is 'fulfillment' or 'return'.
     *
     * @return string
     */
    public function getOrderNumber() : string
    {
        return $this->orderNumber;
    }
    /**
     * Order number. Set if Journal entry reason is 'fulfillment' or 'return'.
     *
     * @param string $orderNumber
     *
     * @return self
     */
    public function setOrderNumber(string $orderNumber) : self
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }
}