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
class CountryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Country';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Country';
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
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Country();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->setCountryCode($data['countryCode']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('phoneRequired', $data)) {
            $object->setPhoneRequired($data['phoneRequired']);
        }
        if (\array_key_exists('provinces', $data) && $data['provinces'] !== null) {
            $values = array();
            foreach ($data['provinces'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\CountryProvinces', 'json', $context);
            }
            $object->setProvinces($values);
        }
        elseif (\array_key_exists('provinces', $data) && $data['provinces'] === null) {
            $object->setProvinces(null);
        }
        if (\array_key_exists('currencyCode', $data)) {
            $object->setCurrencyCode($data['currencyCode']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCountryCode()) {
            $data['countryCode'] = $object->getCountryCode();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getPhoneRequired()) {
            $data['phoneRequired'] = $object->getPhoneRequired();
        }
        if (null !== $object->getProvinces()) {
            $values = array();
            foreach ($object->getProvinces() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['provinces'] = $values;
        }
        if (null !== $object->getCurrencyCode()) {
            $data['currencyCode'] = $object->getCurrencyCode();
        }
        return $data;
    }
}