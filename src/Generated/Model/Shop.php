<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class Shop
{
    /**
     * Id
     *
     * @var string
     */
    protected $id;
    /**
     * The shopCode used in DISCO.
     *
     * @var string
     */
    protected $discoShopCode;
    /**
     * The prefix to the order reference in DISCO.
     *
     * @var string
     */
    protected $discoOrderReferencePrefix;
    /**
     * Meta data of the shop.
     *
     * @var ShopMeta|null
     */
    protected $meta;
    /**
     * Id
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Id
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The shopCode used in DISCO.
     *
     * @return string
     */
    public function getDiscoShopCode() : string
    {
        return $this->discoShopCode;
    }
    /**
     * The shopCode used in DISCO.
     *
     * @param string $discoShopCode
     *
     * @return self
     */
    public function setDiscoShopCode(string $discoShopCode) : self
    {
        $this->discoShopCode = $discoShopCode;
        return $this;
    }
    /**
     * The prefix to the order reference in DISCO.
     *
     * @return string
     */
    public function getDiscoOrderReferencePrefix() : string
    {
        return $this->discoOrderReferencePrefix;
    }
    /**
     * The prefix to the order reference in DISCO.
     *
     * @param string $discoOrderReferencePrefix
     *
     * @return self
     */
    public function setDiscoOrderReferencePrefix(string $discoOrderReferencePrefix) : self
    {
        $this->discoOrderReferencePrefix = $discoOrderReferencePrefix;
        return $this;
    }
    /**
     * Meta data of the shop.
     *
     * @return ShopMeta|null
     */
    public function getMeta() : ?ShopMeta
    {
        return $this->meta;
    }
    /**
     * Meta data of the shop.
     *
     * @param ShopMeta|null $meta
     *
     * @return self
     */
    public function setMeta(?ShopMeta $meta) : self
    {
        $this->meta = $meta;
        return $this;
    }
}