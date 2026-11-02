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
class BundledOrderItemPriceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BundledOrderItemPrice::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BundledOrderItemPrice::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BundledOrderItemPrice();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('value', $data) && \is_int($data['value'])) {
            $data['value'] = (float) $data['value'];
        }
        if (\array_key_exists('vat', $data) && \is_int($data['vat'])) {
            $data['vat'] = (float) $data['vat'];
        }
        if (\array_key_exists('value', $data)) {
            $object->value = $data['value'];
            unset($data['value']);
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
            unset($data['type']);
        }
        if (\array_key_exists('vat', $data)) {
            $object->vat = $data['vat'];
            unset($data['vat']);
        }
        if (\array_key_exists('currencyCode', $data)) {
            $object->currencyCode = $data['currencyCode'];
            unset($data['currencyCode']);
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
        if (array_key_exists('value', get_object_vars($data)) && null !== ($data->value ?? null)) {
            $dataArray['value'] = $data->value;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type;
        }
        if (array_key_exists('vat', get_object_vars($data)) && null !== ($data->vat ?? null)) {
            $dataArray['vat'] = $data->vat;
        }
        if (array_key_exists('currencyCode', get_object_vars($data)) && null !== ($data->currencyCode ?? null)) {
            $dataArray['currencyCode'] = $data->currencyCode;
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BundledOrderItemPrice::class => false];
    }
}