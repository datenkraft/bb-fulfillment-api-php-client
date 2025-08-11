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
class BundledOrderItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BundledOrderItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BundledOrderItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BundledOrderItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('productNumber', $data)) {
            $object->setProductNumber($data['productNumber']);
            unset($data['productNumber']);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('count', $data)) {
            $object->setCount($data['count']);
            unset($data['count']);
        }
        if (\array_key_exists('externalProductNumber', $data) && $data['externalProductNumber'] !== null) {
            $object->setExternalProductNumber($data['externalProductNumber']);
            unset($data['externalProductNumber']);
        }
        elseif (\array_key_exists('externalProductNumber', $data) && $data['externalProductNumber'] === null) {
            $object->setExternalProductNumber(null);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($this->denormalizer->denormalize($data['price'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BundledOrderItemPrice::class, 'json', $context));
            unset($data['price']);
        }
        if (\array_key_exists('canceledCount', $data)) {
            $object->setCanceledCount($data['canceledCount']);
            unset($data['canceledCount']);
        }
        if (\array_key_exists('availableCount', $data)) {
            $object->setAvailableCount($data['availableCount']);
            unset($data['availableCount']);
        }
        if (\array_key_exists('deliveredCount', $data)) {
            $object->setDeliveredCount($data['deliveredCount']);
            unset($data['deliveredCount']);
        }
        if (\array_key_exists('returnedCount', $data)) {
            $object->setReturnedCount($data['returnedCount']);
            unset($data['returnedCount']);
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
        if ($data->isInitialized('productNumber') && null !== $data->getProductNumber()) {
            $dataArray['productNumber'] = $data->getProductNumber();
        }
        if ($data->isInitialized('title') && null !== $data->getTitle()) {
            $dataArray['title'] = $data->getTitle();
        }
        if ($data->isInitialized('count') && null !== $data->getCount()) {
            $dataArray['count'] = $data->getCount();
        }
        if ($data->isInitialized('externalProductNumber') && null !== $data->getExternalProductNumber()) {
            $dataArray['externalProductNumber'] = $data->getExternalProductNumber();
        }
        if ($data->isInitialized('price') && null !== $data->getPrice()) {
            $dataArray['price'] = $this->normalizer->normalize($data->getPrice(), 'json', $context);
        }
        if ($data->isInitialized('canceledCount') && null !== $data->getCanceledCount()) {
            $dataArray['canceledCount'] = $data->getCanceledCount();
        }
        if ($data->isInitialized('availableCount') && null !== $data->getAvailableCount()) {
            $dataArray['availableCount'] = $data->getAvailableCount();
        }
        if ($data->isInitialized('deliveredCount') && null !== $data->getDeliveredCount()) {
            $dataArray['deliveredCount'] = $data->getDeliveredCount();
        }
        if ($data->isInitialized('returnedCount') && null !== $data->getReturnedCount()) {
            $dataArray['returnedCount'] = $data->getReturnedCount();
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BundledOrderItem::class => false];
    }
}