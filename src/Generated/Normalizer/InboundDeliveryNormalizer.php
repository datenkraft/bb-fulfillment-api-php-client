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
class InboundDeliveryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\InboundDelivery';
    }
    public function supportsNormalization($data, $format = null) : bool
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
        if (\array_key_exists('supplierNumber', $data)) {
            $object->setSupplierNumber($data['supplierNumber']);
        }
        if (\array_key_exists('expectedDeliveryDate', $data)) {
            $object->setExpectedDeliveryDate(\DateTime::createFromFormat('Y-m-d', $data['expectedDeliveryDate'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('products', $data)) {
            $values = array();
            foreach ($data['products'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\InboundDeliveryProduct', 'json', $context);
            }
            $object->setProducts($values);
        }
        if (\array_key_exists('inboundDeliveryNumber', $data) && $data['inboundDeliveryNumber'] !== null) {
            $object->setInboundDeliveryNumber($data['inboundDeliveryNumber']);
        }
        elseif (\array_key_exists('inboundDeliveryNumber', $data) && $data['inboundDeliveryNumber'] === null) {
            $object->setInboundDeliveryNumber(null);
        }
        if (\array_key_exists('shopWAWIDeliveryId', $data)) {
            $object->setShopWAWIDeliveryId($data['shopWAWIDeliveryId']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('shopCode', $data) && $data['shopCode'] !== null) {
            $object->setShopCode($data['shopCode']);
        }
        elseif (\array_key_exists('shopCode', $data) && $data['shopCode'] === null) {
            $object->setShopCode(null);
        }
        if (\array_key_exists('startDate', $data) && $data['startDate'] !== null) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['startDate'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('startDate', $data) && $data['startDate'] === null) {
            $object->setStartDate(null);
        }
        if (\array_key_exists('endDate', $data) && $data['endDate'] !== null) {
            $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['endDate'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('endDate', $data) && $data['endDate'] === null) {
            $object->setEndDate(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['supplierNumber'] = $object->getSupplierNumber();
        $data['expectedDeliveryDate'] = $object->getExpectedDeliveryDate()->format('Y-m-d');
        if (null !== $object->getProducts()) {
            $values = array();
            foreach ($object->getProducts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['products'] = $values;
        }
        if (null !== $object->getInboundDeliveryNumber()) {
            $data['inboundDeliveryNumber'] = $object->getInboundDeliveryNumber();
        }
        if (null !== $object->getShopWAWIDeliveryId()) {
            $data['shopWAWIDeliveryId'] = $object->getShopWAWIDeliveryId();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getShopCode()) {
            $data['shopCode'] = $object->getShopCode();
        }
        if (null !== $object->getStartDate()) {
            $data['startDate'] = $object->getStartDate()->format('Y-m-d');
        }
        if (null !== $object->getEndDate()) {
            $data['endDate'] = $object->getEndDate()->format('Y-m-d');
        }
        return $data;
    }
}