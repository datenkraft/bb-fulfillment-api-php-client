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
class DeliveryExpenseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryExpense::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryExpense::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryExpense();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('deliveryServiceCode', $data)) {
            $object->deliveryServiceCode = $data['deliveryServiceCode'];
            unset($data['deliveryServiceCode']);
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->countryCode = $data['countryCode'];
            unset($data['countryCode']);
        }
        if (\array_key_exists('price', $data)) {
            $values = [];
            foreach ($data['price'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryExpensePrice::class, 'json', $context);
            }
            $object->price = $values;
            unset($data['price']);
        }
        if (\array_key_exists('weight', $data)) {
            $object->weight = $data['weight'];
            unset($data['weight']);
        }
        if (\array_key_exists('height', $data)) {
            $object->height = $data['height'];
            unset($data['height']);
        }
        if (\array_key_exists('length', $data)) {
            $object->length = $data['length'];
            unset($data['length']);
        }
        if (\array_key_exists('width', $data)) {
            $object->width = $data['width'];
            unset($data['width']);
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
        if (array_key_exists('deliveryServiceCode', get_object_vars($data)) && null !== ($data->deliveryServiceCode ?? null)) {
            $dataArray['deliveryServiceCode'] = $data->deliveryServiceCode;
        }
        if (array_key_exists('countryCode', get_object_vars($data)) && null !== ($data->countryCode ?? null)) {
            $dataArray['countryCode'] = $data->countryCode;
        }
        if (array_key_exists('price', get_object_vars($data)) && null !== ($data->price ?? null)) {
            $values = [];
            foreach ($data->price as $value) {
                $normalized = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['price'] = $values;
        }
        if (array_key_exists('weight', get_object_vars($data)) && null !== ($data->weight ?? null)) {
            $dataArray['weight'] = $data->weight;
        }
        if (array_key_exists('height', get_object_vars($data)) && null !== ($data->height ?? null)) {
            $dataArray['height'] = $data->height;
        }
        if (array_key_exists('length', get_object_vars($data)) && null !== ($data->length ?? null)) {
            $dataArray['length'] = $data->length;
        }
        if (array_key_exists('width', get_object_vars($data)) && null !== ($data->width ?? null)) {
            $dataArray['width'] = $data->width;
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryExpense::class => false];
    }
}