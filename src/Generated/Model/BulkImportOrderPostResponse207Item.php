<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class BulkImportOrderPostResponse207Item extends \ArrayObject
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
     * @var mixed[]
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
        $this->initialized['code'] = true;
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
        $this->initialized['message'] = true;
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
        $this->initialized['reference'] = true;
        $this->reference = $reference;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getContent() : iterable
    {
        return $this->content;
    }
    /**
     * 
     *
     * @param mixed[] $content
     *
     * @return self
     */
    public function setContent(iterable $content) : self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
}