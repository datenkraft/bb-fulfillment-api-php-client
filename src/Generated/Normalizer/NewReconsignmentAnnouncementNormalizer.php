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
class NewReconsignmentAnnouncementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewReconsignmentAnnouncement::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewReconsignmentAnnouncement::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewReconsignmentAnnouncement();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('reconsignmentReason', $data)) {
            $object->reconsignmentReason = $data['reconsignmentReason'];
            unset($data['reconsignmentReason']);
        }
        if (\array_key_exists('options', $data) && $data['options'] !== null) {
            $object->options = $this->denormalizer->denormalize($data['options'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewReconsignmentAnnouncementOptions::class, 'json', $context);
            unset($data['options']);
        }
        elseif (\array_key_exists('options', $data)) {
            $object->options = null;
            unset($data['options']);
        }
        if (\array_key_exists('reconsignmentAnnouncementLines', $data)) {
            $values = [];
            foreach ($data['reconsignmentAnnouncementLines'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewReconsignmentAnnouncementLine::class, 'json', $context);
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewReconsignmentAnnouncement::class => false];
    }
}