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
class BaseOrderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BaseOrder';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BaseOrder';
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
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrder();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('shopCode', $data) && $data['shopCode'] !== null) {
            $object->setShopCode($data['shopCode']);
        }
        elseif (\array_key_exists('shopCode', $data) && $data['shopCode'] === null) {
            $object->setShopCode(null);
        }
        if (\array_key_exists('customer', $data)) {
            $object->setCustomer($this->denormalizer->denormalize($data['customer'], 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BaseOrderCustomer', 'json', $context));
        }
        if (\array_key_exists('orderItems', $data)) {
            $values = array();
            foreach ($data['orderItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderItem', 'json', $context);
            }
            $object->setOrderItems($values);
        }
        if (\array_key_exists('options', $data) && $data['options'] !== null) {
            $object->setOptions($data['options']);
        }
        elseif (\array_key_exists('options', $data) && $data['options'] === null) {
            $object->setOptions(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getShopCode()) {
            $data['shopCode'] = $object->getShopCode();
        }
        $data['customer'] = $this->normalizer->normalize($object->getCustomer(), 'json', $context);
        $values = array();
        foreach ($object->getOrderItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['orderItems'] = $values;
        if (null !== $object->getOptions()) {
            $data['options'] = $object->getOptions();
        }
        return $data;
    }
}