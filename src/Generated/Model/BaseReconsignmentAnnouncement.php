<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class BaseReconsignmentAnnouncement extends \ArrayObject
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
     * The reason for reconsignment.
     *
     * @var string
     */
    protected $reconsignmentReason;
    /**
     * Additional options for a reconsignment announcement (optional).
     *
     * @var BaseReconsignmentAnnouncementOptions|null
     */
    protected $options;
    /**
     * The reason for reconsignment.
     *
     * @return string
     */
    public function getReconsignmentReason() : string
    {
        return $this->reconsignmentReason;
    }
    /**
     * The reason for reconsignment.
     *
     * @param string $reconsignmentReason
     *
     * @return self
     */
    public function setReconsignmentReason(string $reconsignmentReason) : self
    {
        $this->initialized['reconsignmentReason'] = true;
        $this->reconsignmentReason = $reconsignmentReason;
        return $this;
    }
    /**
     * Additional options for a reconsignment announcement (optional).
     *
     * @return BaseReconsignmentAnnouncementOptions|null
     */
    public function getOptions() : ?BaseReconsignmentAnnouncementOptions
    {
        return $this->options;
    }
    /**
     * Additional options for a reconsignment announcement (optional).
     *
     * @param BaseReconsignmentAnnouncementOptions|null $options
     *
     * @return self
     */
    public function setOptions(?BaseReconsignmentAnnouncementOptions $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}