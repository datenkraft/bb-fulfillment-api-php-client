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
class ReconsignmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Reconsignment';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Reconsignment';
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
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Reconsignment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('reconsignmentNumber', $data)) {
            $object->setReconsignmentNumber($data['reconsignmentNumber']);
        }
        if (\array_key_exists('reconsignmentDate', $data)) {
            $object->setReconsignmentDate($data['reconsignmentDate']);
        }
        if (\array_key_exists('reconsignmentReason', $data)) {
            $object->setReconsignmentReason($data['reconsignmentReason']);
        }
        if (\array_key_exists('orderNumber', $data)) {
            $object->setOrderNumber($data['orderNumber']);
        }
        if (\array_key_exists('reconsignmentLines', $data)) {
            $values = array();
            foreach ($data['reconsignmentLines'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReconsignmentLine', 'json', $context);
            }
            $object->setReconsignmentLines($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getReconsignmentNumber()) {
            $data['reconsignmentNumber'] = $object->getReconsignmentNumber();
        }
        if (null !== $object->getReconsignmentDate()) {
            $data['reconsignmentDate'] = $object->getReconsignmentDate();
        }
        if (null !== $object->getReconsignmentReason()) {
            $data['reconsignmentReason'] = $object->getReconsignmentReason();
        }
        if (null !== $object->getOrderNumber()) {
            $data['orderNumber'] = $object->getOrderNumber();
        }
        if (null !== $object->getReconsignmentLines()) {
            $values = array();
            foreach ($object->getReconsignmentLines() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['reconsignmentLines'] = $values;
        }
        return $data;
    }
}