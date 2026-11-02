<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class PatchInboundDeliveryUnprocessableEntityException extends UnprocessableEntityException
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
- PRODUCT_NOT_FOUND: Unknown productNumber.
- DUPLICATED_PRODUCT: There are multiple products with the same productNumber.
- PRODUCT_COULD_NOT_BE_ADDED_FOR_SUPPLIER: At least one of the the given products could not be added for the supplier.
- SHOP_NOT_FOUND: Shop not found.');
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