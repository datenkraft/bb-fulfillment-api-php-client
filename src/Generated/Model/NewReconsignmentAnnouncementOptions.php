<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class NewReconsignmentAnnouncementOptions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * By setting this option, the reconsignment will be processed into a completed state.
     * This option is NOT available in the production systems.
     * The autoprocessing of the state happens after the reconsignment announcement has been successfully created.
     * In case of any errors during the autoprocessing of the state, error messages are shown but the
     * reconsignment announcements will still have been created and will not be rolled back.
     * Available states:
     * - reconsignment_completed: The reconsignment is completed.
     *
     * @var string|null
     */
    public ?string $autoProcessState;
    public function definedProperties(): array
    {
        return ['autoProcessState' => 'autoProcessState'];
    }
}