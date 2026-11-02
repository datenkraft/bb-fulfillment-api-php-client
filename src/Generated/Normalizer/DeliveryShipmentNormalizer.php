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
class DeliveryShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipment::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipment::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('weight', $data) && \is_int($data['weight'])) {
            $data['weight'] = (float) $data['weight'];
        }
        if (\array_key_exists('number', $data)) {
            $object->number = $data['number'];
            unset($data['number']);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
            unset($data['status']);
        }
        if (\array_key_exists('deliveryService', $data) && $data['deliveryService'] !== null) {
            $object->deliveryService = $data['deliveryService'];
            unset($data['deliveryService']);
        }
        elseif (\array_key_exists('deliveryService', $data)) {
            $object->deliveryService = null;
            unset($data['deliveryService']);
        }
        if (\array_key_exists('code', $data)) {
            $object->code = $data['code'];
            unset($data['code']);
        }
        if (\array_key_exists('link', $data)) {
            $object->link = $data['link'];
            unset($data['link']);
        }
        if (\array_key_exists('weight', $data)) {
            $object->weight = $data['weight'];
            unset($data['weight']);
        }
        if (\array_key_exists('weightUnit', $data)) {
            $object->weightUnit = $data['weightUnit'];
            unset($data['weightUnit']);
        }
        if (\array_key_exists('shipmentLines', $data)) {
            $values = [];
            foreach ($data['shipmentLines'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShipmentLine::class, 'json', $context);
            }
            $object->shipmentLines = $values;
            unset($data['shipmentLines']);
        }
        if (\array_key_exists('externalShipmentId', $data) && $data['externalShipmentId'] !== null) {
            $object->externalShipmentId = $data['externalShipmentId'];
            unset($data['externalShipmentId']);
        }
        elseif (\array_key_exists('externalShipmentId', $data)) {
            $object->externalShipmentId = null;
            unset($data['externalShipmentId']);
        }
        if (\array_key_exists('journal', $data)) {
            $values_1 = [];
            foreach ($data['journal'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipmentJournal::class, 'json', $context);
            }
            $object->journal = $values_1;
            unset($data['journal']);
        }
        if (\array_key_exists('packaging', $data)) {
            $object->packaging = $this->denormalizer->denormalize($data['packaging'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipmentPackaging::class, 'json', $context);
            unset($data['packaging']);
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
        if (array_key_exists('number', get_object_vars($data)) && null !== ($data->number ?? null)) {
            $dataArray['number'] = $data->number;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status;
        }
        if (array_key_exists('deliveryService', get_object_vars($data)) && null !== ($data->deliveryService ?? null)) {
            $dataArray['deliveryService'] = $data->deliveryService;
        }
        if (array_key_exists('code', get_object_vars($data)) && null !== ($data->code ?? null)) {
            $dataArray['code'] = $data->code;
        }
        if (array_key_exists('link', get_object_vars($data)) && null !== ($data->link ?? null)) {
            $dataArray['link'] = $data->link;
        }
        if (array_key_exists('weight', get_object_vars($data)) && null !== ($data->weight ?? null)) {
            $dataArray['weight'] = $data->weight;
        }
        if (array_key_exists('weightUnit', get_object_vars($data)) && null !== ($data->weightUnit ?? null)) {
            $dataArray['weightUnit'] = $data->weightUnit;
        }
        if (array_key_exists('shipmentLines', get_object_vars($data)) && null !== ($data->shipmentLines ?? null)) {
            $values = [];
            foreach ($data->shipmentLines as $value) {
                $normalized = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['shipmentLines'] = $values;
        }
        if (array_key_exists('externalShipmentId', get_object_vars($data)) && null !== ($data->externalShipmentId ?? null)) {
            $dataArray['externalShipmentId'] = $data->externalShipmentId;
        }
        if (array_key_exists('journal', get_object_vars($data)) && null !== ($data->journal ?? null)) {
            $values_1 = [];
            foreach ($data->journal as $value_1) {
                $normalized_1 = $value_1 === null ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = \is_iterable($normalized_1) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['journal'] = $values_1;
        }
        if (array_key_exists('packaging', get_object_vars($data)) && null !== ($data->packaging ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->packaging, 'json', $context);
            $dataArray['packaging'] = \is_iterable($normalized_2) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipment::class => false];
    }
}