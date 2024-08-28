<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class BaseOrderCustomerInvoiceAddress extends \ArrayObject
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
     * 
     *
     * @var string
     */
    protected $street;
    /**
    * Must not contain more than 5 letters.\
    The field is optional for addresses in certain countries (check with the `GET /country` endpoint), where the
    street number should be provided in the `street` field.
    *
    * @var string|null
    */
    protected $streetNumber;
    /**
     * 
     *
     * @var string
     */
    protected $zipCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $district;
    /**
     * 
     *
     * @var string
     */
    protected $city;
    /**
    * Mandatory if province codes for country (GET /country) exist
    (ISO 3166-2) - https://www.iso.org/iso-3166-country-codes.html \
    Note: For addresses in Italy (IT), the province code is optional and will be detected automatically if not
    provided.
    *
    * @var string|null
    */
    protected $provinceCode;
    /**
     * Country code (ISO 3166-1 alpha-2)
     *
     * @var string
     */
    protected $countryCode;
    /**
     * 
     *
     * @return string
     */
    public function getStreet() : string
    {
        return $this->street;
    }
    /**
     * 
     *
     * @param string $street
     *
     * @return self
     */
    public function setStreet(string $street) : self
    {
        $this->initialized['street'] = true;
        $this->street = $street;
        return $this;
    }
    /**
    * Must not contain more than 5 letters.\
    The field is optional for addresses in certain countries (check with the `GET /country` endpoint), where the
    street number should be provided in the `street` field.
    *
    * @return string|null
    */
    public function getStreetNumber() : ?string
    {
        return $this->streetNumber;
    }
    /**
    * Must not contain more than 5 letters.\
    The field is optional for addresses in certain countries (check with the `GET /country` endpoint), where the
    street number should be provided in the `street` field.
    *
    * @param string|null $streetNumber
    *
    * @return self
    */
    public function setStreetNumber(?string $streetNumber) : self
    {
        $this->initialized['streetNumber'] = true;
        $this->streetNumber = $streetNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getZipCode() : string
    {
        return $this->zipCode;
    }
    /**
     * 
     *
     * @param string $zipCode
     *
     * @return self
     */
    public function setZipCode(string $zipCode) : self
    {
        $this->initialized['zipCode'] = true;
        $this->zipCode = $zipCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDistrict() : ?string
    {
        return $this->district;
    }
    /**
     * 
     *
     * @param string|null $district
     *
     * @return self
     */
    public function setDistrict(?string $district) : self
    {
        $this->initialized['district'] = true;
        $this->district = $district;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * 
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city) : self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
    * Mandatory if province codes for country (GET /country) exist
    (ISO 3166-2) - https://www.iso.org/iso-3166-country-codes.html \
    Note: For addresses in Italy (IT), the province code is optional and will be detected automatically if not
    provided.
    *
    * @return string|null
    */
    public function getProvinceCode() : ?string
    {
        return $this->provinceCode;
    }
    /**
    * Mandatory if province codes for country (GET /country) exist
    (ISO 3166-2) - https://www.iso.org/iso-3166-country-codes.html \
    Note: For addresses in Italy (IT), the province code is optional and will be detected automatically if not
    provided.
    *
    * @param string|null $provinceCode
    *
    * @return self
    */
    public function setProvinceCode(?string $provinceCode) : self
    {
        $this->initialized['provinceCode'] = true;
        $this->provinceCode = $provinceCode;
        return $this;
    }
    /**
     * Country code (ISO 3166-1 alpha-2)
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * Country code (ISO 3166-1 alpha-2)
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode) : self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
}