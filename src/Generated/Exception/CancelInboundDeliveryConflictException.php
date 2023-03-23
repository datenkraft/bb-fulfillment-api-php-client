<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class CancelInboundDeliveryConflictException extends ConflictException
{
    /**
     * @var \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Conflict

Available message codes:
- AMBIGUOUS_INBOUND_DELIVERY: Multiple inbound deliveries were found.
- INBOUND_DELIVERY_ALREADY_CANCELED: The inbound delivery is already canceled.
- INBOUND_DELIVERY_NOT_CANCELABLE: The inbound delivery could not be canceled.');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}