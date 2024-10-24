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
class ReconsignmentLineNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReconsignmentLine';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
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
        if (\array_key_exists('productWeight', $data) && \is_int($data['productWeight'])) {
            $data['productWeight'] = (double) $data['productWeight'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('productNumber', $data)) {
            $object->setProductNumber($data['productNumber']);
            unset($data['productNumber']);
        }
        if (\array_key_exists('putBackToStockCount', $data) && $data['putBackToStockCount'] !== null) {
            $object->setPutBackToStockCount($data['putBackToStockCount']);
            unset($data['putBackToStockCount']);
        }
        elseif (\array_key_exists('putBackToStockCount', $data) && $data['putBackToStockCount'] === null) {
            $object->setPutBackToStockCount(null);
        }
        if (\array_key_exists('count', $data) && $data['count'] !== null) {
            $object->setCount($data['count']);
            unset($data['count']);
        }
        elseif (\array_key_exists('count', $data) && $data['count'] === null) {
            $object->setCount(null);
        }
        if (\array_key_exists('unit', $data) && $data['unit'] !== null) {
            $object->setUnit($data['unit']);
            unset($data['unit']);
        }
        elseif (\array_key_exists('unit', $data) && $data['unit'] === null) {
            $object->setUnit(null);
        }
        if (\array_key_exists('productWeight', $data) && $data['productWeight'] !== null) {
            $object->setProductWeight($data['productWeight']);
            unset($data['productWeight']);
        }
        elseif (\array_key_exists('productWeight', $data) && $data['productWeight'] === null) {
            $object->setProductWeight(null);
        }
        if (\array_key_exists('productWeightUnit', $data) && $data['productWeightUnit'] !== null) {
            $object->setProductWeightUnit($data['productWeightUnit']);
            unset($data['productWeightUnit']);
        }
        elseif (\array_key_exists('productWeightUnit', $data) && $data['productWeightUnit'] === null) {
            $object->setProductWeightUnit(null);
        }
        if (\array_key_exists('bundledProducts', $data) && $data['bundledProducts'] !== null) {
            $values = array();
            foreach ($data['bundledProducts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReconsignmentLineBundledProduct', 'json', $context);
            }
            $object->setBundledProducts($values);
            unset($data['bundledProducts']);
        }
        elseif (\array_key_exists('bundledProducts', $data) && $data['bundledProducts'] === null) {
            $object->setBundledProducts(null);
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
        if ($object->isInitialized('productNumber') && null !== $object->getProductNumber()) {
            $data['productNumber'] = $object->getProductNumber();
        }
        if ($object->isInitialized('putBackToStockCount') && null !== $object->getPutBackToStockCount()) {
            $data['putBackToStockCount'] = $object->getPutBackToStockCount();
        }
        if ($object->isInitialized('count') && null !== $object->getCount()) {
            $data['count'] = $object->getCount();
        }
        if ($object->isInitialized('unit') && null !== $object->getUnit()) {
            $data['unit'] = $object->getUnit();
        }
        if ($object->isInitialized('productWeight') && null !== $object->getProductWeight()) {
            $data['productWeight'] = $object->getProductWeight();
        }
        if ($object->isInitialized('productWeightUnit') && null !== $object->getProductWeightUnit()) {
            $data['productWeightUnit'] = $object->getProductWeightUnit();
        }
        if ($object->isInitialized('bundledProducts') && null !== $object->getBundledProducts()) {
            $values = array();
            foreach ($object->getBundledProducts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['bundledProducts'] = $values;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}