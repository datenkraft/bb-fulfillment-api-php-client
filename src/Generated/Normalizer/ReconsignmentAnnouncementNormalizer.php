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
class ReconsignmentAnnouncementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReconsignmentAnnouncement';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReconsignmentAnnouncement';
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
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReconsignmentAnnouncement();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('reconsignmentReason', $data)) {
            $object->setReconsignmentReason($data['reconsignmentReason']);
            unset($data['reconsignmentReason']);
        }
        if (\array_key_exists('reconsignmentAnnouncementNumber', $data)) {
            $object->setReconsignmentAnnouncementNumber($data['reconsignmentAnnouncementNumber']);
            unset($data['reconsignmentAnnouncementNumber']);
        }
        if (\array_key_exists('reconsignmentAnnouncementDate', $data)) {
            $object->setReconsignmentAnnouncementDate($data['reconsignmentAnnouncementDate']);
            unset($data['reconsignmentAnnouncementDate']);
        }
        if (\array_key_exists('reconsignmentCountryCode', $data)) {
            $object->setReconsignmentCountryCode($data['reconsignmentCountryCode']);
            unset($data['reconsignmentCountryCode']);
        }
        if (\array_key_exists('reconsignmentDeliveryServiceCode', $data)) {
            $object->setReconsignmentDeliveryServiceCode($data['reconsignmentDeliveryServiceCode']);
            unset($data['reconsignmentDeliveryServiceCode']);
        }
        if (\array_key_exists('reconsignmentTrackingCode', $data)) {
            $object->setReconsignmentTrackingCode($data['reconsignmentTrackingCode']);
            unset($data['reconsignmentTrackingCode']);
        }
        if (\array_key_exists('reconsignmentAnnouncementCompleted', $data)) {
            $object->setReconsignmentAnnouncementCompleted($data['reconsignmentAnnouncementCompleted']);
            unset($data['reconsignmentAnnouncementCompleted']);
        }
        if (\array_key_exists('orderNumber', $data)) {
            $object->setOrderNumber($data['orderNumber']);
            unset($data['orderNumber']);
        }
        if (\array_key_exists('deliveryNumber', $data)) {
            $object->setDeliveryNumber($data['deliveryNumber']);
            unset($data['deliveryNumber']);
        }
        if (\array_key_exists('reconsignmentAnnouncementLines', $data)) {
            $values = array();
            foreach ($data['reconsignmentAnnouncementLines'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ReconsignmentAnnouncementLine', 'json', $context);
            }
            $object->setReconsignmentAnnouncementLines($values);
            unset($data['reconsignmentAnnouncementLines']);
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
        if ($object->isInitialized('reconsignmentReason') && null !== $object->getReconsignmentReason()) {
            $data['reconsignmentReason'] = $object->getReconsignmentReason();
        }
        if ($object->isInitialized('reconsignmentAnnouncementNumber') && null !== $object->getReconsignmentAnnouncementNumber()) {
            $data['reconsignmentAnnouncementNumber'] = $object->getReconsignmentAnnouncementNumber();
        }
        if ($object->isInitialized('reconsignmentAnnouncementDate') && null !== $object->getReconsignmentAnnouncementDate()) {
            $data['reconsignmentAnnouncementDate'] = $object->getReconsignmentAnnouncementDate();
        }
        if ($object->isInitialized('reconsignmentCountryCode') && null !== $object->getReconsignmentCountryCode()) {
            $data['reconsignmentCountryCode'] = $object->getReconsignmentCountryCode();
        }
        if ($object->isInitialized('reconsignmentDeliveryServiceCode') && null !== $object->getReconsignmentDeliveryServiceCode()) {
            $data['reconsignmentDeliveryServiceCode'] = $object->getReconsignmentDeliveryServiceCode();
        }
        if ($object->isInitialized('reconsignmentTrackingCode') && null !== $object->getReconsignmentTrackingCode()) {
            $data['reconsignmentTrackingCode'] = $object->getReconsignmentTrackingCode();
        }
        if ($object->isInitialized('reconsignmentAnnouncementCompleted') && null !== $object->getReconsignmentAnnouncementCompleted()) {
            $data['reconsignmentAnnouncementCompleted'] = $object->getReconsignmentAnnouncementCompleted();
        }
        if ($object->isInitialized('orderNumber') && null !== $object->getOrderNumber()) {
            $data['orderNumber'] = $object->getOrderNumber();
        }
        if ($object->isInitialized('deliveryNumber') && null !== $object->getDeliveryNumber()) {
            $data['deliveryNumber'] = $object->getDeliveryNumber();
        }
        if ($object->isInitialized('reconsignmentAnnouncementLines') && null !== $object->getReconsignmentAnnouncementLines()) {
            $values = array();
            foreach ($object->getReconsignmentAnnouncementLines() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['reconsignmentAnnouncementLines'] = $values;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}