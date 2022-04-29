<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class GetOrderReportClearingCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Unprocessable Entity', 422);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}