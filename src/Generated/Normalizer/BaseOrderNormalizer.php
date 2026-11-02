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
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrder();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('shopCode', $data) && $data['shopCode'] !== null) {
            $object->shopCode = $data['shopCode'];
            unset($data['shopCode']);
        }
        elseif (\array_key_exists('shopCode', $data)) {
            $object->shopCode = null;
            unset($data['shopCode']);
        }
        if (\array_key_exists('customer', $data)) {
            $object->customer = $this->denormalizer->denormalize($data['customer'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrderCustomer::class, 'json', $context);
            unset($data['customer']);
        }
        if (\array_key_exists('orderItems', $data)) {
            $values = [];
            foreach ($data['orderItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrderItem::class, 'json', $context);
            }
            $object->orderItems = $values;
            unset($data['orderItems']);
        }
        if (\array_key_exists('externalOrderId', $data) && $data['externalOrderId'] !== null) {
            $object->externalOrderId = $data['externalOrderId'];
            unset($data['externalOrderId']);
        }
        elseif (\array_key_exists('externalOrderId', $data)) {
            $object->externalOrderId = null;
            unset($data['externalOrderId']);
        }
        if (\array_key_exists('deliverySlipNotes', $data) && $data['deliverySlipNotes'] !== null) {
            $object->deliverySlipNotes = $data['deliverySlipNotes'];
            unset($data['deliverySlipNotes']);
        }
        elseif (\array_key_exists('deliverySlipNotes', $data)) {
            $object->deliverySlipNotes = null;
            unset($data['deliverySlipNotes']);
        }
        if (\array_key_exists('externalOrderReference', $data) && $data['externalOrderReference'] !== null) {
            $object->externalOrderReference = $data['externalOrderReference'];
            unset($data['externalOrderReference']);
        }
        elseif (\array_key_exists('externalOrderReference', $data)) {
            $object->externalOrderReference = null;
            unset($data['externalOrderReference']);
        }
        if (\array_key_exists('orderNotes', $data) && $data['orderNotes'] !== null) {
            $object->orderNotes = $data['orderNotes'];
            unset($data['orderNotes']);
        }
        elseif (\array_key_exists('orderNotes', $data)) {
            $object->orderNotes = null;
            unset($data['orderNotes']);
        }
        if (\array_key_exists('desiredShippingDate', $data) && $data['desiredShippingDate'] !== null) {
            $date = \DateTime::createFromFormat('Y-m-d', $data['desiredShippingDate']);
            if (false === $date) {
                throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\InvalidDateException($data['desiredShippingDate'], 'Y-m-d');
            }
            $object->desiredShippingDate = $date->setTime(0, 0, 0);
            unset($data['desiredShippingDate']);
        }
        elseif (\array_key_exists('desiredShippingDate', $data)) {
            $object->desiredShippingDate = null;
            unset($data['desiredShippingDate']);
        }
        if (\array_key_exists('amazonSellerOrderId', $data) && $data['amazonSellerOrderId'] !== null) {
            $object->amazonSellerOrderId = $data['amazonSellerOrderId'];
            unset($data['amazonSellerOrderId']);
        }
        elseif (\array_key_exists('amazonSellerOrderId', $data)) {
            $object->amazonSellerOrderId = null;
            unset($data['amazonSellerOrderId']);
        }
        if (\array_key_exists('amazonVendorOrderId', $data) && $data['amazonVendorOrderId'] !== null) {
            $object->amazonVendorOrderId = $data['amazonVendorOrderId'];
            unset($data['amazonVendorOrderId']);
        }
        elseif (\array_key_exists('amazonVendorOrderId', $data)) {
            $object->amazonVendorOrderId = null;
            unset($data['amazonVendorOrderId']);
        }
        if (\array_key_exists('amazonFbaShipmentId', $data) && $data['amazonFbaShipmentId'] !== null) {
            $object->amazonFbaShipmentId = $data['amazonFbaShipmentId'];
            unset($data['amazonFbaShipmentId']);
        }
        elseif (\array_key_exists('amazonFbaShipmentId', $data)) {
            $object->amazonFbaShipmentId = null;
            unset($data['amazonFbaShipmentId']);
        }
        if (\array_key_exists('deliveryCosts', $data) && $data['deliveryCosts'] !== null) {
            $values_1 = [];
            foreach ($data['deliveryCosts'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderDeliveryCosts::class, 'json', $context);
            }
            $object->deliveryCosts = $values_1;
            unset($data['deliveryCosts']);
        }
        elseif (\array_key_exists('deliveryCosts', $data)) {
            $object->deliveryCosts = null;
            unset($data['deliveryCosts']);
        }
        if (\array_key_exists('options', $data) && $data['options'] !== null) {
            $object->options = $this->denormalizer->denormalize($data['options'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrderOptions::class, 'json', $context);
            unset($data['options']);
        }
        elseif (\array_key_exists('options', $data)) {
            $object->options = null;
            unset($data['options']);
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
        if (array_key_exists('shopCode', get_object_vars($data)) && null !== ($data->shopCode ?? null)) {
            $dataArray['shopCode'] = $data->shopCode;
        }
        $normalized = $data->customer === null ? null : $this->normalizer->normalize($data->customer, 'json', $context);
        $dataArray['customer'] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized) : $normalized;
        $values = [];
        foreach ($data->orderItems as $value) {
            $normalized_1 = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
            $values[] = \is_iterable($normalized_1) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        $dataArray['orderItems'] = $values;
        if (array_key_exists('externalOrderId', get_object_vars($data)) && null !== ($data->externalOrderId ?? null)) {
            $dataArray['externalOrderId'] = $data->externalOrderId;
        }
        if (array_key_exists('deliverySlipNotes', get_object_vars($data)) && null !== ($data->deliverySlipNotes ?? null)) {
            $dataArray['deliverySlipNotes'] = $data->deliverySlipNotes;
        }
        if (array_key_exists('externalOrderReference', get_object_vars($data)) && null !== ($data->externalOrderReference ?? null)) {
            $dataArray['externalOrderReference'] = $data->externalOrderReference;
        }
        if (array_key_exists('orderNotes', get_object_vars($data)) && null !== ($data->orderNotes ?? null)) {
            $dataArray['orderNotes'] = $data->orderNotes;
        }
        if (array_key_exists('desiredShippingDate', get_object_vars($data)) && null !== ($data->desiredShippingDate ?? null)) {
            $dataArray['desiredShippingDate'] = $data->desiredShippingDate?->format('Y-m-d');
        }
        if (array_key_exists('amazonSellerOrderId', get_object_vars($data)) && null !== ($data->amazonSellerOrderId ?? null)) {
            $dataArray['amazonSellerOrderId'] = $data->amazonSellerOrderId;
        }
        if (array_key_exists('amazonVendorOrderId', get_object_vars($data)) && null !== ($data->amazonVendorOrderId ?? null)) {
            $dataArray['amazonVendorOrderId'] = $data->amazonVendorOrderId;
        }
        if (array_key_exists('amazonFbaShipmentId', get_object_vars($data)) && null !== ($data->amazonFbaShipmentId ?? null)) {
            $dataArray['amazonFbaShipmentId'] = $data->amazonFbaShipmentId;
        }
        if (array_key_exists('deliveryCosts', get_object_vars($data)) && null !== ($data->deliveryCosts ?? null)) {
            $values_1 = [];
            foreach ($data->deliveryCosts as $value_1) {
                $normalized_2 = $value_1 === null ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = \is_iterable($normalized_2) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['deliveryCosts'] = $values_1;
        }
        if (array_key_exists('options', get_object_vars($data)) && null !== ($data->options ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->options, 'json', $context);
            $dataArray['options'] = \is_iterable($normalized_3) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
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