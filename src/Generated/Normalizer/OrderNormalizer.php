<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\CheckArray;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class OrderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('cancelable', $data) && \is_int($data['cancelable'])) {
            $data['cancelable'] = (bool) $data['cancelable'];
        }
        if (\array_key_exists('orderItemsCancelable', $data) && \is_int($data['orderItemsCancelable'])) {
            $data['orderItemsCancelable'] = (bool) $data['orderItemsCancelable'];
        }
        if (\array_key_exists('partialDeliveryPending', $data) && \is_int($data['partialDeliveryPending'])) {
            $data['partialDeliveryPending'] = (bool) $data['partialDeliveryPending'];
        }
        if (\array_key_exists('shopCode', $data) && $data['shopCode'] !== null) {
            $object->setShopCode($data['shopCode']);
            unset($data['shopCode']);
        }
        elseif (\array_key_exists('shopCode', $data) && $data['shopCode'] === null) {
            $object->setShopCode(null);
        }
        if (\array_key_exists('customer', $data)) {
            $object->setCustomer($this->denormalizer->denormalize($data['customer'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomer::class, 'json', $context));
            unset($data['customer']);
        }
        if (\array_key_exists('orderItems', $data)) {
            $values = [];
            foreach ($data['orderItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderItem::class, 'json', $context);
            }
            $object->setOrderItems($values);
            unset($data['orderItems']);
        }
        if (\array_key_exists('externalOrderId', $data) && $data['externalOrderId'] !== null) {
            $object->setExternalOrderId($data['externalOrderId']);
            unset($data['externalOrderId']);
        }
        elseif (\array_key_exists('externalOrderId', $data) && $data['externalOrderId'] === null) {
            $object->setExternalOrderId(null);
        }
        if (\array_key_exists('deliverySlipNotes', $data) && $data['deliverySlipNotes'] !== null) {
            $object->setDeliverySlipNotes($data['deliverySlipNotes']);
            unset($data['deliverySlipNotes']);
        }
        elseif (\array_key_exists('deliverySlipNotes', $data) && $data['deliverySlipNotes'] === null) {
            $object->setDeliverySlipNotes(null);
        }
        if (\array_key_exists('externalOrderReference', $data) && $data['externalOrderReference'] !== null) {
            $object->setExternalOrderReference($data['externalOrderReference']);
            unset($data['externalOrderReference']);
        }
        elseif (\array_key_exists('externalOrderReference', $data) && $data['externalOrderReference'] === null) {
            $object->setExternalOrderReference(null);
        }
        if (\array_key_exists('orderNotes', $data) && $data['orderNotes'] !== null) {
            $object->setOrderNotes($data['orderNotes']);
            unset($data['orderNotes']);
        }
        elseif (\array_key_exists('orderNotes', $data) && $data['orderNotes'] === null) {
            $object->setOrderNotes(null);
        }
        if (\array_key_exists('amazonSellerOrderId', $data) && $data['amazonSellerOrderId'] !== null) {
            $object->setAmazonSellerOrderId($data['amazonSellerOrderId']);
            unset($data['amazonSellerOrderId']);
        }
        elseif (\array_key_exists('amazonSellerOrderId', $data) && $data['amazonSellerOrderId'] === null) {
            $object->setAmazonSellerOrderId(null);
        }
        if (\array_key_exists('amazonVendorOrderId', $data) && $data['amazonVendorOrderId'] !== null) {
            $object->setAmazonVendorOrderId($data['amazonVendorOrderId']);
            unset($data['amazonVendorOrderId']);
        }
        elseif (\array_key_exists('amazonVendorOrderId', $data) && $data['amazonVendorOrderId'] === null) {
            $object->setAmazonVendorOrderId(null);
        }
        if (\array_key_exists('amazonFbaShipmentId', $data) && $data['amazonFbaShipmentId'] !== null) {
            $object->setAmazonFbaShipmentId($data['amazonFbaShipmentId']);
            unset($data['amazonFbaShipmentId']);
        }
        elseif (\array_key_exists('amazonFbaShipmentId', $data) && $data['amazonFbaShipmentId'] === null) {
            $object->setAmazonFbaShipmentId(null);
        }
        if (\array_key_exists('deliveryCosts', $data) && $data['deliveryCosts'] !== null) {
            $values_1 = [];
            foreach ($data['deliveryCosts'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderDeliveryCosts::class, 'json', $context);
            }
            $object->setDeliveryCosts($values_1);
            unset($data['deliveryCosts']);
        }
        elseif (\array_key_exists('deliveryCosts', $data) && $data['deliveryCosts'] === null) {
            $object->setDeliveryCosts(null);
        }
        if (\array_key_exists('options', $data) && $data['options'] !== null) {
            $object->setOptions($data['options']);
            unset($data['options']);
        }
        elseif (\array_key_exists('options', $data) && $data['options'] === null) {
            $object->setOptions(null);
        }
        if (\array_key_exists('orderNumber', $data)) {
            $object->setOrderNumber($data['orderNumber']);
            unset($data['orderNumber']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('lockReason', $data) && $data['lockReason'] !== null) {
            $object->setLockReason($data['lockReason']);
            unset($data['lockReason']);
        }
        elseif (\array_key_exists('lockReason', $data) && $data['lockReason'] === null) {
            $object->setLockReason(null);
        }
        if (\array_key_exists('orderDate', $data)) {
            $object->setOrderDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['orderDate']));
            unset($data['orderDate']);
        }
        if (\array_key_exists('delivery', $data) && $data['delivery'] !== null) {
            $values_2 = [];
            foreach ($data['delivery'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderDelivery::class, 'json', $context);
            }
            $object->setDelivery($values_2);
            unset($data['delivery']);
        }
        elseif (\array_key_exists('delivery', $data) && $data['delivery'] === null) {
            $object->setDelivery(null);
        }
        if (\array_key_exists('payment', $data)) {
            $object->setPayment($this->denormalizer->denormalize($data['payment'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderPayment::class, 'json', $context));
            unset($data['payment']);
        }
        if (\array_key_exists('shipping', $data)) {
            $object->setShipping($this->denormalizer->denormalize($data['shipping'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderShipping::class, 'json', $context));
            unset($data['shipping']);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
            unset($data['source']);
        }
        if (\array_key_exists('sourceLink', $data) && $data['sourceLink'] !== null) {
            $object->setSourceLink($data['sourceLink']);
            unset($data['sourceLink']);
        }
        elseif (\array_key_exists('sourceLink', $data) && $data['sourceLink'] === null) {
            $object->setSourceLink(null);
        }
        if (\array_key_exists('cancelable', $data)) {
            $object->setCancelable($data['cancelable']);
            unset($data['cancelable']);
        }
        if (\array_key_exists('orderItemsCancelable', $data)) {
            $object->setOrderItemsCancelable($data['orderItemsCancelable']);
            unset($data['orderItemsCancelable']);
        }
        if (\array_key_exists('partialDeliveryPending', $data)) {
            $object->setPartialDeliveryPending($data['partialDeliveryPending']);
            unset($data['partialDeliveryPending']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('shopCode')) {
            $dataArray['shopCode'] = $data->getShopCode();
        }
        if ($data->isInitialized('customer') && null !== $data->getCustomer()) {
            $dataArray['customer'] = $this->normalizer->normalize($data->getCustomer(), 'json', $context);
        }
        if ($data->isInitialized('orderItems') && null !== $data->getOrderItems()) {
            $values = [];
            foreach ($data->getOrderItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['orderItems'] = $values;
        }
        if ($data->isInitialized('externalOrderId')) {
            $dataArray['externalOrderId'] = $data->getExternalOrderId();
        }
        if ($data->isInitialized('deliverySlipNotes')) {
            $dataArray['deliverySlipNotes'] = $data->getDeliverySlipNotes();
        }
        if ($data->isInitialized('externalOrderReference')) {
            $dataArray['externalOrderReference'] = $data->getExternalOrderReference();
        }
        if ($data->isInitialized('orderNotes')) {
            $dataArray['orderNotes'] = $data->getOrderNotes();
        }
        if ($data->isInitialized('amazonSellerOrderId')) {
            $dataArray['amazonSellerOrderId'] = $data->getAmazonSellerOrderId();
        }
        if ($data->isInitialized('amazonVendorOrderId')) {
            $dataArray['amazonVendorOrderId'] = $data->getAmazonVendorOrderId();
        }
        if ($data->isInitialized('amazonFbaShipmentId')) {
            $dataArray['amazonFbaShipmentId'] = $data->getAmazonFbaShipmentId();
        }
        if ($data->isInitialized('deliveryCosts')) {
            $values_1 = [];
            foreach ($data->getDeliveryCosts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['deliveryCosts'] = $values_1;
        }
        if ($data->isInitialized('options')) {
            $dataArray['options'] = $data->getOptions();
        }
        if ($data->isInitialized('orderNumber') && null !== $data->getOrderNumber()) {
            $dataArray['orderNumber'] = $data->getOrderNumber();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('lockReason')) {
            $dataArray['lockReason'] = $data->getLockReason();
        }
        if ($data->isInitialized('orderDate') && null !== $data->getOrderDate()) {
            $dataArray['orderDate'] = $data->getOrderDate()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('delivery')) {
            $values_2 = [];
            foreach ($data->getDelivery() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['delivery'] = $values_2;
        }
        if ($data->isInitialized('payment') && null !== $data->getPayment()) {
            $dataArray['payment'] = $this->normalizer->normalize($data->getPayment(), 'json', $context);
        }
        if ($data->isInitialized('shipping') && null !== $data->getShipping()) {
            $dataArray['shipping'] = $this->normalizer->normalize($data->getShipping(), 'json', $context);
        }
        if ($data->isInitialized('source') && null !== $data->getSource()) {
            $dataArray['source'] = $data->getSource();
        }
        if ($data->isInitialized('sourceLink')) {
            $dataArray['sourceLink'] = $data->getSourceLink();
        }
        if ($data->isInitialized('cancelable') && null !== $data->getCancelable()) {
            $dataArray['cancelable'] = $data->getCancelable();
        }
        if ($data->isInitialized('orderItemsCancelable') && null !== $data->getOrderItemsCancelable()) {
            $dataArray['orderItemsCancelable'] = $data->getOrderItemsCancelable();
        }
        if ($data->isInitialized('partialDeliveryPending') && null !== $data->getPartialDeliveryPending()) {
            $dataArray['partialDeliveryPending'] = $data->getPartialDeliveryPending();
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order::class => false];
    }
}