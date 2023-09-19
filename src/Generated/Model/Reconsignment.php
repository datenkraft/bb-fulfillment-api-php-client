<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class Reconsignment extends \ArrayObject
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
     * The number the reconsignment is referred by.
     *
     * @var string
     */
    protected $reconsignmentNumber;
    /**
     * The date the reconsignment was created.
     *
     * @var string
     */
    protected $reconsignmentDate;
    /**
     * The reason for the reconsignment.
     *
     * @var string
     */
    protected $reconsignmentReason;
    /**
     * The order number. Note: This can be null if the order was not created via the API.
     *
     * @var string
     */
    protected $orderNumber;
    /**
     * The delivery service used for the creation of the order.
     *
     * @var string
     */
    protected $orderDeliveryServiceCode;
    /**
     * The delivery service used for the reconsignment.
     *
     * @var string
     */
    protected $reconsignmentDeliveryServiceCode;
    /**
     * Indicates whether the reconsignment was pre-announced or not.
     *
     * @var bool
     */
    protected $reconsignmentWasPreAnnounced;
    /**
     * The country, from where the reconsignment was shipped (ISO 3166-1 alpha-2).
     *
     * @var string
     */
    protected $reconsignmentCountryCode;
    /**
     * 
     *
     * @var ReconsignmentLine[]
     */
    protected $reconsignmentLines;
    /**
     * The number the reconsignment is referred by.
     *
     * @return string
     */
    public function getReconsignmentNumber() : string
    {
        return $this->reconsignmentNumber;
    }
    /**
     * The number the reconsignment is referred by.
     *
     * @param string $reconsignmentNumber
     *
     * @return self
     */
    public function setReconsignmentNumber(string $reconsignmentNumber) : self
    {
        $this->initialized['reconsignmentNumber'] = true;
        $this->reconsignmentNumber = $reconsignmentNumber;
        return $this;
    }
    /**
     * The date the reconsignment was created.
     *
     * @return string
     */
    public function getReconsignmentDate() : string
    {
        return $this->reconsignmentDate;
    }
    /**
     * The date the reconsignment was created.
     *
     * @param string $reconsignmentDate
     *
     * @return self
     */
    public function setReconsignmentDate(string $reconsignmentDate) : self
    {
        $this->initialized['reconsignmentDate'] = true;
        $this->reconsignmentDate = $reconsignmentDate;
        return $this;
    }
    /**
     * The reason for the reconsignment.
     *
     * @return string
     */
    public function getReconsignmentReason() : string
    {
        return $this->reconsignmentReason;
    }
    /**
     * The reason for the reconsignment.
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
     * The order number. Note: This can be null if the order was not created via the API.
     *
     * @return string
     */
    public function getOrderNumber() : string
    {
        return $this->orderNumber;
    }
    /**
     * The order number. Note: This can be null if the order was not created via the API.
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
     * The delivery service used for the creation of the order.
     *
     * @return string
     */
    public function getOrderDeliveryServiceCode() : string
    {
        return $this->orderDeliveryServiceCode;
    }
    /**
     * The delivery service used for the creation of the order.
     *
     * @param string $orderDeliveryServiceCode
     *
     * @return self
     */
    public function setOrderDeliveryServiceCode(string $orderDeliveryServiceCode) : self
    {
        $this->initialized['orderDeliveryServiceCode'] = true;
        $this->orderDeliveryServiceCode = $orderDeliveryServiceCode;
        return $this;
    }
    /**
     * The delivery service used for the reconsignment.
     *
     * @return string
     */
    public function getReconsignmentDeliveryServiceCode() : string
    {
        return $this->reconsignmentDeliveryServiceCode;
    }
    /**
     * The delivery service used for the reconsignment.
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
     * Indicates whether the reconsignment was pre-announced or not.
     *
     * @return bool
     */
    public function getReconsignmentWasPreAnnounced() : bool
    {
        return $this->reconsignmentWasPreAnnounced;
    }
    /**
     * Indicates whether the reconsignment was pre-announced or not.
     *
     * @param bool $reconsignmentWasPreAnnounced
     *
     * @return self
     */
    public function setReconsignmentWasPreAnnounced(bool $reconsignmentWasPreAnnounced) : self
    {
        $this->initialized['reconsignmentWasPreAnnounced'] = true;
        $this->reconsignmentWasPreAnnounced = $reconsignmentWasPreAnnounced;
        return $this;
    }
    /**
     * The country, from where the reconsignment was shipped (ISO 3166-1 alpha-2).
     *
     * @return string
     */
    public function getReconsignmentCountryCode() : string
    {
        return $this->reconsignmentCountryCode;
    }
    /**
     * The country, from where the reconsignment was shipped (ISO 3166-1 alpha-2).
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
     * 
     *
     * @return ReconsignmentLine[]
     */
    public function getReconsignmentLines() : array
    {
        return $this->reconsignmentLines;
    }
    /**
     * 
     *
     * @param ReconsignmentLine[] $reconsignmentLines
     *
     * @return self
     */
    public function setReconsignmentLines(array $reconsignmentLines) : self
    {
        $this->initialized['reconsignmentLines'] = true;
        $this->reconsignmentLines = $reconsignmentLines;
        return $this;
    }
}