<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class NewReconsignmentAnnouncement implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The reason for reconsignment.
     *
     * @var string
     */
    public string $reconsignmentReason;
    /**
     * Additional options for a new reconsignment announcement (optional).
     *
     * @var NewReconsignmentAnnouncementOptions|null
     */
    public ?NewReconsignmentAnnouncementOptions $options;
    /**
     * @var list<NewReconsignmentAnnouncementLine>
     */
    public array $reconsignmentAnnouncementLines;
    public function definedProperties(): array
    {
        return ['reconsignmentReason' => 'reconsignmentReason', 'options' => 'options', 'reconsignmentAnnouncementLines' => 'reconsignmentAnnouncementLines'];
    }
}