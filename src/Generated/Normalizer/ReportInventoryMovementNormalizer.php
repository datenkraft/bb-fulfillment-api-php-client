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
class ReportInventoryMovementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReportInventoryMovement';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReportInventoryMovement';
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
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportInventoryMovement();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('productNumber', $data)) {
            $object->setProductNumber($data['productNumber']);
        }
        if (\array_key_exists('stockStart', $data)) {
            $object->setStockStart($data['stockStart']);
        }
        if (\array_key_exists('stockEnd', $data)) {
            $object->setStockEnd($data['stockEnd']);
        }
        if (\array_key_exists('stockAdded', $data)) {
            $object->setStockAdded($data['stockAdded']);
        }
        if (\array_key_exists('stockSubtracted', $data)) {
            $object->setStockSubtracted($data['stockSubtracted']);
        }
        if (\array_key_exists('stockCorrected', $data)) {
            $object->setStockCorrected($data['stockCorrected']);
        }
        if (\array_key_exists('stockUsedForOwnPurposes', $data)) {
            $object->setStockUsedForOwnPurposes($data['stockUsedForOwnPurposes']);
        }
        if (\array_key_exists('stockReturned', $data)) {
            $object->setStockReturned($data['stockReturned']);
        }
        if (\array_key_exists('movementEntries', $data)) {
            $values = array();
            foreach ($data['movementEntries'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReportInventoryMovementEntry', 'json', $context);
            }
            $object->setMovementEntries($values);
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
        if (null !== $object->getStockStart()) {
            $data['stockStart'] = $object->getStockStart();
        }
        if (null !== $object->getStockEnd()) {
            $data['stockEnd'] = $object->getStockEnd();
        }
        if (null !== $object->getStockAdded()) {
            $data['stockAdded'] = $object->getStockAdded();
        }
        if (null !== $object->getStockSubtracted()) {
            $data['stockSubtracted'] = $object->getStockSubtracted();
        }
        if (null !== $object->getStockCorrected()) {
            $data['stockCorrected'] = $object->getStockCorrected();
        }
        if (null !== $object->getStockUsedForOwnPurposes()) {
            $data['stockUsedForOwnPurposes'] = $object->getStockUsedForOwnPurposes();
        }
        if (null !== $object->getStockReturned()) {
            $data['stockReturned'] = $object->getStockReturned();
        }
        if (null !== $object->getMovementEntries()) {
            $values = array();
            foreach ($object->getMovementEntries() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['movementEntries'] = $values;
        }
        return $data;
    }
}