<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class GetInboundDeliveryDocumentForbiddenException extends ForbiddenException
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
        parent::__construct('Forbidden');
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