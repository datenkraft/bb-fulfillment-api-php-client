<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class PatchOrder extends \ArrayObject
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
     * The desired shipping date of the order. The order will not be shipped before this date.\
     * Must not be in the past.\
     * Set to null to remove the desired shipping date, so the order is shipped as soon as possible.\
     * Note: while the desired shipping date is in the future, the order is reported with status 'locked'.
     *
     * @var \DateTime|null
     */
    protected $desiredShippingDate;
    /**
     * The desired shipping date of the order. The order will not be shipped before this date.\
     * Must not be in the past.\
     * Set to null to remove the desired shipping date, so the order is shipped as soon as possible.\
     * Note: while the desired shipping date is in the future, the order is reported with status 'locked'.
     *
     * @return \DateTime|null
     */
    public function getDesiredShippingDate(): ?\DateTime
    {
        return $this->desiredShippingDate;
    }
    /**
    * The desired shipping date of the order. The order will not be shipped before this date.\
    Must not be in the past.\
    Set to null to remove the desired shipping date, so the order is shipped as soon as possible.\
    Note: while the desired shipping date is in the future, the order is reported with status 'locked'.
    *
    * @param \DateTime|null $desiredShippingDate
    *
    * @return self
    */
    public function setDesiredShippingDate(?\DateTime $desiredShippingDate): self
    {
        $this->initialized['desiredShippingDate'] = true;
        $this->desiredShippingDate = $desiredShippingDate;
        return $this;
    }
}