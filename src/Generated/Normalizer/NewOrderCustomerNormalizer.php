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
class NewOrderCustomerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewOrderCustomer';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewOrderCustomer';
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
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewOrderCustomer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('gender', $data)) {
            $object->setGender($data['gender']);
        }
        if (\array_key_exists('languageCode', $data)) {
            $object->setLanguageCode($data['languageCode']);
        }
        if (\array_key_exists('externalCustomerId', $data) && $data['externalCustomerId'] !== null) {
            $object->setExternalCustomerId($data['externalCustomerId']);
        }
        elseif (\array_key_exists('externalCustomerId', $data) && $data['externalCustomerId'] === null) {
            $object->setExternalCustomerId(null);
        }
        if (\array_key_exists('deliveryAddress', $data)) {
            $object->setDeliveryAddress($this->denormalizer->denormalize($data['deliveryAddress'], 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\OrderCustomerDeliveryAddress', 'json', $context));
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('phone', $data) && $data['phone'] !== null) {
            $object->setPhone($data['phone']);
        }
        elseif (\array_key_exists('phone', $data) && $data['phone'] === null) {
            $object->setPhone(null);
        }
        if (\array_key_exists('firstname', $data) && $data['firstname'] !== null) {
            $object->setFirstname($data['firstname']);
        }
        elseif (\array_key_exists('firstname', $data) && $data['firstname'] === null) {
            $object->setFirstname(null);
        }
        if (\array_key_exists('lastname', $data) && $data['lastname'] !== null) {
            $object->setLastname($data['lastname']);
        }
        elseif (\array_key_exists('lastname', $data) && $data['lastname'] === null) {
            $object->setLastname(null);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('company', $data) && $data['company'] !== null) {
            $object->setCompany($data['company']);
        }
        elseif (\array_key_exists('company', $data) && $data['company'] === null) {
            $object->setCompany(null);
        }
        if (\array_key_exists('companyVatNumber', $data) && $data['companyVatNumber'] !== null) {
            $object->setCompanyVatNumber($data['companyVatNumber']);
        }
        elseif (\array_key_exists('companyVatNumber', $data) && $data['companyVatNumber'] === null) {
            $object->setCompanyVatNumber(null);
        }
        if (\array_key_exists('invoiceAddress', $data) && $data['invoiceAddress'] !== null) {
            $object->setInvoiceAddress($this->denormalizer->denormalize($data['invoiceAddress'], 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\NewOrderCustomerinvoiceAddress', 'json', $context));
        }
        elseif (\array_key_exists('invoiceAddress', $data) && $data['invoiceAddress'] === null) {
            $object->setInvoiceAddress(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['gender'] = $object->getGender();
        $data['languageCode'] = $object->getLanguageCode();
        if (null !== $object->getExternalCustomerId()) {
            $data['externalCustomerId'] = $object->getExternalCustomerId();
        }
        $data['deliveryAddress'] = $this->normalizer->normalize($object->getDeliveryAddress(), 'json', $context);
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getPhone()) {
            $data['phone'] = $object->getPhone();
        }
        if (null !== $object->getFirstname()) {
            $data['firstname'] = $object->getFirstname();
        }
        if (null !== $object->getLastname()) {
            $data['lastname'] = $object->getLastname();
        }
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if (null !== $object->getCompany()) {
            $data['company'] = $object->getCompany();
        }
        if (null !== $object->getCompanyVatNumber()) {
            $data['companyVatNumber'] = $object->getCompanyVatNumber();
        }
        if (null !== $object->getInvoiceAddress()) {
            $data['invoiceAddress'] = $this->normalizer->normalize($object->getInvoiceAddress(), 'json', $context);
        }
        return $data;
    }
}