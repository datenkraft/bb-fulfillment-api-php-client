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
class NewInboundDeliveryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewInboundDelivery';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewInboundDelivery';
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
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewInboundDelivery();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('inboundDeliveryName', $data) && $data['inboundDeliveryName'] !== null) {
            $object->setInboundDeliveryName($data['inboundDeliveryName']);
            unset($data['inboundDeliveryName']);
        }
        elseif (\array_key_exists('inboundDeliveryName', $data) && $data['inboundDeliveryName'] === null) {
            $object->setInboundDeliveryName(null);
        }
        if (\array_key_exists('supplierNumber', $data)) {
            $object->setSupplierNumber($data['supplierNumber']);
            unset($data['supplierNumber']);
        }
        if (\array_key_exists('expectedDeliveryDate', $data)) {
            $object->setExpectedDeliveryDate(\DateTime::createFromFormat('Y-m-d', $data['expectedDeliveryDate'])->setTime(0, 0, 0));
            unset($data['expectedDeliveryDate']);
        }
        if (\array_key_exists('products', $data)) {
            $values = array();
            foreach ($data['products'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewInboundDeliveryProduct', 'json', $context);
            }
            $object->setProducts($values);
            unset($data['products']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($object->isInitialized('inboundDeliveryName') && null !== $object->getInboundDeliveryName()) {
            $data['inboundDeliveryName'] = $object->getInboundDeliveryName();
        }
        $data['supplierNumber'] = $object->getSupplierNumber();
        $data['expectedDeliveryDate'] = $object->getExpectedDeliveryDate()->format('Y-m-d');
        $values = array();
        foreach ($object->getProducts() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['products'] = $values;
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}