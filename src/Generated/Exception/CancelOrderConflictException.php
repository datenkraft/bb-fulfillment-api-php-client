<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class CancelOrderConflictException extends ConflictException
{
    /**
     * @var \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Conflict

Available message codes:
- ORDER_NOT_CANCELABLE: The order could not be canceled anymore
- ORDER_ALREADY_CANCELED: The order is already canceled
- ORDER_CANCELLATION_ALREADY_EXISTS: An order cancellation request already exists, which needs manual approval');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}