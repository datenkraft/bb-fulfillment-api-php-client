<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class Stock
{
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
    - the reserved amount for ongoing orders is subtracted\
    - if the overbookingPossibilityStatus is 'only_inbound_deliveries', the incoming amount is added
    *
    * @var int
    */
    protected $available;
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
        $this->reserved = $reserved;
        return $this;
    }
    /**
    * Amount available for orders
    - the reserved amount for ongoing orders is subtracted\
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
    - the reserved amount for ongoing orders is subtracted\
    - if the overbookingPossibilityStatus is 'only_inbound_deliveries', the incoming amount is added
    *
    * @param int $available
    *
    * @return self
    */
    public function setAvailable(int $available) : self
    {
        $this->available = $available;
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
        $this->overbookingPossibilityStatus = $overbookingPossibilityStatus;
        return $this;
    }
}