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