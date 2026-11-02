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
class ProductDraftNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductDraft::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductDraft::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductDraft();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('contentsAmount', $data) && \is_int($data['contentsAmount'])) {
            $data['contentsAmount'] = (float) $data['contentsAmount'];
        }
        if (\array_key_exists('supplierPurchasePriceEUR', $data) && \is_int($data['supplierPurchasePriceEUR'])) {
            $data['supplierPurchasePriceEUR'] = (float) $data['supplierPurchasePriceEUR'];
        }
        if (\array_key_exists('listPriceEUR', $data) && \is_int($data['listPriceEUR'])) {
            $data['listPriceEUR'] = (float) $data['listPriceEUR'];
        }
        if (\array_key_exists('productNumber', $data)) {
            $object->productNumber = $data['productNumber'];
            unset($data['productNumber']);
        }
        if (\array_key_exists('productTitle', $data)) {
            $object->productTitle = $data['productTitle'];
            unset($data['productTitle']);
        }
        if (\array_key_exists('contentsAmount', $data)) {
            $object->contentsAmount = $data['contentsAmount'];
            unset($data['contentsAmount']);
        }
        if (\array_key_exists('contentsWeightGram', $data)) {
            $object->contentsWeightGram = $data['contentsWeightGram'];
            unset($data['contentsWeightGram']);
        }
        if (\array_key_exists('weightGram', $data)) {
            $object->weightGram = $data['weightGram'];
            unset($data['weightGram']);
        }
        if (\array_key_exists('ean', $data)) {
            $object->ean = $data['ean'];
            unset($data['ean']);
        }
        if (\array_key_exists('taricCode', $data)) {
            $object->taricCode = $data['taricCode'];
            unset($data['taricCode']);
        }
        if (\array_key_exists('supplierPurchasePriceEUR', $data)) {
            $object->supplierPurchasePriceEUR = $data['supplierPurchasePriceEUR'];
            unset($data['supplierPurchasePriceEUR']);
        }
        if (\array_key_exists('listPriceEUR', $data)) {
            $object->listPriceEUR = $data['listPriceEUR'];
            unset($data['listPriceEUR']);
        }
        if (\array_key_exists('taxCode', $data) && $data['taxCode'] !== null) {
            $object->taxCode = $data['taxCode'];
            unset($data['taxCode']);
        }
        elseif (\array_key_exists('taxCode', $data)) {
            $object->taxCode = null;
            unset($data['taxCode']);
        }
        if (\array_key_exists('supplierNumber', $data)) {
            $object->supplierNumber = $data['supplierNumber'];
            unset($data['supplierNumber']);
        }
        if (\array_key_exists('manufacturerNumber', $data)) {
            $object->manufacturerNumber = $data['manufacturerNumber'];
            unset($data['manufacturerNumber']);
        }
        if (\array_key_exists('brandNumber', $data)) {
            $object->brandNumber = $data['brandNumber'];
            unset($data['brandNumber']);
        }
        if (\array_key_exists('dimensions', $data)) {
            $object->dimensions = $this->denormalizer->denormalize($data['dimensions'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseProductDraftDimensions::class, 'json', $context);
            unset($data['dimensions']);
        }
        if (\array_key_exists('minAvailableStock', $data) && $data['minAvailableStock'] !== null) {
            $object->minAvailableStock = $data['minAvailableStock'];
            unset($data['minAvailableStock']);
        }
        elseif (\array_key_exists('minAvailableStock', $data)) {
            $object->minAvailableStock = null;
            unset($data['minAvailableStock']);
        }
        if (\array_key_exists('shopCode', $data)) {
            $object->shopCode = $data['shopCode'];
            unset($data['shopCode']);
        }
        if (\array_key_exists('source', $data)) {
            $object->source = $data['source'];
            unset($data['source']);
        }
        if (\array_key_exists('productDraftId', $data)) {
            $object->productDraftId = $data['productDraftId'];
            unset($data['productDraftId']);
        }
        if (\array_key_exists('productDraftStatus', $data)) {
            $object->productDraftStatus = $data['productDraftStatus'];
            unset($data['productDraftStatus']);
        }
        if (\array_key_exists('productDraftDate', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['productDraftDate']);
            if (false === $date) {
                if (is_string($data['productDraftDate']) and 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['productDraftDate'])) {
                    try {
                        $date = new \DateTime($data['productDraftDate']);
                    } catch (\Exception) {
                        throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\InvalidDateException($data['productDraftDate'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\InvalidDateException($data['productDraftDate'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->productDraftDate = $date;
            unset($data['productDraftDate']);
        }
        if (\array_key_exists('contentsUnit', $data)) {
            $object->contentsUnit = $data['contentsUnit'];
            unset($data['contentsUnit']);
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
        if (array_key_exists('productNumber', get_object_vars($data)) && null !== ($data->productNumber ?? null)) {
            $dataArray['productNumber'] = $data->productNumber;
        }
        if (array_key_exists('productTitle', get_object_vars($data)) && null !== ($data->productTitle ?? null)) {
            $dataArray['productTitle'] = $data->productTitle;
        }
        if (array_key_exists('contentsAmount', get_object_vars($data)) && null !== ($data->contentsAmount ?? null)) {
            $dataArray['contentsAmount'] = $data->contentsAmount;
        }
        if (array_key_exists('contentsWeightGram', get_object_vars($data)) && null !== ($data->contentsWeightGram ?? null)) {
            $dataArray['contentsWeightGram'] = $data->contentsWeightGram;
        }
        if (array_key_exists('weightGram', get_object_vars($data)) && null !== ($data->weightGram ?? null)) {
            $dataArray['weightGram'] = $data->weightGram;
        }
        if (array_key_exists('ean', get_object_vars($data)) && null !== ($data->ean ?? null)) {
            $dataArray['ean'] = $data->ean;
        }
        if (array_key_exists('taricCode', get_object_vars($data)) && null !== ($data->taricCode ?? null)) {
            $dataArray['taricCode'] = $data->taricCode;
        }
        if (array_key_exists('supplierPurchasePriceEUR', get_object_vars($data)) && null !== ($data->supplierPurchasePriceEUR ?? null)) {
            $dataArray['supplierPurchasePriceEUR'] = $data->supplierPurchasePriceEUR;
        }
        if (array_key_exists('listPriceEUR', get_object_vars($data)) && null !== ($data->listPriceEUR ?? null)) {
            $dataArray['listPriceEUR'] = $data->listPriceEUR;
        }
        if (array_key_exists('taxCode', get_object_vars($data)) && null !== ($data->taxCode ?? null)) {
            $dataArray['taxCode'] = $data->taxCode;
        }
        if (array_key_exists('supplierNumber', get_object_vars($data)) && null !== ($data->supplierNumber ?? null)) {
            $dataArray['supplierNumber'] = $data->supplierNumber;
        }
        if (array_key_exists('manufacturerNumber', get_object_vars($data)) && null !== ($data->manufacturerNumber ?? null)) {
            $dataArray['manufacturerNumber'] = $data->manufacturerNumber;
        }
        if (array_key_exists('brandNumber', get_object_vars($data)) && null !== ($data->brandNumber ?? null)) {
            $dataArray['brandNumber'] = $data->brandNumber;
        }
        if (array_key_exists('dimensions', get_object_vars($data)) && null !== ($data->dimensions ?? null)) {
            $normalized = $this->normalizer->normalize($data->dimensions, 'json', $context);
            $dataArray['dimensions'] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('minAvailableStock', get_object_vars($data)) && null !== ($data->minAvailableStock ?? null)) {
            $dataArray['minAvailableStock'] = $data->minAvailableStock;
        }
        if (array_key_exists('shopCode', get_object_vars($data)) && null !== ($data->shopCode ?? null)) {
            $dataArray['shopCode'] = $data->shopCode;
        }
        if (array_key_exists('source', get_object_vars($data)) && null !== ($data->source ?? null)) {
            $dataArray['source'] = $data->source;
        }
        if (array_key_exists('productDraftId', get_object_vars($data)) && null !== ($data->productDraftId ?? null)) {
            $dataArray['productDraftId'] = $data->productDraftId;
        }
        if (array_key_exists('productDraftStatus', get_object_vars($data)) && null !== ($data->productDraftStatus ?? null)) {
            $dataArray['productDraftStatus'] = $data->productDraftStatus;
        }
        if (array_key_exists('productDraftDate', get_object_vars($data)) && null !== ($data->productDraftDate ?? null)) {
            $dataArray['productDraftDate'] = $data->productDraftDate->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('contentsUnit', get_object_vars($data)) && null !== ($data->contentsUnit ?? null)) {
            $dataArray['contentsUnit'] = $data->contentsUnit;
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductDraft::class => false];
    }
}