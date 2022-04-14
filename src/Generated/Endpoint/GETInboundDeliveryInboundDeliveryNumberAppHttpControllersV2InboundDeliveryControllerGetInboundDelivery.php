<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint;

class GETInboundDeliveryInboundDeliveryNumberAppHttpControllersV2InboundDeliveryControllerGetInboundDelivery extends \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\Endpoint
{
    protected $inboundDeliveryNumber;
    /**
     * Get an inbound delivery by inbound delivery number.
     *
     * @param string $inboundDeliveryNumber The inbound delivery number as defined during the creation of the order.
     * @param array $queryParameters {
     *     @var string $shopCode The shopCode used in DISCO (optional).
     * }
     */
    public function __construct(string $inboundDeliveryNumber, array $queryParameters = array())
    {
        $this->inboundDeliveryNumber = $inboundDeliveryNumber;
        $this->queryParameters = $queryParameters;
    }
    use \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{inboundDeliveryNumber}'), array($this->inboundDeliveryNumber), '/inbound-delivery/{inboundDeliveryNumber}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('shopCode'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('shopCode', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GETInboundDeliveryInboundDeliveryNumberAppHttpControllersV2InboundDeliveryControllerGetInboundDeliveryBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GETInboundDeliveryInboundDeliveryNumberAppHttpControllersV2InboundDeliveryControllerGetInboundDeliveryUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GETInboundDeliveryInboundDeliveryNumberAppHttpControllersV2InboundDeliveryControllerGetInboundDeliveryForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GETInboundDeliveryInboundDeliveryNumberAppHttpControllersV2InboundDeliveryControllerGetInboundDeliveryNotFoundException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GETInboundDeliveryInboundDeliveryNumberAppHttpControllersV2InboundDeliveryControllerGetInboundDeliveryConflictException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GETInboundDeliveryInboundDeliveryNumberAppHttpControllersV2InboundDeliveryControllerGetInboundDeliveryUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GETInboundDeliveryInboundDeliveryNumberAppHttpControllersV2InboundDeliveryControllerGetInboundDeliveryInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDelivery|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\InboundDelivery', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GETInboundDeliveryInboundDeliveryNumberAppHttpControllersV2InboundDeliveryControllerGetInboundDeliveryBadRequestException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GETInboundDeliveryInboundDeliveryNumberAppHttpControllersV2InboundDeliveryControllerGetInboundDeliveryUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GETInboundDeliveryInboundDeliveryNumberAppHttpControllersV2InboundDeliveryControllerGetInboundDeliveryForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GETInboundDeliveryInboundDeliveryNumberAppHttpControllersV2InboundDeliveryControllerGetInboundDeliveryNotFoundException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GETInboundDeliveryInboundDeliveryNumberAppHttpControllersV2InboundDeliveryControllerGetInboundDeliveryConflictException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GETInboundDeliveryInboundDeliveryNumberAppHttpControllersV2InboundDeliveryControllerGetInboundDeliveryUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GETInboundDeliveryInboundDeliveryNumberAppHttpControllersV2InboundDeliveryControllerGetInboundDeliveryInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oAuthAuthorization');
    }
}