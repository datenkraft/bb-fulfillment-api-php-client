<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ReconsignmentAnnouncement extends \ArrayObject
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
     * The reason for reconsignment.
     *
     * @var string
     */
    protected $reconsignmentReason;
    /**
     * The number the reconsignmentAnnouncement is referred by.
     *
     * @var string
     */
    protected $reconsignmentAnnouncementNumber;
    /**
     * The date the reconsignmentAnnouncement was created.
     *
     * @var string
     */
    protected $reconsignmentAnnouncementDate;
    /**
     * The country, from where the reconsignment announcement is shipped (ISO 3166-1 alpha-2).
     *
     * @var string
     */
    protected $reconsignmentCountryCode;
    /**
     * The delivery service used for the reconsignmentAnnouncement.
     *
     * @var string
     */
    protected $reconsignmentDeliveryServiceCode;
    /**
     * The tracking code for the reconsignment.
     *
     * @var string
     */
    protected $reconsignmentTrackingCode;
    /**
     * The tracking link for the reconsignment.
     *
     * @var string
     */
    protected $reconsignmentTrackingLink;
    /**
     * Indicates whether the reconsignment announcement is completed.
     *
     * @var bool
     */
    protected $reconsignmentAnnouncementCompleted;
    /**
     * The order number.
     *
     * @var string
     */
    protected $orderNumber;
    /**
     * External reference for the order.
     *
     * @var string|null
     */
    protected $externalOrderReference;
    /**
     * The delivery number associated with the reconsignment.
     *
     * @var string
     */
    protected $deliveryNumber;
    /**
     * 
     *
     * @var ReconsignmentAnnouncementLine[]
     */
    protected $reconsignmentAnnouncementLines;
    /**
     * The reason for reconsignment.
     *
     * @return string
     */
    public function getReconsignmentReason() : string
    {
        return $this->reconsignmentReason;
    }
    /**
     * The reason for reconsignment.
     *
     * @param string $reconsignmentReason
     *
     * @return self
     */
    public function setReconsignmentReason(string $reconsignmentReason) : self
    {
        $this->initialized['reconsignmentReason'] = true;
        $this->reconsignmentReason = $reconsignmentReason;
        return $this;
    }
    /**
     * The number the reconsignmentAnnouncement is referred by.
     *
     * @return string
     */
    public function getReconsignmentAnnouncementNumber() : string
    {
        return $this->reconsignmentAnnouncementNumber;
    }
    /**
     * The number the reconsignmentAnnouncement is referred by.
     *
     * @param string $reconsignmentAnnouncementNumber
     *
     * @return self
     */
    public function setReconsignmentAnnouncementNumber(string $reconsignmentAnnouncementNumber) : self
    {
        $this->initialized['reconsignmentAnnouncementNumber'] = true;
        $this->reconsignmentAnnouncementNumber = $reconsignmentAnnouncementNumber;
        return $this;
    }
    /**
     * The date the reconsignmentAnnouncement was created.
     *
     * @return string
     */
    public function getReconsignmentAnnouncementDate() : string
    {
        return $this->reconsignmentAnnouncementDate;
    }
    /**
     * The date the reconsignmentAnnouncement was created.
     *
     * @param string $reconsignmentAnnouncementDate
     *
     * @return self
     */
    public function setReconsignmentAnnouncementDate(string $reconsignmentAnnouncementDate) : self
    {
        $this->initialized['reconsignmentAnnouncementDate'] = true;
        $this->reconsignmentAnnouncementDate = $reconsignmentAnnouncementDate;
        return $this;
    }
    /**
     * The country, from where the reconsignment announcement is shipped (ISO 3166-1 alpha-2).
     *
     * @return string
     */
    public function getReconsignmentCountryCode() : string
    {
        return $this->reconsignmentCountryCode;
    }
    /**
     * The country, from where the reconsignment announcement is shipped (ISO 3166-1 alpha-2).
     *
     * @param string $reconsignmentCountryCode
     *
     * @return self
     */
    public function setReconsignmentCountryCode(string $reconsignmentCountryCode) : self
    {
        $this->initialized['reconsignmentCountryCode'] = true;
        $this->reconsignmentCountryCode = $reconsignmentCountryCode;
        return $this;
    }
    /**
     * The delivery service used for the reconsignmentAnnouncement.
     *
     * @return string
     */
    public function getReconsignmentDeliveryServiceCode() : string
    {
        return $this->reconsignmentDeliveryServiceCode;
    }
    /**
     * The delivery service used for the reconsignmentAnnouncement.
     *
     * @param string $reconsignmentDeliveryServiceCode
     *
     * @return self
     */
    public function setReconsignmentDeliveryServiceCode(string $reconsignmentDeliveryServiceCode) : self
    {
        $this->initialized['reconsignmentDeliveryServiceCode'] = true;
        $this->reconsignmentDeliveryServiceCode = $reconsignmentDeliveryServiceCode;
        return $this;
    }
    /**
     * The tracking code for the reconsignment.
     *
     * @return string
     */
    public function getReconsignmentTrackingCode() : string
    {
        return $this->reconsignmentTrackingCode;
    }
    /**
     * The tracking code for the reconsignment.
     *
     * @param string $reconsignmentTrackingCode
     *
     * @return self
     */
    public function setReconsignmentTrackingCode(string $reconsignmentTrackingCode) : self
    {
        $this->initialized['reconsignmentTrackingCode'] = true;
        $this->reconsignmentTrackingCode = $reconsignmentTrackingCode;
        return $this;
    }
    /**
     * The tracking link for the reconsignment.
     *
     * @return string
     */
    public function getReconsignmentTrackingLink() : string
    {
        return $this->reconsignmentTrackingLink;
    }
    /**
     * The tracking link for the reconsignment.
     *
     * @param string $reconsignmentTrackingLink
     *
     * @return self
     */
    public function setReconsignmentTrackingLink(string $reconsignmentTrackingLink) : self
    {
        $this->initialized['reconsignmentTrackingLink'] = true;
        $this->reconsignmentTrackingLink = $reconsignmentTrackingLink;
        return $this;
    }
    /**
     * Indicates whether the reconsignment announcement is completed.
     *
     * @return bool
     */
    public function getReconsignmentAnnouncementCompleted() : bool
    {
        return $this->reconsignmentAnnouncementCompleted;
    }
    /**
     * Indicates whether the reconsignment announcement is completed.
     *
     * @param bool $reconsignmentAnnouncementCompleted
     *
     * @return self
     */
    public function setReconsignmentAnnouncementCompleted(bool $reconsignmentAnnouncementCompleted) : self
    {
        $this->initialized['reconsignmentAnnouncementCompleted'] = true;
        $this->reconsignmentAnnouncementCompleted = $reconsignmentAnnouncementCompleted;
        return $this;
    }
    /**
     * The order number.
     *
     * @return string
     */
    public function getOrderNumber() : string
    {
        return $this->orderNumber;
    }
    /**
     * The order number.
     *
     * @param string $orderNumber
     *
     * @return self
     */
    public function setOrderNumber(string $orderNumber) : self
    {
        $this->initialized['orderNumber'] = true;
        $this->orderNumber = $orderNumber;
        return $this;
    }
    /**
     * External reference for the order.
     *
     * @return string|null
     */
    public function getExternalOrderReference() : ?string
    {
        return $this->externalOrderReference;
    }
    /**
     * External reference for the order.
     *
     * @param string|null $externalOrderReference
     *
     * @return self
     */
    public function setExternalOrderReference(?string $externalOrderReference) : self
    {
        $this->initialized['externalOrderReference'] = true;
        $this->externalOrderReference = $externalOrderReference;
        return $this;
    }
    /**
     * The delivery number associated with the reconsignment.
     *
     * @return string
     */
    public function getDeliveryNumber() : string
    {
        return $this->deliveryNumber;
    }
    /**
     * The delivery number associated with the reconsignment.
     *
     * @param string $deliveryNumber
     *
     * @return self
     */
    public function setDeliveryNumber(string $deliveryNumber) : self
    {
        $this->initialized['deliveryNumber'] = true;
        $this->deliveryNumber = $deliveryNumber;
        return $this;
    }
    /**
     * 
     *
     * @return ReconsignmentAnnouncementLine[]
     */
    public function getReconsignmentAnnouncementLines() : array
    {
        return $this->reconsignmentAnnouncementLines;
    }
    /**
     * 
     *
     * @param ReconsignmentAnnouncementLine[] $reconsignmentAnnouncementLines
     *
     * @return self
     */
    public function setReconsignmentAnnouncementLines(array $reconsignmentAnnouncementLines) : self
    {
        $this->initialized['reconsignmentAnnouncementLines'] = true;
        $this->reconsignmentAnnouncementLines = $reconsignmentAnnouncementLines;
        return $this;
    }
}