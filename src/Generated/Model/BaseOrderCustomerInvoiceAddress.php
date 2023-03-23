<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class BaseOrderCustomerInvoiceAddress
{
    /**
     * 
     *
     * @var string
     */
    protected $street;
    /**
     * 
     *
     * @var string
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
    (ISO 3166-2) - https://www.iso.org/iso-3166-country-codes.html
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
        $this->street = $street;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStreetNumber() : string
    {
        return $this->streetNumber;
    }
    /**
     * 
     *
     * @param string $streetNumber
     *
     * @return self
     */
    public function setStreetNumber(string $streetNumber) : self
    {
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
        $this->city = $city;
        return $this;
    }
    /**
    * Mandatory if province codes for country (GET /country) exist
    (ISO 3166-2) - https://www.iso.org/iso-3166-country-codes.html
    *
    * @return string|null
    */
    public function getProvinceCode() : ?string
    {
        return $this->provinceCode;
    }
    /**
    * Mandatory if province codes for country (GET /country) exist
    (ISO 3166-2) - https://www.iso.org/iso-3166-country-codes.html
    *
    * @param string|null $provinceCode
    *
    * @return self
    */
    public function setProvinceCode(?string $provinceCode) : self
    {
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
        $this->countryCode = $countryCode;
        return $this;
    }
}