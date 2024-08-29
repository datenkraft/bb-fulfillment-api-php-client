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
    protected $normalizers = array('Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\AuditLog' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\AuditLogNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\AuditLogCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\AuditLogCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\AuthPermissionResource' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\AuthPermissionResourceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\AuthPermissionRolePaginatedCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\AuthPermissionRolePaginatedCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\AuthPermissionRoleResource' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\AuthPermissionRoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\AuthRoleCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\AuthRoleCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\AuthRoleIdentityPaginatedCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\AuthRoleIdentityPaginatedCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\AuthRoleIdentityResource' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\AuthRoleIdentityResourceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\AuthRoleResource' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\AuthRoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BaseOrder' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\BaseOrderNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BaseOrderCustomer' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\BaseOrderCustomerNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BaseOrderCustomerInvoiceAddress' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\BaseOrderCustomerInvoiceAddressNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BaseOrderItem' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\BaseOrderItemNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BaseProduct' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\BaseProductNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BaseProductDraft' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\BaseProductDraftNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BaseReconsignmentAnnouncement' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\BaseReconsignmentAnnouncementNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Batch' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\BatchNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Brand' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\BrandNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BrandCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\BrandCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BundledOrderItem' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\BundledOrderItemNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BundledOrderItemPrice' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\BundledOrderItemPriceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Collection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\CollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\CollectionPagination' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\CollectionPaginationNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Country' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\CountryNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\CountryCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\CountryCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\CountryProvinces' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\CountryProvincesNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Delivery' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\DeliveryNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\DeliveryCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\DeliveryCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\DeliveryService' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\DeliveryServiceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\DeliveryServiceCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\DeliveryServiceCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\DeliveryShipment' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\DeliveryShipmentNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\DeliveryShipmentPackaging' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\DeliveryShipmentPackagingNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\DeliveryShipmentJournal' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\DeliveryShipmentJournalNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Error' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ErrorNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorReferencesItem' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ErrorReferencesItemNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ErrorResponseNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\GetAuthPermissionCollectionResponse' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\GetAuthPermissionCollectionResponseNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\InboundDelivery' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\InboundDeliveryNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\InboundDeliveryCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\InboundDeliveryCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\InboundDeliveryProduct' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\InboundDeliveryProductNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Information' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\InformationNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\InformationResponse' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\InformationResponseNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Manufacturer' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ManufacturerNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ManufacturerCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ManufacturerCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewAuthRoleResource' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\NewAuthRoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewInboundDelivery' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\NewInboundDeliveryNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewInboundDeliveryProduct' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\NewInboundDeliveryProductNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewOrder' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\NewOrderNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewOrderCustomer' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\NewOrderCustomerNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewOrderCustomerinvoiceAddress' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\NewOrderCustomerinvoiceAddressNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewOrderItem' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\NewOrderItemNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewOrderItemPrice' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\NewOrderItemPriceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewOrderOptions' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\NewOrderOptionsNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewOrderPrice' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\NewOrderPriceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewProductDraft' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\NewProductDraftNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewProductStockAdd' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\NewProductStockAddNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewReconsignmentAnnouncement' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\NewReconsignmentAnnouncementNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewReconsignmentAnnouncementLine' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\NewReconsignmentAnnouncementLineNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Order' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\OrderNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\OrderCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderCustomer' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\OrderCustomerNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderCustomerAddress' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\OrderCustomerAddressNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderCustomerDeliveryAddress' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\OrderCustomerDeliveryAddressNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderDelivery' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\OrderDeliveryNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderDeliveryCosts' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\OrderDeliveryCostsNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderItem' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\OrderItemNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderItemPrice' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\OrderItemPriceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderPayment' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\OrderPaymentNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderPrice' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\OrderPriceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderShipping' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\OrderShippingNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Product' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ProductNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ProductBundledProduct' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ProductBundledProductNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ProductCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ProductCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ProductDraft' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ProductDraftNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ProductDraftCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ProductDraftCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ProductJournal' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ProductJournalNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ProductJournalCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ProductJournalCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ProductJournalReference' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ProductJournalReferenceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ProductPurchasePrice' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ProductPurchasePriceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ProductStockReference' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ProductStockReferenceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ProductStockReferenceCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ProductStockReferenceCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ProductStockReferenceReference' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ProductStockReferenceReferenceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ProductUnit' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ProductUnitNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ProductUnitCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ProductUnitCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Reconsignment' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ReconsignmentNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReconsignmentAnnouncement' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ReconsignmentAnnouncementNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReconsignmentAnnouncementLine' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ReconsignmentAnnouncementLineNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReconsignmentAnnouncementLineBundledProduct' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ReconsignmentAnnouncementLineBundledProductNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReconsignmentAnnouncementPaginatedCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ReconsignmentAnnouncementPaginatedCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReconsignmentCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ReconsignmentCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReconsignmentLine' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ReconsignmentLineNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReconsignmentLineBundledProduct' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ReconsignmentLineBundledProductNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReportClearingOrder' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ReportClearingOrderNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReportClearingOrderCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ReportClearingOrderCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReportInventoryMovement' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ReportInventoryMovementNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReportInventoryMovementEntry' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ReportInventoryMovementEntryNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReportInventoryMovementEntryReference' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ReportInventoryMovementEntryReferenceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReportInventoryMovementEntryCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ReportInventoryMovementEntryCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReservedFor' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ReservedForNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ShipmentLine' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ShipmentLineNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Shop' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ShopNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ShopMeta' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ShopMetaNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ShopCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ShopCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Stock' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\StockNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\StockCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\StockCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Supplier' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\SupplierNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\SupplierCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\SupplierCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\UpdateDeliveryShipment' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\UpdateDeliveryShipmentNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\UpdateShop' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\UpdateShopNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\UpdateShopMeta' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\UpdateShopMetaNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BulkImportInboundDeliveryPostBody' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\BulkImportInboundDeliveryPostBodyNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BulkImportInboundDeliveryPostResponse207Item' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\BulkImportInboundDeliveryPostResponse207ItemNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BulkImportOrderPostBody' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\BulkImportOrderPostBodyNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BulkImportOrderPostResponse207Item' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\BulkImportOrderPostResponse207ItemNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BulkImportProductDraftPostBody' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\BulkImportProductDraftPostBodyNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BulkImportProductDraftPostResponse207Item' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\BulkImportProductDraftPostResponse207ItemNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
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
}