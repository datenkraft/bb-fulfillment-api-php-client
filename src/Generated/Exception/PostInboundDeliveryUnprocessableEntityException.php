<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class PostInboundDeliveryUnprocessableEntityException extends UnprocessableEntityException
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
- SUPPLIER_NOT_FOUND: Unknown supplierNumber.
- PRODUCT_NOT_FOUND: Unknown productNumber.
- DUPLICATED_PRODUCT: There are multiple products with the same productNumber.
- PRODUCT_COULD_NOT_BE_ADDED_FOR_SUPPLIER: At least one of the the given products could not be added for the supplier.
- INBOUND_DELIVERY_NOTIFICATION_NOT_SENDABLE: Could not send the delivery notification to the supplier. The inbound delivery has been deleted.
- INBOUND_DELIVERY_NUMBER_STARTS_WITH_RESERVED_NUMBER_PREFIX: The inboundDeliveryNumber starts with a prefix that is reserved for internal references.
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