<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class BaseReconsignmentAnnouncementOptions extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
}