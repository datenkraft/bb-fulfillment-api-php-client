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
class ReconsignmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Reconsignment::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Reconsignment::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Reconsignment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('reconsignmentWasPreAnnounced', $data) && \is_int($data['reconsignmentWasPreAnnounced'])) {
            $data['reconsignmentWasPreAnnounced'] = (bool) $data['reconsignmentWasPreAnnounced'];
        }
        if (\array_key_exists('reconsignmentNumber', $data)) {
            $object->reconsignmentNumber = $data['reconsignmentNumber'];
            unset($data['reconsignmentNumber']);
        }
        if (\array_key_exists('reconsignmentDate', $data)) {
            $object->reconsignmentDate = $data['reconsignmentDate'];
            unset($data['reconsignmentDate']);
        }
        if (\array_key_exists('reconsignmentReason', $data)) {
            $object->reconsignmentReason = $data['reconsignmentReason'];
            unset($data['reconsignmentReason']);
        }
        if (\array_key_exists('orderNumber', $data)) {
            $object->orderNumber = $data['orderNumber'];
            unset($data['orderNumber']);
        }
        if (\array_key_exists('orderDeliveryServiceCode', $data)) {
            $object->orderDeliveryServiceCode = $data['orderDeliveryServiceCode'];
            unset($data['orderDeliveryServiceCode']);
        }
        if (\array_key_exists('reconsignmentDeliveryServiceCode', $data)) {
            $object->reconsignmentDeliveryServiceCode = $data['reconsignmentDeliveryServiceCode'];
            unset($data['reconsignmentDeliveryServiceCode']);
        }
        if (\array_key_exists('reconsignmentWasPreAnnounced', $data)) {
            $object->reconsignmentWasPreAnnounced = $data['reconsignmentWasPreAnnounced'];
            unset($data['reconsignmentWasPreAnnounced']);
        }
        if (\array_key_exists('reconsignmentCountryCode', $data)) {
            $object->reconsignmentCountryCode = $data['reconsignmentCountryCode'];
            unset($data['reconsignmentCountryCode']);
        }
        if (\array_key_exists('reconsignmentLines', $data)) {
            $values = [];
            foreach ($data['reconsignmentLines'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentLine::class, 'json', $context);
            }
            $object->reconsignmentLines = $values;
            unset($data['reconsignmentLines']);
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
        if (array_key_exists('reconsignmentNumber', get_object_vars($data)) && null !== ($data->reconsignmentNumber ?? null)) {
            $dataArray['reconsignmentNumber'] = $data->reconsignmentNumber;
        }
        if (array_key_exists('reconsignmentDate', get_object_vars($data)) && null !== ($data->reconsignmentDate ?? null)) {
            $dataArray['reconsignmentDate'] = $data->reconsignmentDate;
        }
        if (array_key_exists('reconsignmentReason', get_object_vars($data)) && null !== ($data->reconsignmentReason ?? null)) {
            $dataArray['reconsignmentReason'] = $data->reconsignmentReason;
        }
        if (array_key_exists('orderNumber', get_object_vars($data)) && null !== ($data->orderNumber ?? null)) {
            $dataArray['orderNumber'] = $data->orderNumber;
        }
        if (array_key_exists('orderDeliveryServiceCode', get_object_vars($data)) && null !== ($data->orderDeliveryServiceCode ?? null)) {
            $dataArray['orderDeliveryServiceCode'] = $data->orderDeliveryServiceCode;
        }
        if (array_key_exists('reconsignmentDeliveryServiceCode', get_object_vars($data)) && null !== ($data->reconsignmentDeliveryServiceCode ?? null)) {
            $dataArray['reconsignmentDeliveryServiceCode'] = $data->reconsignmentDeliveryServiceCode;
        }
        if (array_key_exists('reconsignmentWasPreAnnounced', get_object_vars($data)) && null !== ($data->reconsignmentWasPreAnnounced ?? null)) {
            $dataArray['reconsignmentWasPreAnnounced'] = $data->reconsignmentWasPreAnnounced;
        }
        if (array_key_exists('reconsignmentCountryCode', get_object_vars($data)) && null !== ($data->reconsignmentCountryCode ?? null)) {
            $dataArray['reconsignmentCountryCode'] = $data->reconsignmentCountryCode;
        }
        if (array_key_exists('reconsignmentLines', get_object_vars($data)) && null !== ($data->reconsignmentLines ?? null)) {
            $values = [];
            foreach ($data->reconsignmentLines as $value) {
                $normalized = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['reconsignmentLines'] = $values;
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Reconsignment::class => false];
    }
}