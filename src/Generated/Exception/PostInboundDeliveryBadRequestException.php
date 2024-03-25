<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class PostInboundDeliveryBadRequestException extends BadRequestException
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
        parent::__construct('Bad Request

Error codes:
- DATA_INVALID: Invalid data was given.
- INBOUND_DELIVERY_NUMBER_HAS_SPACES_AT_START_OR_END: The inboundDeliveryNumber has spaces at the start or end.');
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