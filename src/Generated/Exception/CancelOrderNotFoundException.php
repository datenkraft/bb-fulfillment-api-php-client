<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class CancelOrderNotFoundException extends NotFoundException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Not Found', 404);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}