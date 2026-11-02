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
class StockNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Stock::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Stock::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Stock();
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
        if (\array_key_exists('stocked', $data)) {
            $object->stocked = $data['stocked'];
            unset($data['stocked']);
        }
        if (\array_key_exists('reserved', $data)) {
            $object->reserved = $data['reserved'];
            unset($data['reserved']);
        }
        if (\array_key_exists('available', $data)) {
            $object->available = $data['available'];
            unset($data['available']);
        }
        if (\array_key_exists('incoming', $data)) {
            $object->incoming = $data['incoming'];
            unset($data['incoming']);
        }
        if (\array_key_exists('locked', $data)) {
            $object->locked = $data['locked'];
            unset($data['locked']);
        }
        if (\array_key_exists('overbookingPossibilityStatus', $data)) {
            $object->overbookingPossibilityStatus = $data['overbookingPossibilityStatus'];
            unset($data['overbookingPossibilityStatus']);
        }
        if (\array_key_exists('reservedFor', $data)) {
            $object->reservedFor = $this->denormalizer->denormalize($data['reservedFor'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReservedFor::class, 'json', $context);
            unset($data['reservedFor']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        if (array_key_exists('stocked', get_object_vars($data)) && null !== ($data->stocked ?? null)) {
            $dataArray['stocked'] = $data->stocked;
        }
        if (array_key_exists('reserved', get_object_vars($data)) && null !== ($data->reserved ?? null)) {
            $dataArray['reserved'] = $data->reserved;
        }
        if (array_key_exists('available', get_object_vars($data)) && null !== ($data->available ?? null)) {
            $dataArray['available'] = $data->available;
        }
        if (array_key_exists('incoming', get_object_vars($data)) && null !== ($data->incoming ?? null)) {
            $dataArray['incoming'] = $data->incoming;
        }
        if (array_key_exists('locked', get_object_vars($data)) && null !== ($data->locked ?? null)) {
            $dataArray['locked'] = $data->locked;
        }
        if (array_key_exists('overbookingPossibilityStatus', get_object_vars($data)) && null !== ($data->overbookingPossibilityStatus ?? null)) {
            $dataArray['overbookingPossibilityStatus'] = $data->overbookingPossibilityStatus;
        }
        if (array_key_exists('reservedFor', get_object_vars($data)) && null !== ($data->reservedFor ?? null)) {
            $normalized = $this->normalizer->normalize($data->reservedFor, 'json', $context);
            $dataArray['reservedFor'] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Stock::class => false];
    }
}