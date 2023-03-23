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
        if (\array_key_exists('externalOrderId', $data) && $data['externalOrderId'] !== null) {
            $object->setExternalOrderId($data['externalOrderId']);
        }
        elseif (\array_key_exists('externalOrderId', $data) && $data['externalOrderId'] === null) {
            $object->setExternalOrderId(null);
        }
        if (\array_key_exists('externalOrderReference', $data) && $data['externalOrderReference'] !== null) {
            $object->setExternalOrderReference($data['externalOrderReference']);
        }
        elseif (\array_key_exists('externalOrderReference', $data) && $data['externalOrderReference'] === null) {
            $object->setExternalOrderReference(null);
        }
        if (\array_key_exists('deliverySlipNotes', $data) && $data['deliverySlipNotes'] !== null) {
            $object->setDeliverySlipNotes($data['deliverySlipNotes']);
        }
        elseif (\array_key_exists('deliverySlipNotes', $data) && $data['deliverySlipNotes'] === null) {
            $object->setDeliverySlipNotes(null);
        }
        if (\array_key_exists('orderNotes', $data) && $data['orderNotes'] !== null) {
            $object->setOrderNotes($data['orderNotes']);
        }
        elseif (\array_key_exists('orderNotes', $data) && $data['orderNotes'] === null) {
            $object->setOrderNotes(null);
        }
        if (\array_key_exists('amazonOrderId', $data) && $data['amazonOrderId'] !== null) {
            $object->setAmazonOrderId($data['amazonOrderId']);
        }
        elseif (\array_key_exists('amazonOrderId', $data) && $data['amazonOrderId'] === null) {
            $object->setAmazonOrderId(null);
        }
        if (\array_key_exists('deliveryCosts', $data) && $data['deliveryCosts'] !== null) {
            $object->setDeliveryCosts($this->denormalizer->denormalize($data['deliveryCosts'], 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderDeliveryCosts', 'json', $context));
        }
        elseif (\array_key_exists('deliveryCosts', $data) && $data['deliveryCosts'] === null) {
            $object->setDeliveryCosts(null);
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
        if (null !== $object->getExternalOrderId()) {
            $data['externalOrderId'] = $object->getExternalOrderId();
        }
        if (null !== $object->getExternalOrderReference()) {
            $data['externalOrderReference'] = $object->getExternalOrderReference();
        }
        if (null !== $object->getDeliverySlipNotes()) {
            $data['deliverySlipNotes'] = $object->getDeliverySlipNotes();
        }
        if (null !== $object->getOrderNotes()) {
            $data['orderNotes'] = $object->getOrderNotes();
        }
        if (null !== $object->getAmazonOrderId()) {
            $data['amazonOrderId'] = $object->getAmazonOrderId();
        }
        if (null !== $object->getDeliveryCosts()) {
            $data['deliveryCosts'] = $this->normalizer->normalize($object->getDeliveryCosts(), 'json', $context);
        }
        if (null !== $object->getOptions()) {
            $data['options'] = $object->getOptions();
        }
        return $data;
    }
}