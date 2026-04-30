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
class StockNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Stock::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Stock::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Stock();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('productNumber', $data)) {
            $object->setProductNumber($data['productNumber']);
            unset($data['productNumber']);
        }
        if (\array_key_exists('stocked', $data)) {
            $object->setStocked($data['stocked']);
            unset($data['stocked']);
        }
        if (\array_key_exists('reserved', $data)) {
            $object->setReserved($data['reserved']);
            unset($data['reserved']);
        }
        if (\array_key_exists('available', $data)) {
            $object->setAvailable($data['available']);
            unset($data['available']);
        }
        if (\array_key_exists('incoming', $data)) {
            $object->setIncoming($data['incoming']);
            unset($data['incoming']);
        }
        if (\array_key_exists('locked', $data)) {
            $object->setLocked($data['locked']);
            unset($data['locked']);
        }
        if (\array_key_exists('overbookingPossibilityStatus', $data)) {
            $object->setOverbookingPossibilityStatus($data['overbookingPossibilityStatus']);
            unset($data['overbookingPossibilityStatus']);
        }
        if (\array_key_exists('reservedFor', $data)) {
            $object->setReservedFor($this->denormalizer->denormalize($data['reservedFor'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReservedFor::class, 'json', $context));
            unset($data['reservedFor']);
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
        if ($data->isInitialized('stocked') && null !== $data->getStocked()) {
            $dataArray['stocked'] = $data->getStocked();
        }
        if ($data->isInitialized('reserved') && null !== $data->getReserved()) {
            $dataArray['reserved'] = $data->getReserved();
        }
        if ($data->isInitialized('available') && null !== $data->getAvailable()) {
            $dataArray['available'] = $data->getAvailable();
        }
        if ($data->isInitialized('incoming') && null !== $data->getIncoming()) {
            $dataArray['incoming'] = $data->getIncoming();
        }
        if ($data->isInitialized('locked') && null !== $data->getLocked()) {
            $dataArray['locked'] = $data->getLocked();
        }
        if ($data->isInitialized('overbookingPossibilityStatus') && null !== $data->getOverbookingPossibilityStatus()) {
            $dataArray['overbookingPossibilityStatus'] = $data->getOverbookingPossibilityStatus();
        }
        if ($data->isInitialized('reservedFor') && null !== $data->getReservedFor()) {
            $dataArray['reservedFor'] = $this->normalizer->normalize($data->getReservedFor(), 'json', $context);
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Stock::class => false];
    }
}