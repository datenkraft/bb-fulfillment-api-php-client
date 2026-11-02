<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint;

class ReconsignOrder extends \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\Endpoint
{
    protected $orderNumber;
    /**
     * Create reconsignment announcements for an order. \
     * Only delivered orders are reconsignable. \
     * If the order has been redacted, it is also not reconsignable. \
     * The created reconsignment announcement(s) are returned in the response.
     * @param string $orderNumber The number the order is referred by.
     * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewReconsignmentAnnouncement $requestBody
     * @param array{
     *    "shopCode"?: string, //The shopCode used internally to distinguish between clients.\
     *                         //_This code is optional, if your identity is assigned to only one shop.
     *                         //Otherwise the response would be a 422 HTTP Error._
     * } $queryParameters
     */
    public function __construct(string $orderNumber, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewReconsignmentAnnouncement $requestBody, array $queryParameters = [])
    {
        $this->orderNumber = $orderNumber;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }
    use \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{orderNumber}'], [rawurlencode($this->orderNumber)], '/order/{orderNumber}/reconsign');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewReconsignmentAnnouncement) {
            return [['Content-Type' => ['application/json']], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['shopCode']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('shopCode', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderNotFoundException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderServiceUnavailableException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentAnnouncement[]|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $this->deserializeListResponse($serializer, $body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentAnnouncement[]', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderNotFoundException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (422 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (503 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderServiceUnavailableException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
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