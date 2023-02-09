<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class ProductUnit
{
    /**
     * Code of the product unit
     *
     * @var string
     */
    protected $code;
    /**
     * Code of the product unit
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Code of the product unit
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->code = $code;
        return $this;
    }
}