<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class OrderPayment
{
    /**
     * The payment method
     *
     * @var string
     */
    protected $type;
    /**
     * The payment method
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The payment method
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}