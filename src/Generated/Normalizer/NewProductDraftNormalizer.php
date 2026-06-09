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
class NewProductDraftNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewProductDraft::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewProductDraft::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewProductDraft();
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
        if (\array_key_exists('ean', $data)) {
            $object->setEan($data['ean']);
            unset($data['ean']);
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
        if (\array_key_exists('dimensions', $data)) {
            $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\BaseProductDraftDimensions::class, 'json', $context));
            unset($data['dimensions']);
        }
        if (\array_key_exists('minAvailableStock', $data) && $data['minAvailableStock'] !== null) {
            $object->setMinAvailableStock($data['minAvailableStock']);
            unset($data['minAvailableStock']);
        }
        elseif (\array_key_exists('minAvailableStock', $data) && $data['minAvailableStock'] === null) {
            $object->setMinAvailableStock(null);
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
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('productNumber') && null !== $data->getProductNumber()) {
            $dataArray['productNumber'] = $data->getProductNumber();
        }
        if ($data->isInitialized('productTitle') && null !== $data->getProductTitle()) {
            $dataArray['productTitle'] = $data->getProductTitle();
        }
        if ($data->isInitialized('contentsAmount') && null !== $data->getContentsAmount()) {
            $dataArray['contentsAmount'] = $data->getContentsAmount();
        }
        if ($data->isInitialized('contentsWeightGram') && null !== $data->getContentsWeightGram()) {
            $dataArray['contentsWeightGram'] = $data->getContentsWeightGram();
        }
        if ($data->isInitialized('weightGram') && null !== $data->getWeightGram()) {
            $dataArray['weightGram'] = $data->getWeightGram();
        }
        if ($data->isInitialized('ean') && null !== $data->getEan()) {
            $dataArray['ean'] = $data->getEan();
        }
        if ($data->isInitialized('taricCode') && null !== $data->getTaricCode()) {
            $dataArray['taricCode'] = $data->getTaricCode();
        }
        if ($data->isInitialized('supplierPurchasePriceEUR') && null !== $data->getSupplierPurchasePriceEUR()) {
            $dataArray['supplierPurchasePriceEUR'] = $data->getSupplierPurchasePriceEUR();
        }
        if ($data->isInitialized('listPriceEUR') && null !== $data->getListPriceEUR()) {
            $dataArray['listPriceEUR'] = $data->getListPriceEUR();
        }
        if ($data->isInitialized('taxCode') && null !== $data->getTaxCode()) {
            $dataArray['taxCode'] = $data->getTaxCode();
        }
        if ($data->isInitialized('supplierNumber') && null !== $data->getSupplierNumber()) {
            $dataArray['supplierNumber'] = $data->getSupplierNumber();
        }
        if ($data->isInitialized('manufacturerNumber') && null !== $data->getManufacturerNumber()) {
            $dataArray['manufacturerNumber'] = $data->getManufacturerNumber();
        }
        if ($data->isInitialized('brandNumber') && null !== $data->getBrandNumber()) {
            $dataArray['brandNumber'] = $data->getBrandNumber();
        }
        if ($data->isInitialized('dimensions') && null !== $data->getDimensions()) {
            $dataArray['dimensions'] = $this->normalizer->normalize($data->getDimensions(), 'json', $context);
        }
        if ($data->isInitialized('minAvailableStock') && null !== $data->getMinAvailableStock()) {
            $dataArray['minAvailableStock'] = $data->getMinAvailableStock();
        }
        if ($data->isInitialized('contentsUnit') && null !== $data->getContentsUnit()) {
            $dataArray['contentsUnit'] = $data->getContentsUnit();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\NewProductDraft::class => false];
    }
}