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
class ReportClearingOrderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReportClearingOrder';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReportClearingOrder';
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
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportClearingOrder();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('orderNumber', $data)) {
            $object->setOrderNumber($data['orderNumber']);
        }
        if (\array_key_exists('shopOrderId', $data)) {
            $object->setShopOrderId($data['shopOrderId']);
        }
        if (\array_key_exists('deliveryZipCode', $data)) {
            $object->setDeliveryZipCode($data['deliveryZipCode']);
        }
        if (\array_key_exists('deliveryCountryCode', $data)) {
            $object->setDeliveryCountryCode($data['deliveryCountryCode']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getOrderNumber()) {
            $data['orderNumber'] = $object->getOrderNumber();
        }
        if (null !== $object->getShopOrderId()) {
            $data['shopOrderId'] = $object->getShopOrderId();
        }
        if (null !== $object->getDeliveryZipCode()) {
            $data['deliveryZipCode'] = $object->getDeliveryZipCode();
        }
        if (null !== $object->getDeliveryCountryCode()) {
            $data['deliveryCountryCode'] = $object->getDeliveryCountryCode();
        }
        return $data;
    }
}