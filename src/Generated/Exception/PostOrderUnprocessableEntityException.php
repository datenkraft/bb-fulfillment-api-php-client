<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class PostOrderUnprocessableEntityException extends UnprocessableEntityException
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

Available message codes:
- PRODUCT_NOT_FOUND: A product could not be found.
- DUPLICATED_PRODUCT: There are multiple orderItems with the same productNumber.
- ORDER_CUSTOMS_CLEARANCE_REQUIRED_FIELD_MISSING: A field required for customs clearance is missing.
- ORDER_NUMBER_STARTS_WITH_RESERVED_NUMBER_PREFIX: The orderNumber starts with a prefix that is reserved for internal
  references.
- ORDER_INVALID_CURRENCY_CODE: An invalid currencyCode was given for the delivery country.');
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