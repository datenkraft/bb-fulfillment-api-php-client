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
class UpdateShopMetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\UpdateShopMeta::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\UpdateShopMeta::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\UpdateShopMeta();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('testShop', $data) && \is_int($data['testShop'])) {
            $data['testShop'] = (bool) $data['testShop'];
        }
        if (\array_key_exists('sandboxMode', $data) && \is_int($data['sandboxMode'])) {
            $data['sandboxMode'] = (bool) $data['sandboxMode'];
        }
        if (\array_key_exists('addTestSuffixToInternalReference', $data) && \is_int($data['addTestSuffixToInternalReference'])) {
            $data['addTestSuffixToInternalReference'] = (bool) $data['addTestSuffixToInternalReference'];
        }
        if (\array_key_exists('invoiceEnabled', $data) && \is_int($data['invoiceEnabled'])) {
            $data['invoiceEnabled'] = (bool) $data['invoiceEnabled'];
        }
        if (\array_key_exists('overwriteCustomerEmailEnabled', $data) && \is_int($data['overwriteCustomerEmailEnabled'])) {
            $data['overwriteCustomerEmailEnabled'] = (bool) $data['overwriteCustomerEmailEnabled'];
        }
        if (\array_key_exists('printOrderDocument', $data) && \is_int($data['printOrderDocument'])) {
            $data['printOrderDocument'] = (bool) $data['printOrderDocument'];
        }
        if (\array_key_exists('shopifyShopDomain', $data) && $data['shopifyShopDomain'] !== null) {
            $object->shopifyShopDomain = $data['shopifyShopDomain'];
            unset($data['shopifyShopDomain']);
        }
        elseif (\array_key_exists('shopifyShopDomain', $data)) {
            $object->shopifyShopDomain = null;
            unset($data['shopifyShopDomain']);
        }
        if (\array_key_exists('testShop', $data) && $data['testShop'] !== null) {
            $object->testShop = $data['testShop'];
            unset($data['testShop']);
        }
        elseif (\array_key_exists('testShop', $data)) {
            $object->testShop = null;
            unset($data['testShop']);
        }
        if (\array_key_exists('testShopResetNotBefore', $data) && $data['testShopResetNotBefore'] !== null) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['testShopResetNotBefore']);
            if (false === $date) {
                if (is_string($data['testShopResetNotBefore']) and 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['testShopResetNotBefore'])) {
                    try {
                        $date = new \DateTime($data['testShopResetNotBefore']);
                    } catch (\Exception) {
                        throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\InvalidDateException($data['testShopResetNotBefore'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\InvalidDateException($data['testShopResetNotBefore'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->testShopResetNotBefore = $date;
            unset($data['testShopResetNotBefore']);
        }
        elseif (\array_key_exists('testShopResetNotBefore', $data)) {
            $object->testShopResetNotBefore = null;
            unset($data['testShopResetNotBefore']);
        }
        if (\array_key_exists('sandboxMode', $data) && $data['sandboxMode'] !== null) {
            $object->sandboxMode = $data['sandboxMode'];
            unset($data['sandboxMode']);
        }
        elseif (\array_key_exists('sandboxMode', $data)) {
            $object->sandboxMode = null;
            unset($data['sandboxMode']);
        }
        if (\array_key_exists('addTestSuffixToInternalReference', $data) && $data['addTestSuffixToInternalReference'] !== null) {
            $object->addTestSuffixToInternalReference = $data['addTestSuffixToInternalReference'];
            unset($data['addTestSuffixToInternalReference']);
        }
        elseif (\array_key_exists('addTestSuffixToInternalReference', $data)) {
            $object->addTestSuffixToInternalReference = null;
            unset($data['addTestSuffixToInternalReference']);
        }
        if (\array_key_exists('invoiceEnabled', $data) && $data['invoiceEnabled'] !== null) {
            $object->invoiceEnabled = $data['invoiceEnabled'];
            unset($data['invoiceEnabled']);
        }
        elseif (\array_key_exists('invoiceEnabled', $data)) {
            $object->invoiceEnabled = null;
            unset($data['invoiceEnabled']);
        }
        if (\array_key_exists('defaultCurrency', $data) && $data['defaultCurrency'] !== null) {
            $object->defaultCurrency = $data['defaultCurrency'];
            unset($data['defaultCurrency']);
        }
        elseif (\array_key_exists('defaultCurrency', $data)) {
            $object->defaultCurrency = null;
            unset($data['defaultCurrency']);
        }
        if (\array_key_exists('overwriteCustomerEmailEnabled', $data) && $data['overwriteCustomerEmailEnabled'] !== null) {
            $object->overwriteCustomerEmailEnabled = $data['overwriteCustomerEmailEnabled'];
            unset($data['overwriteCustomerEmailEnabled']);
        }
        elseif (\array_key_exists('overwriteCustomerEmailEnabled', $data)) {
            $object->overwriteCustomerEmailEnabled = null;
            unset($data['overwriteCustomerEmailEnabled']);
        }
        if (\array_key_exists('orderNotesPrecedingText', $data) && $data['orderNotesPrecedingText'] !== null) {
            $object->orderNotesPrecedingText = $data['orderNotesPrecedingText'];
            unset($data['orderNotesPrecedingText']);
        }
        elseif (\array_key_exists('orderNotesPrecedingText', $data)) {
            $object->orderNotesPrecedingText = null;
            unset($data['orderNotesPrecedingText']);
        }
        if (\array_key_exists('deliverySlipNotes', $data) && $data['deliverySlipNotes'] !== null) {
            $object->deliverySlipNotes = $data['deliverySlipNotes'];
            unset($data['deliverySlipNotes']);
        }
        elseif (\array_key_exists('deliverySlipNotes', $data)) {
            $object->deliverySlipNotes = null;
            unset($data['deliverySlipNotes']);
        }
        if (\array_key_exists('printOrderDocument', $data) && $data['printOrderDocument'] !== null) {
            $object->printOrderDocument = $data['printOrderDocument'];
            unset($data['printOrderDocument']);
        }
        elseif (\array_key_exists('printOrderDocument', $data)) {
            $object->printOrderDocument = null;
            unset($data['printOrderDocument']);
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
        if (array_key_exists('shopifyShopDomain', get_object_vars($data)) && null !== ($data->shopifyShopDomain ?? null)) {
            $dataArray['shopifyShopDomain'] = $data->shopifyShopDomain;
        }
        if (array_key_exists('testShop', get_object_vars($data)) && null !== ($data->testShop ?? null)) {
            $dataArray['testShop'] = $data->testShop;
        }
        if (array_key_exists('testShopResetNotBefore', get_object_vars($data)) && null !== ($data->testShopResetNotBefore ?? null)) {
            $dataArray['testShopResetNotBefore'] = $data->testShopResetNotBefore?->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('sandboxMode', get_object_vars($data)) && null !== ($data->sandboxMode ?? null)) {
            $dataArray['sandboxMode'] = $data->sandboxMode;
        }
        if (array_key_exists('addTestSuffixToInternalReference', get_object_vars($data)) && null !== ($data->addTestSuffixToInternalReference ?? null)) {
            $dataArray['addTestSuffixToInternalReference'] = $data->addTestSuffixToInternalReference;
        }
        if (array_key_exists('invoiceEnabled', get_object_vars($data)) && null !== ($data->invoiceEnabled ?? null)) {
            $dataArray['invoiceEnabled'] = $data->invoiceEnabled;
        }
        if (array_key_exists('defaultCurrency', get_object_vars($data)) && null !== ($data->defaultCurrency ?? null)) {
            $dataArray['defaultCurrency'] = $data->defaultCurrency;
        }
        if (array_key_exists('overwriteCustomerEmailEnabled', get_object_vars($data)) && null !== ($data->overwriteCustomerEmailEnabled ?? null)) {
            $dataArray['overwriteCustomerEmailEnabled'] = $data->overwriteCustomerEmailEnabled;
        }
        if (array_key_exists('orderNotesPrecedingText', get_object_vars($data)) && null !== ($data->orderNotesPrecedingText ?? null)) {
            $dataArray['orderNotesPrecedingText'] = $data->orderNotesPrecedingText;
        }
        if (array_key_exists('deliverySlipNotes', get_object_vars($data)) && null !== ($data->deliverySlipNotes ?? null)) {
            $dataArray['deliverySlipNotes'] = $data->deliverySlipNotes;
        }
        if (array_key_exists('printOrderDocument', get_object_vars($data)) && null !== ($data->printOrderDocument ?? null)) {
            $dataArray['printOrderDocument'] = $data->printOrderDocument;
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\UpdateShopMeta::class => false];
    }
}