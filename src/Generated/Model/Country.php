<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class Country implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Country code (ISO 3166-1 alpha-2)
     *
     * @var string
     */
    public string $countryCode;
    /**
     * Country name
     *
     * @var string
     */
    public string $name;
    /**
     * Specifies whether or not a phone number is required when using a shipping address in this country
     *
     * @var bool
     */
    public bool $phoneRequired;
    /**
     * Specifies whether or not customs clearance is necessary
     *
     * @var bool
     */
    public bool $customsClearanceRequired;
    /**
     * @var list<CountryProvinces>|null
     */
    public ?array $provinces;
    /**
     * The currency code which must be used for orders to the country (ISO 4217)
     *
     * @var string
     */
    public string $currencyCode;
    public function definedProperties(): array
    {
        return ['countryCode' => 'countryCode', 'name' => 'name', 'phoneRequired' => 'phoneRequired', 'customsClearanceRequired' => 'customsClearanceRequired', 'provinces' => 'provinces', 'currencyCode' => 'currencyCode'];
    }
}