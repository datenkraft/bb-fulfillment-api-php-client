<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class PostInboundDeliveryBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
         */
        private readonly \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse $errorResponse,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('Bad Request

Error codes:
- DATA_INVALID: Invalid data was given.
- INBOUND_DELIVERY_NUMBER_HAS_SPACES_AT_START_OR_END: The inboundDeliveryNumber has spaces at the start or end.');
    }
    public function getErrorResponse(): \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}