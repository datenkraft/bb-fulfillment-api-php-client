<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class InboundDeliveryProductNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\InboundDeliveryProduct';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\InboundDeliveryProduct';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDeliveryProduct();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('productNumber', $data)) {
            $object->setProductNumber($data['productNumber']);
        }
        if (\array_key_exists('announcedCount', $data)) {
            $object->setAnnouncedCount($data['announcedCount']);
        }
        if (\array_key_exists('productTitle', $data)) {
            $object->setProductTitle($data['productTitle']);
        }
        if (\array_key_exists('productNumberManufacturer', $data)) {
            $object->setProductNumberManufacturer($data['productNumberManufacturer']);
        }
        if (\array_key_exists('deliveredCount', $data)) {
            $object->setDeliveredCount($data['deliveredCount']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['productNumber'] = $object->getProductNumber();
        $data['announcedCount'] = $object->getAnnouncedCount();
        if (null !== $object->getProductTitle()) {
            $data['productTitle'] = $object->getProductTitle();
        }
        if (null !== $object->getProductNumberManufacturer()) {
            $data['productNumberManufacturer'] = $object->getProductNumberManufacturer();
        }
        if (null !== $object->getDeliveredCount()) {
            $data['deliveredCount'] = $object->getDeliveredCount();
        }
        return $data;
    }
}