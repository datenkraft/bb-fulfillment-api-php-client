<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class GetProductStockCheckCollectionUnprocessableEntityException extends UnprocessableEntityException
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
- SHOP_MISSING: Unable to identify Shop.');
        $this->errorResponse = $errorResponse;
        $this->response = $response;
    }
    public function getErrorResponse(): \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}