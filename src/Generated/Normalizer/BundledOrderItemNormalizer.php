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
class BundledOrderItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BundledOrderItem';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BundledOrderItem';
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
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BundledOrderItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('productNumber', $data)) {
            $object->setProductNumber($data['productNumber']);
            unset($data['productNumber']);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('count', $data)) {
            $object->setCount($data['count']);
            unset($data['count']);
        }
        if (\array_key_exists('externalProductNumber', $data) && $data['externalProductNumber'] !== null) {
            $object->setExternalProductNumber($data['externalProductNumber']);
            unset($data['externalProductNumber']);
        }
        elseif (\array_key_exists('externalProductNumber', $data) && $data['externalProductNumber'] === null) {
            $object->setExternalProductNumber(null);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($this->denormalizer->denormalize($data['price'], 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BundledOrderItemPrice', 'json', $context));
            unset($data['price']);
        }
        if (\array_key_exists('canceledCount', $data)) {
            $object->setCanceledCount($data['canceledCount']);
            unset($data['canceledCount']);
        }
        if (\array_key_exists('availableCount', $data)) {
            $object->setAvailableCount($data['availableCount']);
            unset($data['availableCount']);
        }
        if (\array_key_exists('deliveredCount', $data)) {
            $object->setDeliveredCount($data['deliveredCount']);
            unset($data['deliveredCount']);
        }
        if (\array_key_exists('returnedCount', $data)) {
            $object->setReturnedCount($data['returnedCount']);
            unset($data['returnedCount']);
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
        if ($object->isInitialized('title') && null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if ($object->isInitialized('count') && null !== $object->getCount()) {
            $data['count'] = $object->getCount();
        }
        if ($object->isInitialized('externalProductNumber') && null !== $object->getExternalProductNumber()) {
            $data['externalProductNumber'] = $object->getExternalProductNumber();
        }
        if ($object->isInitialized('price') && null !== $object->getPrice()) {
            $data['price'] = $this->normalizer->normalize($object->getPrice(), 'json', $context);
        }
        if ($object->isInitialized('canceledCount') && null !== $object->getCanceledCount()) {
            $data['canceledCount'] = $object->getCanceledCount();
        }
        if ($object->isInitialized('availableCount') && null !== $object->getAvailableCount()) {
            $data['availableCount'] = $object->getAvailableCount();
        }
        if ($object->isInitialized('deliveredCount') && null !== $object->getDeliveredCount()) {
            $data['deliveredCount'] = $object->getDeliveredCount();
        }
        if ($object->isInitialized('returnedCount') && null !== $object->getReturnedCount()) {
            $data['returnedCount'] = $object->getReturnedCount();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}