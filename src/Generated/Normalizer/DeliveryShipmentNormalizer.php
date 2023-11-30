<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\CheckArray;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\DeliveryShipment';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\DeliveryShipment';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
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
            $values = array();
            foreach ($data['shipmentLines'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ShipmentLine', 'json', $context);
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
            $values_1 = array();
            foreach ($data['journal'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\DeliveryShipmentJournal', 'json', $context);
            }
            $object->setJournal($values_1);
            unset($data['journal']);
        }
        if (\array_key_exists('packaging', $data)) {
            $object->setPackaging($this->denormalizer->denormalize($data['packaging'], 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\DeliveryShipmentPackaging', 'json', $context));
            unset($data['packaging']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('number') && null !== $object->getNumber()) {
            $data['number'] = $object->getNumber();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('deliveryService') && null !== $object->getDeliveryService()) {
            $data['deliveryService'] = $object->getDeliveryService();
        }
        if ($object->isInitialized('code') && null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if ($object->isInitialized('link') && null !== $object->getLink()) {
            $data['link'] = $object->getLink();
        }
        if ($object->isInitialized('weight') && null !== $object->getWeight()) {
            $data['weight'] = $object->getWeight();
        }
        if ($object->isInitialized('weightUnit') && null !== $object->getWeightUnit()) {
            $data['weightUnit'] = $object->getWeightUnit();
        }
        if ($object->isInitialized('shipmentLines') && null !== $object->getShipmentLines()) {
            $values = array();
            foreach ($object->getShipmentLines() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['shipmentLines'] = $values;
        }
        if ($object->isInitialized('externalShipmentId') && null !== $object->getExternalShipmentId()) {
            $data['externalShipmentId'] = $object->getExternalShipmentId();
        }
        if ($object->isInitialized('journal') && null !== $object->getJournal()) {
            $values_1 = array();
            foreach ($object->getJournal() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['journal'] = $values_1;
        }
        if ($object->isInitialized('packaging') && null !== $object->getPackaging()) {
            $data['packaging'] = $this->normalizer->normalize($object->getPackaging(), 'json', $context);
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }
        return $data;
    }
}