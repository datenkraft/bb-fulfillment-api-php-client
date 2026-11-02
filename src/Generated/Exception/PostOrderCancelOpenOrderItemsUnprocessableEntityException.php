<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class PostOrderCancelOpenOrderItemsUnprocessableEntityException extends UnprocessableEntityException
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
- ORDER_ITEMS_NOT_CANCELABLE: The orderItems could not be canceled. Check state of order.orderItemsCancelable.
- ORDER_ITEMS_NOT_CANCELABLE_ORDER_SOURCE: The orderItems could not be canceled. Source has not to be \'shopify\'');
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