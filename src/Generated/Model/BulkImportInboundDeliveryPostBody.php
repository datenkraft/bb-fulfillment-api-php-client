<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class BulkImportInboundDeliveryPostBody
{
    /**
     * File to upload
     *
     * @var string
     */
    protected $file;
    /**
     * File to upload
     *
     * @return string
     */
    public function getFile() : string
    {
        return $this->file;
    }
    /**
     * File to upload
     *
     * @param string $file
     *
     * @return self
     */
    public function setFile(string $file) : self
    {
        $this->file = $file;
        return $this;
    }
}