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
class ReconsignmentAnnouncementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentAnnouncement::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentAnnouncement::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentAnnouncement();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('reconsignmentAnnouncementCompleted', $data) && \is_int($data['reconsignmentAnnouncementCompleted'])) {
            $data['reconsignmentAnnouncementCompleted'] = (bool) $data['reconsignmentAnnouncementCompleted'];
        }
        if (\array_key_exists('reconsignmentReason', $data)) {
            $object->reconsignmentReason = $data['reconsignmentReason'];
            unset($data['reconsignmentReason']);
        }
        if (\array_key_exists('options', $data)) {
            $object->options = $this->denormalizer->denormalize($data['options'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseReconsignmentAnnouncementOptions::class, 'json', $context);
            unset($data['options']);
        }
        if (\array_key_exists('reconsignmentAnnouncementNumber', $data)) {
            $object->reconsignmentAnnouncementNumber = $data['reconsignmentAnnouncementNumber'];
            unset($data['reconsignmentAnnouncementNumber']);
        }
        if (\array_key_exists('reconsignmentAnnouncementDate', $data)) {
            $object->reconsignmentAnnouncementDate = $data['reconsignmentAnnouncementDate'];
            unset($data['reconsignmentAnnouncementDate']);
        }
        if (\array_key_exists('reconsignmentCountryCode', $data)) {
            $object->reconsignmentCountryCode = $data['reconsignmentCountryCode'];
            unset($data['reconsignmentCountryCode']);
        }
        if (\array_key_exists('reconsignmentDeliveryServiceCode', $data)) {
            $object->reconsignmentDeliveryServiceCode = $data['reconsignmentDeliveryServiceCode'];
            unset($data['reconsignmentDeliveryServiceCode']);
        }
        if (\array_key_exists('reconsignmentTrackingCode', $data)) {
            $object->reconsignmentTrackingCode = $data['reconsignmentTrackingCode'];
            unset($data['reconsignmentTrackingCode']);
        }
        if (\array_key_exists('reconsignmentTrackingLink', $data)) {
            $object->reconsignmentTrackingLink = $data['reconsignmentTrackingLink'];
            unset($data['reconsignmentTrackingLink']);
        }
        if (\array_key_exists('reconsignmentAnnouncementCompleted', $data)) {
            $object->reconsignmentAnnouncementCompleted = $data['reconsignmentAnnouncementCompleted'];
            unset($data['reconsignmentAnnouncementCompleted']);
        }
        if (\array_key_exists('orderNumber', $data)) {
            $object->orderNumber = $data['orderNumber'];
            unset($data['orderNumber']);
        }
        if (\array_key_exists('externalOrderReference', $data) && $data['externalOrderReference'] !== null) {
            $object->externalOrderReference = $data['externalOrderReference'];
            unset($data['externalOrderReference']);
        }
        elseif (\array_key_exists('externalOrderReference', $data)) {
            $object->externalOrderReference = null;
            unset($data['externalOrderReference']);
        }
        if (\array_key_exists('deliveryNumber', $data)) {
            $object->deliveryNumber = $data['deliveryNumber'];
            unset($data['deliveryNumber']);
        }
        if (\array_key_exists('reconsignmentAnnouncementLines', $data)) {
            $values = [];
            foreach ($data['reconsignmentAnnouncementLines'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentAnnouncementLine::class, 'json', $context);
            }
            $object->reconsignmentAnnouncementLines = $values;
            unset($data['reconsignmentAnnouncementLines']);
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
        if (array_key_exists('reconsignmentReason', get_object_vars($data)) && null !== ($data->reconsignmentReason ?? null)) {
            $dataArray['reconsignmentReason'] = $data->reconsignmentReason;
        }
        if (array_key_exists('options', get_object_vars($data)) && null !== ($data->options ?? null)) {
            $normalized = $this->normalizer->normalize($data->options, 'json', $context);
            $dataArray['options'] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('reconsignmentAnnouncementNumber', get_object_vars($data)) && null !== ($data->reconsignmentAnnouncementNumber ?? null)) {
            $dataArray['reconsignmentAnnouncementNumber'] = $data->reconsignmentAnnouncementNumber;
        }
        if (array_key_exists('reconsignmentAnnouncementDate', get_object_vars($data)) && null !== ($data->reconsignmentAnnouncementDate ?? null)) {
            $dataArray['reconsignmentAnnouncementDate'] = $data->reconsignmentAnnouncementDate;
        }
        if (array_key_exists('reconsignmentCountryCode', get_object_vars($data)) && null !== ($data->reconsignmentCountryCode ?? null)) {
            $dataArray['reconsignmentCountryCode'] = $data->reconsignmentCountryCode;
        }
        if (array_key_exists('reconsignmentDeliveryServiceCode', get_object_vars($data)) && null !== ($data->reconsignmentDeliveryServiceCode ?? null)) {
            $dataArray['reconsignmentDeliveryServiceCode'] = $data->reconsignmentDeliveryServiceCode;
        }
        if (array_key_exists('reconsignmentTrackingCode', get_object_vars($data)) && null !== ($data->reconsignmentTrackingCode ?? null)) {
            $dataArray['reconsignmentTrackingCode'] = $data->reconsignmentTrackingCode;
        }
        if (array_key_exists('reconsignmentTrackingLink', get_object_vars($data)) && null !== ($data->reconsignmentTrackingLink ?? null)) {
            $dataArray['reconsignmentTrackingLink'] = $data->reconsignmentTrackingLink;
        }
        if (array_key_exists('reconsignmentAnnouncementCompleted', get_object_vars($data)) && null !== ($data->reconsignmentAnnouncementCompleted ?? null)) {
            $dataArray['reconsignmentAnnouncementCompleted'] = $data->reconsignmentAnnouncementCompleted;
        }
        if (array_key_exists('orderNumber', get_object_vars($data)) && null !== ($data->orderNumber ?? null)) {
            $dataArray['orderNumber'] = $data->orderNumber;
        }
        if (array_key_exists('externalOrderReference', get_object_vars($data)) && null !== ($data->externalOrderReference ?? null)) {
            $dataArray['externalOrderReference'] = $data->externalOrderReference;
        }
        if (array_key_exists('deliveryNumber', get_object_vars($data)) && null !== ($data->deliveryNumber ?? null)) {
            $dataArray['deliveryNumber'] = $data->deliveryNumber;
        }
        if (array_key_exists('reconsignmentAnnouncementLines', get_object_vars($data)) && null !== ($data->reconsignmentAnnouncementLines ?? null)) {
            $values = [];
            foreach ($data->reconsignmentAnnouncementLines as $value) {
                $normalized_1 = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized_1) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['reconsignmentAnnouncementLines'] = $values;
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentAnnouncement::class => false];
    }
}