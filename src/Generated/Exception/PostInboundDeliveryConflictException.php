<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class PostInboundDeliveryConflictException extends ConflictException
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
        parent::__construct('Conflict

Error codes:
- INBOUND_DELIVERY_ALREADY_EXISTS: There already exists an inbound delivery with the given inboundDeliveryNumber.');
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