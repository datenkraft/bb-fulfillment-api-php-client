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
class OrderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('shopCode', $data) && $data['shopCode'] !== null) {
            $object->setShopCode($data['shopCode']);
            unset($data['shopCode']);
        }
        elseif (\array_key_exists('shopCode', $data) && $data['shopCode'] === null) {
            $object->setShopCode(null);
        }
        if (\array_key_exists('customer', $data)) {
            $object->setCustomer($this->denormalizer->denormalize($data['customer'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomer::class, 'json', $context));
            unset($data['customer']);
        }
        if (\array_key_exists('orderItems', $data)) {
            $values = [];
            foreach ($data['orderItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderItem::class, 'json', $context);
            }
            $object->setOrderItems($values);
            unset($data['orderItems']);
        }
        if (\array_key_exists('options', $data) && $data['options'] !== null) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['options'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setOptions($values_1);
            unset($data['options']);
        }
        elseif (\array_key_exists('options', $data) && $data['options'] === null) {
            $object->setOptions(null);
        }
        if (\array_key_exists('orderNumber', $data) && $data['orderNumber'] !== null) {
            $object->setOrderNumber($data['orderNumber']);
            unset($data['orderNumber']);
        }
        elseif (\array_key_exists('orderNumber', $data) && $data['orderNumber'] === null) {
            $object->setOrderNumber(null);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('orderDate', $data)) {
            $object->setOrderDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['orderDate']));
            unset($data['orderDate']);
        }
        if (\array_key_exists('delivery', $data) && $data['delivery'] !== null) {
            $values_2 = [];
            foreach ($data['delivery'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderDelivery::class, 'json', $context);
            }
            $object->setDelivery($values_2);
            unset($data['delivery']);
        }
        elseif (\array_key_exists('delivery', $data) && $data['delivery'] === null) {
            $object->setDelivery(null);
        }
        if (\array_key_exists('payment', $data)) {
            $object->setPayment($this->denormalizer->denormalize($data['payment'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderPayment::class, 'json', $context));
            unset($data['payment']);
        }
        if (\array_key_exists('shipping', $data)) {
            $object->setShipping($this->denormalizer->denormalize($data['shipping'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderShipping::class, 'json', $context));
            unset($data['shipping']);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('shopCode')) {
            $dataArray['shopCode'] = $data->getShopCode();
        }
        if ($data->isInitialized('customer') && null !== $data->getCustomer()) {
            $dataArray['customer'] = $this->normalizer->normalize($data->getCustomer(), 'json', $context);
        }
        if ($data->isInitialized('orderItems') && null !== $data->getOrderItems()) {
            $values = [];
            foreach ($data->getOrderItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['orderItems'] = $values;
        }
        if ($data->isInitialized('options')) {
            $values_1 = [];
            foreach ($data->getOptions() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $dataArray['options'] = $values_1;
        }
        if ($data->isInitialized('orderNumber')) {
            $dataArray['orderNumber'] = $data->getOrderNumber();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('orderDate') && null !== $data->getOrderDate()) {
            $dataArray['orderDate'] = $data->getOrderDate()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('delivery')) {
            $values_2 = [];
            foreach ($data->getDelivery() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['delivery'] = $values_2;
        }
        if ($data->isInitialized('payment') && null !== $data->getPayment()) {
            $dataArray['payment'] = $this->normalizer->normalize($data->getPayment(), 'json', $context);
        }
        if ($data->isInitialized('shipping') && null !== $data->getShipping()) {
            $dataArray['shipping'] = $this->normalizer->normalize($data->getShipping(), 'json', $context);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Order::class => false];
    }
}