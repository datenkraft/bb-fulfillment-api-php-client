<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class UpdateShop implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The email used internally.
     *
     * @var string
     */
    public string $email;
    /**
     * Meta data of the shop.
     *
     * @var UpdateShopMeta|null
     */
    public ?UpdateShopMeta $meta;
    public function definedProperties(): array
    {
        return ['email' => 'email', 'meta' => 'meta'];
    }
}