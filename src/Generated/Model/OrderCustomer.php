<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class OrderCustomer
{
    /**
     * 
     *
     * @var string
     */
    protected $gender;
    /**
     * The language code for any customer communications (ISO 639-1)
     *
     * @var string
     */
    protected $languageCode;
    /**
     * 
     *
     * @var OrderCustomerDeliveryAddress
     */
    protected $deliveryAddress;
    /**
     * Customer number if an existing account should be used for the order
     *
     * @var string|null
     */
    protected $number;
    /**
     * The customer type
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @return string
     */
    public function getGender() : string
    {
        return $this->gender;
    }
    /**
     * 
     *
     * @param string $gender
     *
     * @return self
     */
    public function setGender(string $gender) : self
    {
        $this->gender = $gender;
        return $this;
    }
    /**
     * The language code for any customer communications (ISO 639-1)
     *
     * @return string
     */
    public function getLanguageCode() : string
    {
        return $this->languageCode;
    }
    /**
     * The language code for any customer communications (ISO 639-1)
     *
     * @param string $languageCode
     *
     * @return self
     */
    public function setLanguageCode(string $languageCode) : self
    {
        $this->languageCode = $languageCode;
        return $this;
    }
    /**
     * 
     *
     * @return OrderCustomerDeliveryAddress
     */
    public function getDeliveryAddress() : OrderCustomerDeliveryAddress
    {
        return $this->deliveryAddress;
    }
    /**
     * 
     *
     * @param OrderCustomerDeliveryAddress $deliveryAddress
     *
     * @return self
     */
    public function setDeliveryAddress(OrderCustomerDeliveryAddress $deliveryAddress) : self
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }
    /**
     * Customer number if an existing account should be used for the order
     *
     * @return string|null
     */
    public function getNumber() : ?string
    {
        return $this->number;
    }
    /**
     * Customer number if an existing account should be used for the order
     *
     * @param string|null $number
     *
     * @return self
     */
    public function setNumber(?string $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * The customer type
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * The customer type
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}