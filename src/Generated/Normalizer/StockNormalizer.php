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
class StockNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Stock';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Stock';
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
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Stock();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('productNumber', $data)) {
            $object->setProductNumber($data['productNumber']);
            unset($data['productNumber']);
        }
        if (\array_key_exists('stocked', $data)) {
            $object->setStocked($data['stocked']);
            unset($data['stocked']);
        }
        if (\array_key_exists('reserved', $data)) {
            $object->setReserved($data['reserved']);
            unset($data['reserved']);
        }
        if (\array_key_exists('available', $data)) {
            $object->setAvailable($data['available']);
            unset($data['available']);
        }
        if (\array_key_exists('incoming', $data)) {
            $object->setIncoming($data['incoming']);
            unset($data['incoming']);
        }
        if (\array_key_exists('overbookingPossibilityStatus', $data)) {
            $object->setOverbookingPossibilityStatus($data['overbookingPossibilityStatus']);
            unset($data['overbookingPossibilityStatus']);
        }
        if (\array_key_exists('reservedFor', $data)) {
            $object->setReservedFor($this->denormalizer->denormalize($data['reservedFor'], 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReservedFor', 'json', $context));
            unset($data['reservedFor']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        if ($object->isInitialized('stocked') && null !== $object->getStocked()) {
            $data['stocked'] = $object->getStocked();
        }
        if ($object->isInitialized('reserved') && null !== $object->getReserved()) {
            $data['reserved'] = $object->getReserved();
        }
        if ($object->isInitialized('available') && null !== $object->getAvailable()) {
            $data['available'] = $object->getAvailable();
        }
        if ($object->isInitialized('incoming') && null !== $object->getIncoming()) {
            $data['incoming'] = $object->getIncoming();
        }
        if ($object->isInitialized('overbookingPossibilityStatus') && null !== $object->getOverbookingPossibilityStatus()) {
            $data['overbookingPossibilityStatus'] = $object->getOverbookingPossibilityStatus();
        }
        if ($object->isInitialized('reservedFor') && null !== $object->getReservedFor()) {
            $data['reservedFor'] = $this->normalizer->normalize($object->getReservedFor(), 'json', $context);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}