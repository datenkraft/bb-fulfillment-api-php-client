<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated;

class Client extends \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Client\Client
{
    /**
    * Get an order by order number.
    *
    * @param string $orderNumber The order number as defined during the creation of the order.
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients.<br />
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
    * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getOrder(string $orderNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetOrder($orderNumber, $queryParameters), $fetch);
    }
    /**
    * Add a new order referenced by the given orderNumber.
    *
    * @param string $orderNumber The number the order should be refered by.
       This number is user defined, must be unique and has a maximum length (check maxLength field).
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
    * Cancel the order specified by the given order number (set in param orderNumber). An orderNumber from a canceled order cannot be used for a new order, because they must always be unique.
    *
    * @param string $orderNumber The number the order is refered by.
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients.<br />
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
    * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function cancelOrder(string $orderNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\CancelOrder($orderNumber, $queryParameters), $fetch);
    }
    /**
    * Get a list of shop orders.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $filter[shopCode] The shopCode used internally to distinguish between clients.<br />
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    *     @var string $filter[status] Filter for status/statuses (optional).
    *     @var string $filter[externalOrderId] Filter for the external order ID e.g. from third party apps (optional)
    *     @var string $filter[externalCustomerId] Filter for the external customer ID e.g. from third party apps (optional)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderCollectionUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetOrderCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getOrderCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetOrderCollection($queryParameters), $fetch);
    }
    /**
    * Redact the order and all other orders linked to the given order number (set in the param
    orderNumber) in a GDPR article 17 conform way. <br />
    
    Only orders with one of the following statuses are redactable:
    - delivered
    - deleted
    - canceled
    *
    * @param string $orderNumber The number the order is refered by.
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients.<br />
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
    * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function redactOrder(string $orderNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\RedactOrder($orderNumber, $queryParameters), $fetch);
    }
    /**
    * Get the delivery with the given deliveryNumber.
    *
    * @param string $deliveryNumber delivery number
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients.<br />
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
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
    *     @var string $shopCode The shopCode used internally to distinguish between clients.<br />
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
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
    * Patch data of the shipment of the delivery specified by the given delivery and shipment numbers.
    *
    * @param string $deliveryNumber Number of the delivery.
    * @param string $shipmentNumber Number of the shipment
    * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\UpdateDeliveryShipment $requestBody 
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients.<br />
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchDeliveryShipmentUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchDeliveryShipmentForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchDeliveryShipmentNotFoundException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchDeliveryShipmentUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PatchDeliveryShipmentInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipment|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function patchDeliveryShipment(string $deliveryNumber, string $shipmentNumber, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\UpdateDeliveryShipment $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\PatchDeliveryShipment($deliveryNumber, $shipmentNumber, $requestBody, $queryParameters), $fetch);
    }
    /**
     * Get all available product unit codes.
     *
     * @param array $queryParameters {
     *     @var int $page The page to read. Default is the first page.
     *     @var int $pageSize The maximum size per page is 100. Default is 20.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductUnitCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductUnitCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductUnitCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getProductUnitCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetProductUnitCollection($queryParameters), $fetch);
    }
    /**
    * Get an inbound delivery by inbound delivery number.
    *
    * @param string $inboundDeliveryNumber The inbound delivery number as defined during the creation of the inbound delivery.
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients.<br />
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
    * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDelivery|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getInboundDelivery(string $inboundDeliveryNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetInboundDelivery($inboundDeliveryNumber, $queryParameters), $fetch);
    }
    /**
    * Add a new inbound delivery referenced by the given deliveryNumber.
    *
    * @param string $inboundDeliveryNumber The number the inbound delivery should be refered by.
    This number is user defined, must be unique and has a maximum length (check maxLength field).
    * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewInboundDelivery $requestBody 
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients.<br />
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
    * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDelivery|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postInboundDelivery(string $inboundDeliveryNumber, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewInboundDelivery $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\PostInboundDelivery($inboundDeliveryNumber, $requestBody, $queryParameters), $fetch);
    }
    /**
     * Get a spreadsheet template for performing POST queries to the respective endpoint.
     *
     * @param string $format The inbound delivery number as defined during the creation of the inbound delivery.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetInboundDeliveryBulkImportTemplateInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getInboundDeliveryBulkImportTemplate(string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetInboundDeliveryBulkImportTemplate($format), $fetch);
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
    *     @var string $filter[shopCode] The shopCode used internally to distinguish between clients.<br />
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
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
     * Import one or more new inbound deliveries.
     *
     * @param string $format The format for the upload.
     * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BulkImportInboundDeliveryFormatPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\InboundDeliveryBulkImportBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\InboundDeliveryBulkImportUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\InboundDeliveryBulkImportForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\InboundDeliveryBulkImportInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BulkImportInboundDeliveryFormatPostResponse207Item[]|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function inboundDeliveryBulkImport(string $format, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BulkImportInboundDeliveryFormatPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\InboundDeliveryBulkImport($format, $requestBody), $fetch);
    }
    /**
    * Cancel a inbound delivery referenced by the given inboundDeliveryNumber. An inboundDeliveryNumber from a canceled inbound delivery cannot be used for a new inbound delivery, because they must always be unique.
    *
    * @param string $inboundDeliveryNumber The number the inbound delivery should be refered by.
    This number is user defined, must be unique and has a maximum length (check maxLength field).
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients.<br />
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
    * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDelivery|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function cancelInboundDelivery(string $inboundDeliveryNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\CancelInboundDelivery($inboundDeliveryNumber, $queryParameters), $fetch);
    }
    /**
     * Collections are read in multiple pages with a defined page size.
     *
     * @param array $queryParameters {
     *     @var int $page The page to read. Default is the first page.
     *     @var int $pageSize The maximum size per page is 100. Default is 20.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetCountryCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetCountryCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetCountryCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetCountryCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\CountryCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getCountryCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetCountryCollection($queryParameters), $fetch);
    }
    /**
    * Get a list of manufacturers.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $filter[shopCode] The shopCode used internally to distinguish between clients.<br />
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
    * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ManufacturerCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getManufacturerCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetManufacturerCollection($queryParameters), $fetch);
    }
    /**
    * Get a list of shops the used identity is assigned to.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $filter[meta][shopifyShopDomain] A filter for the Shopify hostname of the shop.
    *     @var bool $filter[meta][shopifyDefaultShop] A filter for Shopify default shops.\
    Note: For shops that are part of a Shopify installation that uses multiple shops,
    only shops where meta.shopifyShopDefault is true will be considered as default shops.\
    All shops that are used for a single shop Shopify installation will also be considered as default shops.
    *     @var string $filter[meta][shopifyOrderTags] Filter for Shopify order tag(s).\
    Note: Filter by a single tag or multiple tags separated by commas.
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
    * Read the created orders for the given shopCode in the given dateRange.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 20.
    *     @var string $filter[shopCode] The shopCode used internally to distinguish between clients.<br />
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
    * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportClearingOrderCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getOrderReportClearingCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetOrderReportClearingCollection($queryParameters), $fetch);
    }
    /**
     * Get delivery services.
     *
     * @param array $queryParameters {
     *     @var int $page The page to read. Default is the first page.
     *     @var int $pageSize The maximum size per page is 100. Default is 100.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryServiceCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryServiceCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetDeliveryServiceCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryServiceCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getDeliveryServiceCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetDeliveryServiceCollection($queryParameters), $fetch);
    }
    /**
    * Get suppliers filtered by shopCode.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 20.
    *     @var string $filter[shopCode] The shopCode used internally to distinguish between clients.<br />
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
    * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\SupplierCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getSupplierCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetSupplierCollection($queryParameters), $fetch);
    }
    /**
    * Get a product by product number.
    *
    * @param string $productNumber The product number as defined during the creation of the product.
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients.<br />
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductNotFoundException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Product|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getProduct(string $productNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetProduct($productNumber, $queryParameters), $fetch);
    }
    /**
    * Add a new product referenced by the given productNumber.
    Please note that due to necessary product compliance enabling by our steve team, the product might not be usable immediately.
    The product number is nevertheless reserved, even before the product can be queried in the GET endpoint.
    *
    * @param string $productNumber The number the product should be refered by.
       This number is user defined, must be unique and has a maximum length (check maxLength field).
    * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewProduct $requestBody 
    * @param array $queryParameters {
    *     @var string $shopCode The shopCode used internally to distinguish between clients.<br />
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostProductBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostProductUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostProductForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostProductUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\PostProductInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InformationResponse|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function postProduct(string $productNumber, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewProduct $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\PostProduct($productNumber, $requestBody, $queryParameters), $fetch);
    }
    /**
    * Get a list of products.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $filter[shopCode] The shopCode used internally to distinguish between clients.<br />
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    *     @var string $filter[search] Filter for product search.\
    Usage:
    - Provide one or multiple search terms to filter results.
    - Multiple search terms are separated by spaces.
    - The search is not case sensitive.
    - The search is enabled for the fields productTitle and productNumber.
    - Each search term filters the response for products where at least one of the fields contains the search term.
    - For example, filter[search]='term1 term2' will filter the result for products where 'term1' is found in any field and 'term2' is also found in any field.\
    If only 'term1' or 'term2' is found in the fields, the product is not included in the results.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductCollectionUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getProductCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetProductCollection($queryParameters), $fetch);
    }
    /**
    * Read a journal collection for a specific product showing the history of stock changes.
    *
    * @param string $productNumber The product number as defined during the creation of the product.
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $shopCode The shopCode used internally to distinguish between clients.<br />
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    *     @var string $filter[dateFrom] The start date (inclusive) in format Y-m-d (timezone CET/CEST) for which product journal entries should be returned.
    *     @var string $filter[dateTo] The end date (inclusive) in format Y-m-d (timezone CET/CEST) for which product journal entries should be returned.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductJournalCollectionBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductJournalCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductJournalCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductJournalCollectionNotFoundException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductJournalCollectionUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\GetProductJournalCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return null|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductJournalCollection|\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getProductJournalCollection(string $productNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\GetProductJournalCollection($productNumber, $queryParameters), $fetch);
    }
    /**
    * Get the stock for all (per default only valid) products or for a specific product.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 20.
    *     @var string $filter[productNumber] Filter for product number(s) (optional).
    *     @var string $filter[shopCode] The shopCode used internally to distinguish between clients.<br />
    _This code is optional, if your identity is assigned to only one shop.
    Otherwise the response would be a 422 HTTP Error._
    *     @var string $filter[productStatus] filter for productStatus\
    By default, only valid products (available or in stock) are returned.\
    Use '_all' to return all products (also invalid products)\
    Use '_invalid' to specifically return invalid products (not available and out of stock)
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
     * Delete one or more role to identity assignments in this resource server
     *
     * @param \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthRoleIdentityResource[] $requestBody 
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
    public function deleteAuthRoleIdentityCollection(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Endpoint\DeleteAuthRoleIdentityCollection($requestBody), $fetch);
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