<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class PostInboundDeliveryUnprocessableEntityException extends UnprocessableEntityException
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
- SUPPLIER_NOT_FOUND: The supplier with the given supplierNumber could not be found.
- PRODUCT_NOT_FOUND: The product with the given productNumber could not be found.
- DUPLICATED_PRODUCT: There are multiple products with the same productNumber.
- PRODUCT_COULD_NOT_BE_ADDED_FOR_SUPPLIER: At least one of the the given products could not be added for the supplier.
- INBOUND_DELIVERY_NOTIFICATION_NOT_SENDABLE: Could not send the delivery notification to the supplier. The inbound
delivery has been deleted.
- INBOUND_DELIVERY_NUMBER_STARTS_WITH_RESERVED_NUMBER_PREFIX: The inboundDeliveryNumber starts with a prefix that is
  reserved for internal references.');
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