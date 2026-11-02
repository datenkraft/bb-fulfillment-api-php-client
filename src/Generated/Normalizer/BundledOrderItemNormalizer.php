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
class BundledOrderItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BundledOrderItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BundledOrderItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BundledOrderItem();
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
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->title = $data['title'];
            unset($data['title']);
        }
        elseif (\array_key_exists('title', $data)) {
            $object->title = null;
            unset($data['title']);
        }
        if (\array_key_exists('count', $data)) {
            $object->count = $data['count'];
            unset($data['count']);
        }
        if (\array_key_exists('externalProductNumber', $data) && $data['externalProductNumber'] !== null) {
            $object->externalProductNumber = $data['externalProductNumber'];
            unset($data['externalProductNumber']);
        }
        elseif (\array_key_exists('externalProductNumber', $data)) {
            $object->externalProductNumber = null;
            unset($data['externalProductNumber']);
        }
        if (\array_key_exists('price', $data)) {
            $object->price = $this->denormalizer->denormalize($data['price'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BundledOrderItemPrice::class, 'json', $context);
            unset($data['price']);
        }
        if (\array_key_exists('canceledCount', $data)) {
            $object->canceledCount = $data['canceledCount'];
            unset($data['canceledCount']);
        }
        if (\array_key_exists('availableCount', $data)) {
            $object->availableCount = $data['availableCount'];
            unset($data['availableCount']);
        }
        if (\array_key_exists('deliveredCount', $data)) {
            $object->deliveredCount = $data['deliveredCount'];
            unset($data['deliveredCount']);
        }
        if (\array_key_exists('returnedCount', $data)) {
            $object->returnedCount = $data['returnedCount'];
            unset($data['returnedCount']);
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
        if (array_key_exists('title', get_object_vars($data)) && null !== ($data->title ?? null)) {
            $dataArray['title'] = $data->title;
        }
        if (array_key_exists('count', get_object_vars($data)) && null !== ($data->count ?? null)) {
            $dataArray['count'] = $data->count;
        }
        if (array_key_exists('externalProductNumber', get_object_vars($data)) && null !== ($data->externalProductNumber ?? null)) {
            $dataArray['externalProductNumber'] = $data->externalProductNumber;
        }
        if (array_key_exists('price', get_object_vars($data)) && null !== ($data->price ?? null)) {
            $normalized = $this->normalizer->normalize($data->price, 'json', $context);
            $dataArray['price'] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('canceledCount', get_object_vars($data)) && null !== ($data->canceledCount ?? null)) {
            $dataArray['canceledCount'] = $data->canceledCount;
        }
        if (array_key_exists('availableCount', get_object_vars($data)) && null !== ($data->availableCount ?? null)) {
            $dataArray['availableCount'] = $data->availableCount;
        }
        if (array_key_exists('deliveredCount', get_object_vars($data)) && null !== ($data->deliveredCount ?? null)) {
            $dataArray['deliveredCount'] = $data->deliveredCount;
        }
        if (array_key_exists('returnedCount', get_object_vars($data)) && null !== ($data->returnedCount ?? null)) {
            $dataArray['returnedCount'] = $data->returnedCount;
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BundledOrderItem::class => false];
    }
}