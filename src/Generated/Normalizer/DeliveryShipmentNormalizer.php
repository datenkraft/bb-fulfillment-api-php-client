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
class DeliveryShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipment::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipment::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipment();
        if (\array_key_exists('weight', $data) && \is_int($data['weight'])) {
            $data['weight'] = (double) $data['weight'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('number', $data)) {
            $object->setNumber($data['number']);
            unset($data['number']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('deliveryService', $data) && $data['deliveryService'] !== null) {
            $object->setDeliveryService($data['deliveryService']);
            unset($data['deliveryService']);
        }
        elseif (\array_key_exists('deliveryService', $data) && $data['deliveryService'] === null) {
            $object->setDeliveryService(null);
        }
        if (\array_key_exists('code', $data)) {
            $object->setCode($data['code']);
            unset($data['code']);
        }
        if (\array_key_exists('link', $data)) {
            $object->setLink($data['link']);
            unset($data['link']);
        }
        if (\array_key_exists('weight', $data)) {
            $object->setWeight($data['weight']);
            unset($data['weight']);
        }
        if (\array_key_exists('weightUnit', $data)) {
            $object->setWeightUnit($data['weightUnit']);
            unset($data['weightUnit']);
        }
        if (\array_key_exists('shipmentLines', $data)) {
            $values = [];
            foreach ($data['shipmentLines'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShipmentLine::class, 'json', $context);
            }
            $object->setShipmentLines($values);
            unset($data['shipmentLines']);
        }
        if (\array_key_exists('externalShipmentId', $data) && $data['externalShipmentId'] !== null) {
            $object->setExternalShipmentId($data['externalShipmentId']);
            unset($data['externalShipmentId']);
        }
        elseif (\array_key_exists('externalShipmentId', $data) && $data['externalShipmentId'] === null) {
            $object->setExternalShipmentId(null);
        }
        if (\array_key_exists('journal', $data)) {
            $values_1 = [];
            foreach ($data['journal'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipmentJournal::class, 'json', $context);
            }
            $object->setJournal($values_1);
            unset($data['journal']);
        }
        if (\array_key_exists('packaging', $data)) {
            $object->setPackaging($this->denormalizer->denormalize($data['packaging'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipmentPackaging::class, 'json', $context));
            unset($data['packaging']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('number') && null !== $data->getNumber()) {
            $dataArray['number'] = $data->getNumber();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('deliveryService') && null !== $data->getDeliveryService()) {
            $dataArray['deliveryService'] = $data->getDeliveryService();
        }
        if ($data->isInitialized('code') && null !== $data->getCode()) {
            $dataArray['code'] = $data->getCode();
        }
        if ($data->isInitialized('link') && null !== $data->getLink()) {
            $dataArray['link'] = $data->getLink();
        }
        if ($data->isInitialized('weight') && null !== $data->getWeight()) {
            $dataArray['weight'] = $data->getWeight();
        }
        if ($data->isInitialized('weightUnit') && null !== $data->getWeightUnit()) {
            $dataArray['weightUnit'] = $data->getWeightUnit();
        }
        if ($data->isInitialized('shipmentLines') && null !== $data->getShipmentLines()) {
            $values = [];
            foreach ($data->getShipmentLines() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['shipmentLines'] = $values;
        }
        if ($data->isInitialized('externalShipmentId') && null !== $data->getExternalShipmentId()) {
            $dataArray['externalShipmentId'] = $data->getExternalShipmentId();
        }
        if ($data->isInitialized('journal') && null !== $data->getJournal()) {
            $values_1 = [];
            foreach ($data->getJournal() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['journal'] = $values_1;
        }
        if ($data->isInitialized('packaging') && null !== $data->getPackaging()) {
            $dataArray['packaging'] = $this->normalizer->normalize($data->getPackaging(), 'json', $context);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\DeliveryShipment::class => false];
    }
}