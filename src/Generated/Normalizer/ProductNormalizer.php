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
class ProductNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Product::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Product::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Product();
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
        if (\array_key_exists('suggestedRetailPriceEUR', $data) && \is_int($data['suggestedRetailPriceEUR'])) {
            $data['suggestedRetailPriceEUR'] = (float) $data['suggestedRetailPriceEUR'];
        }
        if (\array_key_exists('listPriceEUR', $data) && \is_int($data['listPriceEUR'])) {
            $data['listPriceEUR'] = (float) $data['listPriceEUR'];
        }
        if (\array_key_exists('productType', $data)) {
            $object->productType = $data['productType'];
            unset($data['productType']);
        }
        if (\array_key_exists('articleVariantTitle', $data) && $data['articleVariantTitle'] !== null) {
            $object->articleVariantTitle = $data['articleVariantTitle'];
            unset($data['articleVariantTitle']);
        }
        elseif (\array_key_exists('articleVariantTitle', $data)) {
            $object->articleVariantTitle = null;
            unset($data['articleVariantTitle']);
        }
        if (\array_key_exists('articleVariantType', $data) && $data['articleVariantType'] !== null) {
            $object->articleVariantType = $data['articleVariantType'];
            unset($data['articleVariantType']);
        }
        elseif (\array_key_exists('articleVariantType', $data)) {
            $object->articleVariantType = null;
            unset($data['articleVariantType']);
        }
        if (\array_key_exists('articleStatus', $data) && $data['articleStatus'] !== null) {
            $object->articleStatus = $data['articleStatus'];
            unset($data['articleStatus']);
        }
        elseif (\array_key_exists('articleStatus', $data)) {
            $object->articleStatus = null;
            unset($data['articleStatus']);
        }
        if (\array_key_exists('contentsAmount', $data) && $data['contentsAmount'] !== null) {
            $object->contentsAmount = $data['contentsAmount'];
            unset($data['contentsAmount']);
        }
        elseif (\array_key_exists('contentsAmount', $data)) {
            $object->contentsAmount = null;
            unset($data['contentsAmount']);
        }
        if (\array_key_exists('contentsUnit', $data) && $data['contentsUnit'] !== null) {
            $object->contentsUnit = $data['contentsUnit'];
            unset($data['contentsUnit']);
        }
        elseif (\array_key_exists('contentsUnit', $data)) {
            $object->contentsUnit = null;
            unset($data['contentsUnit']);
        }
        if (\array_key_exists('contentsWeightGram', $data) && $data['contentsWeightGram'] !== null) {
            $object->contentsWeightGram = $data['contentsWeightGram'];
            unset($data['contentsWeightGram']);
        }
        elseif (\array_key_exists('contentsWeightGram', $data)) {
            $object->contentsWeightGram = null;
            unset($data['contentsWeightGram']);
        }
        if (\array_key_exists('weightGram', $data) && $data['weightGram'] !== null) {
            $object->weightGram = $data['weightGram'];
            unset($data['weightGram']);
        }
        elseif (\array_key_exists('weightGram', $data)) {
            $object->weightGram = null;
            unset($data['weightGram']);
        }
        if (\array_key_exists('variantGroup', $data)) {
            $value = $data['variantGroup'];
            if (is_string($data['variantGroup'])) {
                $value = $data['variantGroup'];
            } elseif (is_string($data['variantGroup'])) {
                $value = $data['variantGroup'];
            }
            $object->variantGroup = $value;
            unset($data['variantGroup']);
        }
        if (\array_key_exists('ean', $data) && $data['ean'] !== null) {
            $object->ean = $data['ean'];
            unset($data['ean']);
        }
        elseif (\array_key_exists('ean', $data)) {
            $object->ean = null;
            unset($data['ean']);
        }
        if (\array_key_exists('suggestedRetailPriceEUR', $data) && $data['suggestedRetailPriceEUR'] !== null) {
            $object->suggestedRetailPriceEUR = $data['suggestedRetailPriceEUR'];
            unset($data['suggestedRetailPriceEUR']);
        }
        elseif (\array_key_exists('suggestedRetailPriceEUR', $data)) {
            $object->suggestedRetailPriceEUR = null;
            unset($data['suggestedRetailPriceEUR']);
        }
        if (\array_key_exists('purchasePrices', $data) && $data['purchasePrices'] !== null) {
            $values = [];
            foreach ($data['purchasePrices'] as $value_1) {
                $values[] = $this->denormalizer->denormalize($value_1, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductPurchasePrice::class, 'json', $context);
            }
            $object->purchasePrices = $values;
            unset($data['purchasePrices']);
        }
        elseif (\array_key_exists('purchasePrices', $data)) {
            $object->purchasePrices = null;
            unset($data['purchasePrices']);
        }
        if (\array_key_exists('bundledProducts', $data) && $data['bundledProducts'] !== null) {
            $values_1 = [];
            foreach ($data['bundledProducts'] as $value_2) {
                $values_1[] = $this->denormalizer->denormalize($value_2, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductBundledProduct::class, 'json', $context);
            }
            $object->bundledProducts = $values_1;
            unset($data['bundledProducts']);
        }
        elseif (\array_key_exists('bundledProducts', $data)) {
            $object->bundledProducts = null;
            unset($data['bundledProducts']);
        }
        if (\array_key_exists('productNumberManufacturer', $data) && $data['productNumberManufacturer'] !== null) {
            $object->productNumberManufacturer = $data['productNumberManufacturer'];
            unset($data['productNumberManufacturer']);
        }
        elseif (\array_key_exists('productNumberManufacturer', $data)) {
            $object->productNumberManufacturer = null;
            unset($data['productNumberManufacturer']);
        }
        if (\array_key_exists('manufacturerCountryCode', $data) && $data['manufacturerCountryCode'] !== null) {
            $object->manufacturerCountryCode = $data['manufacturerCountryCode'];
            unset($data['manufacturerCountryCode']);
        }
        elseif (\array_key_exists('manufacturerCountryCode', $data)) {
            $object->manufacturerCountryCode = null;
            unset($data['manufacturerCountryCode']);
        }
        if (\array_key_exists('languageCode', $data) && $data['languageCode'] !== null) {
            $object->languageCode = $data['languageCode'];
            unset($data['languageCode']);
        }
        elseif (\array_key_exists('languageCode', $data)) {
            $object->languageCode = null;
            unset($data['languageCode']);
        }
        if (\array_key_exists('dimensions', $data) && $data['dimensions'] !== null) {
            $object->dimensions = $this->denormalizer->denormalize($data['dimensions'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseProductDimensions::class, 'json', $context);
            unset($data['dimensions']);
        }
        elseif (\array_key_exists('dimensions', $data)) {
            $object->dimensions = null;
            unset($data['dimensions']);
        }
        if (\array_key_exists('productNumber', $data)) {
            $object->productNumber = $data['productNumber'];
            unset($data['productNumber']);
        }
        if (\array_key_exists('shopCode', $data)) {
            $object->shopCode = $data['shopCode'];
            unset($data['shopCode']);
        }
        if (\array_key_exists('productStatus', $data) && $data['productStatus'] !== null) {
            $object->productStatus = $data['productStatus'];
            unset($data['productStatus']);
        }
        elseif (\array_key_exists('productStatus', $data)) {
            $object->productStatus = null;
            unset($data['productStatus']);
        }
        if (\array_key_exists('productTitle', $data) && $data['productTitle'] !== null) {
            $object->productTitle = $data['productTitle'];
            unset($data['productTitle']);
        }
        elseif (\array_key_exists('productTitle', $data)) {
            $object->productTitle = null;
            unset($data['productTitle']);
        }
        if (\array_key_exists('productTitleOriginal', $data) && $data['productTitleOriginal'] !== null) {
            $object->productTitleOriginal = $data['productTitleOriginal'];
            unset($data['productTitleOriginal']);
        }
        elseif (\array_key_exists('productTitleOriginal', $data)) {
            $object->productTitleOriginal = null;
            unset($data['productTitleOriginal']);
        }
        if (\array_key_exists('image', $data)) {
            $object->image = $this->denormalizer->denormalize($data['image'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductImage::class, 'json', $context);
            unset($data['image']);
        }
        if (\array_key_exists('articleShortDescription', $data) && $data['articleShortDescription'] !== null) {
            $object->articleShortDescription = $data['articleShortDescription'];
            unset($data['articleShortDescription']);
        }
        elseif (\array_key_exists('articleShortDescription', $data)) {
            $object->articleShortDescription = null;
            unset($data['articleShortDescription']);
        }
        if (\array_key_exists('articleLongDescription', $data) && $data['articleLongDescription'] !== null) {
            $object->articleLongDescription = $data['articleLongDescription'];
            unset($data['articleLongDescription']);
        }
        elseif (\array_key_exists('articleLongDescription', $data)) {
            $object->articleLongDescription = null;
            unset($data['articleLongDescription']);
        }
        if (\array_key_exists('taricCode', $data) && $data['taricCode'] !== null) {
            $object->taricCode = $data['taricCode'];
            unset($data['taricCode']);
        }
        elseif (\array_key_exists('taricCode', $data)) {
            $object->taricCode = null;
            unset($data['taricCode']);
        }
        if (\array_key_exists('listPriceEUR', $data) && $data['listPriceEUR'] !== null) {
            $object->listPriceEUR = $data['listPriceEUR'];
            unset($data['listPriceEUR']);
        }
        elseif (\array_key_exists('listPriceEUR', $data)) {
            $object->listPriceEUR = null;
            unset($data['listPriceEUR']);
        }
        if (\array_key_exists('priceType', $data)) {
            $object->priceType = $data['priceType'];
            unset($data['priceType']);
        }
        if (\array_key_exists('taxCode', $data) && $data['taxCode'] !== null) {
            $object->taxCode = $data['taxCode'];
            unset($data['taxCode']);
        }
        elseif (\array_key_exists('taxCode', $data)) {
            $object->taxCode = null;
            unset($data['taxCode']);
        }
        if (\array_key_exists('manufacturerNumber', $data) && $data['manufacturerNumber'] !== null) {
            $object->manufacturerNumber = $data['manufacturerNumber'];
            unset($data['manufacturerNumber']);
        }
        elseif (\array_key_exists('manufacturerNumber', $data)) {
            $object->manufacturerNumber = null;
            unset($data['manufacturerNumber']);
        }
        if (\array_key_exists('supplierNumber', $data) && $data['supplierNumber'] !== null) {
            $object->supplierNumber = $data['supplierNumber'];
            unset($data['supplierNumber']);
        }
        elseif (\array_key_exists('supplierNumber', $data)) {
            $object->supplierNumber = null;
            unset($data['supplierNumber']);
        }
        if (\array_key_exists('source', $data)) {
            $object->source = $data['source'];
            unset($data['source']);
        }
        if (\array_key_exists('brandNumber', $data) && $data['brandNumber'] !== null) {
            $object->brandNumber = $data['brandNumber'];
            unset($data['brandNumber']);
        }
        elseif (\array_key_exists('brandNumber', $data)) {
            $object->brandNumber = null;
            unset($data['brandNumber']);
        }
        if (\array_key_exists('stocked', $data)) {
            $object->stocked = $data['stocked'];
            unset($data['stocked']);
        }
        if (\array_key_exists('reserved', $data)) {
            $object->reserved = $data['reserved'];
            unset($data['reserved']);
        }
        if (\array_key_exists('available', $data)) {
            $object->available = $data['available'];
            unset($data['available']);
        }
        if (\array_key_exists('incoming', $data)) {
            $object->incoming = $data['incoming'];
            unset($data['incoming']);
        }
        if (\array_key_exists('locked', $data)) {
            $object->locked = $data['locked'];
            unset($data['locked']);
        }
        if (\array_key_exists('overbookingPossibilityStatus', $data)) {
            $object->overbookingPossibilityStatus = $data['overbookingPossibilityStatus'];
            unset($data['overbookingPossibilityStatus']);
        }
        if (\array_key_exists('reservedFor', $data)) {
            $object->reservedFor = $this->denormalizer->denormalize($data['reservedFor'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReservedFor::class, 'json', $context);
            unset($data['reservedFor']);
        }
        if (\array_key_exists('externalListings', $data) && $data['externalListings'] !== null) {
            $values_2 = [];
            foreach ($data['externalListings'] as $value_3) {
                $values_2[] = $this->denormalizer->denormalize($value_3, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ExternalListing::class, 'json', $context);
            }
            $object->externalListings = $values_2;
            unset($data['externalListings']);
        }
        elseif (\array_key_exists('externalListings', $data)) {
            $object->externalListings = null;
            unset($data['externalListings']);
        }
        if (\array_key_exists('productOptions', $data)) {
            $values_3 = [];
            foreach ($data['productOptions'] as $value_4) {
                $values_3[] = $value_4;
            }
            $object->productOptions = $values_3;
            unset($data['productOptions']);
        }
        if (\array_key_exists('articleItemStatus', $data) && $data['articleItemStatus'] !== null) {
            $object->articleItemStatus = $data['articleItemStatus'];
            unset($data['articleItemStatus']);
        }
        elseif (\array_key_exists('articleItemStatus', $data)) {
            $object->articleItemStatus = null;
            unset($data['articleItemStatus']);
        }
        if (\array_key_exists('minAvailableStock', $data) && $data['minAvailableStock'] !== null) {
            $object->minAvailableStock = $data['minAvailableStock'];
            unset($data['minAvailableStock']);
        }
        elseif (\array_key_exists('minAvailableStock', $data)) {
            $object->minAvailableStock = null;
            unset($data['minAvailableStock']);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('productType', get_object_vars($data)) && null !== ($data->productType ?? null)) {
            $dataArray['productType'] = $data->productType;
        }
        if (array_key_exists('articleVariantTitle', get_object_vars($data)) && null !== ($data->articleVariantTitle ?? null)) {
            $dataArray['articleVariantTitle'] = $data->articleVariantTitle;
        }
        if (array_key_exists('articleVariantType', get_object_vars($data)) && null !== ($data->articleVariantType ?? null)) {
            $dataArray['articleVariantType'] = $data->articleVariantType;
        }
        if (array_key_exists('articleStatus', get_object_vars($data)) && null !== ($data->articleStatus ?? null)) {
            $dataArray['articleStatus'] = $data->articleStatus;
        }
        if (array_key_exists('contentsAmount', get_object_vars($data)) && null !== ($data->contentsAmount ?? null)) {
            $dataArray['contentsAmount'] = $data->contentsAmount;
        }
        if (array_key_exists('contentsUnit', get_object_vars($data)) && null !== ($data->contentsUnit ?? null)) {
            $dataArray['contentsUnit'] = $data->contentsUnit;
        }
        if (array_key_exists('contentsWeightGram', get_object_vars($data)) && null !== ($data->contentsWeightGram ?? null)) {
            $dataArray['contentsWeightGram'] = $data->contentsWeightGram;
        }
        if (array_key_exists('weightGram', get_object_vars($data)) && null !== ($data->weightGram ?? null)) {
            $dataArray['weightGram'] = $data->weightGram;
        }
        if (array_key_exists('variantGroup', get_object_vars($data)) && null !== ($data->variantGroup ?? null)) {
            $value = $data->variantGroup;
            if (is_string($data->variantGroup)) {
                $value = $data->variantGroup;
            } elseif (is_string($data->variantGroup)) {
                $value = $data->variantGroup;
            }
            $dataArray['variantGroup'] = $value;
        }
        if (array_key_exists('ean', get_object_vars($data)) && null !== ($data->ean ?? null)) {
            $dataArray['ean'] = $data->ean;
        }
        if (array_key_exists('suggestedRetailPriceEUR', get_object_vars($data)) && null !== ($data->suggestedRetailPriceEUR ?? null)) {
            $dataArray['suggestedRetailPriceEUR'] = $data->suggestedRetailPriceEUR;
        }
        if (array_key_exists('purchasePrices', get_object_vars($data)) && null !== ($data->purchasePrices ?? null)) {
            $values = [];
            foreach ($data->purchasePrices as $value_1) {
                $normalized = $value_1 === null ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values[] = \is_iterable($normalized) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['purchasePrices'] = $values;
        }
        if (array_key_exists('bundledProducts', get_object_vars($data)) && null !== ($data->bundledProducts ?? null)) {
            $values_1 = [];
            foreach ($data->bundledProducts as $value_2) {
                $normalized_1 = $value_2 === null ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_1[] = \is_iterable($normalized_1) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['bundledProducts'] = $values_1;
        }
        if (array_key_exists('productNumberManufacturer', get_object_vars($data)) && null !== ($data->productNumberManufacturer ?? null)) {
            $dataArray['productNumberManufacturer'] = $data->productNumberManufacturer;
        }
        if (array_key_exists('manufacturerCountryCode', get_object_vars($data)) && null !== ($data->manufacturerCountryCode ?? null)) {
            $dataArray['manufacturerCountryCode'] = $data->manufacturerCountryCode;
        }
        if (array_key_exists('languageCode', get_object_vars($data)) && null !== ($data->languageCode ?? null)) {
            $dataArray['languageCode'] = $data->languageCode;
        }
        if (array_key_exists('dimensions', get_object_vars($data)) && null !== ($data->dimensions ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->dimensions, 'json', $context);
            $dataArray['dimensions'] = \is_iterable($normalized_2) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('productNumber', get_object_vars($data)) && null !== ($data->productNumber ?? null)) {
            $dataArray['productNumber'] = $data->productNumber;
        }
        if (array_key_exists('shopCode', get_object_vars($data)) && null !== ($data->shopCode ?? null)) {
            $dataArray['shopCode'] = $data->shopCode;
        }
        if (array_key_exists('productStatus', get_object_vars($data)) && null !== ($data->productStatus ?? null)) {
            $dataArray['productStatus'] = $data->productStatus;
        }
        if (array_key_exists('productTitle', get_object_vars($data)) && null !== ($data->productTitle ?? null)) {
            $dataArray['productTitle'] = $data->productTitle;
        }
        if (array_key_exists('productTitleOriginal', get_object_vars($data)) && null !== ($data->productTitleOriginal ?? null)) {
            $dataArray['productTitleOriginal'] = $data->productTitleOriginal;
        }
        if (array_key_exists('image', get_object_vars($data)) && null !== ($data->image ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->image, 'json', $context);
            $dataArray['image'] = \is_iterable($normalized_3) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('articleShortDescription', get_object_vars($data)) && null !== ($data->articleShortDescription ?? null)) {
            $dataArray['articleShortDescription'] = $data->articleShortDescription;
        }
        if (array_key_exists('articleLongDescription', get_object_vars($data)) && null !== ($data->articleLongDescription ?? null)) {
            $dataArray['articleLongDescription'] = $data->articleLongDescription;
        }
        if (array_key_exists('taricCode', get_object_vars($data)) && null !== ($data->taricCode ?? null)) {
            $dataArray['taricCode'] = $data->taricCode;
        }
        if (array_key_exists('listPriceEUR', get_object_vars($data)) && null !== ($data->listPriceEUR ?? null)) {
            $dataArray['listPriceEUR'] = $data->listPriceEUR;
        }
        if (array_key_exists('priceType', get_object_vars($data)) && null !== ($data->priceType ?? null)) {
            $dataArray['priceType'] = $data->priceType;
        }
        if (array_key_exists('taxCode', get_object_vars($data)) && null !== ($data->taxCode ?? null)) {
            $dataArray['taxCode'] = $data->taxCode;
        }
        if (array_key_exists('manufacturerNumber', get_object_vars($data)) && null !== ($data->manufacturerNumber ?? null)) {
            $dataArray['manufacturerNumber'] = $data->manufacturerNumber;
        }
        if (array_key_exists('supplierNumber', get_object_vars($data)) && null !== ($data->supplierNumber ?? null)) {
            $dataArray['supplierNumber'] = $data->supplierNumber;
        }
        if (array_key_exists('source', get_object_vars($data)) && null !== ($data->source ?? null)) {
            $dataArray['source'] = $data->source;
        }
        if (array_key_exists('brandNumber', get_object_vars($data)) && null !== ($data->brandNumber ?? null)) {
            $dataArray['brandNumber'] = $data->brandNumber;
        }
        if (array_key_exists('stocked', get_object_vars($data)) && null !== ($data->stocked ?? null)) {
            $dataArray['stocked'] = $data->stocked;
        }
        if (array_key_exists('reserved', get_object_vars($data)) && null !== ($data->reserved ?? null)) {
            $dataArray['reserved'] = $data->reserved;
        }
        if (array_key_exists('available', get_object_vars($data)) && null !== ($data->available ?? null)) {
            $dataArray['available'] = $data->available;
        }
        if (array_key_exists('incoming', get_object_vars($data)) && null !== ($data->incoming ?? null)) {
            $dataArray['incoming'] = $data->incoming;
        }
        if (array_key_exists('locked', get_object_vars($data)) && null !== ($data->locked ?? null)) {
            $dataArray['locked'] = $data->locked;
        }
        if (array_key_exists('overbookingPossibilityStatus', get_object_vars($data)) && null !== ($data->overbookingPossibilityStatus ?? null)) {
            $dataArray['overbookingPossibilityStatus'] = $data->overbookingPossibilityStatus;
        }
        if (array_key_exists('reservedFor', get_object_vars($data)) && null !== ($data->reservedFor ?? null)) {
            $normalized_4 = $this->normalizer->normalize($data->reservedFor, 'json', $context);
            $dataArray['reservedFor'] = \is_iterable($normalized_4) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        if (array_key_exists('externalListings', get_object_vars($data)) && null !== ($data->externalListings ?? null)) {
            $values_2 = [];
            foreach ($data->externalListings as $value_3) {
                $normalized_5 = $value_3 === null ? null : $this->normalizer->normalize($value_3, 'json', $context);
                $values_2[] = \is_iterable($normalized_5) ? new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\JsonObject($normalized_5) : $normalized_5;
            }
            $dataArray['externalListings'] = $values_2;
        }
        if (array_key_exists('productOptions', get_object_vars($data)) && null !== ($data->productOptions ?? null)) {
            $values_3 = [];
            foreach ($data->productOptions as $value_4) {
                $values_3[] = $value_4;
            }
            $dataArray['productOptions'] = $values_3;
        }
        if (array_key_exists('articleItemStatus', get_object_vars($data)) && null !== ($data->articleItemStatus ?? null)) {
            $dataArray['articleItemStatus'] = $data->articleItemStatus;
        }
        if (array_key_exists('minAvailableStock', get_object_vars($data)) && null !== ($data->minAvailableStock ?? null)) {
            $dataArray['minAvailableStock'] = $data->minAvailableStock;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Product::class => false];
    }
}