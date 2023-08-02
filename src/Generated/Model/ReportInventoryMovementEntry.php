<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ReportInventoryMovementEntry
{
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
        $this->stock = $stock;
        return $this;
    }
}