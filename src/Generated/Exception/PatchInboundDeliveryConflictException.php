<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class PatchInboundDeliveryConflictException extends ConflictException
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
        parent::__construct('Conflict

Error codes:
- AMBIGUOUS_INBOUND_DELIVERY: Multiple inbound deliveries were found.
- INBOUND_DELIVERY_NOT_EDITABLE: The inbound delivery is in a state that does not allow editing.
- INBOUND_DELIVERY_BOOKING_IN_STARTED: Booking-in has already started for this inbound delivery.');
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