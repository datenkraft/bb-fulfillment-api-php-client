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
class BaseOrderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrder::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrder::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrder();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('shopCode', $data) && $data['shopCode'] !== null) {
            $object->setShopCode($data['shopCode']);
            unset($data['shopCode']);
        }
        elseif (\array_key_exists('shopCode', $data) && $data['shopCode'] === null) {
            $object->setShopCode(null);
        }
        if (\array_key_exists('customer', $data)) {
            $object->setCustomer($this->denormalizer->denormalize($data['customer'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrderCustomer::class, 'json', $context));
            unset($data['customer']);
        }
        if (\array_key_exists('orderItems', $data)) {
            $values = [];
            foreach ($data['orderItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrderItem::class, 'json', $context);
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
        if (\array_key_exists('desiredShippingDate', $data) && $data['desiredShippingDate'] !== null) {
            $object->setDesiredShippingDate(\DateTime::createFromFormat('Y-m-d', $data['desiredShippingDate'])->setTime(0, 0, 0));
            unset($data['desiredShippingDate']);
        }
        elseif (\array_key_exists('desiredShippingDate', $data) && $data['desiredShippingDate'] === null) {
            $object->setDesiredShippingDate(null);
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
            $object->setOptions($this->denormalizer->denormalize($data['options'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrderOptions::class, 'json', $context));
            unset($data['options']);
        }
        elseif (\array_key_exists('options', $data) && $data['options'] === null) {
            $object->setOptions(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('shopCode') && null !== $data->getShopCode()) {
            $dataArray['shopCode'] = $data->getShopCode();
        }
        $dataArray['customer'] = $this->normalizer->normalize($data->getCustomer(), 'json', $context);
        $values = [];
        foreach ($data->getOrderItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['orderItems'] = $values;
        if ($data->isInitialized('externalOrderId') && null !== $data->getExternalOrderId()) {
            $dataArray['externalOrderId'] = $data->getExternalOrderId();
        }
        if ($data->isInitialized('deliverySlipNotes') && null !== $data->getDeliverySlipNotes()) {
            $dataArray['deliverySlipNotes'] = $data->getDeliverySlipNotes();
        }
        if ($data->isInitialized('externalOrderReference') && null !== $data->getExternalOrderReference()) {
            $dataArray['externalOrderReference'] = $data->getExternalOrderReference();
        }
        if ($data->isInitialized('orderNotes') && null !== $data->getOrderNotes()) {
            $dataArray['orderNotes'] = $data->getOrderNotes();
        }
        if ($data->isInitialized('desiredShippingDate') && null !== $data->getDesiredShippingDate()) {
            $dataArray['desiredShippingDate'] = $data->getDesiredShippingDate()->format('Y-m-d');
        }
        if ($data->isInitialized('amazonSellerOrderId') && null !== $data->getAmazonSellerOrderId()) {
            $dataArray['amazonSellerOrderId'] = $data->getAmazonSellerOrderId();
        }
        if ($data->isInitialized('amazonVendorOrderId') && null !== $data->getAmazonVendorOrderId()) {
            $dataArray['amazonVendorOrderId'] = $data->getAmazonVendorOrderId();
        }
        if ($data->isInitialized('amazonFbaShipmentId') && null !== $data->getAmazonFbaShipmentId()) {
            $dataArray['amazonFbaShipmentId'] = $data->getAmazonFbaShipmentId();
        }
        if ($data->isInitialized('deliveryCosts') && null !== $data->getDeliveryCosts()) {
            $values_1 = [];
            foreach ($data->getDeliveryCosts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['deliveryCosts'] = $values_1;
        }
        if ($data->isInitialized('options') && null !== $data->getOptions()) {
            $dataArray['options'] = $this->normalizer->normalize($data->getOptions(), 'json', $context);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrder::class => false];
    }
}