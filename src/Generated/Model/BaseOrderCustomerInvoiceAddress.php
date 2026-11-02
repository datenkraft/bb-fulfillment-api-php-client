<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class BaseOrderCustomerInvoiceAddress implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $street;
    /**
     * Must not contain more than 5 letters.\
     * Providing the street number separately is optional.
     *
     * @var string|null
     */
    public ?string $streetNumber;
    /**
     * @var string
     */
    public string $zipCode;
    /**
     * @var string|null
     */
    public ?string $district;
    /**
     * @var string
     */
    public string $city;
    /**
     * Mandatory if province codes for country (GET /country) exist
     * (ISO 3166-2) - https://www.iso.org/iso-3166-country-codes.html \
     * Note: For addresses in Italy (IT), the province code is optional and will be detected automatically if not
     * provided.
     *
     * @var string|null
     */
    public ?string $provinceCode;
    /**
     * Country code (ISO 3166-1 alpha-2)
     *
     * @var string
     */
    public string $countryCode;
    public function definedProperties(): array
    {
        return ['street' => 'street', 'streetNumber' => 'streetNumber', 'zipCode' => 'zipCode', 'district' => 'district', 'city' => 'city', 'provinceCode' => 'provinceCode', 'countryCode' => 'countryCode'];
    }
}