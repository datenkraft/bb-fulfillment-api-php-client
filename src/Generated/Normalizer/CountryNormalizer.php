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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Country();
        if (\array_key_exists('phoneRequired', $data) && \is_int($data['phoneRequired'])) {
            $data['phoneRequired'] = (bool) $data['phoneRequired'];
        }
        if (\array_key_exists('customsClearanceRequired', $data) && \is_int($data['customsClearanceRequired'])) {
            $data['customsClearanceRequired'] = (bool) $data['customsClearanceRequired'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->setCountryCode($data['countryCode']);
            unset($data['countryCode']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('phoneRequired', $data)) {
            $object->setPhoneRequired($data['phoneRequired']);
            unset($data['phoneRequired']);
        }
        if (\array_key_exists('customsClearanceRequired', $data)) {
            $object->setCustomsClearanceRequired($data['customsClearanceRequired']);
            unset($data['customsClearanceRequired']);
        }
        if (\array_key_exists('provinces', $data) && $data['provinces'] !== null) {
            $values = [];
            foreach ($data['provinces'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\CountryProvinces::class, 'json', $context);
            }
            $object->setProvinces($values);
            unset($data['provinces']);
        }
        elseif (\array_key_exists('provinces', $data) && $data['provinces'] === null) {
            $object->setProvinces(null);
        }
        if (\array_key_exists('currencyCode', $data)) {
            $object->setCurrencyCode($data['currencyCode']);
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
        if ($data->isInitialized('countryCode') && null !== $data->getCountryCode()) {
            $dataArray['countryCode'] = $data->getCountryCode();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('phoneRequired') && null !== $data->getPhoneRequired()) {
            $dataArray['phoneRequired'] = $data->getPhoneRequired();
        }
        if ($data->isInitialized('customsClearanceRequired') && null !== $data->getCustomsClearanceRequired()) {
            $dataArray['customsClearanceRequired'] = $data->getCustomsClearanceRequired();
        }
        if ($data->isInitialized('provinces') && null !== $data->getProvinces()) {
            $values = [];
            foreach ($data->getProvinces() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['provinces'] = $values;
        }
        if ($data->isInitialized('currencyCode') && null !== $data->getCurrencyCode()) {
            $dataArray['currencyCode'] = $data->getCurrencyCode();
        }
        foreach ($data as $key => $value_1) {
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