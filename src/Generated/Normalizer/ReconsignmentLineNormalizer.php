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
class ReconsignmentLineNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentLine::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentLine::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentLine();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('productWeight', $data) && \is_int($data['productWeight'])) {
            $data['productWeight'] = (float) $data['productWeight'];
        }
        if (\array_key_exists('productNumber', $data)) {
            $object->productNumber = $data['productNumber'];
            unset($data['productNumber']);
        }
        if (\array_key_exists('putBackToStockCount', $data) && $data['putBackToStockCount'] !== null) {
            $object->putBackToStockCount = $data['putBackToStockCount'];
            unset($data['putBackToStockCount']);
        }
        elseif (\array_key_exists('putBackToStockCount', $data)) {
            $object->putBackToStockCount = null;
            unset($data['putBackToStockCount']);
        }
        if (\array_key_exists('count', $data) && $data['count'] !== null) {
            $object->count = $data['count'];
            unset($data['count']);
        }
        elseif (\array_key_exists('count', $data)) {
            $object->count = null;
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
        if (\array_key_exists('productWeight', $data) && $data['productWeight'] !== null) {
            $object->productWeight = $data['productWeight'];
            unset($data['productWeight']);
        }
        elseif (\array_key_exists('productWeight', $data)) {
            $object->productWeight = null;
            unset($data['productWeight']);
        }
        if (\array_key_exists('productWeightUnit', $data) && $data['productWeightUnit'] !== null) {
            $object->productWeightUnit = $data['productWeightUnit'];
            unset($data['productWeightUnit']);
        }
        elseif (\array_key_exists('productWeightUnit', $data)) {
            $object->productWeightUnit = null;
            unset($data['productWeightUnit']);
        }
        if (\array_key_exists('bundledProducts', $data) && $data['bundledProducts'] !== null) {
            $values = [];
            foreach ($data['bundledProducts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentLineBundledProduct::class, 'json', $context);
            }
            $object->bundledProducts = $values;
            unset($data['bundledProducts']);
        }
        elseif (\array_key_exists('bundledProducts', $data)) {
            $object->bundledProducts = null;
            unset($data['bundledProducts']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if (array_key_exists('putBackToStockCount', get_object_vars($data)) && null !== ($data->putBackToStockCount ?? null)) {
            $dataArray['putBackToStockCount'] = $data->putBackToStockCount;
        }
        if (array_key_exists('count', get_object_vars($data)) && null !== ($data->count ?? null)) {
            $dataArray['count'] = $data->count;
        }
        if (array_key_exists('unit', get_object_vars($data)) && null !== ($data->unit ?? null)) {
            $dataArray['unit'] = $data->unit;
        }
        if (array_key_exists('productWeight', get_object_vars($data)) && null !== ($data->productWeight ?? null)) {
            $dataArray['productWeight'] = $data->productWeight;
        }
        if (array_key_exists('productWeightUnit', get_object_vars($data)) && null !== ($data->productWeightUnit ?? null)) {
            $dataArray['productWeightUnit'] = $data->productWeightUnit;
        }
        if (array_key_exists('bundledProducts', get_object_vars($data)) && null !== ($data->bundledProducts ?? null)) {
            $values = [];
            foreach ($data->bundledProducts as $value) {
                $normalized = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['bundledProducts'] = $values;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentLine::class => false];
    }
}