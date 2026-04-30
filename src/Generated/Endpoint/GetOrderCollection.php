<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint;

class GetOrderCollection extends \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\Endpoint
{
    /**
    * Get a list of shop orders.
    * @param array{
    *    "page"?: int, //The page to read. Default is the first page.
    *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
    *    "paginationMode"?: string, //The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    *    "sortBy"?: string, //Sort the results by one or more comma-separated sort criteria, with the criterion specified first having
    priority.
    
    Available sort orders:
    - asc: ascending order
    - desc: descending order
    
    Available fields for sorting:
    - orderDate
    
    The default sort order is orderDate:desc.
    *    "filter[shopCode]"?: string, //The shopCode used internally to distinguish between clients. \
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    *    "filter[status]"?: string, //Filter for status/statuses (optional).
    *    "filter[externalOrderId]"?: string, //Filter for the external order ID e.g. from third party apps (optional)
    *    "filter[externalCustomerId]"?: string, //Filter for the external customer ID e.g. from third party apps (optional)
    *    "filter[externalOrderReference]"?: string, //filter for externalOrderReference
    *    "filter[orderDateFrom]"?: string, //filter for orderDate format in ISO 8601 with UTC offsets
    *    "filter[orderDateTo]"?: string, //filter for orderDate format in ISO 8601 with UTC offsets
    *    "filter[orderNumber]"?: string, //Filter for order number(s).
    *    "filter[search]"?: string, //filter for order search.
    
    Usage:
    - Provide one or multiple search terms (min. 2 characters) to filter results.
    - Multiple search terms are separated by spaces.
    - The search is not case sensitive.
    - The search is enabled for the fields 'externalOrderReference', 'externalOrderId',
    'customer.deliveryAddress.nameLine1', 'customer.deliveryAddress.nameLine2', 'orderNumber' and the
    tracking code of the orders shipments.
    - Each search term filters the response for orders where at least one of the fields contains the search
    term.
    - For example, filter[search]='term1 term2' will filter the result for orders where 'term1' is found in
    any field and 'term2' is also found in any field.
    If only 'term1' or 'term2' is found in the fields, the order is not included in the results.
    *    "filter[deliverabilityStatus]"?: string, //filter for deliverabilityStatus
    
    By default, all orders are returned.
    Use 'allOrderItems' to return all deliverable orders ('availableCount' of all 'orderItems' is greater or equal than the ordered 'count')
    Use 'notAllOrderItems' to specifically return not deliverable orders ('availableCount' of at least one 'orderItem' is smaller than the ordered 'count'
    * } $queryParameters
    */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/order';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['page', 'pageSize', 'paginationMode', 'sortBy', 'filter[shopCode]', 'filter[status]', 'filter[externalOrderId]', 'filter[externalCustomerId]', 'filter[externalOrderReference]', 'filter[orderDateFrom]', 'filter[orderDateTo]', 'filter[orderNumber]', 'filter[search]', 'filter[deliverabilityStatus]']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['paginationMode' => 'default']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('pageSize', ['int']);
        $optionsResolver->addAllowedTypes('paginationMode', ['string']);
        $optionsResolver->addAllowedTypes('sortBy', ['string']);
        $optionsResolver->addAllowedTypes('filter[shopCode]', ['string']);
        $optionsResolver->addAllowedTypes('filter[status]', ['string']);
        $optionsResolver->addAllowedTypes('filter[externalOrderId]', ['string']);
        $optionsResolver->addAllowedTypes('filter[externalCustomerId]', ['string']);
        $optionsResolver->addAllowedTypes('filter[externalOrderReference]', ['string']);
        $optionsResolver->addAllowedTypes('filter[orderDateFrom]', ['string']);
        $optionsResolver->addAllowedTypes('filter[orderDateTo]', ['string']);
        $optionsResolver->addAllowedTypes('filter[orderNumber]', ['string']);
        $optionsResolver->addAllowedTypes('filter[search]', ['string']);
        $optionsResolver->addAllowedTypes('filter[deliverabilityStatus]', ['string']);
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
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCollection', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderCollectionUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderCollectionForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderCollectionUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderCollectionInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
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