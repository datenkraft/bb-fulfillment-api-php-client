<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class PatchOrder implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The desired shipping date of the order. The order will not be shipped before this date.\
     * Must not be in the past.\
     * Set to null to remove the desired shipping date, so the order is shipped as soon as possible.\
     * Note: while the desired shipping date is in the future, the order is reported with status 'locked'.
     *
     * @var \DateTime|null
     */
    public ?\DateTime $desiredShippingDate;
    public function definedProperties(): array
    {
        return ['desiredShippingDate' => 'desiredShippingDate'];
    }
}