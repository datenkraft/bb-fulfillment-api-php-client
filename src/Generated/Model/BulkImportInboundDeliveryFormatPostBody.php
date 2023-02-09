<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class BulkImportInboundDeliveryFormatPostBody
{
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
        $this->file = $file;
        return $this;
    }
}