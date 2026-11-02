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
class NewInboundDeliveryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewInboundDelivery::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewInboundDelivery::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewInboundDelivery();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('inboundDeliveryName', $data) && $data['inboundDeliveryName'] !== null) {
            $object->inboundDeliveryName = $data['inboundDeliveryName'];
            unset($data['inboundDeliveryName']);
        }
        elseif (\array_key_exists('inboundDeliveryName', $data)) {
            $object->inboundDeliveryName = null;
            unset($data['inboundDeliveryName']);
        }
        if (\array_key_exists('supplierNumber', $data)) {
            $object->supplierNumber = $data['supplierNumber'];
            unset($data['supplierNumber']);
        }
        if (\array_key_exists('expectedDeliveryDate', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d', $data['expectedDeliveryDate']);
            if (false === $date) {
                throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\InvalidDateException($data['expectedDeliveryDate'], 'Y-m-d');
            }
            $object->expectedDeliveryDate = $date->setTime(0, 0, 0);
            unset($data['expectedDeliveryDate']);
        }
        if (\array_key_exists('products', $data)) {
            $values = [];
            foreach ($data['products'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewInboundDeliveryProduct::class, 'json', $context);
            }
            $object->products = $values;
            unset($data['products']);
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
        if (array_key_exists('inboundDeliveryName', get_object_vars($data)) && null !== ($data->inboundDeliveryName ?? null)) {
            $dataArray['inboundDeliveryName'] = $data->inboundDeliveryName;
        }
        $dataArray['supplierNumber'] = $data->supplierNumber;
        $dataArray['expectedDeliveryDate'] = $data->expectedDeliveryDate->format('Y-m-d');
        $values = [];
        foreach ($data->products as $value) {
            $normalized = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
            $values[] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        $dataArray['products'] = $values;
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewInboundDelivery::class => false];
    }
}