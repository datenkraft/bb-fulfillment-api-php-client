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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Product();
        if (\array_key_exists('contentsAmount', $data) && \is_int($data['contentsAmount'])) {
            $data['contentsAmount'] = (double) $data['contentsAmount'];
        }
        if (\array_key_exists('suggestedRetailPriceEUR', $data) && \is_int($data['suggestedRetailPriceEUR'])) {
            $data['suggestedRetailPriceEUR'] = (double) $data['suggestedRetailPriceEUR'];
        }
        if (\array_key_exists('listPriceEUR', $data) && \is_int($data['listPriceEUR'])) {
            $data['listPriceEUR'] = (double) $data['listPriceEUR'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('productNumber', $data)) {
            $object->setProductNumber($data['productNumber']);
            unset($data['productNumber']);
        }
        if (\array_key_exists('shopCode', $data)) {
            $object->setShopCode($data['shopCode']);
            unset($data['shopCode']);
        }
        if (\array_key_exists('productStatus', $data) && $data['productStatus'] !== null) {
            $object->setProductStatus($data['productStatus']);
            unset($data['productStatus']);
        }
        elseif (\array_key_exists('productStatus', $data) && $data['productStatus'] === null) {
            $object->setProductStatus(null);
        }
        if (\array_key_exists('productTitle', $data) && $data['productTitle'] !== null) {
            $object->setProductTitle($data['productTitle']);
            unset($data['productTitle']);
        }
        elseif (\array_key_exists('productTitle', $data) && $data['productTitle'] === null) {
            $object->setProductTitle(null);
        }
        if (\array_key_exists('productTitleOriginal', $data) && $data['productTitleOriginal'] !== null) {
            $object->setProductTitleOriginal($data['productTitleOriginal']);
            unset($data['productTitleOriginal']);
        }
        elseif (\array_key_exists('productTitleOriginal', $data) && $data['productTitleOriginal'] === null) {
            $object->setProductTitleOriginal(null);
        }
        if (\array_key_exists('image', $data)) {
            $object->setImage($this->denormalizer->denormalize($data['image'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductImage::class, 'json', $context));
            unset($data['image']);
        }
        if (\array_key_exists('articleShortDescription', $data) && $data['articleShortDescription'] !== null) {
            $object->setArticleShortDescription($data['articleShortDescription']);
            unset($data['articleShortDescription']);
        }
        elseif (\array_key_exists('articleShortDescription', $data) && $data['articleShortDescription'] === null) {
            $object->setArticleShortDescription(null);
        }
        if (\array_key_exists('articleLongDescription', $data) && $data['articleLongDescription'] !== null) {
            $object->setArticleLongDescription($data['articleLongDescription']);
            unset($data['articleLongDescription']);
        }
        elseif (\array_key_exists('articleLongDescription', $data) && $data['articleLongDescription'] === null) {
            $object->setArticleLongDescription(null);
        }
        if (\array_key_exists('taricCode', $data) && $data['taricCode'] !== null) {
            $object->setTaricCode($data['taricCode']);
            unset($data['taricCode']);
        }
        elseif (\array_key_exists('taricCode', $data) && $data['taricCode'] === null) {
            $object->setTaricCode(null);
        }
        if (\array_key_exists('listPriceEUR', $data) && $data['listPriceEUR'] !== null) {
            $object->setListPriceEUR($data['listPriceEUR']);
            unset($data['listPriceEUR']);
        }
        elseif (\array_key_exists('listPriceEUR', $data) && $data['listPriceEUR'] === null) {
            $object->setListPriceEUR(null);
        }
        if (\array_key_exists('priceType', $data)) {
            $object->setPriceType($data['priceType']);
            unset($data['priceType']);
        }
        if (\array_key_exists('taxCode', $data) && $data['taxCode'] !== null) {
            $object->setTaxCode($data['taxCode']);
            unset($data['taxCode']);
        }
        elseif (\array_key_exists('taxCode', $data) && $data['taxCode'] === null) {
            $object->setTaxCode(null);
        }
        if (\array_key_exists('manufacturerNumber', $data) && $data['manufacturerNumber'] !== null) {
            $object->setManufacturerNumber($data['manufacturerNumber']);
            unset($data['manufacturerNumber']);
        }
        elseif (\array_key_exists('manufacturerNumber', $data) && $data['manufacturerNumber'] === null) {
            $object->setManufacturerNumber(null);
        }
        if (\array_key_exists('supplierNumber', $data) && $data['supplierNumber'] !== null) {
            $object->setSupplierNumber($data['supplierNumber']);
            unset($data['supplierNumber']);
        }
        elseif (\array_key_exists('supplierNumber', $data) && $data['supplierNumber'] === null) {
            $object->setSupplierNumber(null);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
            unset($data['source']);
        }
        if (\array_key_exists('brandNumber', $data) && $data['brandNumber'] !== null) {
            $object->setBrandNumber($data['brandNumber']);
            unset($data['brandNumber']);
        }
        elseif (\array_key_exists('brandNumber', $data) && $data['brandNumber'] === null) {
            $object->setBrandNumber(null);
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
        if (\array_key_exists('productOptions', $data)) {
            $values_2 = [];
            foreach ($data['productOptions'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setProductOptions($values_2);
            unset($data['productOptions']);
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
        if ($data->isInitialized('productType') && null !== $data->getProductType()) {
            $dataArray['productType'] = $data->getProductType();
        }
        if ($data->isInitialized('articleVariantTitle') && null !== $data->getArticleVariantTitle()) {
            $dataArray['articleVariantTitle'] = $data->getArticleVariantTitle();
        }
        if ($data->isInitialized('articleVariantType') && null !== $data->getArticleVariantType()) {
            $dataArray['articleVariantType'] = $data->getArticleVariantType();
        }
        if ($data->isInitialized('articleStatus') && null !== $data->getArticleStatus()) {
            $dataArray['articleStatus'] = $data->getArticleStatus();
        }
        if ($data->isInitialized('contentsAmount') && null !== $data->getContentsAmount()) {
            $dataArray['contentsAmount'] = $data->getContentsAmount();
        }
        if ($data->isInitialized('contentsUnit') && null !== $data->getContentsUnit()) {
            $dataArray['contentsUnit'] = $data->getContentsUnit();
        }
        if ($data->isInitialized('contentsWeightGram') && null !== $data->getContentsWeightGram()) {
            $dataArray['contentsWeightGram'] = $data->getContentsWeightGram();
        }
        if ($data->isInitialized('weightGram') && null !== $data->getWeightGram()) {
            $dataArray['weightGram'] = $data->getWeightGram();
        }
        if ($data->isInitialized('variantGroup') && null !== $data->getVariantGroup()) {
            $dataArray['variantGroup'] = $data->getVariantGroup();
        }
        if ($data->isInitialized('ean') && null !== $data->getEan()) {
            $dataArray['ean'] = $data->getEan();
        }
        if ($data->isInitialized('suggestedRetailPriceEUR') && null !== $data->getSuggestedRetailPriceEUR()) {
            $dataArray['suggestedRetailPriceEUR'] = $data->getSuggestedRetailPriceEUR();
        }
        if ($data->isInitialized('purchasePrices') && null !== $data->getPurchasePrices()) {
            $values = [];
            foreach ($data->getPurchasePrices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['purchasePrices'] = $values;
        }
        if ($data->isInitialized('bundledProducts') && null !== $data->getBundledProducts()) {
            $values_1 = [];
            foreach ($data->getBundledProducts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['bundledProducts'] = $values_1;
        }
        if ($data->isInitialized('productNumberManufacturer') && null !== $data->getProductNumberManufacturer()) {
            $dataArray['productNumberManufacturer'] = $data->getProductNumberManufacturer();
        }
        if ($data->isInitialized('manufacturerCountryCode') && null !== $data->getManufacturerCountryCode()) {
            $dataArray['manufacturerCountryCode'] = $data->getManufacturerCountryCode();
        }
        if ($data->isInitialized('languageCode') && null !== $data->getLanguageCode()) {
            $dataArray['languageCode'] = $data->getLanguageCode();
        }
        if ($data->isInitialized('dimensions') && null !== $data->getDimensions()) {
            $dataArray['dimensions'] = $this->normalizer->normalize($data->getDimensions(), 'json', $context);
        }
        if ($data->isInitialized('productNumber') && null !== $data->getProductNumber()) {
            $dataArray['productNumber'] = $data->getProductNumber();
        }
        if ($data->isInitialized('shopCode') && null !== $data->getShopCode()) {
            $dataArray['shopCode'] = $data->getShopCode();
        }
        if ($data->isInitialized('productStatus') && null !== $data->getProductStatus()) {
            $dataArray['productStatus'] = $data->getProductStatus();
        }
        if ($data->isInitialized('productTitle') && null !== $data->getProductTitle()) {
            $dataArray['productTitle'] = $data->getProductTitle();
        }
        if ($data->isInitialized('productTitleOriginal') && null !== $data->getProductTitleOriginal()) {
            $dataArray['productTitleOriginal'] = $data->getProductTitleOriginal();
        }
        if ($data->isInitialized('image') && null !== $data->getImage()) {
            $dataArray['image'] = $this->normalizer->normalize($data->getImage(), 'json', $context);
        }
        if ($data->isInitialized('articleShortDescription') && null !== $data->getArticleShortDescription()) {
            $dataArray['articleShortDescription'] = $data->getArticleShortDescription();
        }
        if ($data->isInitialized('articleLongDescription') && null !== $data->getArticleLongDescription()) {
            $dataArray['articleLongDescription'] = $data->getArticleLongDescription();
        }
        if ($data->isInitialized('taricCode') && null !== $data->getTaricCode()) {
            $dataArray['taricCode'] = $data->getTaricCode();
        }
        if ($data->isInitialized('listPriceEUR') && null !== $data->getListPriceEUR()) {
            $dataArray['listPriceEUR'] = $data->getListPriceEUR();
        }
        if ($data->isInitialized('priceType') && null !== $data->getPriceType()) {
            $dataArray['priceType'] = $data->getPriceType();
        }
        if ($data->isInitialized('taxCode') && null !== $data->getTaxCode()) {
            $dataArray['taxCode'] = $data->getTaxCode();
        }
        if ($data->isInitialized('manufacturerNumber') && null !== $data->getManufacturerNumber()) {
            $dataArray['manufacturerNumber'] = $data->getManufacturerNumber();
        }
        if ($data->isInitialized('supplierNumber') && null !== $data->getSupplierNumber()) {
            $dataArray['supplierNumber'] = $data->getSupplierNumber();
        }
        if ($data->isInitialized('source') && null !== $data->getSource()) {
            $dataArray['source'] = $data->getSource();
        }
        if ($data->isInitialized('brandNumber') && null !== $data->getBrandNumber()) {
            $dataArray['brandNumber'] = $data->getBrandNumber();
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
        if ($data->isInitialized('productOptions') && null !== $data->getProductOptions()) {
            $values_2 = [];
            foreach ($data->getProductOptions() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['productOptions'] = $values_2;
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\Product::class => false];
    }
}