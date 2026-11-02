<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class ProductJournalReference implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Company name. Is provided if Journal entry reason is 'niceshops_order' and a company is set.
     *
     * @var string|null
     */
    public ?string $companyName;
    /**
     * Inbound delivery number. Is provided if Journal entry reason is 'inbound' and an inboundDeliveryNumber is
     * set.
     *
     * @var string|null
     */
    public ?string $inboundDeliveryNumber;
    /**
     * Order number. Is provided if Journal entry reason is 'fulfillment' or 'return' and an orderNumber is set.
     *
     * @var string|null
     */
    public ?string $orderNumber;
    public function definedProperties(): array
    {
        return ['companyName' => 'companyName', 'inboundDeliveryNumber' => 'inboundDeliveryNumber', 'orderNumber' => 'orderNumber'];
    }
}