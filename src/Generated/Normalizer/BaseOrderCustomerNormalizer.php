<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\CheckArray;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BaseOrderCustomerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrderCustomer::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrderCustomer::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrderCustomer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('gender', $data)) {
            $object->gender = $data['gender'];
            unset($data['gender']);
        }
        if (\array_key_exists('languageCode', $data)) {
            $object->languageCode = $data['languageCode'];
            unset($data['languageCode']);
        }
        if (\array_key_exists('externalCustomerId', $data) && $data['externalCustomerId'] !== null) {
            $object->externalCustomerId = $data['externalCustomerId'];
            unset($data['externalCustomerId']);
        }
        elseif (\array_key_exists('externalCustomerId', $data)) {
            $object->externalCustomerId = null;
            unset($data['externalCustomerId']);
        }
        if (\array_key_exists('deliveryAddress', $data)) {
            $object->deliveryAddress = $this->denormalizer->denormalize($data['deliveryAddress'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\OrderCustomerDeliveryAddress::class, 'json', $context);
            unset($data['deliveryAddress']);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->email = $data['email'];
            unset($data['email']);
        }
        elseif (\array_key_exists('email', $data)) {
            $object->email = null;
            unset($data['email']);
        }
        if (\array_key_exists('phone', $data) && $data['phone'] !== null) {
            $object->phone = $data['phone'];
            unset($data['phone']);
        }
        elseif (\array_key_exists('phone', $data)) {
            $object->phone = null;
            unset($data['phone']);
        }
        if (\array_key_exists('firstname', $data) && $data['firstname'] !== null) {
            $object->firstname = $data['firstname'];
            unset($data['firstname']);
        }
        elseif (\array_key_exists('firstname', $data)) {
            $object->firstname = null;
            unset($data['firstname']);
        }
        if (\array_key_exists('lastname', $data) && $data['lastname'] !== null) {
            $object->lastname = $data['lastname'];
            unset($data['lastname']);
        }
        elseif (\array_key_exists('lastname', $data)) {
            $object->lastname = null;
            unset($data['lastname']);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->title = $data['title'];
            unset($data['title']);
        }
        elseif (\array_key_exists('title', $data)) {
            $object->title = null;
            unset($data['title']);
        }
        if (\array_key_exists('company', $data) && $data['company'] !== null) {
            $object->company = $data['company'];
            unset($data['company']);
        }
        elseif (\array_key_exists('company', $data)) {
            $object->company = null;
            unset($data['company']);
        }
        if (\array_key_exists('companyVatNumber', $data) && $data['companyVatNumber'] !== null) {
            $object->companyVatNumber = $data['companyVatNumber'];
            unset($data['companyVatNumber']);
        }
        elseif (\array_key_exists('companyVatNumber', $data)) {
            $object->companyVatNumber = null;
            unset($data['companyVatNumber']);
        }
        if (\array_key_exists('invoiceAddress', $data) && $data['invoiceAddress'] !== null) {
            $object->invoiceAddress = $this->denormalizer->denormalize($data['invoiceAddress'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrderCustomerInvoiceAddress::class, 'json', $context);
            unset($data['invoiceAddress']);
        }
        elseif (\array_key_exists('invoiceAddress', $data)) {
            $object->invoiceAddress = null;
            unset($data['invoiceAddress']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['gender'] = $data->gender;
        $dataArray['languageCode'] = $data->languageCode;
        if (array_key_exists('externalCustomerId', get_object_vars($data)) && null !== ($data->externalCustomerId ?? null)) {
            $dataArray['externalCustomerId'] = $data->externalCustomerId;
        }
        $normalized = $data->deliveryAddress === null ? null : $this->normalizer->normalize($data->deliveryAddress, 'json', $context);
        $dataArray['deliveryAddress'] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized) : $normalized;
        if (array_key_exists('email', get_object_vars($data)) && null !== ($data->email ?? null)) {
            $dataArray['email'] = $data->email;
        }
        if (array_key_exists('phone', get_object_vars($data)) && null !== ($data->phone ?? null)) {
            $dataArray['phone'] = $data->phone;
        }
        if (array_key_exists('firstname', get_object_vars($data)) && null !== ($data->firstname ?? null)) {
            $dataArray['firstname'] = $data->firstname;
        }
        if (array_key_exists('lastname', get_object_vars($data)) && null !== ($data->lastname ?? null)) {
            $dataArray['lastname'] = $data->lastname;
        }
        if (array_key_exists('title', get_object_vars($data)) && null !== ($data->title ?? null)) {
            $dataArray['title'] = $data->title;
        }
        if (array_key_exists('company', get_object_vars($data)) && null !== ($data->company ?? null)) {
            $dataArray['company'] = $data->company;
        }
        if (array_key_exists('companyVatNumber', get_object_vars($data)) && null !== ($data->companyVatNumber ?? null)) {
            $dataArray['companyVatNumber'] = $data->companyVatNumber;
        }
        if (array_key_exists('invoiceAddress', get_object_vars($data)) && null !== ($data->invoiceAddress ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->invoiceAddress, 'json', $context);
            $dataArray['invoiceAddress'] = \is_iterable($normalized_1) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseOrderCustomer::class => false];
    }
}