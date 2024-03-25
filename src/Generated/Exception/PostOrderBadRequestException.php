<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class PostOrderBadRequestException extends BadRequestException
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
- CUSTOMER_EMAIL_REQUIRED: The customer email address is required for this order because the delivery address seems to be a pick up station of a shipping carrier which requires the email address of the customer.
- ORDER_NUMBER_HAS_SPACES_AT_START_OR_END: The orderNumber has spaces at the start or end.');
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