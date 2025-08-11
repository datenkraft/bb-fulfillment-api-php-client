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
class InboundDeliveryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDelivery::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDelivery::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDelivery();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('inboundDeliveryName', $data) && $data['inboundDeliveryName'] !== null) {
            $object->setInboundDeliveryName($data['inboundDeliveryName']);
            unset($data['inboundDeliveryName']);
        }
        elseif (\array_key_exists('inboundDeliveryName', $data) && $data['inboundDeliveryName'] === null) {
            $object->setInboundDeliveryName(null);
        }
        if (\array_key_exists('supplierNumber', $data)) {
            $object->setSupplierNumber($data['supplierNumber']);
            unset($data['supplierNumber']);
        }
        if (\array_key_exists('expectedDeliveryDate', $data)) {
            $object->setExpectedDeliveryDate(\DateTime::createFromFormat('Y-m-d', $data['expectedDeliveryDate'])->setTime(0, 0, 0));
            unset($data['expectedDeliveryDate']);
        }
        if (\array_key_exists('products', $data)) {
            $values = [];
            foreach ($data['products'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDeliveryProduct::class, 'json', $context);
            }
            $object->setProducts($values);
            unset($data['products']);
        }
        if (\array_key_exists('inboundDeliveryNumber', $data)) {
            $object->setInboundDeliveryNumber($data['inboundDeliveryNumber']);
            unset($data['inboundDeliveryNumber']);
        }
        if (\array_key_exists('inboundDeliveryNote', $data) && $data['inboundDeliveryNote'] !== null) {
            $object->setInboundDeliveryNote($data['inboundDeliveryNote']);
            unset($data['inboundDeliveryNote']);
        }
        elseif (\array_key_exists('inboundDeliveryNote', $data) && $data['inboundDeliveryNote'] === null) {
            $object->setInboundDeliveryNote(null);
        }
        if (\array_key_exists('shopWAWIDeliveryId', $data)) {
            $object->setShopWAWIDeliveryId($data['shopWAWIDeliveryId']);
            unset($data['shopWAWIDeliveryId']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('shopCode', $data)) {
            $object->setShopCode($data['shopCode']);
            unset($data['shopCode']);
        }
        if (\array_key_exists('startDate', $data) && $data['startDate'] !== null) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['startDate'])->setTime(0, 0, 0));
            unset($data['startDate']);
        }
        elseif (\array_key_exists('startDate', $data) && $data['startDate'] === null) {
            $object->setStartDate(null);
        }
        if (\array_key_exists('endDate', $data) && $data['endDate'] !== null) {
            $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['endDate'])->setTime(0, 0, 0));
            unset($data['endDate']);
        }
        elseif (\array_key_exists('endDate', $data) && $data['endDate'] === null) {
            $object->setEndDate(null);
        }
        if (\array_key_exists('deliverySlipNumber', $data) && $data['deliverySlipNumber'] !== null) {
            $object->setDeliverySlipNumber($data['deliverySlipNumber']);
            unset($data['deliverySlipNumber']);
        }
        elseif (\array_key_exists('deliverySlipNumber', $data) && $data['deliverySlipNumber'] === null) {
            $object->setDeliverySlipNumber(null);
        }
        if (\array_key_exists('createDate', $data)) {
            $object->setCreateDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createDate']));
            unset($data['createDate']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('inboundDeliveryName') && null !== $data->getInboundDeliveryName()) {
            $dataArray['inboundDeliveryName'] = $data->getInboundDeliveryName();
        }
        $dataArray['supplierNumber'] = $data->getSupplierNumber();
        $dataArray['expectedDeliveryDate'] = $data->getExpectedDeliveryDate()?->format('Y-m-d');
        if ($data->isInitialized('products') && null !== $data->getProducts()) {
            $values = [];
            foreach ($data->getProducts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['products'] = $values;
        }
        if ($data->isInitialized('inboundDeliveryNumber') && null !== $data->getInboundDeliveryNumber()) {
            $dataArray['inboundDeliveryNumber'] = $data->getInboundDeliveryNumber();
        }
        if ($data->isInitialized('inboundDeliveryNote') && null !== $data->getInboundDeliveryNote()) {
            $dataArray['inboundDeliveryNote'] = $data->getInboundDeliveryNote();
        }
        if ($data->isInitialized('shopWAWIDeliveryId') && null !== $data->getShopWAWIDeliveryId()) {
            $dataArray['shopWAWIDeliveryId'] = $data->getShopWAWIDeliveryId();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('shopCode') && null !== $data->getShopCode()) {
            $dataArray['shopCode'] = $data->getShopCode();
        }
        if ($data->isInitialized('startDate') && null !== $data->getStartDate()) {
            $dataArray['startDate'] = $data->getStartDate()->format('Y-m-d');
        }
        if ($data->isInitialized('endDate') && null !== $data->getEndDate()) {
            $dataArray['endDate'] = $data->getEndDate()->format('Y-m-d');
        }
        if ($data->isInitialized('deliverySlipNumber') && null !== $data->getDeliverySlipNumber()) {
            $dataArray['deliverySlipNumber'] = $data->getDeliverySlipNumber();
        }
        if ($data->isInitialized('createDate') && null !== $data->getCreateDate()) {
            $dataArray['createDate'] = $data->getCreateDate()?->format('Y-m-d\TH:i:sP');
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\InboundDelivery::class => false];
    }
}