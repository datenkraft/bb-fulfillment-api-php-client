<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class UpdateShop extends \ArrayObject
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
     * The email used internally.
     *
     * @var string
     */
    protected $email;
    /**
     * Meta data of the shop.
     *
     * @var UpdateShopMeta|null
     */
    protected $meta;
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
     * Meta data of the shop.
     *
     * @return UpdateShopMeta|null
     */
    public function getMeta() : ?UpdateShopMeta
    {
        return $this->meta;
    }
    /**
     * Meta data of the shop.
     *
     * @param UpdateShopMeta|null $meta
     *
     * @return self
     */
    public function setMeta(?UpdateShopMeta $meta) : self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}