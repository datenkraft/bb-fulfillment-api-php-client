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
        if (\array_key_exists('editable', $data) && \is_int($data['editable'])) {
            $data['editable'] = (bool) $data['editable'];
        }
        if (\array_key_exists('partialDeliveryPending', $data) && \is_int($data['partialDeliveryPending'])) {
            $data['partialDeliveryPending'] = (bool) $data['partialDeliveryPending'];
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
            $object->customer = $this->denormalizer->denormalize($data['customer'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomer::class, 'json', $context);
            unset($data['customer']);
        }
        if (\array_key_exists('orderItems', $data)) {
            $values = [];
            foreach ($data['orderItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderItem::class, 'json', $context);
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
        if (\array_key_exists('orderNumber', $data)) {
            $object->orderNumber = $data['orderNumber'];
            unset($data['orderNumber']);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
            unset($data['status']);
        }
        if (\array_key_exists('lockReason', $data) && $data['lockReason'] !== null) {
            $object->lockReason = $data['lockReason'];
            unset($data['lockReason']);
        }
        elseif (\array_key_exists('lockReason', $data)) {
            $object->lockReason = null;
            unset($data['lockReason']);
        }
        if (\array_key_exists('orderDate', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['orderDate']);
            if (false === $date_1) {
                if (is_string($data['orderDate']) and 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['orderDate'])) {
                    try {
                        $date_1 = new \DateTime($data['orderDate']);
                    } catch (\Exception) {
                        throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\InvalidDateException($data['orderDate'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\InvalidDateException($data['orderDate'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->orderDate = $date_1;
            unset($data['orderDate']);
        }
        if (\array_key_exists('delivery', $data) && $data['delivery'] !== null) {
            $values_2 = [];
            foreach ($data['delivery'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderDelivery::class, 'json', $context);
            }
            $object->delivery = $values_2;
            unset($data['delivery']);
        }
        elseif (\array_key_exists('delivery', $data)) {
            $object->delivery = null;
            unset($data['delivery']);
        }
        if (\array_key_exists('payment', $data)) {
            $object->payment = $this->denormalizer->denormalize($data['payment'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderPayment::class, 'json', $context);
            unset($data['payment']);
        }
        if (\array_key_exists('shipping', $data)) {
            $object->shipping = $this->denormalizer->denormalize($data['shipping'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderShipping::class, 'json', $context);
            unset($data['shipping']);
        }
        if (\array_key_exists('source', $data)) {
            $object->source = $data['source'];
            unset($data['source']);
        }
        if (\array_key_exists('sourceLink', $data) && $data['sourceLink'] !== null) {
            $object->sourceLink = $data['sourceLink'];
            unset($data['sourceLink']);
        }
        elseif (\array_key_exists('sourceLink', $data)) {
            $object->sourceLink = null;
            unset($data['sourceLink']);
        }
        if (\array_key_exists('cancelable', $data)) {
            $object->cancelable = $data['cancelable'];
            unset($data['cancelable']);
        }
        if (\array_key_exists('orderItemsCancelable', $data)) {
            $object->orderItemsCancelable = $data['orderItemsCancelable'];
            unset($data['orderItemsCancelable']);
        }
        if (\array_key_exists('editable', $data)) {
            $object->editable = $data['editable'];
            unset($data['editable']);
        }
        if (\array_key_exists('partialDeliveryPending', $data)) {
            $object->partialDeliveryPending = $data['partialDeliveryPending'];
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
        if (array_key_exists('shopCode', get_object_vars($data)) && null !== ($data->shopCode ?? null)) {
            $dataArray['shopCode'] = $data->shopCode;
        }
        if (array_key_exists('customer', get_object_vars($data)) && null !== ($data->customer ?? null)) {
            $normalized = $this->normalizer->normalize($data->customer, 'json', $context);
            $dataArray['customer'] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('orderItems', get_object_vars($data)) && null !== ($data->orderItems ?? null)) {
            $values = [];
            foreach ($data->orderItems as $value) {
                $normalized_1 = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized_1) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['orderItems'] = $values;
        }
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
        if (array_key_exists('orderNumber', get_object_vars($data)) && null !== ($data->orderNumber ?? null)) {
            $dataArray['orderNumber'] = $data->orderNumber;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status;
        }
        if (array_key_exists('lockReason', get_object_vars($data)) && null !== ($data->lockReason ?? null)) {
            $dataArray['lockReason'] = $data->lockReason;
        }
        if (array_key_exists('orderDate', get_object_vars($data)) && null !== ($data->orderDate ?? null)) {
            $dataArray['orderDate'] = $data->orderDate->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('delivery', get_object_vars($data)) && null !== ($data->delivery ?? null)) {
            $values_2 = [];
            foreach ($data->delivery as $value_2) {
                $normalized_4 = $value_2 === null ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = \is_iterable($normalized_4) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized_4) : $normalized_4;
            }
            $dataArray['delivery'] = $values_2;
        }
        if (array_key_exists('payment', get_object_vars($data)) && null !== ($data->payment ?? null)) {
            $normalized_5 = $this->normalizer->normalize($data->payment, 'json', $context);
            $dataArray['payment'] = \is_iterable($normalized_5) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized_5) : $normalized_5;
        }
        if (array_key_exists('shipping', get_object_vars($data)) && null !== ($data->shipping ?? null)) {
            $normalized_6 = $this->normalizer->normalize($data->shipping, 'json', $context);
            $dataArray['shipping'] = \is_iterable($normalized_6) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized_6) : $normalized_6;
        }
        if (array_key_exists('source', get_object_vars($data)) && null !== ($data->source ?? null)) {
            $dataArray['source'] = $data->source;
        }
        if (array_key_exists('sourceLink', get_object_vars($data)) && null !== ($data->sourceLink ?? null)) {
            $dataArray['sourceLink'] = $data->sourceLink;
        }
        if (array_key_exists('cancelable', get_object_vars($data)) && null !== ($data->cancelable ?? null)) {
            $dataArray['cancelable'] = $data->cancelable;
        }
        if (array_key_exists('orderItemsCancelable', get_object_vars($data)) && null !== ($data->orderItemsCancelable ?? null)) {
            $dataArray['orderItemsCancelable'] = $data->orderItemsCancelable;
        }
        if (array_key_exists('editable', get_object_vars($data)) && null !== ($data->editable ?? null)) {
            $dataArray['editable'] = $data->editable;
        }
        if (array_key_exists('partialDeliveryPending', get_object_vars($data)) && null !== ($data->partialDeliveryPending ?? null)) {
            $dataArray['partialDeliveryPending'] = $data->partialDeliveryPending;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
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