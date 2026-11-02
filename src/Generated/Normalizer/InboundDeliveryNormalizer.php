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
class InboundDeliveryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDelivery::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDelivery::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDelivery();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('inboundDeliveryName', $data) && $data['inboundDeliveryName'] !== null) {
            $object->inboundDeliveryName = $data['inboundDeliveryName'];
            unset($data['inboundDeliveryName']);
        }
        elseif (\array_key_exists('inboundDeliveryName', $data)) {
            $object->inboundDeliveryName = null;
            unset($data['inboundDeliveryName']);
        }
        if (\array_key_exists('supplierNumber', $data)) {
            $object->supplierNumber = $data['supplierNumber'];
            unset($data['supplierNumber']);
        }
        if (\array_key_exists('expectedDeliveryDate', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d', $data['expectedDeliveryDate']);
            if (false === $date) {
                throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\InvalidDateException($data['expectedDeliveryDate'], 'Y-m-d');
            }
            $object->expectedDeliveryDate = $date->setTime(0, 0, 0);
            unset($data['expectedDeliveryDate']);
        }
        if (\array_key_exists('products', $data)) {
            $values = [];
            foreach ($data['products'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDeliveryProduct::class, 'json', $context);
            }
            $object->products = $values;
            unset($data['products']);
        }
        if (\array_key_exists('inboundDeliveryNumber', $data)) {
            $object->inboundDeliveryNumber = $data['inboundDeliveryNumber'];
            unset($data['inboundDeliveryNumber']);
        }
        if (\array_key_exists('inboundDeliveryNote', $data) && $data['inboundDeliveryNote'] !== null) {
            $object->inboundDeliveryNote = $data['inboundDeliveryNote'];
            unset($data['inboundDeliveryNote']);
        }
        elseif (\array_key_exists('inboundDeliveryNote', $data)) {
            $object->inboundDeliveryNote = null;
            unset($data['inboundDeliveryNote']);
        }
        if (\array_key_exists('shopWAWIDeliveryId', $data)) {
            $object->shopWAWIDeliveryId = $data['shopWAWIDeliveryId'];
            unset($data['shopWAWIDeliveryId']);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
            unset($data['status']);
        }
        if (\array_key_exists('shopCode', $data)) {
            $object->shopCode = $data['shopCode'];
            unset($data['shopCode']);
        }
        if (\array_key_exists('startDate', $data) && $data['startDate'] !== null) {
            $date_1 = \DateTime::createFromFormat('Y-m-d', $data['startDate']);
            if (false === $date_1) {
                throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\InvalidDateException($data['startDate'], 'Y-m-d');
            }
            $object->startDate = $date_1->setTime(0, 0, 0);
            unset($data['startDate']);
        }
        elseif (\array_key_exists('startDate', $data)) {
            $object->startDate = null;
            unset($data['startDate']);
        }
        if (\array_key_exists('endDate', $data) && $data['endDate'] !== null) {
            $date_2 = \DateTime::createFromFormat('Y-m-d', $data['endDate']);
            if (false === $date_2) {
                throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\InvalidDateException($data['endDate'], 'Y-m-d');
            }
            $object->endDate = $date_2->setTime(0, 0, 0);
            unset($data['endDate']);
        }
        elseif (\array_key_exists('endDate', $data)) {
            $object->endDate = null;
            unset($data['endDate']);
        }
        if (\array_key_exists('deliverySlipNumber', $data) && $data['deliverySlipNumber'] !== null) {
            $object->deliverySlipNumber = $data['deliverySlipNumber'];
            unset($data['deliverySlipNumber']);
        }
        elseif (\array_key_exists('deliverySlipNumber', $data)) {
            $object->deliverySlipNumber = null;
            unset($data['deliverySlipNumber']);
        }
        if (\array_key_exists('createDate', $data)) {
            $date_3 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createDate']);
            if (false === $date_3) {
                if (is_string($data['createDate']) and 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['createDate'])) {
                    try {
                        $date_3 = new \DateTime($data['createDate']);
                    } catch (\Exception) {
                        throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\InvalidDateException($data['createDate'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\InvalidDateException($data['createDate'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->createDate = $date_3;
            unset($data['createDate']);
        }
        if (\array_key_exists('trackingUrls', $data) && $data['trackingUrls'] !== null) {
            $values_1 = [];
            foreach ($data['trackingUrls'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDeliveryTrackingUrl::class, 'json', $context);
            }
            $object->trackingUrls = $values_1;
            unset($data['trackingUrls']);
        }
        elseif (\array_key_exists('trackingUrls', $data)) {
            $object->trackingUrls = null;
            unset($data['trackingUrls']);
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
        if (array_key_exists('inboundDeliveryName', get_object_vars($data)) && null !== ($data->inboundDeliveryName ?? null)) {
            $dataArray['inboundDeliveryName'] = $data->inboundDeliveryName;
        }
        $dataArray['supplierNumber'] = $data->supplierNumber;
        $dataArray['expectedDeliveryDate'] = $data->expectedDeliveryDate->format('Y-m-d');
        if (array_key_exists('products', get_object_vars($data)) && null !== ($data->products ?? null)) {
            $values = [];
            foreach ($data->products as $value) {
                $normalized = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['products'] = $values;
        }
        if (array_key_exists('inboundDeliveryNumber', get_object_vars($data)) && null !== ($data->inboundDeliveryNumber ?? null)) {
            $dataArray['inboundDeliveryNumber'] = $data->inboundDeliveryNumber;
        }
        if (array_key_exists('inboundDeliveryNote', get_object_vars($data)) && null !== ($data->inboundDeliveryNote ?? null)) {
            $dataArray['inboundDeliveryNote'] = $data->inboundDeliveryNote;
        }
        if (array_key_exists('shopWAWIDeliveryId', get_object_vars($data)) && null !== ($data->shopWAWIDeliveryId ?? null)) {
            $dataArray['shopWAWIDeliveryId'] = $data->shopWAWIDeliveryId;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status;
        }
        if (array_key_exists('shopCode', get_object_vars($data)) && null !== ($data->shopCode ?? null)) {
            $dataArray['shopCode'] = $data->shopCode;
        }
        if (array_key_exists('startDate', get_object_vars($data)) && null !== ($data->startDate ?? null)) {
            $dataArray['startDate'] = $data->startDate?->format('Y-m-d');
        }
        if (array_key_exists('endDate', get_object_vars($data)) && null !== ($data->endDate ?? null)) {
            $dataArray['endDate'] = $data->endDate?->format('Y-m-d');
        }
        if (array_key_exists('deliverySlipNumber', get_object_vars($data)) && null !== ($data->deliverySlipNumber ?? null)) {
            $dataArray['deliverySlipNumber'] = $data->deliverySlipNumber;
        }
        if (array_key_exists('createDate', get_object_vars($data)) && null !== ($data->createDate ?? null)) {
            $dataArray['createDate'] = $data->createDate->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('trackingUrls', get_object_vars($data)) && null !== ($data->trackingUrls ?? null)) {
            $values_1 = [];
            foreach ($data->trackingUrls as $value_1) {
                $normalized_1 = $value_1 === null ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = \is_iterable($normalized_1) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['trackingUrls'] = $values_1;
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDelivery::class => false];
    }
}