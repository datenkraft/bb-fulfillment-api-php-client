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
class InboundDeliveryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\InboundDelivery';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\InboundDelivery';
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
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDelivery();
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
                $values[] = $this->denormalizer->denormalize($value, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\InboundDeliveryProduct', 'json', $context);
            }
            $object->setProducts($values);
            unset($data['products']);
        }
        if (\array_key_exists('inboundDeliveryNumber', $data) && $data['inboundDeliveryNumber'] !== null) {
            $object->setInboundDeliveryNumber($data['inboundDeliveryNumber']);
            unset($data['inboundDeliveryNumber']);
        }
        elseif (\array_key_exists('inboundDeliveryNumber', $data) && $data['inboundDeliveryNumber'] === null) {
            $object->setInboundDeliveryNumber(null);
        }
        if (\array_key_exists('shopWAWIDeliveryId', $data)) {
            $object->setShopWAWIDeliveryId($data['shopWAWIDeliveryId']);
            unset($data['shopWAWIDeliveryId']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('shopCode', $data) && $data['shopCode'] !== null) {
            $object->setShopCode($data['shopCode']);
            unset($data['shopCode']);
        }
        elseif (\array_key_exists('shopCode', $data) && $data['shopCode'] === null) {
            $object->setShopCode(null);
        }
        if (\array_key_exists('startDate', $data) && $data['startDate'] !== null) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['startDate'])->setTime(0, 0, 0));
            unset($data['startDate']);
        }
        elseif (\array_key_exists('startDate', $data) && $data['startDate'] === null) {
            $object->setStartDate(null);
        }
        if (\array_key_exists('endDate', $data) && $data['endDate'] !== null) {
            $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['endDate'])->setTime(0, 0, 0));
            unset($data['endDate']);
        }
        elseif (\array_key_exists('endDate', $data) && $data['endDate'] === null) {
            $object->setEndDate(null);
        }
        if (\array_key_exists('deliverySlipNumber', $data) && $data['deliverySlipNumber'] !== null) {
            $object->setDeliverySlipNumber($data['deliverySlipNumber']);
            unset($data['deliverySlipNumber']);
        }
        elseif (\array_key_exists('deliverySlipNumber', $data) && $data['deliverySlipNumber'] === null) {
            $object->setDeliverySlipNumber(null);
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
        if ($object->isInitialized('products') && null !== $object->getProducts()) {
            $values = array();
            foreach ($object->getProducts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['products'] = $values;
        }
        if ($object->isInitialized('inboundDeliveryNumber') && null !== $object->getInboundDeliveryNumber()) {
            $data['inboundDeliveryNumber'] = $object->getInboundDeliveryNumber();
        }
        if ($object->isInitialized('shopWAWIDeliveryId') && null !== $object->getShopWAWIDeliveryId()) {
            $data['shopWAWIDeliveryId'] = $object->getShopWAWIDeliveryId();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('shopCode') && null !== $object->getShopCode()) {
            $data['shopCode'] = $object->getShopCode();
        }
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $data['startDate'] = $object->getStartDate()->format('Y-m-d');
        }
        if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
            $data['endDate'] = $object->getEndDate()->format('Y-m-d');
        }
        if ($object->isInitialized('deliverySlipNumber') && null !== $object->getDeliverySlipNumber()) {
            $data['deliverySlipNumber'] = $object->getDeliverySlipNumber();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}