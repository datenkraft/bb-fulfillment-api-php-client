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
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrderCustomerInvoiceAddress::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseOrderCustomerInvoiceAddressNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrderItem::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseOrderItemNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrderOptions::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseOrderOptionsNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseProduct::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseProductNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseProductDimensions::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseProductDimensionsNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseProductDraft::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseProductDraftNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseProductDraftDimensions::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseProductDraftDimensionsNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseReconsignmentAnnouncement::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseReconsignmentAnnouncementNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseReconsignmentAnnouncementOptions::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseReconsignmentAnnouncementOptionsNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseShop::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseShopNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Batch::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BatchNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Brand::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BrandNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BrandCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BrandCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BundledOrderItem::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BundledOrderItemNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BundledOrderItemPrice::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BundledOrderItemPriceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Collection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\CollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\CollectionPagination::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\CollectionPaginationNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Country::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\CountryNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\CountryCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\CountryCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\CountryProvinces::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\CountryProvincesNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Delivery::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryExpense::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryExpenseNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryExpenseCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryExpenseCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryExpensePrice::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryExpensePriceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryService::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryServiceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryServiceCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryServiceCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipment::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryShipmentNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipmentPackaging::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryShipmentPackagingNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipmentJournal::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryShipmentJournalNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipmentPackagingMaterial::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryShipmentPackagingMaterialNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DiscoShop::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DiscoShopNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DiscoShopCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DiscoShopCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Error::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ErrorNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorReferencesItem::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ErrorReferencesItemNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ErrorResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ExternalListing::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ExternalListingNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\GetAuthPermissionCollectionResponse::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\GetAuthPermissionCollectionResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDelivery::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\InboundDeliveryNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDeliveryCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\InboundDeliveryCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDeliveryProduct::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\InboundDeliveryProductNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDeliveryTrackingUrl::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\InboundDeliveryTrackingUrlNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Information::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\InformationNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InformationResponse::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\InformationResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Manufacturer::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ManufacturerNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ManufacturerCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ManufacturerCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewAuthRoleResource::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewAuthRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewInboundDelivery::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewInboundDeliveryNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewInboundDeliveryProduct::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewInboundDeliveryProductNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewInboundDeliveryTrackingUrl::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewInboundDeliveryTrackingUrlNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrder::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrderCustomer::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderCustomerNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrderCustomerInvoiceAddress::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderCustomerInvoiceAddressNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrderItem::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderItemNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrderItemPrice::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderItemPriceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrderOptions::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderOptionsNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrderPrice::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderPriceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewProductDraft::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewProductDraftNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewProductStockAdd::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewProductStockAddNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewReconsignmentAnnouncement::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewReconsignmentAnnouncementNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewReconsignmentAnnouncementLine::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewReconsignmentAnnouncementLineNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewReconsignmentAnnouncementOptions::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewReconsignmentAnnouncementOptionsNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewStockCheck::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewStockCheckNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomer::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderCustomerNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomerAddress::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderCustomerAddressNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomerDeliveryAddress::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderCustomerDeliveryAddressNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderDelivery::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderDeliveryNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderDeliveryCosts::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderDeliveryCostsNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderItem::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderItemNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderItemPrice::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderItemPriceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderPayment::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderPaymentNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderPrice::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderPriceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderShipping::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderShippingNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Packaging::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PackagingNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\PackagingCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PackagingCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\PatchInboundDelivery::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PatchInboundDeliveryNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\PatchInboundDeliveryProduct::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PatchInboundDeliveryProductNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\PatchOrder::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PatchOrderNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\PatchProduct::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PatchProductNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\PostShop::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PostShopNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\PostShopMeta::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PostShopMetaNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Product::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductBundledProduct::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductBundledProductNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductDraft::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductDraftNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductDraftCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductDraftCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductImage::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductImageNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductImageDetail::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductImageDetailNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductJournal::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductJournalNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductJournalCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductJournalCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductJournalReference::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductJournalReferenceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductPurchasePrice::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductPurchasePriceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductStockReference::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductStockReferenceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductStockReferenceCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductStockReferenceCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductStockReferenceReference::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductStockReferenceReferenceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductUnit::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductUnitNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductUnitCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductUnitCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Reconsignment::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentAnnouncement::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentAnnouncementNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentAnnouncementLine::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentAnnouncementLineNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentAnnouncementLineBundledProduct::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentAnnouncementLineBundledProductNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentAnnouncementPaginatedCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentAnnouncementPaginatedCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentLine::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentLineNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentLineBundledProduct::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentLineBundledProductNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportClearingOrder::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReportClearingOrderNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportClearingOrderCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReportClearingOrderCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportInventoryMovement::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReportInventoryMovementNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportInventoryMovementEntry::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReportInventoryMovementEntryNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportInventoryMovementEntryReference::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReportInventoryMovementEntryReferenceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportInventoryMovementEntryCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReportInventoryMovementEntryCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReservedFor::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReservedForNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShipmentLine::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ShipmentLineNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Shop::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ShopNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShopMeta::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ShopMetaNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShopCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ShopCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Stock::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\StockNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\StockCheck::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\StockCheckNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\StockCheckCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\StockCheckCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\StockCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\StockCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Supplier::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\SupplierNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\SupplierCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\SupplierCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\UpdateDeliveryShipment::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\UpdateDeliveryShipmentNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\UpdateShop::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\UpdateShopNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\UpdateShopMeta::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\UpdateShopMetaNormalizer::class,
        
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
        $normalizer = match ($normalizerClass) {
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuditLogNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuditLogNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuditLogCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuditLogCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuthPermissionResourceNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuthPermissionResourceNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuthPermissionRolePaginatedCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuthPermissionRolePaginatedCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuthPermissionRoleResourceNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuthPermissionRoleResourceNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuthRoleCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuthRoleCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuthRoleIdentityPaginatedCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuthRoleIdentityPaginatedCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuthRoleIdentityResourceNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuthRoleIdentityResourceNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuthRoleResourceNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\AuthRoleResourceNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseOrderNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseOrderNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseOrderCustomerNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseOrderCustomerNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseOrderCustomerInvoiceAddressNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseOrderCustomerInvoiceAddressNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseOrderItemNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseOrderItemNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseOrderOptionsNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseOrderOptionsNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseProductNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseProductNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseProductDimensionsNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseProductDimensionsNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseProductDraftNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseProductDraftNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseProductDraftDimensionsNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseProductDraftDimensionsNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseReconsignmentAnnouncementNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseReconsignmentAnnouncementNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseReconsignmentAnnouncementOptionsNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseReconsignmentAnnouncementOptionsNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseShopNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BaseShopNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BatchNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BatchNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BrandNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BrandNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BrandCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BrandCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BundledOrderItemNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BundledOrderItemNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BundledOrderItemPriceNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\BundledOrderItemPriceNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\CollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\CollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\CollectionPaginationNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\CollectionPaginationNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\CountryNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\CountryNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\CountryCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\CountryCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\CountryProvincesNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\CountryProvincesNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryExpenseNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryExpenseNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryExpenseCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryExpenseCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryExpensePriceNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryExpensePriceNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryServiceNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryServiceNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryServiceCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryServiceCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryShipmentNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryShipmentNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryShipmentPackagingNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryShipmentPackagingNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryShipmentJournalNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryShipmentJournalNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryShipmentPackagingMaterialNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DeliveryShipmentPackagingMaterialNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DiscoShopNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DiscoShopNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DiscoShopCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\DiscoShopCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ErrorNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ErrorNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ErrorReferencesItemNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ErrorReferencesItemNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ErrorResponseNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ErrorResponseNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ExternalListingNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ExternalListingNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\GetAuthPermissionCollectionResponseNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\GetAuthPermissionCollectionResponseNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\InboundDeliveryNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\InboundDeliveryNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\InboundDeliveryCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\InboundDeliveryCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\InboundDeliveryProductNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\InboundDeliveryProductNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\InboundDeliveryTrackingUrlNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\InboundDeliveryTrackingUrlNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\InformationNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\InformationNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\InformationResponseNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\InformationResponseNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ManufacturerNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ManufacturerNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ManufacturerCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ManufacturerCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewAuthRoleResourceNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewAuthRoleResourceNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewInboundDeliveryNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewInboundDeliveryNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewInboundDeliveryProductNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewInboundDeliveryProductNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewInboundDeliveryTrackingUrlNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewInboundDeliveryTrackingUrlNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderCustomerNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderCustomerNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderCustomerInvoiceAddressNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderCustomerInvoiceAddressNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderItemNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderItemNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderItemPriceNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderItemPriceNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderOptionsNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderOptionsNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderPriceNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewOrderPriceNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewProductDraftNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewProductDraftNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewProductStockAddNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewProductStockAddNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewReconsignmentAnnouncementNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewReconsignmentAnnouncementNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewReconsignmentAnnouncementLineNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewReconsignmentAnnouncementLineNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewReconsignmentAnnouncementOptionsNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewReconsignmentAnnouncementOptionsNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewStockCheckNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewStockCheckNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderCustomerNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderCustomerNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderCustomerAddressNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderCustomerAddressNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderCustomerDeliveryAddressNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderCustomerDeliveryAddressNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderDeliveryNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderDeliveryNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderDeliveryCostsNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderDeliveryCostsNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderItemNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderItemNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderItemPriceNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderItemPriceNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderPaymentNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderPaymentNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderPriceNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderPriceNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderShippingNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\OrderShippingNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PackagingNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PackagingNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PackagingCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PackagingCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PatchInboundDeliveryNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PatchInboundDeliveryNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PatchInboundDeliveryProductNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PatchInboundDeliveryProductNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PatchOrderNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PatchOrderNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PatchProductNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PatchProductNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PostShopNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PostShopNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PostShopMetaNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\PostShopMetaNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductBundledProductNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductBundledProductNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductDraftNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductDraftNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductDraftCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductDraftCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductImageNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductImageNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductImageDetailNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductImageDetailNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductJournalNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductJournalNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductJournalCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductJournalCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductJournalReferenceNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductJournalReferenceNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductPurchasePriceNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductPurchasePriceNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductStockReferenceNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductStockReferenceNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductStockReferenceCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductStockReferenceCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductStockReferenceReferenceNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductStockReferenceReferenceNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductUnitNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductUnitNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductUnitCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ProductUnitCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentAnnouncementNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentAnnouncementNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentAnnouncementLineNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentAnnouncementLineNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentAnnouncementLineBundledProductNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentAnnouncementLineBundledProductNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentAnnouncementPaginatedCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentAnnouncementPaginatedCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentLineNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentLineNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentLineBundledProductNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReconsignmentLineBundledProductNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReportClearingOrderNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReportClearingOrderNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReportClearingOrderCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReportClearingOrderCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReportInventoryMovementNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReportInventoryMovementNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReportInventoryMovementEntryNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReportInventoryMovementEntryNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReportInventoryMovementEntryReferenceNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReportInventoryMovementEntryReferenceNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReportInventoryMovementEntryCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReportInventoryMovementEntryCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReservedForNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ReservedForNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ShipmentLineNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ShipmentLineNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ShopNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ShopNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ShopMetaNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ShopMetaNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ShopCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ShopCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\StockNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\StockNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\StockCheckNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\StockCheckNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\StockCheckCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\StockCheckCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\StockCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\StockCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\SupplierNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\SupplierNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\SupplierCollectionNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\SupplierCollectionNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\UpdateDeliveryShipmentNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\UpdateDeliveryShipmentNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\UpdateShopNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\UpdateShopNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\UpdateShopMetaNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\UpdateShopMetaNormalizer(),
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\ReferenceNormalizer::class => new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\ReferenceNormalizer(),
            default => throw new \InvalidArgumentException('Unknown normalizer class: ' . $normalizerClass),
        };
        if ($normalizer instanceof \Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface) {
            $normalizer->setNormalizer($this->normalizer);
        }
        if ($normalizer instanceof \Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface) {
            $normalizer->setDenormalizer($this->denormalizer);
        }
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return array_combine(array_keys($this->normalizers), array_fill(0, count($this->normalizers), false));
    }
}