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
class OrderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Order';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Order';
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
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order();
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
            $object->setCustomer($this->denormalizer->denormalize($data['customer'], 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderCustomer', 'json', $context));
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
            $object->setDeliveryCosts($data['deliveryCosts']);
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
        if (\array_key_exists('orderNumber', $data) && $data['orderNumber'] !== null) {
            $object->setOrderNumber($data['orderNumber']);
        }
        elseif (\array_key_exists('orderNumber', $data) && $data['orderNumber'] === null) {
            $object->setOrderNumber(null);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('orderDate', $data)) {
            $object->setOrderDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['orderDate']));
        }
        if (\array_key_exists('delivery', $data) && $data['delivery'] !== null) {
            $values_1 = array();
            foreach ($data['delivery'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderDelivery', 'json', $context);
            }
            $object->setDelivery($values_1);
        }
        elseif (\array_key_exists('delivery', $data) && $data['delivery'] === null) {
            $object->setDelivery(null);
        }
        if (\array_key_exists('payment', $data)) {
            $object->setPayment($this->denormalizer->denormalize($data['payment'], 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderPayment', 'json', $context));
        }
        if (\array_key_exists('shipping', $data)) {
            $object->setShipping($this->denormalizer->denormalize($data['shipping'], 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderShipping', 'json', $context));
        }
        if (\array_key_exists('source', $data) && $data['source'] !== null) {
            $object->setSource($data['source']);
        }
        elseif (\array_key_exists('source', $data) && $data['source'] === null) {
            $object->setSource(null);
        }
        if (\array_key_exists('sourceLink', $data) && $data['sourceLink'] !== null) {
            $object->setSourceLink($data['sourceLink']);
        }
        elseif (\array_key_exists('sourceLink', $data) && $data['sourceLink'] === null) {
            $object->setSourceLink(null);
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
        if (null !== $object->getCustomer()) {
            $data['customer'] = $this->normalizer->normalize($object->getCustomer(), 'json', $context);
        }
        if (null !== $object->getOrderItems()) {
            $values = array();
            foreach ($object->getOrderItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['orderItems'] = $values;
        }
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
            $data['deliveryCosts'] = $object->getDeliveryCosts();
        }
        if (null !== $object->getOptions()) {
            $data['options'] = $object->getOptions();
        }
        if (null !== $object->getOrderNumber()) {
            $data['orderNumber'] = $object->getOrderNumber();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getOrderDate()) {
            $data['orderDate'] = $object->getOrderDate()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getDelivery()) {
            $values_1 = array();
            foreach ($object->getDelivery() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['delivery'] = $values_1;
        }
        if (null !== $object->getPayment()) {
            $data['payment'] = $this->normalizer->normalize($object->getPayment(), 'json', $context);
        }
        if (null !== $object->getShipping()) {
            $data['shipping'] = $this->normalizer->normalize($object->getShipping(), 'json', $context);
        }
        if (null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        if (null !== $object->getSourceLink()) {
            $data['sourceLink'] = $object->getSourceLink();
        }
        return $data;
    }
}