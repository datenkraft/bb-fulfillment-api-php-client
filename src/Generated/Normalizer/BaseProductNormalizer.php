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
class BaseProductNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BaseProduct';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BaseProduct';
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
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseProduct();
        if (\array_key_exists('contentsAmount', $data) && \is_int($data['contentsAmount'])) {
            $data['contentsAmount'] = (double) $data['contentsAmount'];
        }
        if (\array_key_exists('suggestedRetailPriceEUR', $data) && \is_int($data['suggestedRetailPriceEUR'])) {
            $data['suggestedRetailPriceEUR'] = (double) $data['suggestedRetailPriceEUR'];
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
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}