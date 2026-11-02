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
class PackagingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Packaging::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Packaging::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Packaging();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('height', $data) && \is_int($data['height'])) {
            $data['height'] = (float) $data['height'];
        }
        if (\array_key_exists('width', $data) && \is_int($data['width'])) {
            $data['width'] = (float) $data['width'];
        }
        if (\array_key_exists('depth', $data) && \is_int($data['depth'])) {
            $data['depth'] = (float) $data['depth'];
        }
        if (\array_key_exists('weight', $data) && \is_int($data['weight'])) {
            $data['weight'] = (float) $data['weight'];
        }
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
        }
        if (\array_key_exists('packagingCode', $data)) {
            $object->packagingCode = $data['packagingCode'];
            unset($data['packagingCode']);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data)) {
            $object->name = null;
            unset($data['name']);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->type = $data['type'];
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data)) {
            $object->type = null;
            unset($data['type']);
        }
        if (\array_key_exists('height', $data) && $data['height'] !== null) {
            $object->height = $data['height'];
            unset($data['height']);
        }
        elseif (\array_key_exists('height', $data)) {
            $object->height = null;
            unset($data['height']);
        }
        if (\array_key_exists('width', $data) && $data['width'] !== null) {
            $object->width = $data['width'];
            unset($data['width']);
        }
        elseif (\array_key_exists('width', $data)) {
            $object->width = null;
            unset($data['width']);
        }
        if (\array_key_exists('depth', $data) && $data['depth'] !== null) {
            $object->depth = $data['depth'];
            unset($data['depth']);
        }
        elseif (\array_key_exists('depth', $data)) {
            $object->depth = null;
            unset($data['depth']);
        }
        if (\array_key_exists('weight', $data) && $data['weight'] !== null) {
            $object->weight = $data['weight'];
            unset($data['weight']);
        }
        elseif (\array_key_exists('weight', $data)) {
            $object->weight = null;
            unset($data['weight']);
        }
        if (\array_key_exists('active', $data)) {
            $object->active = $data['active'];
            unset($data['active']);
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
        $dataArray['packagingCode'] = $data->packagingCode;
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type;
        }
        if (array_key_exists('height', get_object_vars($data)) && null !== ($data->height ?? null)) {
            $dataArray['height'] = $data->height;
        }
        if (array_key_exists('width', get_object_vars($data)) && null !== ($data->width ?? null)) {
            $dataArray['width'] = $data->width;
        }
        if (array_key_exists('depth', get_object_vars($data)) && null !== ($data->depth ?? null)) {
            $dataArray['depth'] = $data->depth;
        }
        if (array_key_exists('weight', get_object_vars($data)) && null !== ($data->weight ?? null)) {
            $dataArray['weight'] = $data->weight;
        }
        $dataArray['active'] = $data->active;
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Packaging::class => false];
    }
}