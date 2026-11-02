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
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ReportClearingOrder();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('orderNumber', $data)) {
            $object->orderNumber = $data['orderNumber'];
            unset($data['orderNumber']);
        }
        if (\array_key_exists('shopOrderId', $data)) {
            $object->shopOrderId = $data['shopOrderId'];
            unset($data['shopOrderId']);
        }
        if (\array_key_exists('deliveryZipCode', $data)) {
            $object->deliveryZipCode = $data['deliveryZipCode'];
            unset($data['deliveryZipCode']);
        }
        if (\array_key_exists('deliveryCountryCode', $data)) {
            $object->deliveryCountryCode = $data['deliveryCountryCode'];
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
        if (array_key_exists('orderNumber', get_object_vars($data)) && null !== ($data->orderNumber ?? null)) {
            $dataArray['orderNumber'] = $data->orderNumber;
        }
        if (array_key_exists('shopOrderId', get_object_vars($data)) && null !== ($data->shopOrderId ?? null)) {
            $dataArray['shopOrderId'] = $data->shopOrderId;
        }
        if (array_key_exists('deliveryZipCode', get_object_vars($data)) && null !== ($data->deliveryZipCode ?? null)) {
            $dataArray['deliveryZipCode'] = $data->deliveryZipCode;
        }
        if (array_key_exists('deliveryCountryCode', get_object_vars($data)) && null !== ($data->deliveryCountryCode ?? null)) {
            $dataArray['deliveryCountryCode'] = $data->deliveryCountryCode;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
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