<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class CancelInboundDeliveryConflictException extends ConflictException
{
    /**
     * @var \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse $errorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Conflict

Error codes:
- AMBIGUOUS_INBOUND_DELIVERY: Multiple inbound deliveries were found.
- INBOUND_DELIVERY_ALREADY_CANCELED: The inbound delivery is already canceled.
- INBOUND_DELIVERY_NOT_CANCELABLE: The inbound delivery could not be canceled.');
        $this->errorResponse = $errorResponse;
        $this->response = $response;
    }
    public function getErrorResponse() : \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}