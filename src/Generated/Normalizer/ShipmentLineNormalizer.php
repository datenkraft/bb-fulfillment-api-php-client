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
class ShipmentLineNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShipmentLine::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShipmentLine::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShipmentLine();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('count', $data) && \is_int($data['count'])) {
            $data['count'] = (float) $data['count'];
        }
        if (\array_key_exists('productNumber', $data)) {
            $object->productNumber = $data['productNumber'];
            unset($data['productNumber']);
        }
        if (\array_key_exists('productNumberBundle', $data) && $data['productNumberBundle'] !== null) {
            $object->productNumberBundle = $data['productNumberBundle'];
            unset($data['productNumberBundle']);
        }
        elseif (\array_key_exists('productNumberBundle', $data)) {
            $object->productNumberBundle = null;
            unset($data['productNumberBundle']);
        }
        if (\array_key_exists('count', $data)) {
            $object->count = $data['count'];
            unset($data['count']);
        }
        if (\array_key_exists('unit', $data) && $data['unit'] !== null) {
            $object->unit = $data['unit'];
            unset($data['unit']);
        }
        elseif (\array_key_exists('unit', $data)) {
            $object->unit = null;
            unset($data['unit']);
        }
        if (\array_key_exists('serialNumbers', $data)) {
            $values = [];
            foreach ($data['serialNumbers'] as $value) {
                $values[] = $value;
            }
            $object->serialNumbers = $values;
            unset($data['serialNumbers']);
        }
        if (\array_key_exists('traceCodes', $data)) {
            $values_1 = [];
            foreach ($data['traceCodes'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->traceCodes = $values_1;
            unset($data['traceCodes']);
        }
        if (\array_key_exists('batches', $data)) {
            $values_2 = [];
            foreach ($data['batches'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Batch::class, 'json', $context);
            }
            $object->batches = $values_2;
            unset($data['batches']);
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
        if (array_key_exists('productNumber', get_object_vars($data)) && null !== ($data->productNumber ?? null)) {
            $dataArray['productNumber'] = $data->productNumber;
        }
        if (array_key_exists('productNumberBundle', get_object_vars($data)) && null !== ($data->productNumberBundle ?? null)) {
            $dataArray['productNumberBundle'] = $data->productNumberBundle;
        }
        if (array_key_exists('count', get_object_vars($data)) && null !== ($data->count ?? null)) {
            $dataArray['count'] = $data->count;
        }
        if (array_key_exists('unit', get_object_vars($data)) && null !== ($data->unit ?? null)) {
            $dataArray['unit'] = $data->unit;
        }
        if (array_key_exists('serialNumbers', get_object_vars($data)) && null !== ($data->serialNumbers ?? null)) {
            $values = [];
            foreach ($data->serialNumbers as $value) {
                $values[] = $value;
            }
            $dataArray['serialNumbers'] = $values;
        }
        if (array_key_exists('traceCodes', get_object_vars($data)) && null !== ($data->traceCodes ?? null)) {
            $values_1 = [];
            foreach ($data->traceCodes as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['traceCodes'] = $values_1;
        }
        if (array_key_exists('batches', get_object_vars($data)) && null !== ($data->batches ?? null)) {
            $values_2 = [];
            foreach ($data->batches as $value_2) {
                $normalized = $value_2 === null ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['batches'] = $values_2;
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShipmentLine::class => false];
    }
}