<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class NewReconsignmentAnnouncementOptions extends \ArrayObject
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
    * By setting this option, the reconsignment will be processed into a completed state.
    This option is NOT available in the production systems.
    The autoprocessing of the state happens after the reconsignment announcement has been successfully created.
    In case of any errors during the autoprocessing of the state, error messages are shown but the
    reconsignment announcements will still have been created and will not be rolled back.
    Available states:
    - reconsignment_completed: The reconsignment is completed.
    *
    * @var string|null
    */
    protected $autoProcessState;
    /**
    * By setting this option, the reconsignment will be processed into a completed state.
    This option is NOT available in the production systems.
    The autoprocessing of the state happens after the reconsignment announcement has been successfully created.
    In case of any errors during the autoprocessing of the state, error messages are shown but the
    reconsignment announcements will still have been created and will not be rolled back.
    Available states:
    - reconsignment_completed: The reconsignment is completed.
    *
    * @return string|null
    */
    public function getAutoProcessState() : ?string
    {
        return $this->autoProcessState;
    }
    /**
    * By setting this option, the reconsignment will be processed into a completed state.
    This option is NOT available in the production systems.
    The autoprocessing of the state happens after the reconsignment announcement has been successfully created.
    In case of any errors during the autoprocessing of the state, error messages are shown but the
    reconsignment announcements will still have been created and will not be rolled back.
    Available states:
    - reconsignment_completed: The reconsignment is completed.
    *
    * @param string|null $autoProcessState
    *
    * @return self
    */
    public function setAutoProcessState(?string $autoProcessState) : self
    {
        $this->initialized['autoProcessState'] = true;
        $this->autoProcessState = $autoProcessState;
        return $this;
    }
}