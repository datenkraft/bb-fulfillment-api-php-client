<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class PostOrderUnprocessableEntityException extends UnprocessableEntityException
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
- ORDER_CUSTOMS_CLEARANCE_REQUIRED_FIELD_MISSING: A field required for customs clearance is missing.
- ORDER_NUMBER_STARTS_WITH_RESERVED_NUMBER_PREFIX: The orderNumber starts with a prefix that is reserved for internal references.
- ORDER_INVALID_CURRENCY_CODE: An invalid currencyCode was given for the delivery country.
- ORDER_ITEM_NOT_ORDERABLE: A specific orderItem can not be ordered.
- ORDER_OUTDATED_VAT_FOR_COUNTRY: A given vat value is outdated for the given country.
- ORDER_UNKNOWN_VAT_FOR_COUNTRY: A given vat value does not match any known tax rate for the delivery country.
- ORDER_PHONE_REQUIRED_FOR_COUNTRY_MISSING: The phone number is required for the given country.
- ORDER_INVOICE_ADDRESS_PROVINCE_CODE_NOT_DETECTED: The province code of the invoice address could not be detected.
- ORDER_DELIVERY_ADDRESS_PROVINCE_CODE_NOT_DETECTED: The province code of the delivery address could not be detected.
- ORDER_DESIRED_SHIPPING_DATE_IN_PAST: The given desiredShippingDate is in the past.
- SHOP_NOT_ACTIVE: The shop is not active. Please contact the steve team.
- ORDER_AUTO_PROCESS_NO_DELIVERABLE_ITEMS: The order was created, but the autoProcessState could not be applied because no order item is deliverable (e.g. out of stock).');
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