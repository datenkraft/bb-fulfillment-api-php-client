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
class ReportInventoryMovementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportInventoryMovement::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportInventoryMovement::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportInventoryMovement();
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
        if (\array_key_exists('productTitle', $data) && $data['productTitle'] !== null) {
            $object->setProductTitle($data['productTitle']);
            unset($data['productTitle']);
        }
        elseif (\array_key_exists('productTitle', $data) && $data['productTitle'] === null) {
            $object->setProductTitle(null);
        }
        if (\array_key_exists('stockStart', $data)) {
            $object->setStockStart($data['stockStart']);
            unset($data['stockStart']);
        }
        if (\array_key_exists('stockEnd', $data)) {
            $object->setStockEnd($data['stockEnd']);
            unset($data['stockEnd']);
        }
        if (\array_key_exists('stockAdded', $data)) {
            $object->setStockAdded($data['stockAdded']);
            unset($data['stockAdded']);
        }
        if (\array_key_exists('stockSubtracted', $data)) {
            $object->setStockSubtracted($data['stockSubtracted']);
            unset($data['stockSubtracted']);
        }
        if (\array_key_exists('stockSubtractedExternal', $data)) {
            $object->setStockSubtractedExternal($data['stockSubtractedExternal']);
            unset($data['stockSubtractedExternal']);
        }
        if (\array_key_exists('stockCorrected', $data)) {
            $object->setStockCorrected($data['stockCorrected']);
            unset($data['stockCorrected']);
        }
        if (\array_key_exists('stockUsedForOwnPurposes', $data)) {
            $object->setStockUsedForOwnPurposes($data['stockUsedForOwnPurposes']);
            unset($data['stockUsedForOwnPurposes']);
        }
        if (\array_key_exists('stockReturned', $data)) {
            $object->setStockReturned($data['stockReturned']);
            unset($data['stockReturned']);
        }
        if (\array_key_exists('stockReturnedExternal', $data)) {
            $object->setStockReturnedExternal($data['stockReturnedExternal']);
            unset($data['stockReturnedExternal']);
        }
        if (\array_key_exists('movementEntries', $data)) {
            $values = [];
            foreach ($data['movementEntries'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportInventoryMovementEntry::class, 'json', $context);
            }
            $object->setMovementEntries($values);
            unset($data['movementEntries']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($data->isInitialized('productTitle')) {
            $dataArray['productTitle'] = $data->getProductTitle();
        }
        if ($data->isInitialized('stockStart') && null !== $data->getStockStart()) {
            $dataArray['stockStart'] = $data->getStockStart();
        }
        if ($data->isInitialized('stockEnd') && null !== $data->getStockEnd()) {
            $dataArray['stockEnd'] = $data->getStockEnd();
        }
        if ($data->isInitialized('stockAdded') && null !== $data->getStockAdded()) {
            $dataArray['stockAdded'] = $data->getStockAdded();
        }
        if ($data->isInitialized('stockSubtracted') && null !== $data->getStockSubtracted()) {
            $dataArray['stockSubtracted'] = $data->getStockSubtracted();
        }
        if ($data->isInitialized('stockSubtractedExternal') && null !== $data->getStockSubtractedExternal()) {
            $dataArray['stockSubtractedExternal'] = $data->getStockSubtractedExternal();
        }
        if ($data->isInitialized('stockCorrected') && null !== $data->getStockCorrected()) {
            $dataArray['stockCorrected'] = $data->getStockCorrected();
        }
        if ($data->isInitialized('stockUsedForOwnPurposes') && null !== $data->getStockUsedForOwnPurposes()) {
            $dataArray['stockUsedForOwnPurposes'] = $data->getStockUsedForOwnPurposes();
        }
        if ($data->isInitialized('stockReturned') && null !== $data->getStockReturned()) {
            $dataArray['stockReturned'] = $data->getStockReturned();
        }
        if ($data->isInitialized('stockReturnedExternal') && null !== $data->getStockReturnedExternal()) {
            $dataArray['stockReturnedExternal'] = $data->getStockReturnedExternal();
        }
        if ($data->isInitialized('movementEntries') && null !== $data->getMovementEntries()) {
            $values = [];
            foreach ($data->getMovementEntries() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['movementEntries'] = $values;
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportInventoryMovement::class => false];
    }
}