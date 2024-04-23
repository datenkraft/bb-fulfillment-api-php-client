<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class Stock extends \ArrayObject
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
     * Product number
     *
     * @var string
     */
    protected $productNumber;
    /**
    * Amount stocked in the warehouse
    - the reserved amount for ongoing orders is NOT subtracted
    *
    * @var int
    */
    protected $stocked;
    /**
     * Amount reserved for ongoing orders
     *
     * @var int
     */
    protected $reserved;
    /**
    * Amount available for orders
    - the reserved amount for ongoing orders is subtracted
    - if the overbookingPossibilityStatus is 'only_inbound_deliveries', the incoming amount is added
    *
    * @var int
    */
    protected $available;
    /**
     * Amount of ongoing inbound deliveries
     *
     * @var int
     */
    protected $incoming;
    /**
     * Amount processed in the receiving area but not yet shelved
     *
     * @var int
     */
    protected $locked;
    /**
    * Status regarding the possibility of overbooking
    - possible: Overbooking is possible
    - not_possible: Overbooking is not possible
    - only_inbound_deliveries: Overbooking is only possible for the amount in ongoing inbound deliveries
    *
    * @var string
    */
    protected $overbookingPossibilityStatus;
    /**
     * Reserved stock of a product for a specific source
     *
     * @var ReservedFor
     */
    protected $reservedFor;
    /**
     * Product number
     *
     * @return string
     */
    public function getProductNumber() : string
    {
        return $this->productNumber;
    }
    /**
     * Product number
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
    * Amount stocked in the warehouse
    - the reserved amount for ongoing orders is NOT subtracted
    *
    * @return int
    */
    public function getStocked() : int
    {
        return $this->stocked;
    }
    /**
    * Amount stocked in the warehouse
    - the reserved amount for ongoing orders is NOT subtracted
    *
    * @param int $stocked
    *
    * @return self
    */
    public function setStocked(int $stocked) : self
    {
        $this->initialized['stocked'] = true;
        $this->stocked = $stocked;
        return $this;
    }
    /**
     * Amount reserved for ongoing orders
     *
     * @return int
     */
    public function getReserved() : int
    {
        return $this->reserved;
    }
    /**
     * Amount reserved for ongoing orders
     *
     * @param int $reserved
     *
     * @return self
     */
    public function setReserved(int $reserved) : self
    {
        $this->initialized['reserved'] = true;
        $this->reserved = $reserved;
        return $this;
    }
    /**
    * Amount available for orders
    - the reserved amount for ongoing orders is subtracted
    - if the overbookingPossibilityStatus is 'only_inbound_deliveries', the incoming amount is added
    *
    * @return int
    */
    public function getAvailable() : int
    {
        return $this->available;
    }
    /**
    * Amount available for orders
    - the reserved amount for ongoing orders is subtracted
    - if the overbookingPossibilityStatus is 'only_inbound_deliveries', the incoming amount is added
    *
    * @param int $available
    *
    * @return self
    */
    public function setAvailable(int $available) : self
    {
        $this->initialized['available'] = true;
        $this->available = $available;
        return $this;
    }
    /**
     * Amount of ongoing inbound deliveries
     *
     * @return int
     */
    public function getIncoming() : int
    {
        return $this->incoming;
    }
    /**
     * Amount of ongoing inbound deliveries
     *
     * @param int $incoming
     *
     * @return self
     */
    public function setIncoming(int $incoming) : self
    {
        $this->initialized['incoming'] = true;
        $this->incoming = $incoming;
        return $this;
    }
    /**
     * Amount processed in the receiving area but not yet shelved
     *
     * @return int
     */
    public function getLocked() : int
    {
        return $this->locked;
    }
    /**
     * Amount processed in the receiving area but not yet shelved
     *
     * @param int $locked
     *
     * @return self
     */
    public function setLocked(int $locked) : self
    {
        $this->initialized['locked'] = true;
        $this->locked = $locked;
        return $this;
    }
    /**
    * Status regarding the possibility of overbooking
    - possible: Overbooking is possible
    - not_possible: Overbooking is not possible
    - only_inbound_deliveries: Overbooking is only possible for the amount in ongoing inbound deliveries
    *
    * @return string
    */
    public function getOverbookingPossibilityStatus() : string
    {
        return $this->overbookingPossibilityStatus;
    }
    /**
    * Status regarding the possibility of overbooking
    - possible: Overbooking is possible
    - not_possible: Overbooking is not possible
    - only_inbound_deliveries: Overbooking is only possible for the amount in ongoing inbound deliveries
    *
    * @param string $overbookingPossibilityStatus
    *
    * @return self
    */
    public function setOverbookingPossibilityStatus(string $overbookingPossibilityStatus) : self
    {
        $this->initialized['overbookingPossibilityStatus'] = true;
        $this->overbookingPossibilityStatus = $overbookingPossibilityStatus;
        return $this;
    }
    /**
     * Reserved stock of a product for a specific source
     *
     * @return ReservedFor
     */
    public function getReservedFor() : ReservedFor
    {
        return $this->reservedFor;
    }
    /**
     * Reserved stock of a product for a specific source
     *
     * @param ReservedFor $reservedFor
     *
     * @return self
     */
    public function setReservedFor(ReservedFor $reservedFor) : self
    {
        $this->initialized['reservedFor'] = true;
        $this->reservedFor = $reservedFor;
        return $this;
    }
}