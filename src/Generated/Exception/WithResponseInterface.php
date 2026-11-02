<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}