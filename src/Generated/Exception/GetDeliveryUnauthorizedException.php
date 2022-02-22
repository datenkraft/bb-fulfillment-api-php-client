<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class GetDeliveryUnauthorizedException extends UnauthorizedException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Unauthorized', 401);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}