<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint;

class PostOrder extends \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\Endpoint
{
    protected $orderNumber;
    /**
    * Add a new order referenced by the given orderNumber.
    * @param string $orderNumber The number the order should be referred by. \
    This number is user defined, must be unique and has a maximum length (check maxLength field). \
    Please ensure that it does not contain any of the following character sequences: '/', '%2F', '%2f', '?',
    '%3F', '%3f','#', '%23', '&', '%26'. \
    Using any of these will result in the route not being handled correctly.
    * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrder $requestBody
    */
    public function __construct(string $orderNumber, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrder $requestBody)
    {
        $this->orderNumber = $orderNumber;
        $this->body = $requestBody;
    }
    use \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{orderNumber}'], [rawurlencode($this->orderNumber)], '/order/{orderNumber}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrder) {
            return [['Content-Type' => ['application/json']], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderConflictException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderServiceUnavailableException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderConflictException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (422 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (503 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderServiceUnavailableException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (stripos(strtolower((string) $contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\BadResponseException($status, $body, $response);
    }
    public function getAuthenticationScopes(): array
    {
        return ['oAuthAuthorization', 'bearerAuth'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
    public function getTargetClass(): ?string
    {
        return null;
    }
}