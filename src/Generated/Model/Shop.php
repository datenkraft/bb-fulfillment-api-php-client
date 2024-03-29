<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class Shop extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
     * The id of the project to which the shop belongs.
     *
     * @var string
     */
    protected $projectId;
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
        $this->initialized['id'] = true;
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
        $this->initialized['shopCode'] = true;
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
        $this->initialized['internalReferencePrefix'] = true;
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
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * The id of the project to which the shop belongs.
     *
     * @return string
     */
    public function getProjectId() : string
    {
        return $this->projectId;
    }
    /**
     * The id of the project to which the shop belongs.
     *
     * @param string $projectId
     *
     * @return self
     */
    public function setProjectId(string $projectId) : self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;
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
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}