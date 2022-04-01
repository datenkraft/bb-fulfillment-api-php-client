<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class CancelOrderConflictException extends ConflictException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Conflict

Available message codes:
- ORDER_NOT_CANCELABLE: The order could not be canceled anymore
- ORDER_ALREADY_CANCELED: The order is already canceled
- ORDER_CANCELLATION_ALREADY_EXISTS: An order cancellation request already exists, which needs manual approval', 409);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}