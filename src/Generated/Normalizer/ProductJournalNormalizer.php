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
class ProductJournalNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductJournal::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductJournal::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductJournal();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('journalId', $data)) {
            $object->journalId = $data['journalId'];
            unset($data['journalId']);
        }
        if (\array_key_exists('date', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['date']);
            if (false === $date) {
                if (is_string($data['date']) and 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['date'])) {
                    try {
                        $date = new \DateTime($data['date']);
                    } catch (\Exception) {
                        throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\InvalidDateException($data['date'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\InvalidDateException($data['date'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->date = $date;
            unset($data['date']);
        }
        if (\array_key_exists('productNumber', $data)) {
            $object->productNumber = $data['productNumber'];
            unset($data['productNumber']);
        }
        if (\array_key_exists('reason', $data)) {
            $object->reason = $data['reason'];
            unset($data['reason']);
        }
        if (\array_key_exists('stockDelta', $data) && $data['stockDelta'] !== null) {
            $object->stockDelta = $data['stockDelta'];
            unset($data['stockDelta']);
        }
        elseif (\array_key_exists('stockDelta', $data)) {
            $object->stockDelta = null;
            unset($data['stockDelta']);
        }
        if (\array_key_exists('stockOld', $data) && $data['stockOld'] !== null) {
            $object->stockOld = $data['stockOld'];
            unset($data['stockOld']);
        }
        elseif (\array_key_exists('stockOld', $data)) {
            $object->stockOld = null;
            unset($data['stockOld']);
        }
        if (\array_key_exists('stockNew', $data) && $data['stockNew'] !== null) {
            $object->stockNew = $data['stockNew'];
            unset($data['stockNew']);
        }
        elseif (\array_key_exists('stockNew', $data)) {
            $object->stockNew = null;
            unset($data['stockNew']);
        }
        if (\array_key_exists('reference', $data)) {
            $object->reference = $this->denormalizer->denormalize($data['reference'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductJournalReference::class, 'json', $context);
            unset($data['reference']);
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
        if (array_key_exists('journalId', get_object_vars($data)) && null !== ($data->journalId ?? null)) {
            $dataArray['journalId'] = $data->journalId;
        }
        if (array_key_exists('date', get_object_vars($data)) && null !== ($data->date ?? null)) {
            $dataArray['date'] = $data->date->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('productNumber', get_object_vars($data)) && null !== ($data->productNumber ?? null)) {
            $dataArray['productNumber'] = $data->productNumber;
        }
        if (array_key_exists('reason', get_object_vars($data)) && null !== ($data->reason ?? null)) {
            $dataArray['reason'] = $data->reason;
        }
        if (array_key_exists('stockDelta', get_object_vars($data)) && null !== ($data->stockDelta ?? null)) {
            $dataArray['stockDelta'] = $data->stockDelta;
        }
        if (array_key_exists('stockOld', get_object_vars($data)) && null !== ($data->stockOld ?? null)) {
            $dataArray['stockOld'] = $data->stockOld;
        }
        if (array_key_exists('stockNew', get_object_vars($data)) && null !== ($data->stockNew ?? null)) {
            $dataArray['stockNew'] = $data->stockNew;
        }
        if (array_key_exists('reference', get_object_vars($data)) && null !== ($data->reference ?? null)) {
            $normalized = $this->normalizer->normalize($data->reference, 'json', $context);
            $dataArray['reference'] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized) : $normalized;
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductJournal::class => false];
    }
}