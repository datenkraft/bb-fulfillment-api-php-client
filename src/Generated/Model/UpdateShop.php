<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class UpdateShop
{
    /**
     * Meta data of the shop.
     *
     * @var UpdateShopMeta|null
     */
    protected $meta;
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
        $this->meta = $meta;
        return $this;
    }
}