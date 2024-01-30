<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ReportInventoryMovementEntry extends \ArrayObject
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
     * The type code of the movement entry
     *
     * @var string
     */
    protected $typeCode;
    /**
     * The amount of moved stock
     *
     * @var int
     */
    protected $stock;
    /**
     * The reference of the movement entry
     *
     * @var ReportInventoryMovementEntryReference
     */
    protected $reference;
    /**
     * The type code of the movement entry
     *
     * @return string
     */
    public function getTypeCode() : string
    {
        return $this->typeCode;
    }
    /**
     * The type code of the movement entry
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
    /**
     * The amount of moved stock
     *
     * @return int
     */
    public function getStock() : int
    {
        return $this->stock;
    }
    /**
     * The amount of moved stock
     *
     * @param int $stock
     *
     * @return self
     */
    public function setStock(int $stock) : self
    {
        $this->initialized['stock'] = true;
        $this->stock = $stock;
        return $this;
    }
    /**
     * The reference of the movement entry
     *
     * @return ReportInventoryMovementEntryReference
     */
    public function getReference() : ReportInventoryMovementEntryReference
    {
        return $this->reference;
    }
    /**
     * The reference of the movement entry
     *
     * @param ReportInventoryMovementEntryReference $reference
     *
     * @return self
     */
    public function setReference(ReportInventoryMovementEntryReference $reference) : self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;
        return $this;
    }
}