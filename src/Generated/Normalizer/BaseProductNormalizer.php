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
class BaseProductNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseProduct::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseProduct::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseProduct();
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
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
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
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseProduct::class => false];
    }
}