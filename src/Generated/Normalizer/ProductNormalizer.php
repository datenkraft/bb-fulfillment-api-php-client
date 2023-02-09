<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\Normalizer\CheckArray;
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
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\Product';
    }
    public function supportsNormalization($data, $format = null) : bool
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
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('productType', $data)) {
            $object->setProductType($data['productType']);
        }
        if (\array_key_exists('productTitle', $data)) {
            $object->setProductTitle($data['productTitle']);
        }
        if (\array_key_exists('productTitleOriginal', $data)) {
            $object->setProductTitleOriginal($data['productTitleOriginal']);
        }
        if (\array_key_exists('articleLongDescription', $data)) {
            $object->setArticleLongDescription($data['articleLongDescription']);
        }
        if (\array_key_exists('articleVariantTitle', $data) && $data['articleVariantTitle'] !== null) {
            $object->setArticleVariantTitle($data['articleVariantTitle']);
        }
        elseif (\array_key_exists('articleVariantTitle', $data) && $data['articleVariantTitle'] === null) {
            $object->setArticleVariantTitle(null);
        }
        if (\array_key_exists('articleVariantType', $data) && $data['articleVariantType'] !== null) {
            $object->setArticleVariantType($data['articleVariantType']);
        }
        elseif (\array_key_exists('articleVariantType', $data) && $data['articleVariantType'] === null) {
            $object->setArticleVariantType(null);
        }
        if (\array_key_exists('articleStatus', $data) && $data['articleStatus'] !== null) {
            $object->setArticleStatus($data['articleStatus']);
        }
        elseif (\array_key_exists('articleStatus', $data) && $data['articleStatus'] === null) {
            $object->setArticleStatus(null);
        }
        if (\array_key_exists('contentsAmount', $data) && $data['contentsAmount'] !== null) {
            $object->setContentsAmount($data['contentsAmount']);
        }
        elseif (\array_key_exists('contentsAmount', $data) && $data['contentsAmount'] === null) {
            $object->setContentsAmount(null);
        }
        if (\array_key_exists('contentsUnit', $data) && $data['contentsUnit'] !== null) {
            $object->setContentsUnit($data['contentsUnit']);
        }
        elseif (\array_key_exists('contentsUnit', $data) && $data['contentsUnit'] === null) {
            $object->setContentsUnit(null);
        }
        if (\array_key_exists('contentsWeightGram', $data) && $data['contentsWeightGram'] !== null) {
            $object->setContentsWeightGram($data['contentsWeightGram']);
        }
        elseif (\array_key_exists('contentsWeightGram', $data) && $data['contentsWeightGram'] === null) {
            $object->setContentsWeightGram(null);
        }
        if (\array_key_exists('weightGram', $data) && $data['weightGram'] !== null) {
            $object->setWeightGram($data['weightGram']);
        }
        elseif (\array_key_exists('weightGram', $data) && $data['weightGram'] === null) {
            $object->setWeightGram(null);
        }
        if (\array_key_exists('variantGroup', $data)) {
            $object->setVariantGroup($data['variantGroup']);
        }
        if (\array_key_exists('ean', $data) && $data['ean'] !== null) {
            $object->setEan($data['ean']);
        }
        elseif (\array_key_exists('ean', $data) && $data['ean'] === null) {
            $object->setEan(null);
        }
        if (\array_key_exists('taricCode', $data)) {
            $object->setTaricCode($data['taricCode']);
        }
        if (\array_key_exists('listPriceEUR', $data)) {
            $object->setListPriceEUR($data['listPriceEUR']);
        }
        if (\array_key_exists('suggestedRetailPriceEUR', $data) && $data['suggestedRetailPriceEUR'] !== null) {
            $object->setSuggestedRetailPriceEUR($data['suggestedRetailPriceEUR']);
        }
        elseif (\array_key_exists('suggestedRetailPriceEUR', $data) && $data['suggestedRetailPriceEUR'] === null) {
            $object->setSuggestedRetailPriceEUR(null);
        }
        if (\array_key_exists('taxCode', $data)) {
            $object->setTaxCode($data['taxCode']);
        }
        if (\array_key_exists('purchasePrices', $data) && $data['purchasePrices'] !== null) {
            $values = array();
            foreach ($data['purchasePrices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ProductPurchasePrice', 'json', $context);
            }
            $object->setPurchasePrices($values);
        }
        elseif (\array_key_exists('purchasePrices', $data) && $data['purchasePrices'] === null) {
            $object->setPurchasePrices(null);
        }
        if (\array_key_exists('manufacturerNumber', $data)) {
            $object->setManufacturerNumber($data['manufacturerNumber']);
        }
        if (\array_key_exists('manufacturerCountryCode', $data) && $data['manufacturerCountryCode'] !== null) {
            $object->setManufacturerCountryCode($data['manufacturerCountryCode']);
        }
        elseif (\array_key_exists('manufacturerCountryCode', $data) && $data['manufacturerCountryCode'] === null) {
            $object->setManufacturerCountryCode(null);
        }
        if (\array_key_exists('supplierNumber', $data)) {
            $object->setSupplierNumber($data['supplierNumber']);
        }
        if (\array_key_exists('languageCode', $data)) {
            $object->setLanguageCode($data['languageCode']);
        }
        if (\array_key_exists('productStatus', $data)) {
            $object->setProductStatus($data['productStatus']);
        }
        if (\array_key_exists('articleShortDescription', $data) && $data['articleShortDescription'] !== null) {
            $object->setArticleShortDescription($data['articleShortDescription']);
        }
        elseif (\array_key_exists('articleShortDescription', $data) && $data['articleShortDescription'] === null) {
            $object->setArticleShortDescription(null);
        }
        if (\array_key_exists('productNumber', $data)) {
            $object->setProductNumber($data['productNumber']);
        }
        if (\array_key_exists('shopCode', $data)) {
            $object->setShopCode($data['shopCode']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getProductType()) {
            $data['productType'] = $object->getProductType();
        }
        if (null !== $object->getProductTitle()) {
            $data['productTitle'] = $object->getProductTitle();
        }
        if (null !== $object->getProductTitleOriginal()) {
            $data['productTitleOriginal'] = $object->getProductTitleOriginal();
        }
        if (null !== $object->getArticleLongDescription()) {
            $data['articleLongDescription'] = $object->getArticleLongDescription();
        }
        if (null !== $object->getArticleVariantTitle()) {
            $data['articleVariantTitle'] = $object->getArticleVariantTitle();
        }
        if (null !== $object->getArticleVariantType()) {
            $data['articleVariantType'] = $object->getArticleVariantType();
        }
        if (null !== $object->getArticleStatus()) {
            $data['articleStatus'] = $object->getArticleStatus();
        }
        if (null !== $object->getContentsAmount()) {
            $data['contentsAmount'] = $object->getContentsAmount();
        }
        if (null !== $object->getContentsUnit()) {
            $data['contentsUnit'] = $object->getContentsUnit();
        }
        if (null !== $object->getContentsWeightGram()) {
            $data['contentsWeightGram'] = $object->getContentsWeightGram();
        }
        if (null !== $object->getWeightGram()) {
            $data['weightGram'] = $object->getWeightGram();
        }
        if (null !== $object->getVariantGroup()) {
            $data['variantGroup'] = $object->getVariantGroup();
        }
        if (null !== $object->getEan()) {
            $data['ean'] = $object->getEan();
        }
        if (null !== $object->getTaricCode()) {
            $data['taricCode'] = $object->getTaricCode();
        }
        if (null !== $object->getListPriceEUR()) {
            $data['listPriceEUR'] = $object->getListPriceEUR();
        }
        if (null !== $object->getSuggestedRetailPriceEUR()) {
            $data['suggestedRetailPriceEUR'] = $object->getSuggestedRetailPriceEUR();
        }
        if (null !== $object->getTaxCode()) {
            $data['taxCode'] = $object->getTaxCode();
        }
        if (null !== $object->getPurchasePrices()) {
            $values = array();
            foreach ($object->getPurchasePrices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['purchasePrices'] = $values;
        }
        if (null !== $object->getManufacturerNumber()) {
            $data['manufacturerNumber'] = $object->getManufacturerNumber();
        }
        if (null !== $object->getManufacturerCountryCode()) {
            $data['manufacturerCountryCode'] = $object->getManufacturerCountryCode();
        }
        if (null !== $object->getSupplierNumber()) {
            $data['supplierNumber'] = $object->getSupplierNumber();
        }
        if (null !== $object->getLanguageCode()) {
            $data['languageCode'] = $object->getLanguageCode();
        }
        if (null !== $object->getProductStatus()) {
            $data['productStatus'] = $object->getProductStatus();
        }
        if (null !== $object->getArticleShortDescription()) {
            $data['articleShortDescription'] = $object->getArticleShortDescription();
        }
        if (null !== $object->getProductNumber()) {
            $data['productNumber'] = $object->getProductNumber();
        }
        if (null !== $object->getShopCode()) {
            $data['shopCode'] = $object->getShopCode();
        }
        return $data;
    }
}