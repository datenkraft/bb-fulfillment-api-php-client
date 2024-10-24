<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class NewReconsignmentAnnouncement extends \ArrayObject
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
     * Additional options for a new reconsignment announcement (optional).
     *
     * @var NewReconsignmentAnnouncementOptions|null
     */
    protected $options;
    /**
     * 
     *
     * @var NewReconsignmentAnnouncementLine[]
     */
    protected $reconsignmentAnnouncementLines;
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
     * Additional options for a new reconsignment announcement (optional).
     *
     * @return NewReconsignmentAnnouncementOptions|null
     */
    public function getOptions() : ?NewReconsignmentAnnouncementOptions
    {
        return $this->options;
    }
    /**
     * Additional options for a new reconsignment announcement (optional).
     *
     * @param NewReconsignmentAnnouncementOptions|null $options
     *
     * @return self
     */
    public function setOptions(?NewReconsignmentAnnouncementOptions $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    /**
     * 
     *
     * @return NewReconsignmentAnnouncementLine[]
     */
    public function getReconsignmentAnnouncementLines() : array
    {
        return $this->reconsignmentAnnouncementLines;
    }
    /**
     * 
     *
     * @param NewReconsignmentAnnouncementLine[] $reconsignmentAnnouncementLines
     *
     * @return self
     */
    public function setReconsignmentAnnouncementLines(array $reconsignmentAnnouncementLines) : self
    {
        $this->initialized['reconsignmentAnnouncementLines'] = true;
        $this->reconsignmentAnnouncementLines = $reconsignmentAnnouncementLines;
        return $this;
    }
}