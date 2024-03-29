<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class ReconsignOrderUnprocessableEntityException extends UnprocessableEntityException
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
        parent::__construct('Unprocessable Entity

Error codes:
- SHOP_NOT_FOUND: Shop not found.
- COUNTRY_NOT_ALLOWED_FOR_RECONSIGNMENT:  The country cannot be used for a reconsignment announcement.
- DELIVERY_SERVICE_NOT_ALLOWED_FOR_RECONSIGNMENT: The determined delivery service cannot be used for a reconsignment announcement.
- RECONSIGNMENT_ANNOUNCEMENT_LINE_NOT_RECONSIGNABLE: A reconsignment announcement line is not reconsignable.
- ORDER_NOT_RECONSIGNABLE_DUE_TO_GDPR_REDACTION: The order is not reconsignable due to GDPR redaction.
- ORDER_NOT_RECONSIGNABLE_DUE_TO_DELIVERY_STATUS: The order is not reconsignable because it is not delivered.');
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