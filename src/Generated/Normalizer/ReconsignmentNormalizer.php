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
            $object->setReconsignmentNumber($data['reconsignmentNumber']);
            unset($data['reconsignmentNumber']);
        }
        if (\array_key_exists('reconsignmentDate', $data)) {
            $object->setReconsignmentDate($data['reconsignmentDate']);
            unset($data['reconsignmentDate']);
        }
        if (\array_key_exists('reconsignmentReason', $data)) {
            $object->setReconsignmentReason($data['reconsignmentReason']);
            unset($data['reconsignmentReason']);
        }
        if (\array_key_exists('orderNumber', $data)) {
            $object->setOrderNumber($data['orderNumber']);
            unset($data['orderNumber']);
        }
        if (\array_key_exists('orderDeliveryServiceCode', $data)) {
            $object->setOrderDeliveryServiceCode($data['orderDeliveryServiceCode']);
            unset($data['orderDeliveryServiceCode']);
        }
        if (\array_key_exists('reconsignmentDeliveryServiceCode', $data)) {
            $object->setReconsignmentDeliveryServiceCode($data['reconsignmentDeliveryServiceCode']);
            unset($data['reconsignmentDeliveryServiceCode']);
        }
        if (\array_key_exists('reconsignmentWasPreAnnounced', $data)) {
            $object->setReconsignmentWasPreAnnounced($data['reconsignmentWasPreAnnounced']);
            unset($data['reconsignmentWasPreAnnounced']);
        }
        if (\array_key_exists('reconsignmentCountryCode', $data)) {
            $object->setReconsignmentCountryCode($data['reconsignmentCountryCode']);
            unset($data['reconsignmentCountryCode']);
        }
        if (\array_key_exists('reconsignmentLines', $data)) {
            $values = [];
            foreach ($data['reconsignmentLines'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentLine::class, 'json', $context);
            }
            $object->setReconsignmentLines($values);
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
        if ($data->isInitialized('reconsignmentNumber') && null !== $data->getReconsignmentNumber()) {
            $dataArray['reconsignmentNumber'] = $data->getReconsignmentNumber();
        }
        if ($data->isInitialized('reconsignmentDate') && null !== $data->getReconsignmentDate()) {
            $dataArray['reconsignmentDate'] = $data->getReconsignmentDate();
        }
        if ($data->isInitialized('reconsignmentReason') && null !== $data->getReconsignmentReason()) {
            $dataArray['reconsignmentReason'] = $data->getReconsignmentReason();
        }
        if ($data->isInitialized('orderNumber') && null !== $data->getOrderNumber()) {
            $dataArray['orderNumber'] = $data->getOrderNumber();
        }
        if ($data->isInitialized('orderDeliveryServiceCode') && null !== $data->getOrderDeliveryServiceCode()) {
            $dataArray['orderDeliveryServiceCode'] = $data->getOrderDeliveryServiceCode();
        }
        if ($data->isInitialized('reconsignmentDeliveryServiceCode') && null !== $data->getReconsignmentDeliveryServiceCode()) {
            $dataArray['reconsignmentDeliveryServiceCode'] = $data->getReconsignmentDeliveryServiceCode();
        }
        if ($data->isInitialized('reconsignmentWasPreAnnounced') && null !== $data->getReconsignmentWasPreAnnounced()) {
            $dataArray['reconsignmentWasPreAnnounced'] = $data->getReconsignmentWasPreAnnounced();
        }
        if ($data->isInitialized('reconsignmentCountryCode') && null !== $data->getReconsignmentCountryCode()) {
            $dataArray['reconsignmentCountryCode'] = $data->getReconsignmentCountryCode();
        }
        if ($data->isInitialized('reconsignmentLines') && null !== $data->getReconsignmentLines()) {
            $values = [];
            foreach ($data->getReconsignmentLines() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['reconsignmentLines'] = $values;
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Reconsignment::class => false];
    }
}