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
        if (\array_key_exists('productStatus', $data)) {
            $object->setProductStatus($data['productStatus']);
        }
        if (\array_key_exists('articleShortDescription', $data)) {
            $object->setArticleShortDescription($data['articleShortDescription']);
        }
        if (\array_key_exists('articleLongDescription', $data)) {
            $object->setArticleLongDescription($data['articleLongDescription']);
        }
        if (\array_key_exists('articleVariantTitle', $data)) {
            $object->setArticleVariantTitle($data['articleVariantTitle']);
        }
        if (\array_key_exists('articleVariantType', $data)) {
            $object->setArticleVariantType($data['articleVariantType']);
        }
        if (\array_key_exists('articleStatus', $data)) {
            $object->setArticleStatus($data['articleStatus']);
        }
        if (\array_key_exists('contentsAmount', $data)) {
            $object->setContentsAmount($data['contentsAmount']);
        }
        if (\array_key_exists('contentsUnit', $data)) {
            $object->setContentsUnit($data['contentsUnit']);
        }
        if (\array_key_exists('contentsWeightGram', $data)) {
            $object->setContentsWeightGram($data['contentsWeightGram']);
        }
        if (\array_key_exists('weightGram', $data)) {
            $object->setWeightGram($data['weightGram']);
        }
        if (\array_key_exists('variantGroup', $data)) {
            $object->setVariantGroup($data['variantGroup']);
        }
        if (\array_key_exists('ean', $data)) {
            $object->setEan($data['ean']);
        }
        if (\array_key_exists('taricCode', $data)) {
            $object->setTaricCode($data['taricCode']);
        }
        if (\array_key_exists('listPriceEUR', $data)) {
            $object->setListPriceEUR($data['listPriceEUR']);
        }
        if (\array_key_exists('suggestedRetailPriceEUR', $data)) {
            $object->setSuggestedRetailPriceEUR($data['suggestedRetailPriceEUR']);
        }
        if (\array_key_exists('taxCode', $data)) {
            $object->setTaxCode($data['taxCode']);
        }
        if (\array_key_exists('purchasePrices', $data)) {
            $values = array();
            foreach ($data['purchasePrices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ProductPurchasePrice', 'json', $context);
            }
            $object->setPurchasePrices($values);
        }
        if (\array_key_exists('manufacturerNumber', $data)) {
            $object->setManufacturerNumber($data['manufacturerNumber']);
        }
        if (\array_key_exists('manufacturerCountryCode', $data)) {
            $object->setManufacturerCountryCode($data['manufacturerCountryCode']);
        }
        if (\array_key_exists('supplierNumber', $data)) {
            $object->setSupplierNumber($data['supplierNumber']);
        }
        if (\array_key_exists('languageCode', $data)) {
            $object->setLanguageCode($data['languageCode']);
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
        $data['productTitle'] = $object->getProductTitle();
        $data['productTitleOriginal'] = $object->getProductTitleOriginal();
        if (null !== $object->getProductStatus()) {
            $data['productStatus'] = $object->getProductStatus();
        }
        $data['articleShortDescription'] = $object->getArticleShortDescription();
        $data['articleLongDescription'] = $object->getArticleLongDescription();
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
        $data['variantGroup'] = $object->getVariantGroup();
        if (null !== $object->getEan()) {
            $data['ean'] = $object->getEan();
        }
        $data['taricCode'] = $object->getTaricCode();
        $data['listPriceEUR'] = $object->getListPriceEUR();
        if (null !== $object->getSuggestedRetailPriceEUR()) {
            $data['suggestedRetailPriceEUR'] = $object->getSuggestedRetailPriceEUR();
        }
        $data['taxCode'] = $object->getTaxCode();
        if (null !== $object->getPurchasePrices()) {
            $values = array();
            foreach ($object->getPurchasePrices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['purchasePrices'] = $values;
        }
        $data['manufacturerNumber'] = $object->getManufacturerNumber();
        if (null !== $object->getManufacturerCountryCode()) {
            $data['manufacturerCountryCode'] = $object->getManufacturerCountryCode();
        }
        $data['supplierNumber'] = $object->getSupplierNumber();
        $data['languageCode'] = $object->getLanguageCode();
        if (null !== $object->getProductNumber()) {
            $data['productNumber'] = $object->getProductNumber();
        }
        if (null !== $object->getShopCode()) {
            $data['shopCode'] = $object->getShopCode();
        }
        return $data;
    }
}