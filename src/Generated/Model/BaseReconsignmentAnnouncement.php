<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class BaseReconsignmentAnnouncement implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The reason for reconsignment.
     *
     * @var string
     */
    public string $reconsignmentReason;
    /**
     * Additional options for a reconsignment announcement (optional).
     *
     * @var BaseReconsignmentAnnouncementOptions
     */
    public BaseReconsignmentAnnouncementOptions $options;
    public function definedProperties(): array
    {
        return ['reconsignmentReason' => 'reconsignmentReason', 'options' => 'options'];
    }
}