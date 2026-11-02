<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class DeleteInboundDeliveryTrackingUrlNotFoundException extends NotFoundException
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
        parent::__construct('Not Found

Error codes:
- DATA_NOT_FOUND: The requested data could not be found.
- INBOUND_DELIVERY_TRACKING_URL_NOT_FOUND: The tracking url could not be found for the inbound delivery.');
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