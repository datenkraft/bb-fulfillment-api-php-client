<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class BulkImportInboundDeliveryPostResponse207Item
{
    /**
     * HTTP Status code of the single request
     *
     * @var int
     */
    protected $code;
    /**
     * Description for the HTTP Status code of the single request
     *
     * @var string
     */
    protected $message;
    /**
     * Reference for the entry tried to post represented by a key-value pair.
     *
     * @var string[]
     */
    protected $reference;
    /**
     * 
     *
     * @var mixed
     */
    protected $content;
    /**
     * HTTP Status code of the single request
     *
     * @return int
     */
    public function getCode() : int
    {
        return $this->code;
    }
    /**
     * HTTP Status code of the single request
     *
     * @param int $code
     *
     * @return self
     */
    public function setCode(int $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Description for the HTTP Status code of the single request
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * Description for the HTTP Status code of the single request
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * Reference for the entry tried to post represented by a key-value pair.
     *
     * @return string[]
     */
    public function getReference() : iterable
    {
        return $this->reference;
    }
    /**
     * Reference for the entry tried to post represented by a key-value pair.
     *
     * @param string[] $reference
     *
     * @return self
     */
    public function setReference(iterable $reference) : self
    {
        $this->reference = $reference;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
     * 
     *
     * @param mixed $content
     *
     * @return self
     */
    public function setContent($content) : self
    {
        $this->content = $content;
        return $this;
    }
}