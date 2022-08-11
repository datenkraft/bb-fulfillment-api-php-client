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
     * The shopCode used internally to distinguish between clients
     *
     * @var string
     */
    protected $shopCode;
    /**
     * The prefix to the references internally to distinguish between clients.
     *
     * @var string
     */
    protected $internalReferencePrefix;
    /**
     * The email used internally.
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
     * The shopCode used internally to distinguish between clients
     *
     * @return string
     */
    public function getShopCode() : string
    {
        return $this->shopCode;
    }
    /**
     * The shopCode used internally to distinguish between clients
     *
     * @param string $shopCode
     *
     * @return self
     */
    public function setShopCode(string $shopCode) : self
    {
        $this->shopCode = $shopCode;
        return $this;
    }
    /**
     * The prefix to the references internally to distinguish between clients.
     *
     * @return string
     */
    public function getInternalReferencePrefix() : string
    {
        return $this->internalReferencePrefix;
    }
    /**
     * The prefix to the references internally to distinguish between clients.
     *
     * @param string $internalReferencePrefix
     *
     * @return self
     */
    public function setInternalReferencePrefix(string $internalReferencePrefix) : self
    {
        $this->internalReferencePrefix = $internalReferencePrefix;
        return $this;
    }
    /**
     * The email used internally.
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * The email used internally.
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