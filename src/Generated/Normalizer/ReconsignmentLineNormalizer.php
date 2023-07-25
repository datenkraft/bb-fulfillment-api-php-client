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
class ReconsignmentLineNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReconsignmentLine';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReconsignmentLine';
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
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentLine();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('productNumber', $data)) {
            $object->setProductNumber($data['productNumber']);
        }
        if (\array_key_exists('putBackToStockCount', $data)) {
            $object->setPutBackToStockCount($data['putBackToStockCount']);
        }
        if (\array_key_exists('count', $data)) {
            $object->setCount($data['count']);
        }
        if (\array_key_exists('unit', $data)) {
            $object->setUnit($data['unit']);
        }
        if (\array_key_exists('productWeight', $data)) {
            $object->setProductWeight($data['productWeight']);
        }
        if (\array_key_exists('productWeightUnit', $data)) {
            $object->setProductWeightUnit($data['productWeightUnit']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getProductNumber()) {
            $data['productNumber'] = $object->getProductNumber();
        }
        if (null !== $object->getPutBackToStockCount()) {
            $data['putBackToStockCount'] = $object->getPutBackToStockCount();
        }
        if (null !== $object->getCount()) {
            $data['count'] = $object->getCount();
        }
        if (null !== $object->getUnit()) {
            $data['unit'] = $object->getUnit();
        }
        if (null !== $object->getProductWeight()) {
            $data['productWeight'] = $object->getProductWeight();
        }
        if (null !== $object->getProductWeightUnit()) {
            $data['productWeightUnit'] = $object->getProductWeightUnit();
        }
        return $data;
    }
}