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
class ReportInventoryMovementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReportInventoryMovement';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
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
            unset($data['productNumber']);
        }
        if (\array_key_exists('productTitle', $data) && $data['productTitle'] !== null) {
            $object->setProductTitle($data['productTitle']);
            unset($data['productTitle']);
        }
        elseif (\array_key_exists('productTitle', $data) && $data['productTitle'] === null) {
            $object->setProductTitle(null);
        }
        if (\array_key_exists('stockStart', $data)) {
            $object->setStockStart($data['stockStart']);
            unset($data['stockStart']);
        }
        if (\array_key_exists('stockEnd', $data)) {
            $object->setStockEnd($data['stockEnd']);
            unset($data['stockEnd']);
        }
        if (\array_key_exists('stockAdded', $data)) {
            $object->setStockAdded($data['stockAdded']);
            unset($data['stockAdded']);
        }
        if (\array_key_exists('stockSubtracted', $data)) {
            $object->setStockSubtracted($data['stockSubtracted']);
            unset($data['stockSubtracted']);
        }
        if (\array_key_exists('stockSubtractedExternal', $data)) {
            $object->setStockSubtractedExternal($data['stockSubtractedExternal']);
            unset($data['stockSubtractedExternal']);
        }
        if (\array_key_exists('stockCorrected', $data)) {
            $object->setStockCorrected($data['stockCorrected']);
            unset($data['stockCorrected']);
        }
        if (\array_key_exists('stockUsedForOwnPurposes', $data)) {
            $object->setStockUsedForOwnPurposes($data['stockUsedForOwnPurposes']);
            unset($data['stockUsedForOwnPurposes']);
        }
        if (\array_key_exists('stockReturned', $data)) {
            $object->setStockReturned($data['stockReturned']);
            unset($data['stockReturned']);
        }
        if (\array_key_exists('stockReturnedExternal', $data)) {
            $object->setStockReturnedExternal($data['stockReturnedExternal']);
            unset($data['stockReturnedExternal']);
        }
        if (\array_key_exists('movementEntries', $data)) {
            $values = array();
            foreach ($data['movementEntries'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReportInventoryMovementEntry', 'json', $context);
            }
            $object->setMovementEntries($values);
            unset($data['movementEntries']);
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
        if ($object->isInitialized('productTitle') && null !== $object->getProductTitle()) {
            $data['productTitle'] = $object->getProductTitle();
        }
        if ($object->isInitialized('stockStart') && null !== $object->getStockStart()) {
            $data['stockStart'] = $object->getStockStart();
        }
        if ($object->isInitialized('stockEnd') && null !== $object->getStockEnd()) {
            $data['stockEnd'] = $object->getStockEnd();
        }
        if ($object->isInitialized('stockAdded') && null !== $object->getStockAdded()) {
            $data['stockAdded'] = $object->getStockAdded();
        }
        if ($object->isInitialized('stockSubtracted') && null !== $object->getStockSubtracted()) {
            $data['stockSubtracted'] = $object->getStockSubtracted();
        }
        if ($object->isInitialized('stockSubtractedExternal') && null !== $object->getStockSubtractedExternal()) {
            $data['stockSubtractedExternal'] = $object->getStockSubtractedExternal();
        }
        if ($object->isInitialized('stockCorrected') && null !== $object->getStockCorrected()) {
            $data['stockCorrected'] = $object->getStockCorrected();
        }
        if ($object->isInitialized('stockUsedForOwnPurposes') && null !== $object->getStockUsedForOwnPurposes()) {
            $data['stockUsedForOwnPurposes'] = $object->getStockUsedForOwnPurposes();
        }
        if ($object->isInitialized('stockReturned') && null !== $object->getStockReturned()) {
            $data['stockReturned'] = $object->getStockReturned();
        }
        if ($object->isInitialized('stockReturnedExternal') && null !== $object->getStockReturnedExternal()) {
            $data['stockReturnedExternal'] = $object->getStockReturnedExternal();
        }
        if ($object->isInitialized('movementEntries') && null !== $object->getMovementEntries()) {
            $values = array();
            foreach ($object->getMovementEntries() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['movementEntries'] = $values;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}