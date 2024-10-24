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
class OrderCustomerDeliveryAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderCustomerDeliveryAddress';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderCustomerDeliveryAddress';
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
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomerDeliveryAddress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('street', $data)) {
            $object->setStreet($data['street']);
            unset($data['street']);
        }
        if (\array_key_exists('streetNumber', $data) && $data['streetNumber'] !== null) {
            $object->setStreetNumber($data['streetNumber']);
            unset($data['streetNumber']);
        }
        elseif (\array_key_exists('streetNumber', $data) && $data['streetNumber'] === null) {
            $object->setStreetNumber(null);
        }
        if (\array_key_exists('zipCode', $data)) {
            $object->setZipCode($data['zipCode']);
            unset($data['zipCode']);
        }
        if (\array_key_exists('district', $data) && $data['district'] !== null) {
            $object->setDistrict($data['district']);
            unset($data['district']);
        }
        elseif (\array_key_exists('district', $data) && $data['district'] === null) {
            $object->setDistrict(null);
        }
        if (\array_key_exists('city', $data)) {
            $object->setCity($data['city']);
            unset($data['city']);
        }
        if (\array_key_exists('provinceCode', $data) && $data['provinceCode'] !== null) {
            $object->setProvinceCode($data['provinceCode']);
            unset($data['provinceCode']);
        }
        elseif (\array_key_exists('provinceCode', $data) && $data['provinceCode'] === null) {
            $object->setProvinceCode(null);
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->setCountryCode($data['countryCode']);
            unset($data['countryCode']);
        }
        if (\array_key_exists('nameLine1', $data)) {
            $object->setNameLine1($data['nameLine1']);
            unset($data['nameLine1']);
        }
        if (\array_key_exists('nameLine2', $data) && $data['nameLine2'] !== null) {
            $object->setNameLine2($data['nameLine2']);
            unset($data['nameLine2']);
        }
        elseif (\array_key_exists('nameLine2', $data) && $data['nameLine2'] === null) {
            $object->setNameLine2(null);
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
        $data['street'] = $object->getStreet();
        if ($object->isInitialized('streetNumber') && null !== $object->getStreetNumber()) {
            $data['streetNumber'] = $object->getStreetNumber();
        }
        $data['zipCode'] = $object->getZipCode();
        if ($object->isInitialized('district') && null !== $object->getDistrict()) {
            $data['district'] = $object->getDistrict();
        }
        $data['city'] = $object->getCity();
        if ($object->isInitialized('provinceCode') && null !== $object->getProvinceCode()) {
            $data['provinceCode'] = $object->getProvinceCode();
        }
        $data['countryCode'] = $object->getCountryCode();
        if ($object->isInitialized('nameLine1') && null !== $object->getNameLine1()) {
            $data['nameLine1'] = $object->getNameLine1();
        }
        if ($object->isInitialized('nameLine2') && null !== $object->getNameLine2()) {
            $data['nameLine2'] = $object->getNameLine2();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}