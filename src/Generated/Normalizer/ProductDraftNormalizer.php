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
class ProductDraftNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ProductDraft';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ProductDraft';
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
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductDraft();
        if (\array_key_exists('contentsAmount', $data) && \is_int($data['contentsAmount'])) {
            $data['contentsAmount'] = (double) $data['contentsAmount'];
        }
        if (\array_key_exists('supplierPurchasePriceEUR', $data) && \is_int($data['supplierPurchasePriceEUR'])) {
            $data['supplierPurchasePriceEUR'] = (double) $data['supplierPurchasePriceEUR'];
        }
        if (\array_key_exists('listPriceEUR', $data) && \is_int($data['listPriceEUR'])) {
            $data['listPriceEUR'] = (double) $data['listPriceEUR'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('productNumber', $data)) {
            $object->setProductNumber($data['productNumber']);
            unset($data['productNumber']);
        }
        if (\array_key_exists('productTitle', $data)) {
            $object->setProductTitle($data['productTitle']);
            unset($data['productTitle']);
        }
        if (\array_key_exists('contentsAmount', $data)) {
            $object->setContentsAmount($data['contentsAmount']);
            unset($data['contentsAmount']);
        }
        if (\array_key_exists('contentsWeightGram', $data)) {
            $object->setContentsWeightGram($data['contentsWeightGram']);
            unset($data['contentsWeightGram']);
        }
        if (\array_key_exists('weightGram', $data)) {
            $object->setWeightGram($data['weightGram']);
            unset($data['weightGram']);
        }
        if (\array_key_exists('ean', $data) && $data['ean'] !== null) {
            $object->setEan($data['ean']);
            unset($data['ean']);
        }
        elseif (\array_key_exists('ean', $data) && $data['ean'] === null) {
            $object->setEan(null);
        }
        if (\array_key_exists('taricCode', $data)) {
            $object->setTaricCode($data['taricCode']);
            unset($data['taricCode']);
        }
        if (\array_key_exists('supplierPurchasePriceEUR', $data)) {
            $object->setSupplierPurchasePriceEUR($data['supplierPurchasePriceEUR']);
            unset($data['supplierPurchasePriceEUR']);
        }
        if (\array_key_exists('listPriceEUR', $data)) {
            $object->setListPriceEUR($data['listPriceEUR']);
            unset($data['listPriceEUR']);
        }
        if (\array_key_exists('taxCode', $data)) {
            $object->setTaxCode($data['taxCode']);
            unset($data['taxCode']);
        }
        if (\array_key_exists('supplierNumber', $data)) {
            $object->setSupplierNumber($data['supplierNumber']);
            unset($data['supplierNumber']);
        }
        if (\array_key_exists('manufacturerNumber', $data)) {
            $object->setManufacturerNumber($data['manufacturerNumber']);
            unset($data['manufacturerNumber']);
        }
        if (\array_key_exists('brandNumber', $data)) {
            $object->setBrandNumber($data['brandNumber']);
            unset($data['brandNumber']);
        }
        if (\array_key_exists('shopCode', $data)) {
            $object->setShopCode($data['shopCode']);
            unset($data['shopCode']);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
            unset($data['source']);
        }
        if (\array_key_exists('productDraftId', $data)) {
            $object->setProductDraftId($data['productDraftId']);
            unset($data['productDraftId']);
        }
        if (\array_key_exists('productDraftStatus', $data)) {
            $object->setProductDraftStatus($data['productDraftStatus']);
            unset($data['productDraftStatus']);
        }
        if (\array_key_exists('productDraftDate', $data)) {
            $object->setProductDraftDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['productDraftDate']));
            unset($data['productDraftDate']);
        }
        if (\array_key_exists('contentsUnit', $data)) {
            $object->setContentsUnit($data['contentsUnit']);
            unset($data['contentsUnit']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        if ($object->isInitialized('productNumber') && null !== $object->getProductNumber()) {
            $data['productNumber'] = $object->getProductNumber();
        }
        if ($object->isInitialized('productTitle') && null !== $object->getProductTitle()) {
            $data['productTitle'] = $object->getProductTitle();
        }
        if ($object->isInitialized('contentsAmount') && null !== $object->getContentsAmount()) {
            $data['contentsAmount'] = $object->getContentsAmount();
        }
        if ($object->isInitialized('contentsWeightGram') && null !== $object->getContentsWeightGram()) {
            $data['contentsWeightGram'] = $object->getContentsWeightGram();
        }
        if ($object->isInitialized('weightGram') && null !== $object->getWeightGram()) {
            $data['weightGram'] = $object->getWeightGram();
        }
        if ($object->isInitialized('ean') && null !== $object->getEan()) {
            $data['ean'] = $object->getEan();
        }
        if ($object->isInitialized('taricCode') && null !== $object->getTaricCode()) {
            $data['taricCode'] = $object->getTaricCode();
        }
        if ($object->isInitialized('supplierPurchasePriceEUR') && null !== $object->getSupplierPurchasePriceEUR()) {
            $data['supplierPurchasePriceEUR'] = $object->getSupplierPurchasePriceEUR();
        }
        if ($object->isInitialized('listPriceEUR') && null !== $object->getListPriceEUR()) {
            $data['listPriceEUR'] = $object->getListPriceEUR();
        }
        if ($object->isInitialized('taxCode') && null !== $object->getTaxCode()) {
            $data['taxCode'] = $object->getTaxCode();
        }
        if ($object->isInitialized('supplierNumber') && null !== $object->getSupplierNumber()) {
            $data['supplierNumber'] = $object->getSupplierNumber();
        }
        if ($object->isInitialized('manufacturerNumber') && null !== $object->getManufacturerNumber()) {
            $data['manufacturerNumber'] = $object->getManufacturerNumber();
        }
        if ($object->isInitialized('brandNumber') && null !== $object->getBrandNumber()) {
            $data['brandNumber'] = $object->getBrandNumber();
        }
        if ($object->isInitialized('shopCode') && null !== $object->getShopCode()) {
            $data['shopCode'] = $object->getShopCode();
        }
        if ($object->isInitialized('source') && null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        if ($object->isInitialized('productDraftId') && null !== $object->getProductDraftId()) {
            $data['productDraftId'] = $object->getProductDraftId();
        }
        if ($object->isInitialized('productDraftStatus') && null !== $object->getProductDraftStatus()) {
            $data['productDraftStatus'] = $object->getProductDraftStatus();
        }
        if ($object->isInitialized('productDraftDate') && null !== $object->getProductDraftDate()) {
            $data['productDraftDate'] = $object->getProductDraftDate()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('contentsUnit') && null !== $object->getContentsUnit()) {
            $data['contentsUnit'] = $object->getContentsUnit();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}