<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint;

class GetOrderCollection extends \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\Endpoint
{
    /**
    * Get a list of shop orders.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    *     @var string $sortBy Sort the results by one or more comma-separated sort criteria, with the criterion specified first having
    priority.
    
    Available sort orders:
    - asc: ascending order
    - desc: descending order
    
    Available fields for sorting:
    - orderDate
    
    The default sort order is orderDate:desc.
    *     @var string $filter[shopCode] The shopCode used internally to distinguish between clients. \
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    *     @var string $filter[status] Filter for status/statuses (optional).
    *     @var string $filter[externalOrderId] Filter for the external order ID e.g. from third party apps (optional)
    *     @var string $filter[externalCustomerId] Filter for the external customer ID e.g. from third party apps (optional)
    *     @var string $filter[externalOrderReference] filter for externalOrderReference
    *     @var string $filter[orderDateFrom] filter for orderDate format in ISO 8601 with UTC offsets
    *     @var string $filter[orderDateTo] filter for orderDate format in ISO 8601 with UTC offsets
    *     @var string $filter[orderNumber] Filter for order number(s).
    *     @var string $filter[search] filter for order search.
    
    Usage:
    - Provide one or multiple search terms (min. 2 characters) to filter results.
    - Multiple search terms are separated by spaces.
    - The search is not case sensitive.
    - The search is enabled for the fields 'externalOrderReference', 'orderNumber' and the tracking code of
    the orders shipments.
    - Each search term filters the response for orders where at least one of the fields contains the search
    term.
    - For example, filter[search]='term1 term2' will filter the result for orders where 'term1' is found in
    any field and 'term2' is also found in any field.
    If only 'term1' or 'term2' is found in the fields, the order is not included in the results.
    *     @var string $filter[deliverabilityStatus] filter for deliverabilityStatus
    
    By default, all orders are returned.
    Use 'allOrderItems' to return all deliverable orders ('availableCount' of all 'orderItems' is greater or equal than the ordered 'count')
    Use 'notAllOrderItems' to specifically return not deliverable orders ('availableCount' of at least one 'orderItem' is smaller than the ordered 'count'
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
        return '/order';
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
        $optionsResolver->setDefined(array('page', 'pageSize', 'paginationMode', 'sortBy', 'filter[shopCode]', 'filter[status]', 'filter[externalOrderId]', 'filter[externalCustomerId]', 'filter[externalOrderReference]', 'filter[orderDateFrom]', 'filter[orderDateTo]', 'filter[orderNumber]', 'filter[search]', 'filter[deliverabilityStatus]'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('paginationMode' => 'default'));
        $optionsResolver->addAllowedTypes('page', array('int'));
        $optionsResolver->addAllowedTypes('pageSize', array('int'));
        $optionsResolver->addAllowedTypes('paginationMode', array('string'));
        $optionsResolver->addAllowedTypes('sortBy', array('string'));
        $optionsResolver->addAllowedTypes('filter[shopCode]', array('string'));
        $optionsResolver->addAllowedTypes('filter[status]', array('string'));
        $optionsResolver->addAllowedTypes('filter[externalOrderId]', array('string'));
        $optionsResolver->addAllowedTypes('filter[externalCustomerId]', array('string'));
        $optionsResolver->addAllowedTypes('filter[externalOrderReference]', array('string'));
        $optionsResolver->addAllowedTypes('filter[orderDateFrom]', array('string'));
        $optionsResolver->addAllowedTypes('filter[orderDateTo]', array('string'));
        $optionsResolver->addAllowedTypes('filter[orderNumber]', array('string'));
        $optionsResolver->addAllowedTypes('filter[search]', array('string'));
        $optionsResolver->addAllowedTypes('filter[deliverabilityStatus]', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderCollection', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderCollectionUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderCollectionForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderCollectionUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderCollectionInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
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