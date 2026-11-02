<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class BaseShop implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The email used internally.
     *
     * @var string
     */
    public string $email;
    public function definedProperties(): array
    {
        return ['email' => 'email'];
    }
}