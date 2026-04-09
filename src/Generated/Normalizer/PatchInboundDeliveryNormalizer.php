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
class PatchInboundDeliveryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\PatchInboundDelivery::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\PatchInboundDelivery::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\PatchInboundDelivery();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('expectedDeliveryDate', $data)) {
            $object->setExpectedDeliveryDate(\DateTime::createFromFormat('Y-m-d', $data['expectedDeliveryDate'])->setTime(0, 0, 0));
            unset($data['expectedDeliveryDate']);
        }
        if (\array_key_exists('inboundDeliveryName', $data)) {
            $object->setInboundDeliveryName($data['inboundDeliveryName']);
            unset($data['inboundDeliveryName']);
        }
        if (\array_key_exists('inboundDeliveryNote', $data) && $data['inboundDeliveryNote'] !== null) {
            $object->setInboundDeliveryNote($data['inboundDeliveryNote']);
            unset($data['inboundDeliveryNote']);
        }
        elseif (\array_key_exists('inboundDeliveryNote', $data) && $data['inboundDeliveryNote'] === null) {
            $object->setInboundDeliveryNote(null);
        }
        if (\array_key_exists('products', $data)) {
            $values = [];
            foreach ($data['products'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\PatchInboundDeliveryProduct::class, 'json', $context);
            }
            $object->setProducts($values);
            unset($data['products']);
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
        if ($data->isInitialized('expectedDeliveryDate') && null !== $data->getExpectedDeliveryDate()) {
            $dataArray['expectedDeliveryDate'] = $data->getExpectedDeliveryDate()?->format('Y-m-d');
        }
        if ($data->isInitialized('inboundDeliveryName') && null !== $data->getInboundDeliveryName()) {
            $dataArray['inboundDeliveryName'] = $data->getInboundDeliveryName();
        }
        if ($data->isInitialized('inboundDeliveryNote') && null !== $data->getInboundDeliveryNote()) {
            $dataArray['inboundDeliveryNote'] = $data->getInboundDeliveryNote();
        }
        if ($data->isInitialized('products') && null !== $data->getProducts()) {
            $values = [];
            foreach ($data->getProducts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['products'] = $values;
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
        return [\Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\PatchInboundDelivery::class => false];
    }
}