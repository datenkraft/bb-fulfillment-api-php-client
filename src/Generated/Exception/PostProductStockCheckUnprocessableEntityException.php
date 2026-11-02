<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class PostProductStockCheckUnprocessableEntityException extends UnprocessableEntityException
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
- SHOP_MISSING: Unable to identify Shop.
- SHOP_NOT_ACTIVE: The shop is not active.
- STOCK_CHECK_NO_STOCK: The product has no stock in the warehouse, so a control list can not be created.');
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