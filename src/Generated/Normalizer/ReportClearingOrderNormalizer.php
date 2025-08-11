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
class ReportClearingOrderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportClearingOrder::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportClearingOrder::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportClearingOrder();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('orderNumber', $data)) {
            $object->setOrderNumber($data['orderNumber']);
            unset($data['orderNumber']);
        }
        if (\array_key_exists('shopOrderId', $data)) {
            $object->setShopOrderId($data['shopOrderId']);
            unset($data['shopOrderId']);
        }
        if (\array_key_exists('deliveryZipCode', $data)) {
            $object->setDeliveryZipCode($data['deliveryZipCode']);
            unset($data['deliveryZipCode']);
        }
        if (\array_key_exists('deliveryCountryCode', $data)) {
            $object->setDeliveryCountryCode($data['deliveryCountryCode']);
            unset($data['deliveryCountryCode']);
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
        if ($data->isInitialized('orderNumber') && null !== $data->getOrderNumber()) {
            $dataArray['orderNumber'] = $data->getOrderNumber();
        }
        if ($data->isInitialized('shopOrderId') && null !== $data->getShopOrderId()) {
            $dataArray['shopOrderId'] = $data->getShopOrderId();
        }
        if ($data->isInitialized('deliveryZipCode') && null !== $data->getDeliveryZipCode()) {
            $dataArray['deliveryZipCode'] = $data->getDeliveryZipCode();
        }
        if ($data->isInitialized('deliveryCountryCode') && null !== $data->getDeliveryCountryCode()) {
            $dataArray['deliveryCountryCode'] = $data->getDeliveryCountryCode();
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportClearingOrder::class => false];
    }
}