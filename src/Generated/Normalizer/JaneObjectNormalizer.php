<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\CheckArray;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuditLog::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuditLogNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuditLogCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuditLogCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthPermissionResource::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuthPermissionResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthPermissionRolePaginatedCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuthPermissionRolePaginatedCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthPermissionRoleResource::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuthPermissionRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthRoleCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuthRoleCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthRoleIdentityPaginatedCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuthRoleIdentityPaginatedCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthRoleIdentityResource::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuthRoleIdentityResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthRoleResource::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuthRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrder::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseOrderNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrderCustomer::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseOrderCustomerNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Collection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\CollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\CollectionPagination::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\CollectionPaginationNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Delivery::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryService::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryServiceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryServiceCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryServiceCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipment::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryShipmentNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Error::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ErrorNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorReferencesItem::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ErrorReferencesItemNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ErrorResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\GetAuthPermissionCollectionResponse::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\GetAuthPermissionCollectionResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Information::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\InformationNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InformationResponse::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\InformationResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewAuthRoleResource::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewAuthRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrder::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrderCustomer::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderCustomerNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrderItem::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderItemNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrderItemPrice::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderItemPriceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomer::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderCustomerNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomerAddress::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderCustomerAddressNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomerDeliveryAddress::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderCustomerDeliveryAddressNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomerInvoiceAddress::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderCustomerInvoiceAddressNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderDelivery::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderDeliveryNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderItem::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderItemNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderItemPrice::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderItemPriceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderPayment::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderPaymentNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderShipping::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderShippingNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShipmentLine::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ShipmentLineNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Shop::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ShopNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShopMeta::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ShopMetaNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShopCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ShopCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Stock::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\StockNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\StockCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\StockCollectionNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuditLog::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuditLogCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthPermissionResource::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthPermissionRolePaginatedCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthPermissionRoleResource::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthRoleCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthRoleIdentityPaginatedCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthRoleIdentityResource::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\AuthRoleResource::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrder::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrderCustomer::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Collection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\CollectionPagination::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Delivery::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryService::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryServiceCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipment::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Error::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorReferencesItem::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\GetAuthPermissionCollectionResponse::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Information::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InformationResponse::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewAuthRoleResource::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrder::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrderCustomer::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrderItem::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrderItemPrice::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomer::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomerAddress::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomerDeliveryAddress::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomerInvoiceAddress::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderDelivery::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderItem::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderItemPrice::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderPayment::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderShipping::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShipmentLine::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Shop::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShopMeta::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShopCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Stock::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\StockCollection::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}