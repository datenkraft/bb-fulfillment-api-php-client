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
- ORDER_NOT_RECONSIGNABLE: The order is not in a reconsignable state.
- RECONSIGNMENT_ANNOUNCEMENT_LINE_NOT_RECONSIGNABLE: A reconsignment announcement line is not reconsignable.');
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