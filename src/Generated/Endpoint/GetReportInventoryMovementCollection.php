<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint;

class GetReportInventoryMovementCollection extends \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\Endpoint
{
    /**
    * Read the inventory movements for the given shopCode in the given month and year.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated. \
    This can mean loss of performance.
    *     @var string $filter[shopCode] The shopCode used internally to distinguish between clients. \
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    *     @var int $filter[year] The year for which inventory movements should be returned.
    *     @var int $filter[month] The month for which inventory movements should be returned.
    *     @var string $filter[productNumbers] The productNumber(s) as comma delimited string for which inventory movements should be returned (optional).
    * }
    */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/report/inventory-movements';
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
        $optionsResolver->setDefined(array('page', 'pageSize', 'paginationMode', 'filter[shopCode]', 'filter[year]', 'filter[month]', 'filter[productNumbers]'));
        $optionsResolver->setRequired(array('filter[year]', 'filter[month]'));
        $optionsResolver->setDefaults(array('paginationMode' => 'default'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('pageSize', array('int'));
        $optionsResolver->setAllowedTypes('paginationMode', array('string'));
        $optionsResolver->setAllowedTypes('filter[shopCode]', array('string'));
        $optionsResolver->setAllowedTypes('filter[year]', array('int'));
        $optionsResolver->setAllowedTypes('filter[month]', array('int'));
        $optionsResolver->setAllowedTypes('filter[productNumbers]', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReportInventoryMovementCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReportInventoryMovementCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReportInventoryMovementCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReportInventoryMovementCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReportInventoryMovementCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportInventoryMovementEntryCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReportInventoryMovementEntryCollection', 'json');
        }
        if (204 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReportInventoryMovementCollectionBadRequestException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReportInventoryMovementCollectionUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReportInventoryMovementCollectionForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReportInventoryMovementCollectionUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReportInventoryMovementCollectionInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'));
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