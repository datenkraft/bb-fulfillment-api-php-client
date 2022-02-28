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
class OrderCustomerDeliveryAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderCustomerDeliveryAddress';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderCustomerDeliveryAddress';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomerDeliveryAddress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('street', $data)) {
            $object->setStreet($data['street']);
        }
        if (\array_key_exists('streetNumber', $data)) {
            $object->setStreetNumber($data['streetNumber']);
        }
        if (\array_key_exists('zipCode', $data)) {
            $object->setZipCode($data['zipCode']);
        }
        if (\array_key_exists('district', $data) && $data['district'] !== null) {
            $object->setDistrict($data['district']);
        }
        elseif (\array_key_exists('district', $data) && $data['district'] === null) {
            $object->setDistrict(null);
        }
        if (\array_key_exists('city', $data)) {
            $object->setCity($data['city']);
        }
        if (\array_key_exists('provinceCode', $data) && $data['provinceCode'] !== null) {
            $object->setProvinceCode($data['provinceCode']);
        }
        elseif (\array_key_exists('provinceCode', $data) && $data['provinceCode'] === null) {
            $object->setProvinceCode(null);
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->setCountryCode($data['countryCode']);
        }
        if (\array_key_exists('nameLine1', $data)) {
            $object->setNameLine1($data['nameLine1']);
        }
        if (\array_key_exists('nameLine2', $data) && $data['nameLine2'] !== null) {
            $object->setNameLine2($data['nameLine2']);
        }
        elseif (\array_key_exists('nameLine2', $data) && $data['nameLine2'] === null) {
            $object->setNameLine2(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['street'] = $object->getStreet();
        $data['streetNumber'] = $object->getStreetNumber();
        $data['zipCode'] = $object->getZipCode();
        if (null !== $object->getDistrict()) {
            $data['district'] = $object->getDistrict();
        }
        $data['city'] = $object->getCity();
        if (null !== $object->getProvinceCode()) {
            $data['provinceCode'] = $object->getProvinceCode();
        }
        $data['countryCode'] = $object->getCountryCode();
        $data['nameLine1'] = $object->getNameLine1();
        if (null !== $object->getNameLine2()) {
            $data['nameLine2'] = $object->getNameLine2();
        }
        return $data;
    }
}