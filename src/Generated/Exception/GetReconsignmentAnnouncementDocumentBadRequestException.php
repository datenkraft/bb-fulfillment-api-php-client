<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class GetReconsignmentAnnouncementDocumentBadRequestException extends BadRequestException
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
- RECONSIGNMENT_ANNOUNCEMENT_ALREADY_COMPLETED: The document can not be downloaded anymore, because the reconsignment announcement has already been completed.');
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