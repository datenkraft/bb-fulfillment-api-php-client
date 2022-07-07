<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\CheckArray;
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
    protected $normalizers = array('Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ErrorResponse' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ErrorResponseNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Error' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ErrorNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Collection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\CollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\CollectionPagination' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\CollectionPaginationNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\AuthRoleIdentityResource' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\AuthRoleIdentityResourceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\AuthPermissionResource' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\AuthPermissionResourceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\AuthRoleResource' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\AuthRoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\DeliveryService' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\DeliveryServiceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\DeliveryServiceCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\DeliveryServiceCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\StockCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\StockCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Stock' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\StockNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ShopCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ShopCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Shop' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ShopNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ShopMeta' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ShopMetaNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\UpdateShop' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\UpdateShopNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\UpdateShopMeta' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\UpdateShopMetaNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BaseOrder' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\BaseOrderNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewOrder' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\NewOrderNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewOrderOptions' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\NewOrderOptionsNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Order' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\OrderNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderItem' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\OrderItemNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderItemPrice' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\OrderItemPriceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewOrderItem' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\NewOrderItemNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BaseOrderCustomer' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\BaseOrderCustomerNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewOrderCustomer' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\NewOrderCustomerNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderCustomer' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\OrderCustomerNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderCustomerAddress' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\OrderCustomerAddressNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderCustomerDeliveryAddress' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\OrderCustomerDeliveryAddressNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderCustomerInvoiceAddress' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\OrderCustomerInvoiceAddressNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderPayment' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\OrderPaymentNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderShipping' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\OrderShippingNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderDelivery' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\OrderDeliveryNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\OrderCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Supplier' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\SupplierNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\SupplierCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\SupplierCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReportClearingOrder' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ReportClearingOrderNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReportClearingOrderCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ReportClearingOrderCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Delivery' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\DeliveryNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Shipment' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ShipmentNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ShipmentLine' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\ShipmentLineNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\DeliveryCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\DeliveryCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewInboundDelivery' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\NewInboundDeliveryNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\InboundDelivery' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\InboundDeliveryNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\InboundDeliveryProduct' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\InboundDeliveryProductNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewInboundDeliveryProduct' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\NewInboundDeliveryProductNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\InboundDeliveryCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Normalizer\\InboundDeliveryCollectionNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null) : bool
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