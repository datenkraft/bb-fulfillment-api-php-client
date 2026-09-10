<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint;

class PostInboundDeliveryTrackingUrl extends \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\Endpoint
{
    protected $inboundDeliveryNumber;
    /**
    * Add a tracking url to the inbound delivery specified by the given inbound delivery number. \
    * An inbound delivery can have any number of tracking urls. \
    * Tracking urls can be added while the inbound delivery is in status `open` or `in_progress`. \
    * Once it is `completed` or `deleted`, the request is answered with
    * 409 `INBOUND_DELIVERY_NOT_EDITABLE`.
    *
    * The tracking urls of an inbound delivery are returned in the `trackingUrls` field of the
    * inbound delivery resource (`GET /inbound-delivery` and `GET /inbound-delivery/{inboundDeliveryNumber}`).
    * They stay readable in any status.
    * @param string $inboundDeliveryNumber The inbound delivery number as defined during the creation of the inbound delivery.
    * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewInboundDeliveryTrackingUrl $requestBody
    * @param array{
    *    "shopCode"?: string, //The shopCode used internally to distinguish between clients. \
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    * } $queryParameters
    */
    public function __construct(string $inboundDeliveryNumber, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewInboundDeliveryTrackingUrl $requestBody, array $queryParameters = [])
    {
        $this->inboundDeliveryNumber = $inboundDeliveryNumber;
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
        return str_replace(['{inboundDeliveryNumber}'], [$this->inboundDeliveryNumber], '/inbound-delivery/{inboundDeliveryNumber}/tracking-url');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewInboundDeliveryTrackingUrl) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
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
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryTrackingUrlBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryTrackingUrlUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryTrackingUrlForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryTrackingUrlNotFoundException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryTrackingUrlConflictException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryTrackingUrlUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryTrackingUrlInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDeliveryTrackingUrl|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDeliveryTrackingUrl', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryTrackingUrlBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryTrackingUrlUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryTrackingUrlForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryTrackingUrlNotFoundException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryTrackingUrlConflictException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryTrackingUrlUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryTrackingUrlInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (mb_strpos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes(): array
    {
        return ['oAuthAuthorization', 'bearerAuth'];
    }
}