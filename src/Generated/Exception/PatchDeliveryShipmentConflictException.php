<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class PatchDeliveryShipmentConflictException extends ConflictException
{
    /**
     * @var \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Conflict \\
Available message codes:
- SHIPMENT_WITH_STEVE_EXTERNAL_SHIPMENT_ID_ALREADY_EXISTS: Another shipment with the given 
shipmentId already exists.');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}