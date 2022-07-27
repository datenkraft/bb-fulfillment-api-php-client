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
     * Amount stocked in the warehouse - without considering the reserved amount for ongoing orders
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
     * Amount available for orders - with the reserved amount for ongoing orders taken into account
     *
     * @var int
     */
    protected $available;
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
     * Amount stocked in the warehouse - without considering the reserved amount for ongoing orders
     *
     * @return int
     */
    public function getStocked() : int
    {
        return $this->stocked;
    }
    /**
     * Amount stocked in the warehouse - without considering the reserved amount for ongoing orders
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
     * Amount available for orders - with the reserved amount for ongoing orders taken into account
     *
     * @return int
     */
    public function getAvailable() : int
    {
        return $this->available;
    }
    /**
     * Amount available for orders - with the reserved amount for ongoing orders taken into account
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
}