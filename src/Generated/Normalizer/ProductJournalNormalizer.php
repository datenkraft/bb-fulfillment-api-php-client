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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductJournal();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('journalId', $data)) {
            $object->setJournalId($data['journalId']);
            unset($data['journalId']);
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['date']));
            unset($data['date']);
        }
        if (\array_key_exists('productNumber', $data)) {
            $object->setProductNumber($data['productNumber']);
            unset($data['productNumber']);
        }
        if (\array_key_exists('reason', $data)) {
            $object->setReason($data['reason']);
            unset($data['reason']);
        }
        if (\array_key_exists('stockDelta', $data) && $data['stockDelta'] !== null) {
            $object->setStockDelta($data['stockDelta']);
            unset($data['stockDelta']);
        }
        elseif (\array_key_exists('stockDelta', $data) && $data['stockDelta'] === null) {
            $object->setStockDelta(null);
        }
        if (\array_key_exists('stockOld', $data) && $data['stockOld'] !== null) {
            $object->setStockOld($data['stockOld']);
            unset($data['stockOld']);
        }
        elseif (\array_key_exists('stockOld', $data) && $data['stockOld'] === null) {
            $object->setStockOld(null);
        }
        if (\array_key_exists('stockNew', $data) && $data['stockNew'] !== null) {
            $object->setStockNew($data['stockNew']);
            unset($data['stockNew']);
        }
        elseif (\array_key_exists('stockNew', $data) && $data['stockNew'] === null) {
            $object->setStockNew(null);
        }
        if (\array_key_exists('reference', $data)) {
            $object->setReference($this->denormalizer->denormalize($data['reference'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductJournalReference::class, 'json', $context));
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
        if ($data->isInitialized('journalId') && null !== $data->getJournalId()) {
            $dataArray['journalId'] = $data->getJournalId();
        }
        if ($data->isInitialized('date') && null !== $data->getDate()) {
            $dataArray['date'] = $data->getDate()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('productNumber') && null !== $data->getProductNumber()) {
            $dataArray['productNumber'] = $data->getProductNumber();
        }
        if ($data->isInitialized('reason') && null !== $data->getReason()) {
            $dataArray['reason'] = $data->getReason();
        }
        if ($data->isInitialized('stockDelta') && null !== $data->getStockDelta()) {
            $dataArray['stockDelta'] = $data->getStockDelta();
        }
        if ($data->isInitialized('stockOld') && null !== $data->getStockOld()) {
            $dataArray['stockOld'] = $data->getStockOld();
        }
        if ($data->isInitialized('stockNew') && null !== $data->getStockNew()) {
            $dataArray['stockNew'] = $data->getStockNew();
        }
        if ($data->isInitialized('reference') && null !== $data->getReference()) {
            $dataArray['reference'] = $this->normalizer->normalize($data->getReference(), 'json', $context);
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductJournal::class => false];
    }
}