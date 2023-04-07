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
class ProductJournalNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentApi\\Generated\\Model\\ProductJournal';
    }
    public function supportsNormalization($data, $format = null) : bool
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
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['date']));
        }
        if (\array_key_exists('productNumber', $data)) {
            $object->setProductNumber($data['productNumber']);
        }
        if (\array_key_exists('reason', $data)) {
            $object->setReason($data['reason']);
        }
        if (\array_key_exists('stockDelta', $data) && $data['stockDelta'] !== null) {
            $object->setStockDelta($data['stockDelta']);
        }
        elseif (\array_key_exists('stockDelta', $data) && $data['stockDelta'] === null) {
            $object->setStockDelta(null);
        }
        if (\array_key_exists('stockOld', $data) && $data['stockOld'] !== null) {
            $object->setStockOld($data['stockOld']);
        }
        elseif (\array_key_exists('stockOld', $data) && $data['stockOld'] === null) {
            $object->setStockOld(null);
        }
        if (\array_key_exists('stockNew', $data) && $data['stockNew'] !== null) {
            $object->setStockNew($data['stockNew']);
        }
        elseif (\array_key_exists('stockNew', $data) && $data['stockNew'] === null) {
            $object->setStockNew(null);
        }
        if (\array_key_exists('reference', $data)) {
            $object->setReference($data['reference']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getJournalId()) {
            $data['journalId'] = $object->getJournalId();
        }
        if (null !== $object->getDate()) {
            $data['date'] = $object->getDate()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getProductNumber()) {
            $data['productNumber'] = $object->getProductNumber();
        }
        if (null !== $object->getReason()) {
            $data['reason'] = $object->getReason();
        }
        if (null !== $object->getStockDelta()) {
            $data['stockDelta'] = $object->getStockDelta();
        }
        if (null !== $object->getStockOld()) {
            $data['stockOld'] = $object->getStockOld();
        }
        if (null !== $object->getStockNew()) {
            $data['stockNew'] = $object->getStockNew();
        }
        if (null !== $object->getReference()) {
            $data['reference'] = $object->getReference();
        }
        return $data;
    }
}