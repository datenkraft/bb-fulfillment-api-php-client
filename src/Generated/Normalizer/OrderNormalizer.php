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
class OrderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Order';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
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
            unset($data['shopCode']);
        }
        elseif (\array_key_exists('shopCode', $data) && $data['shopCode'] === null) {
            $object->setShopCode(null);
        }
        if (\array_key_exists('customer', $data)) {
            $object->setCustomer($this->denormalizer->denormalize($data['customer'], 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderCustomer', 'json', $context));
            unset($data['customer']);
        }
        if (\array_key_exists('orderItems', $data)) {
            $values = array();
            foreach ($data['orderItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderItem', 'json', $context);
            }
            $object->setOrderItems($values);
            unset($data['orderItems']);
        }
        if (\array_key_exists('externalOrderId', $data) && $data['externalOrderId'] !== null) {
            $object->setExternalOrderId($data['externalOrderId']);
            unset($data['externalOrderId']);
        }
        elseif (\array_key_exists('externalOrderId', $data) && $data['externalOrderId'] === null) {
            $object->setExternalOrderId(null);
        }
        if (\array_key_exists('deliverySlipNotes', $data) && $data['deliverySlipNotes'] !== null) {
            $object->setDeliverySlipNotes($data['deliverySlipNotes']);
            unset($data['deliverySlipNotes']);
        }
        elseif (\array_key_exists('deliverySlipNotes', $data) && $data['deliverySlipNotes'] === null) {
            $object->setDeliverySlipNotes(null);
        }
        if (\array_key_exists('externalOrderReference', $data) && $data['externalOrderReference'] !== null) {
            $object->setExternalOrderReference($data['externalOrderReference']);
            unset($data['externalOrderReference']);
        }
        elseif (\array_key_exists('externalOrderReference', $data) && $data['externalOrderReference'] === null) {
            $object->setExternalOrderReference(null);
        }
        if (\array_key_exists('orderNotes', $data) && $data['orderNotes'] !== null) {
            $object->setOrderNotes($data['orderNotes']);
            unset($data['orderNotes']);
        }
        elseif (\array_key_exists('orderNotes', $data) && $data['orderNotes'] === null) {
            $object->setOrderNotes(null);
        }
        if (\array_key_exists('amazonOrderId', $data) && $data['amazonOrderId'] !== null) {
            $object->setAmazonOrderId($data['amazonOrderId']);
            unset($data['amazonOrderId']);
        }
        elseif (\array_key_exists('amazonOrderId', $data) && $data['amazonOrderId'] === null) {
            $object->setAmazonOrderId(null);
        }
        if (\array_key_exists('deliveryCosts', $data) && $data['deliveryCosts'] !== null) {
            $values_1 = array();
            foreach ($data['deliveryCosts'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderDeliveryCosts', 'json', $context);
            }
            $object->setDeliveryCosts($values_1);
            unset($data['deliveryCosts']);
        }
        elseif (\array_key_exists('deliveryCosts', $data) && $data['deliveryCosts'] === null) {
            $object->setDeliveryCosts(null);
        }
        if (\array_key_exists('options', $data) && $data['options'] !== null) {
            $object->setOptions($data['options']);
            unset($data['options']);
        }
        elseif (\array_key_exists('options', $data) && $data['options'] === null) {
            $object->setOptions(null);
        }
        if (\array_key_exists('orderNumber', $data)) {
            $object->setOrderNumber($data['orderNumber']);
            unset($data['orderNumber']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('orderDate', $data)) {
            $object->setOrderDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['orderDate']));
            unset($data['orderDate']);
        }
        if (\array_key_exists('delivery', $data) && $data['delivery'] !== null) {
            $values_2 = array();
            foreach ($data['delivery'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderDelivery', 'json', $context);
            }
            $object->setDelivery($values_2);
            unset($data['delivery']);
        }
        elseif (\array_key_exists('delivery', $data) && $data['delivery'] === null) {
            $object->setDelivery(null);
        }
        if (\array_key_exists('payment', $data)) {
            $object->setPayment($this->denormalizer->denormalize($data['payment'], 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderPayment', 'json', $context));
            unset($data['payment']);
        }
        if (\array_key_exists('shipping', $data)) {
            $object->setShipping($this->denormalizer->denormalize($data['shipping'], 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderShipping', 'json', $context));
            unset($data['shipping']);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
            unset($data['source']);
        }
        if (\array_key_exists('sourceLink', $data) && $data['sourceLink'] !== null) {
            $object->setSourceLink($data['sourceLink']);
            unset($data['sourceLink']);
        }
        elseif (\array_key_exists('sourceLink', $data) && $data['sourceLink'] === null) {
            $object->setSourceLink(null);
        }
        if (\array_key_exists('cancelable', $data)) {
            $object->setCancelable($data['cancelable']);
            unset($data['cancelable']);
        }
        if (\array_key_exists('orderItemsCancelable', $data)) {
            $object->setOrderItemsCancelable($data['orderItemsCancelable']);
            unset($data['orderItemsCancelable']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
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
        if ($object->isInitialized('shopCode') && null !== $object->getShopCode()) {
            $data['shopCode'] = $object->getShopCode();
        }
        if ($object->isInitialized('customer') && null !== $object->getCustomer()) {
            $data['customer'] = $this->normalizer->normalize($object->getCustomer(), 'json', $context);
        }
        if ($object->isInitialized('orderItems') && null !== $object->getOrderItems()) {
            $values = array();
            foreach ($object->getOrderItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['orderItems'] = $values;
        }
        if ($object->isInitialized('externalOrderId') && null !== $object->getExternalOrderId()) {
            $data['externalOrderId'] = $object->getExternalOrderId();
        }
        if ($object->isInitialized('deliverySlipNotes') && null !== $object->getDeliverySlipNotes()) {
            $data['deliverySlipNotes'] = $object->getDeliverySlipNotes();
        }
        if ($object->isInitialized('externalOrderReference') && null !== $object->getExternalOrderReference()) {
            $data['externalOrderReference'] = $object->getExternalOrderReference();
        }
        if ($object->isInitialized('orderNotes') && null !== $object->getOrderNotes()) {
            $data['orderNotes'] = $object->getOrderNotes();
        }
        if ($object->isInitialized('amazonOrderId') && null !== $object->getAmazonOrderId()) {
            $data['amazonOrderId'] = $object->getAmazonOrderId();
        }
        if ($object->isInitialized('deliveryCosts') && null !== $object->getDeliveryCosts()) {
            $values_1 = array();
            foreach ($object->getDeliveryCosts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['deliveryCosts'] = $values_1;
        }
        if ($object->isInitialized('options') && null !== $object->getOptions()) {
            $data['options'] = $object->getOptions();
        }
        if ($object->isInitialized('orderNumber') && null !== $object->getOrderNumber()) {
            $data['orderNumber'] = $object->getOrderNumber();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('orderDate') && null !== $object->getOrderDate()) {
            $data['orderDate'] = $object->getOrderDate()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('delivery') && null !== $object->getDelivery()) {
            $values_2 = array();
            foreach ($object->getDelivery() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['delivery'] = $values_2;
        }
        if ($object->isInitialized('payment') && null !== $object->getPayment()) {
            $data['payment'] = $this->normalizer->normalize($object->getPayment(), 'json', $context);
        }
        if ($object->isInitialized('shipping') && null !== $object->getShipping()) {
            $data['shipping'] = $this->normalizer->normalize($object->getShipping(), 'json', $context);
        }
        if ($object->isInitialized('source') && null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        if ($object->isInitialized('sourceLink') && null !== $object->getSourceLink()) {
            $data['sourceLink'] = $object->getSourceLink();
        }
        if ($object->isInitialized('cancelable') && null !== $object->getCancelable()) {
            $data['cancelable'] = $object->getCancelable();
        }
        if ($object->isInitialized('orderItemsCancelable') && null !== $object->getOrderItemsCancelable()) {
            $data['orderItemsCancelable'] = $object->getOrderItemsCancelable();
        }
        foreach ($object as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_3;
            }
        }
        return $data;
    }
}