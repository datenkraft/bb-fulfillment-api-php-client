<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class PatchInboundDeliveryUnprocessableEntityException extends UnprocessableEntityException
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
- PRODUCT_NOT_FOUND: Unknown productNumber.
- DUPLICATED_PRODUCT: There are multiple products with the same productNumber.
- PRODUCT_COULD_NOT_BE_ADDED_FOR_SUPPLIER: At least one of the the given products could not be added for the supplier.
- SHOP_NOT_FOUND: Shop not found.');
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