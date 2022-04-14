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
     * The prefix to the references in DISCO.
     *
     * @var string
     */
    protected $discoReferencePrefix;
    /**
     * The email used in DISCO.
     *
     * @var string
     */
    protected $email;
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
     * The prefix to the references in DISCO.
     *
     * @return string
     */
    public function getDiscoReferencePrefix() : string
    {
        return $this->discoReferencePrefix;
    }
    /**
     * The prefix to the references in DISCO.
     *
     * @param string $discoReferencePrefix
     *
     * @return self
     */
    public function setDiscoReferencePrefix(string $discoReferencePrefix) : self
    {
        $this->discoReferencePrefix = $discoReferencePrefix;
        return $this;
    }
    /**
     * The email used in DISCO.
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * The email used in DISCO.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
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