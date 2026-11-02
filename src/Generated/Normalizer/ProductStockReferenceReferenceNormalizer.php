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
class ProductStockReferenceReferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductStockReferenceReference::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductStockReferenceReference::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductStockReferenceReference();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('companyName', $data) && $data['companyName'] !== null) {
            $object->companyName = $data['companyName'];
            unset($data['companyName']);
        }
        elseif (\array_key_exists('companyName', $data)) {
            $object->companyName = null;
            unset($data['companyName']);
        }
        if (\array_key_exists('inboundDeliveryNumber', $data) && $data['inboundDeliveryNumber'] !== null) {
            $object->inboundDeliveryNumber = $data['inboundDeliveryNumber'];
            unset($data['inboundDeliveryNumber']);
        }
        elseif (\array_key_exists('inboundDeliveryNumber', $data)) {
            $object->inboundDeliveryNumber = null;
            unset($data['inboundDeliveryNumber']);
        }
        if (\array_key_exists('orderNumber', $data) && $data['orderNumber'] !== null) {
            $object->orderNumber = $data['orderNumber'];
            unset($data['orderNumber']);
        }
        elseif (\array_key_exists('orderNumber', $data)) {
            $object->orderNumber = null;
            unset($data['orderNumber']);
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
        if (array_key_exists('companyName', get_object_vars($data)) && null !== ($data->companyName ?? null)) {
            $dataArray['companyName'] = $data->companyName;
        }
        if (array_key_exists('inboundDeliveryNumber', get_object_vars($data)) && null !== ($data->inboundDeliveryNumber ?? null)) {
            $dataArray['inboundDeliveryNumber'] = $data->inboundDeliveryNumber;
        }
        if (array_key_exists('orderNumber', get_object_vars($data)) && null !== ($data->orderNumber ?? null)) {
            $dataArray['orderNumber'] = $data->orderNumber;
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductStockReferenceReference::class => false];
    }
}