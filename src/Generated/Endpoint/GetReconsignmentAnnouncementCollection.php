<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint;

class GetReconsignmentAnnouncementCollection extends \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\Endpoint
{
    /**
    * Get reconsignment announcements.
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
    - reconsignmentAnnouncementDate
    
    The default sort order is reconsignmentAnnouncementDate:desc.
    *     @var string $filter[shopCode] The shopCode used internally to distinguish between clients. \
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    *     @var string $filter[orderNumber] Filter for a single order number.
    *     @var bool $filter[reconsignmentAnnouncementCompleted] Filter for completed or not completed reconsignment announcements.
    *     @var string $filter[reconsignmentAnnouncementDateFrom] Filter for reconsignmentAnnouncementDate (from)
    *     @var string $filter[reconsignmentAnnouncementDateTo] Filter for reconsignmentAnnouncementDate (to)
    *     @var string $filter[search] Filter for reconsignment announcement search.
    
    Usage:
    - Provide one or multiple search terms (min. 2 characters) to filter results.
    - Multiple search terms are separated by spaces.
    - The search is not case sensitive.
    - The search is enabled for the fields reconsignmentAnnouncementNumber, orderNumber,
    externalOrderReference and reconsignmentTrackingCode.
    - Each search term filters the response for reconsignment announcements where at least one of the fields
    contains the search term.
    - For example, filter[search]='term1 term2' will filter the result for reconsignment announcements where
    'term1' is found in any field and 'term2' is also found in any field.\
    If only 'term1' or 'term2' is found in the fields, the reconsignment announcement is not included in the
    results.
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
        return '/reconsignment-announcement';
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
        $optionsResolver->setDefined(array('page', 'pageSize', 'paginationMode', 'sortBy', 'filter[shopCode]', 'filter[orderNumber]', 'filter[reconsignmentAnnouncementCompleted]', 'filter[reconsignmentAnnouncementDateFrom]', 'filter[reconsignmentAnnouncementDateTo]', 'filter[search]'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('paginationMode' => 'default'));
        $optionsResolver->addAllowedTypes('page', array('int'));
        $optionsResolver->addAllowedTypes('pageSize', array('int'));
        $optionsResolver->addAllowedTypes('paginationMode', array('string'));
        $optionsResolver->addAllowedTypes('sortBy', array('string'));
        $optionsResolver->addAllowedTypes('filter[shopCode]', array('string'));
        $optionsResolver->addAllowedTypes('filter[orderNumber]', array('string'));
        $optionsResolver->addAllowedTypes('filter[reconsignmentAnnouncementCompleted]', array('bool'));
        $optionsResolver->addAllowedTypes('filter[reconsignmentAnnouncementDateFrom]', array('string'));
        $optionsResolver->addAllowedTypes('filter[reconsignmentAnnouncementDateTo]', array('string'));
        $optionsResolver->addAllowedTypes('filter[search]', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentAnnouncementPaginatedCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReconsignmentAnnouncementPaginatedCollection', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementCollectionBadRequestException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementCollectionUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementCollectionForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementCollectionUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementCollectionInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
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