<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class PatchProduct extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * Minimum available stock level. \
    Set to "null" to clear, or to a non-negative integer to set the level. \
    "0" is a valid value and is distinct from "null".
    *
    * @var int|null
    */
    protected $minAvailableStock;
    /**
    * Minimum available stock level. \
    Set to "null" to clear, or to a non-negative integer to set the level. \
    "0" is a valid value and is distinct from "null".
    *
    * @return int|null
    */
    public function getMinAvailableStock(): ?int
    {
        return $this->minAvailableStock;
    }
    /**
    * Minimum available stock level. \
    Set to "null" to clear, or to a non-negative integer to set the level. \
    "0" is a valid value and is distinct from "null".
    *
    * @param int|null $minAvailableStock
    *
    * @return self
    */
    public function setMinAvailableStock(?int $minAvailableStock): self
    {
        $this->initialized['minAvailableStock'] = true;
        $this->minAvailableStock = $minAvailableStock;
        return $this;
    }
}