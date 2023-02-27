<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class CountryProvinces
{
    /**
     * The code of the province (ISO 3166-2)
     *
     * @var string
     */
    protected $provinceCode;
    /**
     * The name of the province
     *
     * @var string
     */
    protected $name;
    /**
     * The code of the province (ISO 3166-2)
     *
     * @return string
     */
    public function getProvinceCode() : string
    {
        return $this->provinceCode;
    }
    /**
     * The code of the province (ISO 3166-2)
     *
     * @param string $provinceCode
     *
     * @return self
     */
    public function setProvinceCode(string $provinceCode) : self
    {
        $this->provinceCode = $provinceCode;
        return $this;
    }
    /**
     * The name of the province
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the province
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
}