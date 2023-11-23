<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ProductJournal extends \ArrayObject
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
     * The API internal id of the journal entry.
     *
     * @var int
     */
    protected $journalId;
    /**
     * The date and time at which the journal entry was created. Format in ISO 8601.
     *
     * @var \DateTime
     */
    protected $date;
    /**
     * The number of the product which the journal entry refers to.
     *
     * @var string
     */
    protected $productNumber;
    /**
     * The code that defines the reason for the stock change.
     *
     * @var string
     */
    protected $reason;
    /**
     * The change of the stock.\Note: This might not be set for all reasons.
     *
     * @var int|null
     */
    protected $stockDelta;
    /**
     * The old value of the stock before applying the delta.\Note: This might not be set for all reasons.
     *
     * @var int|null
     */
    protected $stockOld;
    /**
     * The new value of the stock when the journal entry was created.\Note: This might not be set for all reasons.
     *
     * @var int|null
     */
    protected $stockNew;
    /**
     * 
     *
     * @var ProductJournalReference
     */
    protected $reference;
    /**
     * The API internal id of the journal entry.
     *
     * @return int
     */
    public function getJournalId() : int
    {
        return $this->journalId;
    }
    /**
     * The API internal id of the journal entry.
     *
     * @param int $journalId
     *
     * @return self
     */
    public function setJournalId(int $journalId) : self
    {
        $this->initialized['journalId'] = true;
        $this->journalId = $journalId;
        return $this;
    }
    /**
     * The date and time at which the journal entry was created. Format in ISO 8601.
     *
     * @return \DateTime
     */
    public function getDate() : \DateTime
    {
        return $this->date;
    }
    /**
     * The date and time at which the journal entry was created. Format in ISO 8601.
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
     * The number of the product which the journal entry refers to.
     *
     * @return string
     */
    public function getProductNumber() : string
    {
        return $this->productNumber;
    }
    /**
     * The number of the product which the journal entry refers to.
     *
     * @param string $productNumber
     *
     * @return self
     */
    public function setProductNumber(string $productNumber) : self
    {
        $this->initialized['productNumber'] = true;
        $this->productNumber = $productNumber;
        return $this;
    }
    /**
     * The code that defines the reason for the stock change.
     *
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason;
    }
    /**
     * The code that defines the reason for the stock change.
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason) : self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
        return $this;
    }
    /**
     * The change of the stock.\Note: This might not be set for all reasons.
     *
     * @return int|null
     */
    public function getStockDelta() : ?int
    {
        return $this->stockDelta;
    }
    /**
     * The change of the stock.\Note: This might not be set for all reasons.
     *
     * @param int|null $stockDelta
     *
     * @return self
     */
    public function setStockDelta(?int $stockDelta) : self
    {
        $this->initialized['stockDelta'] = true;
        $this->stockDelta = $stockDelta;
        return $this;
    }
    /**
     * The old value of the stock before applying the delta.\Note: This might not be set for all reasons.
     *
     * @return int|null
     */
    public function getStockOld() : ?int
    {
        return $this->stockOld;
    }
    /**
     * The old value of the stock before applying the delta.\Note: This might not be set for all reasons.
     *
     * @param int|null $stockOld
     *
     * @return self
     */
    public function setStockOld(?int $stockOld) : self
    {
        $this->initialized['stockOld'] = true;
        $this->stockOld = $stockOld;
        return $this;
    }
    /**
     * The new value of the stock when the journal entry was created.\Note: This might not be set for all reasons.
     *
     * @return int|null
     */
    public function getStockNew() : ?int
    {
        return $this->stockNew;
    }
    /**
     * The new value of the stock when the journal entry was created.\Note: This might not be set for all reasons.
     *
     * @param int|null $stockNew
     *
     * @return self
     */
    public function setStockNew(?int $stockNew) : self
    {
        $this->initialized['stockNew'] = true;
        $this->stockNew = $stockNew;
        return $this;
    }
    /**
     * 
     *
     * @return ProductJournalReference
     */
    public function getReference() : ProductJournalReference
    {
        return $this->reference;
    }
    /**
     * 
     *
     * @param ProductJournalReference $reference
     *
     * @return self
     */
    public function setReference(ProductJournalReference $reference) : self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;
        return $this;
    }
}