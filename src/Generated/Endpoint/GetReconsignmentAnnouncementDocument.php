<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint;

class GetReconsignmentAnnouncementDocument extends \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\Endpoint
{
    protected $reconsignmentAnnouncementNumber;
    protected $documentCode;
    protected $accept;
    /**
    * Allows to download a document associated with the given reconsignmentAnnouncement.
    * @param string $reconsignmentAnnouncementNumber The number of the reconsignmentAnnouncement.
    * @param string $documentCode The document type to download. The file format is determined by the Accept request header.\
    **Note:** Only a limited amount of document type to file format combinations are available:
    - shippingLabel: The shipping label for the end customer to ship goods back to the steve warehouse.\
    Accept header: application/pdf
    * @param array{
    *    "shopCode"?: string, //The shopCode used internally to distinguish between clients. \
    *                         //_This code is optional, if your identity is assigned to only one shop.
    *                         //Otherwise the response would be a 422 HTTP Error._
    * } $queryParameters
    * @param array $accept Accept content header application/json|application/pdf
    */
    public function __construct(string $reconsignmentAnnouncementNumber, string $documentCode, array $queryParameters = [], array $accept = [])
    {
        $this->reconsignmentAnnouncementNumber = $reconsignmentAnnouncementNumber;
        $this->documentCode = $documentCode;
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{reconsignmentAnnouncementNumber}', '{documentCode}'], [rawurlencode($this->reconsignmentAnnouncementNumber), rawurlencode($this->documentCode)], '/reconsignment-announcement/{reconsignmentAnnouncementNumber}/document/{documentCode}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'application/pdf']];
        }
        return $this->accept;
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
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementDocumentBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementDocumentUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementDocumentForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementDocumentNotFoundException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementDocumentNotAcceptableException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementDocumentUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementDocumentInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementDocumentServiceUnavailableException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementDocumentBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementDocumentUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementDocumentForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementDocumentNotFoundException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (406 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementDocumentNotAcceptableException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (422 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementDocumentUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementDocumentInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (503 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementDocumentServiceUnavailableException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
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
        return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse::class;
    }
}