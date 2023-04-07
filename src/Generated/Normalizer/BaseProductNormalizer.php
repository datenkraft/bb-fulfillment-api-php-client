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
class BaseProductNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\BaseProduct';
    }
    public function supportsNormalization($data, $format = null) : bool
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
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('productType', $data)) {
            $object->setProductType($data['productType']);
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
        if (\array_key_exists('suggestedRetailPriceEUR', $data) && $data['suggestedRetailPriceEUR'] !== null) {
            $object->setSuggestedRetailPriceEUR($data['suggestedRetailPriceEUR']);
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
        }
        elseif (\array_key_exists('purchasePrices', $data) && $data['purchasePrices'] === null) {
            $object->setPurchasePrices(null);
        }
        if (\array_key_exists('manufacturerCountryCode', $data) && $data['manufacturerCountryCode'] !== null) {
            $object->setManufacturerCountryCode($data['manufacturerCountryCode']);
        }
        elseif (\array_key_exists('manufacturerCountryCode', $data) && $data['manufacturerCountryCode'] === null) {
            $object->setManufacturerCountryCode(null);
        }
        if (\array_key_exists('languageCode', $data)) {
            $object->setLanguageCode($data['languageCode']);
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
        if (null !== $object->getSuggestedRetailPriceEUR()) {
            $data['suggestedRetailPriceEUR'] = $object->getSuggestedRetailPriceEUR();
        }
        if (null !== $object->getPurchasePrices()) {
            $values = array();
            foreach ($object->getPurchasePrices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['purchasePrices'] = $values;
        }
        if (null !== $object->getManufacturerCountryCode()) {
            $data['manufacturerCountryCode'] = $object->getManufacturerCountryCode();
        }
        if (null !== $object->getLanguageCode()) {
            $data['languageCode'] = $object->getLanguageCode();
        }
        return $data;
    }
}