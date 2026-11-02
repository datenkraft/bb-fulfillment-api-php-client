<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class PostProductDraftBadRequestException extends BadRequestException
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
        parent::__construct('Bad Request

Error codes:
- PRODUCT_UNIT_NOT_FOUND: Unknown product unit in field contentsUnit.
- TARIC_CODE_NOT_FOUND: Unknown taricCode.
- MANUFACTURER_NOT_FOUND: Unknown manufacturerNumber.
- BRAND_NOT_FOUND: Unknown brandNumber.
- PRODUCT_NUMBER_HAS_SPACES_AT_START_OR_END: The productNumber has spaces at the start or end.');
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