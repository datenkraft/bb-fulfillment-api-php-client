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
class ReconsignmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Reconsignment';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
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
            unset($data['reconsignmentNumber']);
        }
        if (\array_key_exists('reconsignmentDate', $data)) {
            $object->setReconsignmentDate($data['reconsignmentDate']);
            unset($data['reconsignmentDate']);
        }
        if (\array_key_exists('reconsignmentReason', $data)) {
            $object->setReconsignmentReason($data['reconsignmentReason']);
            unset($data['reconsignmentReason']);
        }
        if (\array_key_exists('orderNumber', $data)) {
            $object->setOrderNumber($data['orderNumber']);
            unset($data['orderNumber']);
        }
        if (\array_key_exists('orderDeliveryServiceCode', $data)) {
            $object->setOrderDeliveryServiceCode($data['orderDeliveryServiceCode']);
            unset($data['orderDeliveryServiceCode']);
        }
        if (\array_key_exists('reconsignmentDeliveryServiceCode', $data)) {
            $object->setReconsignmentDeliveryServiceCode($data['reconsignmentDeliveryServiceCode']);
            unset($data['reconsignmentDeliveryServiceCode']);
        }
        if (\array_key_exists('reconsignmentWasPreAnnounced', $data)) {
            $object->setReconsignmentWasPreAnnounced($data['reconsignmentWasPreAnnounced']);
            unset($data['reconsignmentWasPreAnnounced']);
        }
        if (\array_key_exists('reconsignmentCountryCode', $data)) {
            $object->setReconsignmentCountryCode($data['reconsignmentCountryCode']);
            unset($data['reconsignmentCountryCode']);
        }
        if (\array_key_exists('reconsignmentLines', $data)) {
            $values = array();
            foreach ($data['reconsignmentLines'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReconsignmentLine', 'json', $context);
            }
            $object->setReconsignmentLines($values);
            unset($data['reconsignmentLines']);
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
        if ($object->isInitialized('reconsignmentNumber') && null !== $object->getReconsignmentNumber()) {
            $data['reconsignmentNumber'] = $object->getReconsignmentNumber();
        }
        if ($object->isInitialized('reconsignmentDate') && null !== $object->getReconsignmentDate()) {
            $data['reconsignmentDate'] = $object->getReconsignmentDate();
        }
        if ($object->isInitialized('reconsignmentReason') && null !== $object->getReconsignmentReason()) {
            $data['reconsignmentReason'] = $object->getReconsignmentReason();
        }
        if ($object->isInitialized('orderNumber') && null !== $object->getOrderNumber()) {
            $data['orderNumber'] = $object->getOrderNumber();
        }
        if ($object->isInitialized('orderDeliveryServiceCode') && null !== $object->getOrderDeliveryServiceCode()) {
            $data['orderDeliveryServiceCode'] = $object->getOrderDeliveryServiceCode();
        }
        if ($object->isInitialized('reconsignmentDeliveryServiceCode') && null !== $object->getReconsignmentDeliveryServiceCode()) {
            $data['reconsignmentDeliveryServiceCode'] = $object->getReconsignmentDeliveryServiceCode();
        }
        if ($object->isInitialized('reconsignmentWasPreAnnounced') && null !== $object->getReconsignmentWasPreAnnounced()) {
            $data['reconsignmentWasPreAnnounced'] = $object->getReconsignmentWasPreAnnounced();
        }
        if ($object->isInitialized('reconsignmentCountryCode') && null !== $object->getReconsignmentCountryCode()) {
            $data['reconsignmentCountryCode'] = $object->getReconsignmentCountryCode();
        }
        if ($object->isInitialized('reconsignmentLines') && null !== $object->getReconsignmentLines()) {
            $values = array();
            foreach ($object->getReconsignmentLines() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['reconsignmentLines'] = $values;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}