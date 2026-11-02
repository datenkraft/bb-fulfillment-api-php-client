<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class Shop implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Id
     *
     * @var string
     */
    public string $id;
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
     * Is the shop active? Read-only, controlled by the DISCO.
     *
     * @var bool
     */
    public bool $active;
    /**
     * Meta data of the shop.
     *
     * @var ShopMeta|null
     */
    public ?ShopMeta $meta;
    /**
     * The email used internally.
     *
     * @var string
     */
    public string $email;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'shopCode' => 'shopCode', 'internalReferencePrefix' => 'internalReferencePrefix', 'projectId' => 'projectId', 'active' => 'active', 'meta' => 'meta', 'email' => 'email'];
    }
}