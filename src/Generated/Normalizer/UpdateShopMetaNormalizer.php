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
class UpdateShopMetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\UpdateShopMeta';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\UpdateShopMeta';
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
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\UpdateShopMeta();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('shopifyShopDomain', $data) && $data['shopifyShopDomain'] !== null) {
            $object->setShopifyShopDomain($data['shopifyShopDomain']);
            unset($data['shopifyShopDomain']);
        }
        elseif (\array_key_exists('shopifyShopDomain', $data) && $data['shopifyShopDomain'] === null) {
            $object->setShopifyShopDomain(null);
        }
        if (\array_key_exists('testShopResetNotBefore', $data) && $data['testShopResetNotBefore'] !== null) {
            $object->setTestShopResetNotBefore(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['testShopResetNotBefore']));
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
        if (\array_key_exists('defaultCurrency', $data) && $data['defaultCurrency'] !== null) {
            $object->setDefaultCurrency($data['defaultCurrency']);
            unset($data['defaultCurrency']);
        }
        elseif (\array_key_exists('defaultCurrency', $data) && $data['defaultCurrency'] === null) {
            $object->setDefaultCurrency(null);
        }
        if (\array_key_exists('shopifyOverwriteCustomerEmailEnabled', $data) && $data['shopifyOverwriteCustomerEmailEnabled'] !== null) {
            $object->setShopifyOverwriteCustomerEmailEnabled($data['shopifyOverwriteCustomerEmailEnabled']);
            unset($data['shopifyOverwriteCustomerEmailEnabled']);
        }
        elseif (\array_key_exists('shopifyOverwriteCustomerEmailEnabled', $data) && $data['shopifyOverwriteCustomerEmailEnabled'] === null) {
            $object->setShopifyOverwriteCustomerEmailEnabled(null);
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
        if ($object->isInitialized('shopifyShopDomain') && null !== $object->getShopifyShopDomain()) {
            $data['shopifyShopDomain'] = $object->getShopifyShopDomain();
        }
        if ($object->isInitialized('testShopResetNotBefore') && null !== $object->getTestShopResetNotBefore()) {
            $data['testShopResetNotBefore'] = $object->getTestShopResetNotBefore()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('sandboxMode') && null !== $object->getSandboxMode()) {
            $data['sandboxMode'] = $object->getSandboxMode();
        }
        if ($object->isInitialized('addTestSuffixToInternalReference') && null !== $object->getAddTestSuffixToInternalReference()) {
            $data['addTestSuffixToInternalReference'] = $object->getAddTestSuffixToInternalReference();
        }
        if ($object->isInitialized('defaultCurrency') && null !== $object->getDefaultCurrency()) {
            $data['defaultCurrency'] = $object->getDefaultCurrency();
        }
        if ($object->isInitialized('shopifyOverwriteCustomerEmailEnabled') && null !== $object->getShopifyOverwriteCustomerEmailEnabled()) {
            $data['shopifyOverwriteCustomerEmailEnabled'] = $object->getShopifyOverwriteCustomerEmailEnabled();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}