<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

class ForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 403);
    }
}