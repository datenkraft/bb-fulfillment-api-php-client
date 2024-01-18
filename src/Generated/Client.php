<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated;

class Client extends \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\Client
{
    /**
    * Get the audit log.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    *     @var string $filter[endpoint] A filter for restricting the audit log to a endpoint.
    *     @var string $filter[version] A filter for restricting the audit log to a endpoint version.
    *     @var mixed $filter[identifier] A filter for querying actions for a identifier.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuditLogCollectionBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuditLogCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuditLogCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuditLogCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuditLogCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getAuditLogCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetAuditLogCollection($queryParameters), $fetch);
    }
    /**
     * Delete one or more role to permission assignments in this resource server
     *
     * @param null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthPermissionRoleResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteAuthPermissionRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteAuthPermissionRoleCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAuthPermissionRoleCollection(?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\DeleteAuthPermissionRoleCollection($requestBody), $fetch);
    }
    /**
    * Get all role to permission assignments from this resource server
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthPermissionRoleCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthPermissionRoleCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthPermissionRoleCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthPermissionRolePaginatedCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getAuthPermissionRoleCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetAuthPermissionRoleCollection($queryParameters), $fetch);
    }
    /**
     * Create one or more role to permission assignments in this resource server
     *
     * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthPermissionRoleResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostAuthPermissionRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostAuthPermissionRoleCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostAuthPermissionRoleCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthPermissionRoleResource[]|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postAuthPermissionRoleCollection(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\PostAuthPermissionRoleCollection($requestBody), $fetch);
    }
    /**
    * Get all permissions from this resource server
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthPermissionCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthPermissionCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthPermissionCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\GetAuthPermissionCollectionResponse|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getAuthPermissionCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetAuthPermissionCollection($queryParameters), $fetch);
    }
    /**
     * Delete one or more role to identity assignments in this resource server
     *
     * @param null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthRoleIdentityResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAuthRoleIdentityCollection(?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\DeleteAuthRoleIdentityCollection($requestBody), $fetch);
    }
    /**
    * Get all role to identity assignments from this resource server
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthRoleIdentityCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthRoleIdentityCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthRoleIdentityCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthRoleIdentityPaginatedCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getAuthRoleIdentityCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetAuthRoleIdentityCollection($queryParameters), $fetch);
    }
    /**
     * Create one or more role to identity assignments in this resource server
     *
     * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthRoleIdentityResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostAuthRoleIdentityCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postAuthRoleIdentityCollection(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\PostAuthRoleIdentityCollection($requestBody), $fetch);
    }
    /**
    * Get all available roles from this resource server
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthRoleCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthRoleCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthRoleCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthRoleCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getAuthRoleCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetAuthRoleCollection($queryParameters), $fetch);
    }
    /**
     * Delete a role for this resource server
     *
     * @param string $roleCode Identifier for the role
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAuthRole(string $roleCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\DeleteAuthRole($roleCode), $fetch);
    }
    /**
     * Get a role from this resource server by its roleCode
     *
     * @param string $roleCode Identifier for the role
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthRole(string $roleCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetAuthRole($roleCode), $fetch);
    }
    /**
     * Patch a role for this resource server
     *
     * @param string $roleCode Identifier for the role
     * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewAuthRoleResource $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function patchAuthRole(string $roleCode, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewAuthRoleResource $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\PatchAuthRole($roleCode, $requestBody), $fetch);
    }
    /**
     * Post a role for this resource server
     *
     * @param string $roleCode Identifier for the role
     * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewAuthRoleResource $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostAuthRoleConflictException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postAuthRole(string $roleCode, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewAuthRoleResource $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\PostAuthRole($roleCode, $requestBody), $fetch);
    }
    /**
    * Get all available brands for a shop code.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    *     @var string $filter[shopCode] The shopCode used internally to distinguish between clients.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetBrandCollectionBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetBrandCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetBrandCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetBrandCollectionUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetBrandCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BrandCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getBrandCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetBrandCollection($queryParameters), $fetch);
    }
    /**
    * Collections are read in multiple pages with a defined page size.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 20.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    *     @var string $shopCode The shopCode used internally to distinguish between clients.\
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetCountryCollectionBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetCountryCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetCountryCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetCountryCollectionUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetCountryCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\CountryCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getCountryCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetCountryCollection($queryParameters), $fetch);
    }
    /**
    * Get delivery services.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryServiceCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryServiceCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryServiceCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryServiceCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getDeliveryServiceCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetDeliveryServiceCollection($queryParameters), $fetch);
    }
    /**
    * Get deliveries filtered by a single or multiple order numbers.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    *     @var string $shopCode The shopCode used internally to distinguish between clients. \
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    *     @var string $filter[orderNumber] A filter for a single order number or multiple order numbers separated by a comma.
    - The filter can contain a maximum of 100 order numbers.
    - The order numbers in the filter must be unique.
    - A single order number can have a maximum length of 59 characters.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryCollectionBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryCollectionUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getDeliveryCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetDeliveryCollection($queryParameters), $fetch);
    }
    /**
    * Get the delivery with the given deliveryNumber.
    *
    * @param string $deliveryNumber Number of the delivery
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients. \
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryNotFoundException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Delivery|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getDelivery(string $deliveryNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetDelivery($deliveryNumber, $queryParameters), $fetch);
    }
    /**
    * Allows to download a document associated with the given delivery.
    *
    * @param string $deliveryNumber The number of the delivery
    * @param string $documentCode The document type to download. The file format is determined by the Accept request header.\
    **Note:** Only a limited amount of document type to file format combinations are available:
    - deliverySlipNote: The delivery slip note to confirm successful delivery.\
    Accept header: application/pdf
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients. \
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/pdf|application/json
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryDocumentBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryDocumentUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryDocumentForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryDocumentNotFoundException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryDocumentNotAcceptableException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryDocumentUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryDocumentInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getDeliveryDocument(string $deliveryNumber, string $documentCode, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT, array $accept = array())
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetDeliveryDocument($deliveryNumber, $documentCode, $queryParameters, $accept), $fetch);
    }
    /**
    * Patch data of the shipment of the delivery specified by the given delivery and shipment numbers.
    *
    * @param string $deliveryNumber Number of the delivery.
    * @param string $shipmentNumber Number of the shipment.
    * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\UpdateDeliveryShipment $requestBody 
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients. \
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchDeliveryShipmentBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchDeliveryShipmentUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchDeliveryShipmentForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchDeliveryShipmentNotFoundException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchDeliveryShipmentConflictException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchDeliveryShipmentUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchDeliveryShipmentInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipment|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function patchDeliveryShipment(string $deliveryNumber, string $shipmentNumber, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\UpdateDeliveryShipment $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\PatchDeliveryShipment($deliveryNumber, $shipmentNumber, $requestBody, $queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApi(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetOpenApi(), $fetch);
    }
    /**
     * Get the changelog in the specified format
     *
     * @param string $format Changelog file format
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetChangelogInFormatNotFoundException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetChangelogInFormatBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getChangelogInFormat(string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetChangelogInFormat($format), $fetch);
    }
    /**
     * Get the openapi documentation in the specified format
     *
     * @param string $format Openapi file format
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOpenApiInFormatBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApiInFormat(string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetOpenApiInFormat($format), $fetch);
    }
    /**
    * Import one or more new inbound deliveries.
           The file type is controlled by the content type attribute of the uploaded file
    *
    * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BulkImportInboundDeliveryPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\InboundDeliveryBulkImportBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\InboundDeliveryBulkImportUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\InboundDeliveryBulkImportForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\InboundDeliveryBulkImportInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BulkImportInboundDeliveryPostResponse207Item[]|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function inboundDeliveryBulkImport(\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BulkImportInboundDeliveryPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\InboundDeliveryBulkImport($requestBody), $fetch);
    }
    /**
    * Get a spreadsheet template for performing POST queries to the respective endpoint.
           The file type is controlled by the accept header.
           The fill-in help in the second line can be removed or remain.
    *
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header text/csv|application/vnd.openxmlformats-officedocument.spreadsheetml.sheet|application/json
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryBulkImportTemplateUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryBulkImportTemplateNotAcceptableException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryBulkImportTemplateInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getInboundDeliveryBulkImportTemplate(string $fetch = self::FETCH_OBJECT, array $accept = array())
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetInboundDeliveryBulkImportTemplate($accept), $fetch);
    }
    /**
    * Get a list of inbound deliveries.
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
    - expectedDeliveryDate
    
    The default sort order is expectedDeliveryDate:desc.
    *     @var string $filter[status] Status of the inbound delivery (optional).
    
    The status for not yet completed is subject to change. you may poll for changes.
    - open: The inbound delivery has not yet been delivered.
    - in_progress: The inbound delivery is being processed in our warehouse.
    - completed: The inbound delivery has been processed in our warehouse.
    - deleted: The inbound delivery has been deleted.
    *     @var string $filter[shopCode] The shopCode used internally to distinguish between clients. \
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    *     @var string $filter[expectedDeliveryDateFrom] The start date (inclusive) in format Y-m-d for which inbound deliveries should be returned
    (regarding the expected delivery date).
    *     @var string $filter[expectedDeliveryDateTo] The end date (inclusive) in format Y-m-d for which inbound deliveries should be returned
    (regarding the expected delivery date).
    *     @var string $filter[search] filter for inbound delivery search.
    
    Usage:
    - Provide one or multiple search terms (min. 2 characters) to filter results.
    - Multiple search terms are separated by spaces.
    - The search is not case sensitive.
    - The search is enabled for the fields inboundDeliveryName and inboundDeliveryNumber (without the
    numberPrefix of the associated supplier).
    - Each search term filters the response for inbound deliveries where at least one of the fields contains
    the search term.
    - For example, filter[search]='term1 term2' will filter the result for products where 'term1' is found
    in any field and 'term2' is also found in any field.
    If only 'term1' or 'term2' is found in the fields, the product is not included in the results.
    *     @var string $filter[createDateFrom] The start date (inclusive) in ISO 8601 format for which inbound deliveries should be returned
    (regarding the creation date).
    *     @var string $filter[createDateTo] The end date (inclusive) in ISO 8601 format for which inbound deliveries should be returned
    (regarding the creation date).
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryCollectionUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDeliveryCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getInboundDeliveryCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetInboundDeliveryCollection($queryParameters), $fetch);
    }
    /**
    * Get an inbound delivery by inbound delivery number.
    *
    * @param string $inboundDeliveryNumber The inbound delivery number as defined during the creation of the inbound delivery.
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients. \
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryNotFoundException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryConflictException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDelivery|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getInboundDelivery(string $inboundDeliveryNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetInboundDelivery($inboundDeliveryNumber, $queryParameters), $fetch);
    }
    /**
    * Add a new inbound delivery referenced by the given deliveryNumber.
    *
    * @param string $inboundDeliveryNumber The number the inbound delivery should be referred by. \
    This number is user defined, must be unique and has a maximum length (check maxLength field). \
    Please ensure that it does not contain any of the following character sequences: '/', '%2F', '%2f', '?',
    '%3F', '%3f', '#', '%23', '&', '%26'. \
    Using any of these will result in the route not being handled correctly.
    * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewInboundDelivery $requestBody 
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients. \
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDelivery|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postInboundDelivery(string $inboundDeliveryNumber, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewInboundDelivery $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\PostInboundDelivery($inboundDeliveryNumber, $requestBody, $queryParameters), $fetch);
    }
    /**
    * Cancel a inbound delivery referenced by the given inboundDeliveryNumber. \
    An inboundDeliveryNumber from a canceled inbound delivery cannot be used for a new inbound delivery, because
    they must always be unique.
    *
    * @param string $inboundDeliveryNumber The number the inbound delivery should be referred by. \
    This number is user defined, must be unique and has a maximum length (check maxLength field).
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients. \
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\CancelInboundDeliveryBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\CancelInboundDeliveryUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\CancelInboundDeliveryForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\CancelInboundDeliveryNotFoundException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\CancelInboundDeliveryConflictException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\CancelInboundDeliveryUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\CancelInboundDeliveryInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDelivery|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function cancelInboundDelivery(string $inboundDeliveryNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\CancelInboundDelivery($inboundDeliveryNumber, $queryParameters), $fetch);
    }
    /**
    * Allows to download a document associated with the given inbound delivery.
    *
    * @param string $inboundDeliveryNumber The inbound delivery number as defined during the creation of the inbound delivery.
    * @param string $documentCode The document type to download. The file format is determined by the Accept request header.
    
    Note: only a limited amount of document type to file format combinations are available:
    - supplierDeliveryLabel: the label to put on the inbound delivery for warehouse processing.
    Accept header: application/pdf
    - details: a spreadsheet containing details about the inbound delivery.
    Accept header: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients. \
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/vnd.openxmlformats-officedocument.spreadsheetml.sheet|application/pdf|application/json
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryDocumentBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryDocumentUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryDocumentForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryDocumentNotFoundException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryDocumentNotAcceptableException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryDocumentUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryDocumentInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getInboundDeliveryDocument(string $inboundDeliveryNumber, string $documentCode, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT, array $accept = array())
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetInboundDeliveryDocument($inboundDeliveryNumber, $documentCode, $queryParameters, $accept), $fetch);
    }
    /**
    * Get a list of manufacturers.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    *     @var string $filter[shopCode] The shopCode used internally to distinguish between clients. \
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetManufacturerCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetManufacturerCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetManufacturerCollectionUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetManufacturerCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ManufacturerCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getManufacturerCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetManufacturerCollection($queryParameters), $fetch);
    }
    /**
    * Import one or more new orders.
           The file type is controlled by the content type attribute of the uploaded file
    *
    * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BulkImportOrderPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\OrderBulkImportBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\OrderBulkImportUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\OrderBulkImportForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\OrderBulkImportInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BulkImportOrderPostResponse207Item[]|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function orderBulkImport(\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BulkImportOrderPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\OrderBulkImport($requestBody), $fetch);
    }
    /**
    * Get a spreadsheet template for performing POST queries to the respective endpoint.
           The file type is controlled by the accept header.
           The fill-in help in the second line can be removed or remain.
    *
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header text/csv|application/vnd.openxmlformats-officedocument.spreadsheetml.sheet|application/json
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderBulkImportTemplateUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderBulkImportTemplateNotAcceptableException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderBulkImportTemplateInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getOrderBulkImportTemplate(string $fetch = self::FETCH_OBJECT, array $accept = array())
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetOrderBulkImportTemplate($accept), $fetch);
    }
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
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderCollectionUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getOrderCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetOrderCollection($queryParameters), $fetch);
    }
    /**
    * Get an order by order number.
    *
    * @param string $orderNumber The order number as defined during the creation of the order.
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients.\
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderNotFoundException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getOrder(string $orderNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetOrder($orderNumber, $queryParameters), $fetch);
    }
    /**
    * Add a new order referenced by the given orderNumber.
    *
    * @param string $orderNumber The number the order should be referred by. \
    This number is user defined, must be unique and has a maximum length (check maxLength field). \
    Please ensure that it does not contain any of the following character sequences: '/', '%2F', '%2f', '?',
    '%3F', '%3f','#', '%23', '&', '%26'. \
    Using any of these will result in the route not being handled correctly.
    * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrder $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postOrder(string $orderNumber, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrder $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\PostOrder($orderNumber, $requestBody), $fetch);
    }
    /**
    * Cancel the order specified by the given order number (set in param orderNumber).
    An orderNumber from a canceled order cannot be used for a new order, because they must always be unique.
    *
    * @param string $orderNumber The number the order is referred by.
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients.\
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\CancelOrderBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\CancelOrderUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\CancelOrderForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\CancelOrderNotFoundException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\CancelOrderConflictException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\CancelOrderUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\CancelOrderInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function cancelOrder(string $orderNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\CancelOrder($orderNumber, $queryParameters), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderNotFoundException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ReconsignOrderInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentAnnouncement[]|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function reconsignOrder(string $orderNumber, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewReconsignmentAnnouncement $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\ReconsignOrder($orderNumber, $requestBody, $queryParameters), $fetch);
    }
    /**
    * Redact the order and all other orders linked to the given order number (set in the param orderNumber) in a GDPR
    article 17 conform way. \
    
    Only orders with one of the following statuses are redactable:
    - delivered
    - deleted
    - canceled
    *
    * @param string $orderNumber The number the order is referred by.
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients.\
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\RedactOrderBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\RedactOrderUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\RedactOrderForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\RedactOrderNotFoundException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\RedactOrderConflictException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\RedactOrderUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\RedactOrderInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function redactOrder(string $orderNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\RedactOrder($orderNumber, $queryParameters), $fetch);
    }
    /**
    * Import one or more new product draft(s).
           The file type is controlled by the content type attribute of the uploaded file
    *
    * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BulkImportProductDraftPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ProductDraftBulkImportBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ProductDraftBulkImportUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ProductDraftBulkImportForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\ProductDraftBulkImportInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BulkImportProductDraftPostResponse207Item[]|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function productDraftBulkImport(\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BulkImportProductDraftPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\ProductDraftBulkImport($requestBody), $fetch);
    }
    /**
    * Get a spreadsheet template for performing POST queries to the respective endpoint.
           The file type is controlled by the accept header.
           The fill-in help in the second line can be removed or remain.
    *
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header text/csv|application/vnd.openxmlformats-officedocument.spreadsheetml.sheet|application/json
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductDraftBulkImportTemplateUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductDraftBulkImportTemplateNotAcceptableException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductDraftBulkImportTemplateInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getProductDraftBulkImportTemplate(string $fetch = self::FETCH_OBJECT, array $accept = array())
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetProductDraftBulkImportTemplate($accept), $fetch);
    }
    /**
    * Read a product draft collection. These are read in multiple pages with a defined page size.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    *     @var string $filter[shopCode] The shopCode used internally to distinguish between clients.
    *     @var string $filter[productNumber] Filter by a productNumber
    *     @var string $filter[productDraftStatus] Filter by a product draft status
    *     @var string $filter[search] Filter for product draft search. \
    Usage:
    - Provide one or multiple search terms (min. 2 characters) to filter results.
    - Multiple search terms are separated by spaces.
    - The search is not case sensitive.
    - The search is only enabled for the productNumber.
    - Each search term filters the response for products where the productNumber contains the search term.
    - For example, filter[search]='term1 term2' will filter the result for products where 'term1'
    is found in the productNumber and 'term2' is also found in the productNumber.
    If only 'term1' or 'term2' is found in the productNumber, the product is not included in the results.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductDraftCollectionBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductDraftCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductDraftCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductDraftCollectionNotFoundException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductDraftCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductDraftCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getProductDraftCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetProductDraftCollection($queryParameters), $fetch);
    }
    /**
     * Create a new product draft to initiate the creation new products.Product drafts will be put into a queue for manual approval.
     *
     * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewProductDraft $requestBody 
     * @param array $queryParameters {
     *     @var string $shopCode The shopCode used internally to distinguish between clients.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostProductDraftBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostProductDraftUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostProductDraftForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostProductDraftConflictException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostProductDraftUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostProductDraftInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductDraft|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postProductDraft(\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewProductDraft $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\PostProductDraft($requestBody, $queryParameters), $fetch);
    }
    /**
    * Delete a product draft.\
    **The product draft may only be deleted while it is still in pending state.**
    *
    * @param string $productDraftId ID of the product draft
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteProductDraftBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteProductDraftUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteProductDraftForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteProductDraftNotFoundException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteProductDraftConflictException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteProductDraftInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function deleteProductDraft(string $productDraftId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\DeleteProductDraft($productDraftId, $queryParameters), $fetch);
    }
    /**
     * Read the product draft specified by the given product draft ID.
     *
     * @param string $productDraftId ID of the product draft
     * @param array $queryParameters {
     *     @var string $shopCode The shopCode used internally to distinguish between clients.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductDraftBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductDraftUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductDraftForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductDraftNotFoundException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductDraftUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductDraftInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductDraft|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getProductDraft(string $productDraftId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetProductDraft($productDraftId, $queryParameters), $fetch);
    }
    /**
    * Get all available product unit codes.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 20.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    *     @var string $shopCode The shopCode used internally to distinguish between clients.\
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductUnitCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductUnitCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductUnitCollectionUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductUnitCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductUnitCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getProductUnitCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetProductUnitCollection($queryParameters), $fetch);
    }
    /**
    * Get a list of products.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    *     @var string $filter[shopCode] The shopCode used internally to distinguish between clients. \
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    *     @var string $filter[search] Filter for product search. \
    Usage:
    - Provide one or multiple search terms (min. 2 characters) to filter results.
    - Multiple search terms are separated by spaces.
    - The search is not case sensitive.
    - The search is enabled for the fields productTitle, productNumber and ean.
    - Each search term filters the response for products where at least one of the
    fields contains the search term.
    - For example, filter[search]='term1 term2' will filter the result for products where 'term1'
    is found in any field and 'term2' is also found in any field.
    If only 'term1' or 'term2' is found in the fields, the product is not included in the results.
    *     @var string $filter[source] Filter for product source.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductCollectionBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductCollectionUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getProductCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetProductCollection($queryParameters), $fetch);
    }
    /**
    * Get a product by product number.
    *
    * @param string $productNumber The product number as defined during the creation of the product.
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients. \
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Product|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getProduct(string $productNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetProduct($productNumber, $queryParameters), $fetch);
    }
    /**
    * Read a journal collection for a specific product showing the history of stock changes.
    _Only products with the source 'self' can be queried._
    *
    * @param string $productNumber The product number as defined during the creation of the product.
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:\
    - default: The total number of items in the collection will not be calculated.\
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    *     @var string $shopCode The shopCode used internally to distinguish between clients.\
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    *     @var string $filter[dateFrom] The start date (inclusive) in format Y-m-d (timezone CET/CEST) for which product journal entries should be returned.
    *     @var string $filter[dateTo] The end date (inclusive) in format Y-m-d (timezone CET/CEST) for which product journal entries should be returned.
    *     @var string $filter[reason] Filter journal entries for one or more reasons
    - expired: Taking an expired product off the books
    - damaged: Taking a damaged product off the books
    - own_withdrawl: Product taken for own use
    - correction: Manual correction
    - niceshops_order: Product sold via a shop from niceshops
    - inbound: Restocking the product
    - fulfillment: steve fulfilled an order
    - return: A customer sent the product back to our warehouse
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductJournalCollectionBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductJournalCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductJournalCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductJournalCollectionUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductJournalCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductJournalCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getProductJournalCollection(string $productNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetProductJournalCollection($productNumber, $queryParameters), $fetch);
    }
    /**
    * Read the reconsignments in the given dateRange.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 20.
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
    - reconsignmentDate
    
    The default sort order is reconsignmentDate:desc.
    *     @var string $filter[shopCode] The shop to which the reconsignments belongs to.
    *     @var string $filter[orderNumber] The order number which the reconsignments belong to.
    *     @var string $filter[reconsignmentDateFrom] filter for reconsignmentDate format in ISO 8601 with UTC offsets
    *     @var string $filter[reconsignmentDateTo] filter for reconsignmentDate format in ISO 8601 with UTC offsets
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentCollectionBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentCollectionUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getReconsignmentCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetReconsignmentCollection($queryParameters), $fetch);
    }
    /**
     * Read the reconsignment specified by the given reconsignment number (set in param reconsignmentNumber).
     *
     * @param string $reconsignmentNumber 
     * @param array $queryParameters {
     *     @var string $shopCode 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentNotFoundException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Reconsignment|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getReconsignment(string $reconsignmentNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetReconsignment($reconsignmentNumber, $queryParameters), $fetch);
    }
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
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementCollectionBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementCollectionUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentAnnouncementPaginatedCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getReconsignmentAnnouncementCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetReconsignmentAnnouncementCollection($queryParameters), $fetch);
    }
    /**
    * Get the reconsignment announcement with the given reconsignmentAnnouncementNumber.
    *
    * @param string $reconsignmentAnnouncementNumber Number of the reconsignment announcement
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients. \
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementNotFoundException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentAnnouncement|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getReconsignmentAnnouncement(string $reconsignmentAnnouncementNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetReconsignmentAnnouncement($reconsignmentAnnouncementNumber, $queryParameters), $fetch);
    }
    /**
    * Allows to download a document associated with the given reconsignmentAnnouncement.
    *
    * @param string $reconsignmentAnnouncementNumber The number of the reconsignmentAnnouncement.
    * @param string $documentCode The document type to download. The file format is determined by the Accept request header.\
    **Note:** Only a limited amount of document type to file format combinations are available:
    - shippingLabel: The shipping label for the end customer to ship goods back to the steve warehouse.\
    Accept header: application/pdf
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients. \
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/pdf|application/json
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementDocumentBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementDocumentUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementDocumentForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementDocumentNotFoundException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementDocumentNotAcceptableException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementDocumentUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReconsignmentAnnouncementDocumentInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getReconsignmentAnnouncementDocument(string $reconsignmentAnnouncementNumber, string $documentCode, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT, array $accept = array())
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetReconsignmentAnnouncementDocument($reconsignmentAnnouncementNumber, $documentCode, $queryParameters, $accept), $fetch);
    }
    /**
    * Read the created orders for the given shopCode in the given dateRange.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 20.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    *     @var string $filter[shopCode] The shopCode used internally to distinguish between clients. \
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    *     @var string $filter[dateFrom] The start date (inclusive) in format Y-m-d (timezone CET/CEST) for which orders should be returned.
    *     @var string $filter[dateTo] The end date (inclusive) in format Y-m-d (timezone CET/CEST) for which orders should be returned.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderReportClearingCollectionBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderReportClearingCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderReportClearingCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderReportClearingCollectionUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderReportClearingCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportClearingOrderCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getOrderReportClearingCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetOrderReportClearingCollection($queryParameters), $fetch);
    }
    /**
    * Read the inventory movements for the given shopCode in the given month and year.
    _Only inventory movements for products with source 'self' are returned._
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 20.
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
    - productNumber
    - stockStart
    - stockEnd
    - stockAdded
    - stockSubtracted
    - stockSubtractedExternal
    - stockCorrected
    - stockUsedForOwnPurposes
    - stockReturned
    - stockReturnedExternal
    
    The default sort order is stockEnd:desc.
    *     @var string $filter[shopCode] The shopCode used internally to distinguish between clients. \
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    *     @var int $filter[year] The year for which inventory movements should be returned.
    *     @var int $filter[month] The month for which inventory movements should be returned.
    *     @var string $filter[productNumbers] The productNumber(s) as comma delimited string for which inventory movements should be returned (optional).
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReportInventoryMovementCollectionBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReportInventoryMovementCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReportInventoryMovementCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReportInventoryMovementCollectionUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetReportInventoryMovementCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportInventoryMovementEntryCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getReportInventoryMovementCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetReportInventoryMovementCollection($queryParameters), $fetch);
    }
    /**
    * Get a list of shops the used identity is assigned to.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    *     @var string $filter[meta][shopifyShopDomain] A filter for the Shopify hostname of the shop.
    *     @var bool $filter[meta][shopifyDefaultShop] A filter for Shopify default shops.\
    Note: For shops that are part of a Shopify installation that uses multiple shops,
    only shops where meta.shopifyShopDefault is true will be considered as default shops.\
    All shops that are used for a single shop Shopify installation will also be considered as default shops.
    *     @var string $filter[meta][shopifyOrderCountryCode] A filter for the Shopify order country code (ISO 3166-1 alpha-2).
    *     @var string $filter[shopCode] A filter for one or more shopCode(s) of the shop(s) (optional).
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetShopCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetShopCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetShopCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShopCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getShopCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetShopCollection($queryParameters), $fetch);
    }
    /**
     * Set one or more fields of a shop. Only a limited set of fields can be updated.
     *
     * @param string $shopId Shop Id
     * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\UpdateShop $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchShopBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchShopUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchShopForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchShopNotFoundException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchShopInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Shop|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function patchShop(string $shopId, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\UpdateShop $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\PatchShop($shopId, $requestBody), $fetch);
    }
    /**
    * Get the stock for all (per default only valid) products or for a specific product.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 20.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated. This can mean loss of
    performance.
    *     @var string $sortBy Sort the results by one or more comma-separated sort criteria, with the criterion specified first having
    priority.
    
    Available sort orders:
    - asc: ascending order
    - desc: descending order
    
    Available fields for sorting:
    - productNumber
    - stocked
    - reserved
    - available
    - incoming
    
    The default sort order is stocked:desc.
    *     @var string $filter[productNumber] Filter for product number(s) (optional).
    *     @var string $filter[shopCode] The shopCode used internally to distinguish between clients. \
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    *     @var string $filter[productStatus] Filter for productStatus\
    By default, only valid products (available or in stock) are returned. \
    Use '_all' to return all products (also invalid products). \
    Use '_invalid' to specifically return invalid products (not available and out of stock).
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetStockCollectionBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetStockCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetStockCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetStockCollectionUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetStockCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\StockCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getStockCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetStockCollection($queryParameters), $fetch);
    }
    /**
    * Get suppliers filtered by shopCode.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 20.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    *     @var string $filter[shopCode] The shopCode used internally to distinguish between clients. \
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetSupplierCollectionBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetSupplierCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetSupplierCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetSupplierCollectionUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetSupplierCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\SupplierCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getSupplierCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetSupplierCollection($queryParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://fulfillment-api.steve.niceshops.com/v2');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}