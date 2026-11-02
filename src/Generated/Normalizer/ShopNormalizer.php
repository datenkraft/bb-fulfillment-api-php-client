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
class ShopNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Shop::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Shop::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Shop();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('shopCode', $data)) {
            $object->shopCode = $data['shopCode'];
            unset($data['shopCode']);
        }
        if (\array_key_exists('internalReferencePrefix', $data)) {
            $object->internalReferencePrefix = $data['internalReferencePrefix'];
            unset($data['internalReferencePrefix']);
        }
        if (\array_key_exists('projectId', $data)) {
            $object->projectId = $data['projectId'];
            unset($data['projectId']);
        }
        if (\array_key_exists('active', $data)) {
            $object->active = $data['active'];
            unset($data['active']);
        }
        if (\array_key_exists('meta', $data) && $data['meta'] !== null) {
            $object->meta = $this->denormalizer->denormalize($data['meta'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ShopMeta::class, 'json', $context);
            unset($data['meta']);
        }
        elseif (\array_key_exists('meta', $data)) {
            $object->meta = null;
            unset($data['meta']);
        }
        if (\array_key_exists('email', $data)) {
            $object->email = $data['email'];
            unset($data['email']);
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
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id;
        }
        if (array_key_exists('shopCode', get_object_vars($data)) && null !== ($data->shopCode ?? null)) {
            $dataArray['shopCode'] = $data->shopCode;
        }
        if (array_key_exists('internalReferencePrefix', get_object_vars($data)) && null !== ($data->internalReferencePrefix ?? null)) {
            $dataArray['internalReferencePrefix'] = $data->internalReferencePrefix;
        }
        if (array_key_exists('projectId', get_object_vars($data)) && null !== ($data->projectId ?? null)) {
            $dataArray['projectId'] = $data->projectId;
        }
        if (array_key_exists('active', get_object_vars($data)) && null !== ($data->active ?? null)) {
            $dataArray['active'] = $data->active;
        }
        if (array_key_exists('meta', get_object_vars($data)) && null !== ($data->meta ?? null)) {
            $normalized = $this->normalizer->normalize($data->meta, 'json', $context);
            $dataArray['meta'] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('email', get_object_vars($data)) && null !== ($data->email ?? null)) {
            $dataArray['email'] = $data->email;
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Shop::class => false];
    }
}