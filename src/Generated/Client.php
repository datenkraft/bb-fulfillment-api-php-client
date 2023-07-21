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
    - totalCount: The total number of items in the collection will be calculated. This can mean loss of performance.
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
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteAuthPermissionRoleCollectionNotFoundException
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthPermissionRoleResource[]|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthPermissionRoleCollection(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetAuthPermissionRoleCollection(), $fetch);
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthPermissionCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthPermissionCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthPermissionCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthPermissionResource[]|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthPermissionCollection(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetAuthPermissionCollection(), $fetch);
    }
    /**
     * Delete one or more role to identity assignments in this resource server
     *
     * @param null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthRoleIdentityResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteAuthRoleIdentityCollectionNotFoundException
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthRoleIdentityCollectionNotFoundException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthRoleIdentityCollection(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetAuthRoleIdentityCollection(), $fetch);
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthRoleResource[]|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthRoleCollection(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetAuthRoleCollection(), $fetch);
    }
    /**
     * Delete a role for this resource server
     *
     * @param string $roleCode Identifier for the role
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\DeleteAuthRoleBadRequestException
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
    * Get delivery services.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated. This can mean loss of performance.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryServiceCollection|\Psr\Http\Message\ResponseInterface
    */
    public function getDeliveryServiceCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetDeliveryServiceCollection($queryParameters), $fetch);
    }
    /**
    * Get deliveries filtered by orderNumber.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated. This can mean loss of performance.
    *     @var string $filter[orderNumber] A filter with the orderNumber as given during the creation of the order.
    *     @var string $shopCode The shopCode used in DISCO (optional).
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
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
     * @param string $deliveryNumber delivery number
     * @param array $queryParameters {
     *     @var string $shopCode The shopCode used in DISCO (optional).
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
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
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApiInFormat(string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetOpenApiInFormat($format), $fetch);
    }
    /**
     * Get an order by order number.
     *
     * @param string $orderNumber The order number as defined during the creation of the order.
     * @param array $queryParameters {
     *     @var string $shopCode The shopCode used in DISCO (optional).
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
    * @param string $orderNumber The number the order should be refered by. This number is user defined, must be unique and has
    a maximum length (check maxLength field).
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
     *
     * @param string $orderNumber The number the order is refered by.
     * @param array $queryParameters {
     *     @var string $shopCode The shopCode used in DISCO (optional).
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
    * Get a list of shops.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated. This can mean loss of performance.
    *     @var string $filter[meta][shopifyShopDomain] A filter for the Shopify hostname of the shop.
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
    * Get the stock for all products or for a specific product.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 20.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated. This can mean loss of performance.
    *     @var string $filter[productNumber] product number
    *     @var string $filter[shopCode] The shopCode used in DISCO (optional).
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
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://fulfillment-api.conqore.niceshops.com/v1');
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