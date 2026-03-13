<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class DiscoShop extends \ArrayObject
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
     * The disco shop code
     *
     * @var string
     */
    protected $shopCode;
    /**
     * The disco shop name
     *
     * @var string
     */
    protected $name;
    /**
     * The disco shop code
     *
     * @return string
     */
    public function getShopCode(): string
    {
        return $this->shopCode;
    }
    /**
     * The disco shop code
     *
     * @param string $shopCode
     *
     * @return self
     */
    public function setShopCode(string $shopCode): self
    {
        $this->initialized['shopCode'] = true;
        $this->shopCode = $shopCode;
        return $this;
    }
    /**
     * The disco shop name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The disco shop name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}