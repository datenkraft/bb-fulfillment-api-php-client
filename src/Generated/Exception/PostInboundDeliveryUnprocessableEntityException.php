<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class PostInboundDeliveryUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Unprocessable Entity

Available message codes:
- SUPPLIER_NOT_FOUND: The supplier with the given supplierNumber could not be found.
- PRODUCT_NOT_FOUND: The product with the given productNumber could not be found.
- DUPLICATED_PRODUCT: There are multiple products with the same productNumber.
- PRODUCT_COULD_NOT_BE_ADDED_FOR_SUPPLIER: At least one of the the given products could not be added for the supplier.
- INBOUND_DELIVERY_NOTIFICATION_NOT_SENDABLE: Could not send the delivery notification to the supplier. The inbound
delivery has been deleted.');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}