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
            $data['contentsAmount'] = (double) $data['contentsAmount'];
        }
        if (\array_key_exists('suggestedRetailPriceEUR', $data) && \is_int($data['suggestedRetailPriceEUR'])) {
            $data['suggestedRetailPriceEUR'] = (double) $data['suggestedRetailPriceEUR'];
        }
        if (\array_key_exists('productType', $data)) {
            $object->setProductType($data['productType']);
            unset($data['productType']);
        }
        if (\array_key_exists('articleVariantTitle', $data) && $data['articleVariantTitle'] !== null) {
            $object->setArticleVariantTitle($data['articleVariantTitle']);
            unset($data['articleVariantTitle']);
        }
        elseif (\array_key_exists('articleVariantTitle', $data) && $data['articleVariantTitle'] === null) {
            $object->setArticleVariantTitle(null);
        }
        if (\array_key_exists('articleVariantType', $data) && $data['articleVariantType'] !== null) {
            $object->setArticleVariantType($data['articleVariantType']);
            unset($data['articleVariantType']);
        }
        elseif (\array_key_exists('articleVariantType', $data) && $data['articleVariantType'] === null) {
            $object->setArticleVariantType(null);
        }
        if (\array_key_exists('articleStatus', $data) && $data['articleStatus'] !== null) {
            $object->setArticleStatus($data['articleStatus']);
            unset($data['articleStatus']);
        }
        elseif (\array_key_exists('articleStatus', $data) && $data['articleStatus'] === null) {
            $object->setArticleStatus(null);
        }
        if (\array_key_exists('contentsAmount', $data) && $data['contentsAmount'] !== null) {
            $object->setContentsAmount($data['contentsAmount']);
            unset($data['contentsAmount']);
        }
        elseif (\array_key_exists('contentsAmount', $data) && $data['contentsAmount'] === null) {
            $object->setContentsAmount(null);
        }
        if (\array_key_exists('contentsUnit', $data) && $data['contentsUnit'] !== null) {
            $object->setContentsUnit($data['contentsUnit']);
            unset($data['contentsUnit']);
        }
        elseif (\array_key_exists('contentsUnit', $data) && $data['contentsUnit'] === null) {
            $object->setContentsUnit(null);
        }
        if (\array_key_exists('contentsWeightGram', $data) && $data['contentsWeightGram'] !== null) {
            $object->setContentsWeightGram($data['contentsWeightGram']);
            unset($data['contentsWeightGram']);
        }
        elseif (\array_key_exists('contentsWeightGram', $data) && $data['contentsWeightGram'] === null) {
            $object->setContentsWeightGram(null);
        }
        if (\array_key_exists('weightGram', $data) && $data['weightGram'] !== null) {
            $object->setWeightGram($data['weightGram']);
            unset($data['weightGram']);
        }
        elseif (\array_key_exists('weightGram', $data) && $data['weightGram'] === null) {
            $object->setWeightGram(null);
        }
        if (\array_key_exists('variantGroup', $data)) {
            $object->setVariantGroup($data['variantGroup']);
            unset($data['variantGroup']);
        }
        if (\array_key_exists('ean', $data) && $data['ean'] !== null) {
            $object->setEan($data['ean']);
            unset($data['ean']);
        }
        elseif (\array_key_exists('ean', $data) && $data['ean'] === null) {
            $object->setEan(null);
        }
        if (\array_key_exists('suggestedRetailPriceEUR', $data) && $data['suggestedRetailPriceEUR'] !== null) {
            $object->setSuggestedRetailPriceEUR($data['suggestedRetailPriceEUR']);
            unset($data['suggestedRetailPriceEUR']);
        }
        elseif (\array_key_exists('suggestedRetailPriceEUR', $data) && $data['suggestedRetailPriceEUR'] === null) {
            $object->setSuggestedRetailPriceEUR(null);
        }
        if (\array_key_exists('purchasePrices', $data) && $data['purchasePrices'] !== null) {
            $values = [];
            foreach ($data['purchasePrices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductPurchasePrice::class, 'json', $context);
            }
            $object->setPurchasePrices($values);
            unset($data['purchasePrices']);
        }
        elseif (\array_key_exists('purchasePrices', $data) && $data['purchasePrices'] === null) {
            $object->setPurchasePrices(null);
        }
        if (\array_key_exists('bundledProducts', $data) && $data['bundledProducts'] !== null) {
            $values_1 = [];
            foreach ($data['bundledProducts'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductBundledProduct::class, 'json', $context);
            }
            $object->setBundledProducts($values_1);
            unset($data['bundledProducts']);
        }
        elseif (\array_key_exists('bundledProducts', $data) && $data['bundledProducts'] === null) {
            $object->setBundledProducts(null);
        }
        if (\array_key_exists('productNumberManufacturer', $data) && $data['productNumberManufacturer'] !== null) {
            $object->setProductNumberManufacturer($data['productNumberManufacturer']);
            unset($data['productNumberManufacturer']);
        }
        elseif (\array_key_exists('productNumberManufacturer', $data) && $data['productNumberManufacturer'] === null) {
            $object->setProductNumberManufacturer(null);
        }
        if (\array_key_exists('manufacturerCountryCode', $data) && $data['manufacturerCountryCode'] !== null) {
            $object->setManufacturerCountryCode($data['manufacturerCountryCode']);
            unset($data['manufacturerCountryCode']);
        }
        elseif (\array_key_exists('manufacturerCountryCode', $data) && $data['manufacturerCountryCode'] === null) {
            $object->setManufacturerCountryCode(null);
        }
        if (\array_key_exists('languageCode', $data) && $data['languageCode'] !== null) {
            $object->setLanguageCode($data['languageCode']);
            unset($data['languageCode']);
        }
        elseif (\array_key_exists('languageCode', $data) && $data['languageCode'] === null) {
            $object->setLanguageCode(null);
        }
        if (\array_key_exists('dimensions', $data) && $data['dimensions'] !== null) {
            $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseProductDimensions::class, 'json', $context));
            unset($data['dimensions']);
        }
        elseif (\array_key_exists('dimensions', $data) && $data['dimensions'] === null) {
            $object->setDimensions(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('productType') && null !== $data->getProductType()) {
            $dataArray['productType'] = $data->getProductType();
        }
        if ($data->isInitialized('articleVariantTitle')) {
            $dataArray['articleVariantTitle'] = $data->getArticleVariantTitle();
        }
        if ($data->isInitialized('articleVariantType')) {
            $dataArray['articleVariantType'] = $data->getArticleVariantType();
        }
        if ($data->isInitialized('articleStatus')) {
            $dataArray['articleStatus'] = $data->getArticleStatus();
        }
        if ($data->isInitialized('contentsAmount')) {
            $dataArray['contentsAmount'] = $data->getContentsAmount();
        }
        if ($data->isInitialized('contentsUnit')) {
            $dataArray['contentsUnit'] = $data->getContentsUnit();
        }
        if ($data->isInitialized('contentsWeightGram')) {
            $dataArray['contentsWeightGram'] = $data->getContentsWeightGram();
        }
        if ($data->isInitialized('weightGram')) {
            $dataArray['weightGram'] = $data->getWeightGram();
        }
        if ($data->isInitialized('variantGroup') && null !== $data->getVariantGroup()) {
            $dataArray['variantGroup'] = $data->getVariantGroup();
        }
        if ($data->isInitialized('ean')) {
            $dataArray['ean'] = $data->getEan();
        }
        if ($data->isInitialized('suggestedRetailPriceEUR')) {
            $dataArray['suggestedRetailPriceEUR'] = $data->getSuggestedRetailPriceEUR();
        }
        if ($data->isInitialized('purchasePrices')) {
            $values = [];
            foreach ($data->getPurchasePrices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['purchasePrices'] = $values;
        }
        if ($data->isInitialized('bundledProducts')) {
            $values_1 = [];
            foreach ($data->getBundledProducts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['bundledProducts'] = $values_1;
        }
        if ($data->isInitialized('productNumberManufacturer')) {
            $dataArray['productNumberManufacturer'] = $data->getProductNumberManufacturer();
        }
        if ($data->isInitialized('manufacturerCountryCode')) {
            $dataArray['manufacturerCountryCode'] = $data->getManufacturerCountryCode();
        }
        if ($data->isInitialized('languageCode')) {
            $dataArray['languageCode'] = $data->getLanguageCode();
        }
        if ($data->isInitialized('dimensions')) {
            $dataArray['dimensions'] = $this->normalizer->normalize($data->getDimensions(), 'json', $context);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseProduct::class => false];
    }
}