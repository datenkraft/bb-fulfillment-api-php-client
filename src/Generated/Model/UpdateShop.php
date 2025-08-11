<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class UpdateShop extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
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
     * Is the shop active?
     *
     * @var bool
     */
    protected $active;
    /**
     * Meta data of the shop.
     *
     * @var UpdateShopmeta|null
     */
    protected $meta;
    /**
     * The email used internally.
     *
     * @return string
     */
    public function getEmail(): string
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
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * Is the shop active?
     *
     * @return bool
     */
    public function getActive(): bool
    {
        return $this->active;
    }
    /**
     * Is the shop active?
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * Meta data of the shop.
     *
     * @return UpdateShopmeta|null
     */
    public function getMeta(): ?UpdateShopmeta
    {
        return $this->meta;
    }
    /**
     * Meta data of the shop.
     *
     * @param UpdateShopmeta|null $meta
     *
     * @return self
     */
    public function setMeta(?UpdateShopmeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}