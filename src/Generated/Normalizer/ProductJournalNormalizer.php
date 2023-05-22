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
class ProductJournalNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ProductJournal';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ProductJournal';
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
        $object = new \Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model\ProductJournal();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('journalId', $data)) {
            $object->setJournalId($data['journalId']);
            unset($data['journalId']);
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['date']));
            unset($data['date']);
        }
        if (\array_key_exists('productNumber', $data)) {
            $object->setProductNumber($data['productNumber']);
            unset($data['productNumber']);
        }
        if (\array_key_exists('reason', $data)) {
            $object->setReason($data['reason']);
            unset($data['reason']);
        }
        if (\array_key_exists('stockDelta', $data) && $data['stockDelta'] !== null) {
            $object->setStockDelta($data['stockDelta']);
            unset($data['stockDelta']);
        }
        elseif (\array_key_exists('stockDelta', $data) && $data['stockDelta'] === null) {
            $object->setStockDelta(null);
        }
        if (\array_key_exists('stockOld', $data) && $data['stockOld'] !== null) {
            $object->setStockOld($data['stockOld']);
            unset($data['stockOld']);
        }
        elseif (\array_key_exists('stockOld', $data) && $data['stockOld'] === null) {
            $object->setStockOld(null);
        }
        if (\array_key_exists('stockNew', $data) && $data['stockNew'] !== null) {
            $object->setStockNew($data['stockNew']);
            unset($data['stockNew']);
        }
        elseif (\array_key_exists('stockNew', $data) && $data['stockNew'] === null) {
            $object->setStockNew(null);
        }
        if (\array_key_exists('reference', $data)) {
            $object->setReference($this->denormalizer->denormalize($data['reference'], 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ProductJournalReference', 'json', $context));
            unset($data['reference']);
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
        if ($object->isInitialized('journalId') && null !== $object->getJournalId()) {
            $data['journalId'] = $object->getJournalId();
        }
        if ($object->isInitialized('date') && null !== $object->getDate()) {
            $data['date'] = $object->getDate()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('productNumber') && null !== $object->getProductNumber()) {
            $data['productNumber'] = $object->getProductNumber();
        }
        if ($object->isInitialized('reason') && null !== $object->getReason()) {
            $data['reason'] = $object->getReason();
        }
        if ($object->isInitialized('stockDelta') && null !== $object->getStockDelta()) {
            $data['stockDelta'] = $object->getStockDelta();
        }
        if ($object->isInitialized('stockOld') && null !== $object->getStockOld()) {
            $data['stockOld'] = $object->getStockOld();
        }
        if ($object->isInitialized('stockNew') && null !== $object->getStockNew()) {
            $data['stockNew'] = $object->getStockNew();
        }
        if ($object->isInitialized('reference') && null !== $object->getReference()) {
            $data['reference'] = $this->normalizer->normalize($object->getReference(), 'json', $context);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}