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
class CountryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Country::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Country::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Country();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('phoneRequired', $data) && \is_int($data['phoneRequired'])) {
            $data['phoneRequired'] = (bool) $data['phoneRequired'];
        }
        if (\array_key_exists('customsClearanceRequired', $data) && \is_int($data['customsClearanceRequired'])) {
            $data['customsClearanceRequired'] = (bool) $data['customsClearanceRequired'];
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->countryCode = $data['countryCode'];
            unset($data['countryCode']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('phoneRequired', $data)) {
            $object->phoneRequired = $data['phoneRequired'];
            unset($data['phoneRequired']);
        }
        if (\array_key_exists('customsClearanceRequired', $data)) {
            $object->customsClearanceRequired = $data['customsClearanceRequired'];
            unset($data['customsClearanceRequired']);
        }
        if (\array_key_exists('provinces', $data) && $data['provinces'] !== null) {
            $values = [];
            foreach ($data['provinces'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\CountryProvinces::class, 'json', $context);
            }
            $object->provinces = $values;
            unset($data['provinces']);
        }
        elseif (\array_key_exists('provinces', $data)) {
            $object->provinces = null;
            unset($data['provinces']);
        }
        if (\array_key_exists('currencyCode', $data)) {
            $object->currencyCode = $data['currencyCode'];
            unset($data['currencyCode']);
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
        if (array_key_exists('countryCode', get_object_vars($data)) && null !== ($data->countryCode ?? null)) {
            $dataArray['countryCode'] = $data->countryCode;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name;
        }
        if (array_key_exists('phoneRequired', get_object_vars($data)) && null !== ($data->phoneRequired ?? null)) {
            $dataArray['phoneRequired'] = $data->phoneRequired;
        }
        if (array_key_exists('customsClearanceRequired', get_object_vars($data)) && null !== ($data->customsClearanceRequired ?? null)) {
            $dataArray['customsClearanceRequired'] = $data->customsClearanceRequired;
        }
        if (array_key_exists('provinces', get_object_vars($data)) && null !== ($data->provinces ?? null)) {
            $values = [];
            foreach ($data->provinces as $value) {
                $normalized = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['provinces'] = $values;
        }
        if (array_key_exists('currencyCode', get_object_vars($data)) && null !== ($data->currencyCode ?? null)) {
            $dataArray['currencyCode'] = $data->currencyCode;
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Country::class => false];
    }
}