<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class BulkImportInboundDeliveryFormatPostBody extends \ArrayObject
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
     * file to upload
     *
     * @var string
     */
    protected $file;
    /**
     * file to upload
     *
     * @return string
     */
    public function getFile() : string
    {
        return $this->file;
    }
    /**
     * file to upload
     *
     * @param string $file
     *
     * @return self
     */
    public function setFile(string $file) : self
    {
        $this->initialized['file'] = true;
        $this->file = $file;
        return $this;
    }
}