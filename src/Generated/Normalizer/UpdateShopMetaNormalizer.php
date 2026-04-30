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
        if (\array_key_exists('shopifyShopDomain', $data) && $data['shopifyShopDomain'] !== null) {
            $object->setShopifyShopDomain($data['shopifyShopDomain']);
            unset($data['shopifyShopDomain']);
        }
        elseif (\array_key_exists('shopifyShopDomain', $data) && $data['shopifyShopDomain'] === null) {
            $object->setShopifyShopDomain(null);
        }
        if (\array_key_exists('testShop', $data) && $data['testShop'] !== null) {
            $object->setTestShop($data['testShop']);
            unset($data['testShop']);
        }
        elseif (\array_key_exists('testShop', $data) && $data['testShop'] === null) {
            $object->setTestShop(null);
        }
        if (\array_key_exists('testShopResetNotBefore', $data) && $data['testShopResetNotBefore'] !== null) {
            $object->setTestShopResetNotBefore(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['testShopResetNotBefore']));
            unset($data['testShopResetNotBefore']);
        }
        elseif (\array_key_exists('testShopResetNotBefore', $data) && $data['testShopResetNotBefore'] === null) {
            $object->setTestShopResetNotBefore(null);
        }
        if (\array_key_exists('sandboxMode', $data) && $data['sandboxMode'] !== null) {
            $object->setSandboxMode($data['sandboxMode']);
            unset($data['sandboxMode']);
        }
        elseif (\array_key_exists('sandboxMode', $data) && $data['sandboxMode'] === null) {
            $object->setSandboxMode(null);
        }
        if (\array_key_exists('addTestSuffixToInternalReference', $data) && $data['addTestSuffixToInternalReference'] !== null) {
            $object->setAddTestSuffixToInternalReference($data['addTestSuffixToInternalReference']);
            unset($data['addTestSuffixToInternalReference']);
        }
        elseif (\array_key_exists('addTestSuffixToInternalReference', $data) && $data['addTestSuffixToInternalReference'] === null) {
            $object->setAddTestSuffixToInternalReference(null);
        }
        if (\array_key_exists('invoiceEnabled', $data) && $data['invoiceEnabled'] !== null) {
            $object->setInvoiceEnabled($data['invoiceEnabled']);
            unset($data['invoiceEnabled']);
        }
        elseif (\array_key_exists('invoiceEnabled', $data) && $data['invoiceEnabled'] === null) {
            $object->setInvoiceEnabled(null);
        }
        if (\array_key_exists('defaultCurrency', $data) && $data['defaultCurrency'] !== null) {
            $object->setDefaultCurrency($data['defaultCurrency']);
            unset($data['defaultCurrency']);
        }
        elseif (\array_key_exists('defaultCurrency', $data) && $data['defaultCurrency'] === null) {
            $object->setDefaultCurrency(null);
        }
        if (\array_key_exists('overwriteCustomerEmailEnabled', $data) && $data['overwriteCustomerEmailEnabled'] !== null) {
            $object->setOverwriteCustomerEmailEnabled($data['overwriteCustomerEmailEnabled']);
            unset($data['overwriteCustomerEmailEnabled']);
        }
        elseif (\array_key_exists('overwriteCustomerEmailEnabled', $data) && $data['overwriteCustomerEmailEnabled'] === null) {
            $object->setOverwriteCustomerEmailEnabled(null);
        }
        if (\array_key_exists('orderNotesPrecedingText', $data) && $data['orderNotesPrecedingText'] !== null) {
            $object->setOrderNotesPrecedingText($data['orderNotesPrecedingText']);
            unset($data['orderNotesPrecedingText']);
        }
        elseif (\array_key_exists('orderNotesPrecedingText', $data) && $data['orderNotesPrecedingText'] === null) {
            $object->setOrderNotesPrecedingText(null);
        }
        if (\array_key_exists('deliverySlipNotes', $data) && $data['deliverySlipNotes'] !== null) {
            $object->setDeliverySlipNotes($data['deliverySlipNotes']);
            unset($data['deliverySlipNotes']);
        }
        elseif (\array_key_exists('deliverySlipNotes', $data) && $data['deliverySlipNotes'] === null) {
            $object->setDeliverySlipNotes(null);
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
        if ($data->isInitialized('shopifyShopDomain')) {
            $dataArray['shopifyShopDomain'] = $data->getShopifyShopDomain();
        }
        if ($data->isInitialized('testShop')) {
            $dataArray['testShop'] = $data->getTestShop();
        }
        if ($data->isInitialized('testShopResetNotBefore')) {
            $dataArray['testShopResetNotBefore'] = $data->getTestShopResetNotBefore()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('sandboxMode')) {
            $dataArray['sandboxMode'] = $data->getSandboxMode();
        }
        if ($data->isInitialized('addTestSuffixToInternalReference')) {
            $dataArray['addTestSuffixToInternalReference'] = $data->getAddTestSuffixToInternalReference();
        }
        if ($data->isInitialized('invoiceEnabled')) {
            $dataArray['invoiceEnabled'] = $data->getInvoiceEnabled();
        }
        if ($data->isInitialized('defaultCurrency')) {
            $dataArray['defaultCurrency'] = $data->getDefaultCurrency();
        }
        if ($data->isInitialized('overwriteCustomerEmailEnabled')) {
            $dataArray['overwriteCustomerEmailEnabled'] = $data->getOverwriteCustomerEmailEnabled();
        }
        if ($data->isInitialized('orderNotesPrecedingText')) {
            $dataArray['orderNotesPrecedingText'] = $data->getOrderNotesPrecedingText();
        }
        if ($data->isInitialized('deliverySlipNotes')) {
            $dataArray['deliverySlipNotes'] = $data->getDeliverySlipNotes();
        }
        foreach ($data as $key => $value) {
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