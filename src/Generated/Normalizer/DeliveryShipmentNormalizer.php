<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\CheckArray;
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
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\DeliveryShipment';
    }
    public function supportsNormalization($data, $format = null) : bool
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
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('number', $data)) {
            $object->setNumber($data['number']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('deliveryService', $data) && $data['deliveryService'] !== null) {
            $object->setDeliveryService($data['deliveryService']);
        }
        elseif (\array_key_exists('deliveryService', $data) && $data['deliveryService'] === null) {
            $object->setDeliveryService(null);
        }
        if (\array_key_exists('code', $data)) {
            $object->setCode($data['code']);
        }
        if (\array_key_exists('link', $data)) {
            $object->setLink($data['link']);
        }
        if (\array_key_exists('weight', $data)) {
            $object->setWeight($data['weight']);
        }
        if (\array_key_exists('weightUnit', $data)) {
            $object->setWeightUnit($data['weightUnit']);
        }
        if (\array_key_exists('shipmentLines', $data)) {
            $values = array();
            foreach ($data['shipmentLines'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ShipmentLine', 'json', $context);
            }
            $object->setShipmentLines($values);
        }
        if (\array_key_exists('externalShipmentId', $data)) {
            $object->setExternalShipmentId($data['externalShipmentId']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getNumber()) {
            $data['number'] = $object->getNumber();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getDeliveryService()) {
            $data['deliveryService'] = $object->getDeliveryService();
        }
        if (null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if (null !== $object->getLink()) {
            $data['link'] = $object->getLink();
        }
        if (null !== $object->getWeight()) {
            $data['weight'] = $object->getWeight();
        }
        if (null !== $object->getWeightUnit()) {
            $data['weightUnit'] = $object->getWeightUnit();
        }
        if (null !== $object->getShipmentLines()) {
            $values = array();
            foreach ($object->getShipmentLines() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['shipmentLines'] = $values;
        }
        if (null !== $object->getExternalShipmentId()) {
            $data['externalShipmentId'] = $object->getExternalShipmentId();
        }
        return $data;
    }
}