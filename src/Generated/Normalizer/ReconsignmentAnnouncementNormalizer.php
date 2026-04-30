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
            $object->setReconsignmentReason($data['reconsignmentReason']);
            unset($data['reconsignmentReason']);
        }
        if (\array_key_exists('options', $data) && $data['options'] !== null) {
            $object->setOptions($this->denormalizer->denormalize($data['options'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseReconsignmentAnnouncementOptions::class, 'json', $context));
            unset($data['options']);
        }
        elseif (\array_key_exists('options', $data) && $data['options'] === null) {
            $object->setOptions(null);
        }
        if (\array_key_exists('reconsignmentAnnouncementNumber', $data)) {
            $object->setReconsignmentAnnouncementNumber($data['reconsignmentAnnouncementNumber']);
            unset($data['reconsignmentAnnouncementNumber']);
        }
        if (\array_key_exists('reconsignmentAnnouncementDate', $data)) {
            $object->setReconsignmentAnnouncementDate($data['reconsignmentAnnouncementDate']);
            unset($data['reconsignmentAnnouncementDate']);
        }
        if (\array_key_exists('reconsignmentCountryCode', $data)) {
            $object->setReconsignmentCountryCode($data['reconsignmentCountryCode']);
            unset($data['reconsignmentCountryCode']);
        }
        if (\array_key_exists('reconsignmentDeliveryServiceCode', $data)) {
            $object->setReconsignmentDeliveryServiceCode($data['reconsignmentDeliveryServiceCode']);
            unset($data['reconsignmentDeliveryServiceCode']);
        }
        if (\array_key_exists('reconsignmentTrackingCode', $data)) {
            $object->setReconsignmentTrackingCode($data['reconsignmentTrackingCode']);
            unset($data['reconsignmentTrackingCode']);
        }
        if (\array_key_exists('reconsignmentTrackingLink', $data)) {
            $object->setReconsignmentTrackingLink($data['reconsignmentTrackingLink']);
            unset($data['reconsignmentTrackingLink']);
        }
        if (\array_key_exists('reconsignmentAnnouncementCompleted', $data)) {
            $object->setReconsignmentAnnouncementCompleted($data['reconsignmentAnnouncementCompleted']);
            unset($data['reconsignmentAnnouncementCompleted']);
        }
        if (\array_key_exists('orderNumber', $data)) {
            $object->setOrderNumber($data['orderNumber']);
            unset($data['orderNumber']);
        }
        if (\array_key_exists('externalOrderReference', $data) && $data['externalOrderReference'] !== null) {
            $object->setExternalOrderReference($data['externalOrderReference']);
            unset($data['externalOrderReference']);
        }
        elseif (\array_key_exists('externalOrderReference', $data) && $data['externalOrderReference'] === null) {
            $object->setExternalOrderReference(null);
        }
        if (\array_key_exists('deliveryNumber', $data)) {
            $object->setDeliveryNumber($data['deliveryNumber']);
            unset($data['deliveryNumber']);
        }
        if (\array_key_exists('reconsignmentAnnouncementLines', $data)) {
            $values = [];
            foreach ($data['reconsignmentAnnouncementLines'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentAnnouncementLine::class, 'json', $context);
            }
            $object->setReconsignmentAnnouncementLines($values);
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
        if ($data->isInitialized('reconsignmentReason') && null !== $data->getReconsignmentReason()) {
            $dataArray['reconsignmentReason'] = $data->getReconsignmentReason();
        }
        if ($data->isInitialized('options')) {
            $dataArray['options'] = $this->normalizer->normalize($data->getOptions(), 'json', $context);
        }
        if ($data->isInitialized('reconsignmentAnnouncementNumber') && null !== $data->getReconsignmentAnnouncementNumber()) {
            $dataArray['reconsignmentAnnouncementNumber'] = $data->getReconsignmentAnnouncementNumber();
        }
        if ($data->isInitialized('reconsignmentAnnouncementDate') && null !== $data->getReconsignmentAnnouncementDate()) {
            $dataArray['reconsignmentAnnouncementDate'] = $data->getReconsignmentAnnouncementDate();
        }
        if ($data->isInitialized('reconsignmentCountryCode') && null !== $data->getReconsignmentCountryCode()) {
            $dataArray['reconsignmentCountryCode'] = $data->getReconsignmentCountryCode();
        }
        if ($data->isInitialized('reconsignmentDeliveryServiceCode') && null !== $data->getReconsignmentDeliveryServiceCode()) {
            $dataArray['reconsignmentDeliveryServiceCode'] = $data->getReconsignmentDeliveryServiceCode();
        }
        if ($data->isInitialized('reconsignmentTrackingCode') && null !== $data->getReconsignmentTrackingCode()) {
            $dataArray['reconsignmentTrackingCode'] = $data->getReconsignmentTrackingCode();
        }
        if ($data->isInitialized('reconsignmentTrackingLink') && null !== $data->getReconsignmentTrackingLink()) {
            $dataArray['reconsignmentTrackingLink'] = $data->getReconsignmentTrackingLink();
        }
        if ($data->isInitialized('reconsignmentAnnouncementCompleted') && null !== $data->getReconsignmentAnnouncementCompleted()) {
            $dataArray['reconsignmentAnnouncementCompleted'] = $data->getReconsignmentAnnouncementCompleted();
        }
        if ($data->isInitialized('orderNumber') && null !== $data->getOrderNumber()) {
            $dataArray['orderNumber'] = $data->getOrderNumber();
        }
        if ($data->isInitialized('externalOrderReference')) {
            $dataArray['externalOrderReference'] = $data->getExternalOrderReference();
        }
        if ($data->isInitialized('deliveryNumber') && null !== $data->getDeliveryNumber()) {
            $dataArray['deliveryNumber'] = $data->getDeliveryNumber();
        }
        if ($data->isInitialized('reconsignmentAnnouncementLines') && null !== $data->getReconsignmentAnnouncementLines()) {
            $values = [];
            foreach ($data->getReconsignmentAnnouncementLines() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['reconsignmentAnnouncementLines'] = $values;
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentAnnouncement::class => false];
    }
}