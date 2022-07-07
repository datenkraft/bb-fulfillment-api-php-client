<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated;

class Client extends \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\Client
{
    /**
     * Get an inbound delivery by inbound delivery number.
     *
     * @param string $inboundDeliveryNumber The inbound delivery number as defined during the creation of the order.
     * @param array $queryParameters {
     *     @var string $shopCode The shopCode used in DISCO (optional).
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
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDelivery|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getInboundDelivery(string $inboundDeliveryNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetInboundDelivery($inboundDeliveryNumber, $queryParameters), $fetch);
    }
    /**
     * Add a new inbound delivery referenced by the given deliveryNumber.
     *
     * @param string $inboundDeliveryNumber The number the inbound delivery should be refered by. This number is user defined, must be unique and has a maximum length (check maxLength field).
     * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewInboundDelivery $requestBody 
     * @param array $queryParameters {
     *     @var string $shopCode The shopCode used in DISCO (optional).
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostInboundDeliveryInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDelivery|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postInboundDelivery(string $inboundDeliveryNumber, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewInboundDelivery $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\PostInboundDelivery($inboundDeliveryNumber, $requestBody, $queryParameters), $fetch);
    }
    /**
    * Get a list of inbound deliveries.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $filter[status] Status of the inbound delivery (optional).
    
    The status for not yet completed is subject to change. you may poll for changes.
    - open: The inbound delivery has not yet been delivered.
    - in_progress: The inbound delivery is being processed in our warehouse.
    - completed: The inbound delivery has been processed in our warehouse.
    - deleted: The inbound delivery has been deleted.
    *     @var string $filter[shopCode] The shopCode used in DISCO (optional).
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryCollectionUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDeliveryCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getInboundDeliveryCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetInboundDeliveryCollection($queryParameters), $fetch);
    }
    /**
     * Get the stock for all products or for a specific product.
     *
     * @param array $queryParameters {
     *     @var int $page The page to read. Default is the first page.
     *     @var int $pageSize The maximum size per page is 100. Default is 20.
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
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\StockCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getStockCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetStockCollection($queryParameters), $fetch);
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
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getOrder(string $orderNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetOrder($orderNumber, $queryParameters), $fetch);
    }
    /**
     * Add a new order referenced by the given orderNumber.
     *
     * @param string $orderNumber The number the order should be refered by. This number is user defined, must be unique and has a maximum length (check maxLength field).
     * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrder $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostOrderInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
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
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function cancelOrder(string $orderNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\CancelOrder($orderNumber, $queryParameters), $fetch);
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
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Delivery|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getDelivery(string $deliveryNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetDelivery($deliveryNumber, $queryParameters), $fetch);
    }
    /**
    * Get deliveries filtered by a single or multiple order numbers.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $filter[orderNumber] A filter for a single order number or multiple order numbers separted by a comma.
    - The filter can contain a maximum of 100 order numbers.
    - The order numbers in the filter must be unique.
    - A single order number can have a maximum length of 59 characters.
    *     @var string $shopCode The shopCode used in DISCO (optional).
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryCollectionUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getDeliveryCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetDeliveryCollection($queryParameters), $fetch);
    }
    /**
     * Get a list of shops.
     *
     * @param array $queryParameters {
     *     @var int $page The page to read. Default is the first page.
     *     @var int $pageSize The maximum size per page is 100. Default is 100.
     *     @var string $filter[meta][shopifyShopDomain] A filter for the Shopify hostname of the shop.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetShopCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetShopCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetShopCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShopCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getShopCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetShopCollection($queryParameters), $fetch);
    }
    /**
     * Update one or more fields of a shop. Only a limited set of fields can be updated.
     *
     * @param string $shopId Shop Id
     * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\UpdateShop $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchShopBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchShopUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchShopForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchShopNotFoundException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchShopConflictException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchShopInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Shop|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function patchShop(string $shopId, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\UpdateShop $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\PatchShop($shopId, $requestBody), $fetch);
    }
    /**
     * Get delivery services.
     *
     * @param array $queryParameters {
     *     @var int $page The page to read. Default is the first page.
     *     @var int $pageSize The maximum size per page is 100. Default is 100.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryServiceCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getDeliveryServiceCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetDeliveryServiceCollection($queryParameters), $fetch);
    }
    /**
     * Read the created orders for the given shopCode in the given dateRange.
     *
     * @param array $queryParameters {
     *     @var int $page The page to read. Default is the first page.
     *     @var int $pageSize The maximum size per page is 100. Default is 20.
     *     @var string $filter[shopCode] The shopCode used in DISCO (optional).
     *     @var string $filter[dateFrom] The start date (inclusive) in format Y-m-d for which orders should be returned.
     *     @var string $filter[dateTo] The end date (inclusive) in format Y-m-d for which orders should be returned.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderReportClearingCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderReportClearingCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderReportClearingCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderReportClearingCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderReportClearingCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportClearingOrderCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getOrderReportClearingCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetOrderReportClearingCollection($queryParameters), $fetch);
    }
    /**
     * Get suppliers filtered by shopCode.
     *
     * @param array $queryParameters {
     *     @var int $page The page to read. Default is the first page.
     *     @var int $pageSize The maximum size per page is 100. Default is 20.
     *     @var string $filter[shopCode] The shopCode used in DISCO (optional).
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetSupplierCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetSupplierCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetSupplierCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetSupplierCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetSupplierCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\SupplierCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getSupplierCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetSupplierCollection($queryParameters), $fetch);
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
     * Get the openapi documentation in the specified format (yaml or json, fallback is json)
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthRoleResource[]|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthRoleCollection(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetAuthRoleCollection(), $fetch);
    }
    /**
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
    public function deleteAuthRoleIdentityCollection(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\DeleteAuthRoleIdentityCollection(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
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
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postAuthRoleIdentityCollection(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\PostAuthRoleIdentityCollection($requestBody), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://fulfillment-api.conqore.niceshops.com/v2');
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