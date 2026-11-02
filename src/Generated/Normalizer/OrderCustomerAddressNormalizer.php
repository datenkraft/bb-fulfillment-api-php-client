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
class OrderCustomerAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomerAddress::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomerAddress::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomerAddress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('street', $data)) {
            $object->street = $data['street'];
            unset($data['street']);
        }
        if (\array_key_exists('streetNumber', $data) && $data['streetNumber'] !== null) {
            $object->streetNumber = $data['streetNumber'];
            unset($data['streetNumber']);
        }
        elseif (\array_key_exists('streetNumber', $data)) {
            $object->streetNumber = null;
            unset($data['streetNumber']);
        }
        if (\array_key_exists('zipCode', $data)) {
            $object->zipCode = $data['zipCode'];
            unset($data['zipCode']);
        }
        if (\array_key_exists('district', $data) && $data['district'] !== null) {
            $object->district = $data['district'];
            unset($data['district']);
        }
        elseif (\array_key_exists('district', $data)) {
            $object->district = null;
            unset($data['district']);
        }
        if (\array_key_exists('city', $data)) {
            $object->city = $data['city'];
            unset($data['city']);
        }
        if (\array_key_exists('provinceCode', $data) && $data['provinceCode'] !== null) {
            $object->provinceCode = $data['provinceCode'];
            unset($data['provinceCode']);
        }
        elseif (\array_key_exists('provinceCode', $data)) {
            $object->provinceCode = null;
            unset($data['provinceCode']);
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->countryCode = $data['countryCode'];
            unset($data['countryCode']);
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
        $dataArray['street'] = $data->street;
        if (array_key_exists('streetNumber', get_object_vars($data)) && null !== ($data->streetNumber ?? null)) {
            $dataArray['streetNumber'] = $data->streetNumber;
        }
        $dataArray['zipCode'] = $data->zipCode;
        if (array_key_exists('district', get_object_vars($data)) && null !== ($data->district ?? null)) {
            $dataArray['district'] = $data->district;
        }
        $dataArray['city'] = $data->city;
        if (array_key_exists('provinceCode', get_object_vars($data)) && null !== ($data->provinceCode ?? null)) {
            $dataArray['provinceCode'] = $data->provinceCode;
        }
        $dataArray['countryCode'] = $data->countryCode;
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomerAddress::class => false];
    }
}