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

Error codes:
- PRODUCT_NOT_FOUND: Unknown productNumber.
- ORDER_CUSTOMS_CLEARANCE_REQUIRED_FIELD_MISSING: A field required for customs clearance is missing.
- ORDER_NUMBER_STARTS_WITH_RESERVED_NUMBER_PREFIX: The orderNumber starts with a prefix that is reserved for internal references.
- ORDER_INVALID_CURRENCY_CODE: An invalid currencyCode was given for the delivery country.
- ORDER_ITEM_NOT_ORDERABLE: A specific orderItem can not be ordered.
- ORDER_OUTDATED_VAT_FOR_COUNTRY: A given vat value is outdated for the given country.
- ORDER_STREET_NUMBER_REQUIRED_FOR_COUNTRY_MISSING_IN_DELIVERY_ADDRESS: The street number is required for the given country in the delivery address.
- ORDER_STREET_NUMBER_REQUIRED_FOR_COUNTRY_MISSING_IN_INVOICE_ADDRESS: The street number is required for the given country in the invoice address.
- ORDER_PHONE_REQUIRED_FOR_COUNTRY_MISSING: The phone number is required for the given country.');
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