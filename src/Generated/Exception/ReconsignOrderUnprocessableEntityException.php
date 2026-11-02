<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class ReconsignOrderUnprocessableEntityException extends UnprocessableEntityException
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
        parent::__construct('Unprocessable Entity

Error codes:
- SHOP_NOT_FOUND: Shop not found.
- COUNTRY_NOT_ALLOWED_FOR_RECONSIGNMENT:  The country cannot be used for a reconsignment announcement.
- DELIVERY_SERVICE_NOT_ALLOWED_FOR_RECONSIGNMENT: The determined delivery service cannot be used for a reconsignment announcement.
- RECONSIGNMENT_ANNOUNCEMENT_LINE_NOT_RECONSIGNABLE: A reconsignment announcement line is not reconsignable.
- ORDER_NOT_RECONSIGNABLE_DUE_TO_GDPR_REDACTION: The order is not reconsignable due to GDPR redaction.
- ORDER_NOT_RECONSIGNABLE_DUE_TO_DELIVERY_STATUS: The order is not reconsignable because it is not delivered.
- SHOP_NOT_ACTIVE: The shop is not active. Please contact the steve team.');
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