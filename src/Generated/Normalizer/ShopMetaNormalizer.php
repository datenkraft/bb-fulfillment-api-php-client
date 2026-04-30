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
class ShopMetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShopMeta::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShopMeta::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShopMeta();
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
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShopMeta::class => false];
    }
}