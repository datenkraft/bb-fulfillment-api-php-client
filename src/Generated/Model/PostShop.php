<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class PostShop implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The shopCode used internally to distinguish between clients
     *
     * @var string
     */
    public string $shopCode;
    /**
     * The prefix to the references internally to distinguish between clients.
     *
     * @var string
     */
    public string $internalReferencePrefix;
    /**
     * The id of the project to which the shop belongs.
     *
     * @var string
     */
    public string $projectId;
    /**
     * Meta data of the shop.
     *
     * @var PostShopMeta|null
     */
    public ?PostShopMeta $meta;
    /**
     * The email used internally.
     *
     * @var string
     */
    public string $email;
    public function definedProperties(): array
    {
        return ['shopCode' => 'shopCode', 'internalReferencePrefix' => 'internalReferencePrefix', 'projectId' => 'projectId', 'meta' => 'meta', 'email' => 'email'];
    }
}