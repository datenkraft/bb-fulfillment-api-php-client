<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint;

class ReconsignOrder extends \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\Endpoint
{
    protected $orderNumber;
    /**
    * Create reconsignment announcements for an order. \
    
    Only delivered orders are reconsignable. \
    If the order has been redacted, it is also not reconsignable. \
    The created reconsignment announcement(s) are returned in the response.
    *
    * @param string $orderNumber The number the order is referred by.
    * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewReconsignmentAnnouncement $requestBody 
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients.\
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    * }
    */
    public function __construct(string $orderNumber, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewReconsignmentAnnouncement $requestBody, array $queryParameters = array())
    {
        $this->orderNumber = $orderNumber;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }
    use \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{orderNumber}'), array($this->orderNumber), '/order/{orderNumber}/reconsign');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewReconsignmentAnnouncement) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
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
        $optionsResolver->addAllowedTypes('shopCode', array('string'));
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
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentAnnouncement[]|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReconsignmentAnnouncement[]', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderBadRequestException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderNotFoundException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oAuthAuthorization', 'bearerAuth');
    }
}