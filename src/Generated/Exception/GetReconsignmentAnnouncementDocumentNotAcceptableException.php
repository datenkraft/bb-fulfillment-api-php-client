<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class GetReconsignmentAnnouncementDocumentNotAcceptableException extends NotAcceptableException
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
        parent::__construct('The requested document could not be generated in the format specified by the Accept request header.

Error codes:
- ACCEPTABLE_RESPONSE_NOT_AVAILABLE: No response can be provided for the requested accept header.');
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