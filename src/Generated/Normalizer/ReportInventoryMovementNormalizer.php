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
class ReportInventoryMovementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportInventoryMovement::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportInventoryMovement::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportInventoryMovement();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('productNumber', $data)) {
            $object->productNumber = $data['productNumber'];
            unset($data['productNumber']);
        }
        if (\array_key_exists('productTitle', $data) && $data['productTitle'] !== null) {
            $object->productTitle = $data['productTitle'];
            unset($data['productTitle']);
        }
        elseif (\array_key_exists('productTitle', $data)) {
            $object->productTitle = null;
            unset($data['productTitle']);
        }
        if (\array_key_exists('stockStart', $data)) {
            $object->stockStart = $data['stockStart'];
            unset($data['stockStart']);
        }
        if (\array_key_exists('stockEnd', $data)) {
            $object->stockEnd = $data['stockEnd'];
            unset($data['stockEnd']);
        }
        if (\array_key_exists('stockAdded', $data)) {
            $object->stockAdded = $data['stockAdded'];
            unset($data['stockAdded']);
        }
        if (\array_key_exists('stockSubtracted', $data)) {
            $object->stockSubtracted = $data['stockSubtracted'];
            unset($data['stockSubtracted']);
        }
        if (\array_key_exists('stockSubtractedExternal', $data)) {
            $object->stockSubtractedExternal = $data['stockSubtractedExternal'];
            unset($data['stockSubtractedExternal']);
        }
        if (\array_key_exists('stockCorrected', $data)) {
            $object->stockCorrected = $data['stockCorrected'];
            unset($data['stockCorrected']);
        }
        if (\array_key_exists('stockUsedForOwnPurposes', $data)) {
            $object->stockUsedForOwnPurposes = $data['stockUsedForOwnPurposes'];
            unset($data['stockUsedForOwnPurposes']);
        }
        if (\array_key_exists('stockReturned', $data)) {
            $object->stockReturned = $data['stockReturned'];
            unset($data['stockReturned']);
        }
        if (\array_key_exists('stockReturnedExternal', $data)) {
            $object->stockReturnedExternal = $data['stockReturnedExternal'];
            unset($data['stockReturnedExternal']);
        }
        if (\array_key_exists('movementEntries', $data)) {
            $values = [];
            foreach ($data['movementEntries'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportInventoryMovementEntry::class, 'json', $context);
            }
            $object->movementEntries = $values;
            unset($data['movementEntries']);
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
        if (array_key_exists('productTitle', get_object_vars($data)) && null !== ($data->productTitle ?? null)) {
            $dataArray['productTitle'] = $data->productTitle;
        }
        if (array_key_exists('stockStart', get_object_vars($data)) && null !== ($data->stockStart ?? null)) {
            $dataArray['stockStart'] = $data->stockStart;
        }
        if (array_key_exists('stockEnd', get_object_vars($data)) && null !== ($data->stockEnd ?? null)) {
            $dataArray['stockEnd'] = $data->stockEnd;
        }
        if (array_key_exists('stockAdded', get_object_vars($data)) && null !== ($data->stockAdded ?? null)) {
            $dataArray['stockAdded'] = $data->stockAdded;
        }
        if (array_key_exists('stockSubtracted', get_object_vars($data)) && null !== ($data->stockSubtracted ?? null)) {
            $dataArray['stockSubtracted'] = $data->stockSubtracted;
        }
        if (array_key_exists('stockSubtractedExternal', get_object_vars($data)) && null !== ($data->stockSubtractedExternal ?? null)) {
            $dataArray['stockSubtractedExternal'] = $data->stockSubtractedExternal;
        }
        if (array_key_exists('stockCorrected', get_object_vars($data)) && null !== ($data->stockCorrected ?? null)) {
            $dataArray['stockCorrected'] = $data->stockCorrected;
        }
        if (array_key_exists('stockUsedForOwnPurposes', get_object_vars($data)) && null !== ($data->stockUsedForOwnPurposes ?? null)) {
            $dataArray['stockUsedForOwnPurposes'] = $data->stockUsedForOwnPurposes;
        }
        if (array_key_exists('stockReturned', get_object_vars($data)) && null !== ($data->stockReturned ?? null)) {
            $dataArray['stockReturned'] = $data->stockReturned;
        }
        if (array_key_exists('stockReturnedExternal', get_object_vars($data)) && null !== ($data->stockReturnedExternal ?? null)) {
            $dataArray['stockReturnedExternal'] = $data->stockReturnedExternal;
        }
        if (array_key_exists('movementEntries', get_object_vars($data)) && null !== ($data->movementEntries ?? null)) {
            $values = [];
            foreach ($data->movementEntries as $value) {
                $normalized = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['movementEntries'] = $values;
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportInventoryMovement::class => false];
    }
}