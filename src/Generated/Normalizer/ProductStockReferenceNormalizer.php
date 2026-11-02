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
class ProductStockReferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductStockReference::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductStockReference::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductStockReference();
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
        if (\array_key_exists('typeCode', $data)) {
            $object->typeCode = $data['typeCode'];
            unset($data['typeCode']);
        }
        if (\array_key_exists('count', $data)) {
            $object->count = $data['count'];
            unset($data['count']);
        }
        if (\array_key_exists('reference', $data)) {
            $object->reference = $this->denormalizer->denormalize($data['reference'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductStockReferenceReference::class, 'json', $context);
            unset($data['reference']);
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
        if (array_key_exists('typeCode', get_object_vars($data)) && null !== ($data->typeCode ?? null)) {
            $dataArray['typeCode'] = $data->typeCode;
        }
        if (array_key_exists('count', get_object_vars($data)) && null !== ($data->count ?? null)) {
            $dataArray['count'] = $data->count;
        }
        if (array_key_exists('reference', get_object_vars($data)) && null !== ($data->reference ?? null)) {
            $normalized = $this->normalizer->normalize($data->reference, 'json', $context);
            $dataArray['reference'] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized) : $normalized;
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductStockReference::class => false];
    }
}