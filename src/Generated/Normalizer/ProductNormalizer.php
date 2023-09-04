<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\CheckArray;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Product';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Product';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
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
            $values = array();
            foreach ($data['purchasePrices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ProductPurchasePrice', 'json', $context);
            }
            $object->setPurchasePrices($values);
            unset($data['purchasePrices']);
        }
        elseif (\array_key_exists('purchasePrices', $data) && $data['purchasePrices'] === null) {
            $object->setPurchasePrices(null);
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
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('productType') && null !== $object->getProductType()) {
            $data['productType'] = $object->getProductType();
        }
        if ($object->isInitialized('articleVariantTitle') && null !== $object->getArticleVariantTitle()) {
            $data['articleVariantTitle'] = $object->getArticleVariantTitle();
        }
        if ($object->isInitialized('articleVariantType') && null !== $object->getArticleVariantType()) {
            $data['articleVariantType'] = $object->getArticleVariantType();
        }
        if ($object->isInitialized('articleStatus') && null !== $object->getArticleStatus()) {
            $data['articleStatus'] = $object->getArticleStatus();
        }
        if ($object->isInitialized('contentsAmount') && null !== $object->getContentsAmount()) {
            $data['contentsAmount'] = $object->getContentsAmount();
        }
        if ($object->isInitialized('contentsUnit') && null !== $object->getContentsUnit()) {
            $data['contentsUnit'] = $object->getContentsUnit();
        }
        if ($object->isInitialized('contentsWeightGram') && null !== $object->getContentsWeightGram()) {
            $data['contentsWeightGram'] = $object->getContentsWeightGram();
        }
        if ($object->isInitialized('weightGram') && null !== $object->getWeightGram()) {
            $data['weightGram'] = $object->getWeightGram();
        }
        if ($object->isInitialized('variantGroup') && null !== $object->getVariantGroup()) {
            $data['variantGroup'] = $object->getVariantGroup();
        }
        if ($object->isInitialized('ean') && null !== $object->getEan()) {
            $data['ean'] = $object->getEan();
        }
        if ($object->isInitialized('suggestedRetailPriceEUR') && null !== $object->getSuggestedRetailPriceEUR()) {
            $data['suggestedRetailPriceEUR'] = $object->getSuggestedRetailPriceEUR();
        }
        if ($object->isInitialized('purchasePrices') && null !== $object->getPurchasePrices()) {
            $values = array();
            foreach ($object->getPurchasePrices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['purchasePrices'] = $values;
        }
        if ($object->isInitialized('productNumberManufacturer') && null !== $object->getProductNumberManufacturer()) {
            $data['productNumberManufacturer'] = $object->getProductNumberManufacturer();
        }
        if ($object->isInitialized('manufacturerCountryCode') && null !== $object->getManufacturerCountryCode()) {
            $data['manufacturerCountryCode'] = $object->getManufacturerCountryCode();
        }
        if ($object->isInitialized('languageCode') && null !== $object->getLanguageCode()) {
            $data['languageCode'] = $object->getLanguageCode();
        }
        if ($object->isInitialized('productNumber') && null !== $object->getProductNumber()) {
            $data['productNumber'] = $object->getProductNumber();
        }
        if ($object->isInitialized('shopCode') && null !== $object->getShopCode()) {
            $data['shopCode'] = $object->getShopCode();
        }
        if ($object->isInitialized('productStatus') && null !== $object->getProductStatus()) {
            $data['productStatus'] = $object->getProductStatus();
        }
        if ($object->isInitialized('productTitle') && null !== $object->getProductTitle()) {
            $data['productTitle'] = $object->getProductTitle();
        }
        if ($object->isInitialized('productTitleOriginal') && null !== $object->getProductTitleOriginal()) {
            $data['productTitleOriginal'] = $object->getProductTitleOriginal();
        }
        if ($object->isInitialized('articleShortDescription') && null !== $object->getArticleShortDescription()) {
            $data['articleShortDescription'] = $object->getArticleShortDescription();
        }
        if ($object->isInitialized('articleLongDescription') && null !== $object->getArticleLongDescription()) {
            $data['articleLongDescription'] = $object->getArticleLongDescription();
        }
        if ($object->isInitialized('taricCode') && null !== $object->getTaricCode()) {
            $data['taricCode'] = $object->getTaricCode();
        }
        if ($object->isInitialized('listPriceEUR') && null !== $object->getListPriceEUR()) {
            $data['listPriceEUR'] = $object->getListPriceEUR();
        }
        if ($object->isInitialized('taxCode') && null !== $object->getTaxCode()) {
            $data['taxCode'] = $object->getTaxCode();
        }
        if ($object->isInitialized('manufacturerNumber') && null !== $object->getManufacturerNumber()) {
            $data['manufacturerNumber'] = $object->getManufacturerNumber();
        }
        if ($object->isInitialized('supplierNumber') && null !== $object->getSupplierNumber()) {
            $data['supplierNumber'] = $object->getSupplierNumber();
        }
        if ($object->isInitialized('source') && null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}