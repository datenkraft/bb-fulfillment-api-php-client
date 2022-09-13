<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class RedactOrderConflictException extends ConflictException
{
    /**
     * @var \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Conflict

Available message codes:
- ORDER_NOT_REDACTABLE: The order is not redactable because of status conflicts
- ORDER_ALREADY_REDACTED: The order is already redacted');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}