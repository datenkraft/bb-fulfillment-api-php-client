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
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Information::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\InformationNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InformationResponse::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\InformationResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Manufacturer::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ManufacturerNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ManufacturerCollection::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\ManufacturerCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewAuthRoleResource::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewAuthRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewInboundDelivery::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewInboundDeliveryNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewInboundDeliveryProduct::class => \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer\NewInboundDeliveryProductNormalizer::class,
        
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
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrderCustomerInvoiceAddress::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrderItem::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrderOptions::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseProduct::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseProductDimensions::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseProductDraft::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseProductDraftDimensions::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseReconsignmentAnnouncement::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseReconsignmentAnnouncementOptions::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseShop::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Batch::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Brand::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BrandCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BundledOrderItem::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BundledOrderItemPrice::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Collection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\CollectionPagination::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Country::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\CountryCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\CountryProvinces::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Delivery::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryExpense::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryExpenseCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryExpensePrice::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryService::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryServiceCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipment::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipmentPackaging::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipmentJournal::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipmentPackagingMaterial::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DiscoShop::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DiscoShopCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Error::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorReferencesItem::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ErrorResponse::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ExternalListing::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\GetAuthPermissionCollectionResponse::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDelivery::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDeliveryCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDeliveryProduct::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Information::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InformationResponse::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Manufacturer::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ManufacturerCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewAuthRoleResource::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewInboundDelivery::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewInboundDeliveryProduct::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrder::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrderCustomer::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrderCustomerInvoiceAddress::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrderItem::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrderItemPrice::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrderOptions::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrderPrice::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewProductDraft::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewProductStockAdd::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewReconsignmentAnnouncement::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewReconsignmentAnnouncementLine::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewReconsignmentAnnouncementOptions::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomer::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomerAddress::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomerDeliveryAddress::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderDelivery::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderDeliveryCosts::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderItem::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderItemPrice::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderPayment::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderPrice::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderShipping::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Packaging::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\PackagingCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\PatchInboundDelivery::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\PatchInboundDeliveryProduct::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\PatchOrder::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\PatchProduct::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\PostShop::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\PostShopMeta::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Product::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductBundledProduct::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductDraft::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductDraftCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductImage::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductImageDetail::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductJournal::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductJournalCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductJournalReference::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductPurchasePrice::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductStockReference::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductStockReferenceCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductStockReferenceReference::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductUnit::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductUnitCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Reconsignment::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentAnnouncement::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentAnnouncementLine::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentAnnouncementLineBundledProduct::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentAnnouncementPaginatedCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentLine::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentLineBundledProduct::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportClearingOrder::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportClearingOrderCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportInventoryMovement::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportInventoryMovementEntry::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportInventoryMovementEntryReference::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportInventoryMovementEntryCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReservedFor::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShipmentLine::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Shop::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShopMeta::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShopCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Stock::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\StockCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Supplier::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\SupplierCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\UpdateDeliveryShipment::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\UpdateShop::class => false,
            \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\UpdateShopMeta::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}