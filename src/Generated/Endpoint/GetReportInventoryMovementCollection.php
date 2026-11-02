<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint;

class GetReportInventoryMovementCollection extends \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\Endpoint
{
    /**
     * Read the inventory movements for the given shopCode in the given month and year.
     * _Only inventory movements for products with source 'self' are returned._
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 20.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     *    "sortBy"?: string, //Sort the results by one or more comma-separated sort criteria, with the criterion specified first having
     *                       //priority.
     *                       //
     *                       //Available sort orders:
     *                       //- asc: ascending order
     *                       //- desc: descending order
     *                       //
     *                       //Available fields for sorting:
     *                       //- productNumber
     *                       //- stockStart
     *                       //- stockEnd
     *                       //- stockAdded
     *                       //- stockSubtracted
     *                       //- stockSubtractedExternal
     *                       //- stockCorrected
     *                       //- stockUsedForOwnPurposes
     *                       //- stockReturned
     *                       //- stockReturnedExternal
     *                       //
     *                       //The default sort order is stockEnd:desc.
     *    "filter[search]"?: string, //Filter for inventory movement search. \
     *                               //Usage:
     *                               //- Provide one or multiple search terms (min. 2 characters) to filter results.
     *                               //- Multiple search terms are separated by spaces.
     *                               //- The search is not case sensitive.
     *                               //- The search is enabled for the fields productTitle and productNumber.
     *                               //- Each search term filters the response for products where at least one of the
     *                               //fields contains the search term.
     *                               //- For example, filter[search]='term1 term2' will filter the result for products where 'term1'
     *                               //is found in any field and 'term2' is also found in any field.
     *                               //If only 'term1' or 'term2' is found in the fields, the product is not included in the results.
     *    "filter[shopCode]"?: string, //The shopCode used internally to distinguish between clients. \
     *                                 //_This code is optional, if your identity is assigned to only one shop.
     *                                 //Otherwise the response would be a 422 HTTP Error._
     *    "filter[year]": int, //The year for which inventory movements should be returned.
     *    "filter[month]": int, //The month for which inventory movements should be returned.
     *    "filter[productNumbers]"?: string, //The productNumber(s) as comma delimited string for which inventory movements should be returned (optional).
     * } $queryParameters
     */
    public function __construct(array $queryParameters)
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
        return '/report/inventory-movements';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
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
        $optionsResolver->setDefined(['page', 'pageSize', 'paginationMode', 'sortBy', 'filter[search]', 'filter[shopCode]', 'filter[year]', 'filter[month]', 'filter[productNumbers]']);
        $optionsResolver->setRequired(['filter[year]', 'filter[month]']);
        $optionsResolver->setDefaults(['paginationMode' => 'default']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('pageSize', ['int']);
        $optionsResolver->addAllowedTypes('paginationMode', ['string']);
        $optionsResolver->addAllowedTypes('sortBy', ['string']);
        $optionsResolver->addAllowedTypes('filter[search]', ['string']);
        $optionsResolver->addAllowedTypes('filter[shopCode]', ['string']);
        $optionsResolver->addAllowedTypes('filter[year]', ['int']);
        $optionsResolver->addAllowedTypes('filter[month]', ['int']);
        $optionsResolver->addAllowedTypes('filter[productNumbers]', ['string']);
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
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReportInventoryMovementCollectionServiceUnavailableException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportInventoryMovementEntryCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportInventoryMovementEntryCollection', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReportInventoryMovementCollectionBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReportInventoryMovementCollectionUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReportInventoryMovementCollectionForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (422 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReportInventoryMovementCollectionUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReportInventoryMovementCollectionInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (503 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReportInventoryMovementCollectionServiceUnavailableException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse', 'json'), $response);
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