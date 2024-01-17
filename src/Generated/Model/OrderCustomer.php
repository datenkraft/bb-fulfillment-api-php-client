<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class OrderCustomer extends \ArrayObject
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
    protected $email;
    /**
     * 
     *
     * @var string
     */
    protected $firstname;
    /**
     * 
     *
     * @var string
     */
    protected $lastname;
    /**
     * 
     *
     * @var string
     */
    protected $gender;
    /**
     * 
     *
     * @var string|null
     */
    protected $title;
    /**
     * 
     *
     * @var string|null
     */
    protected $phone;
    /**
     * The language code for any customer communications (ISO 639-1)
     *
     * @var string
     */
    protected $languageCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $company;
    /**
     * Company vat number
     *
     * @var string|null
     */
    protected $companyVatNumber;
    /**
     * 
     *
     * @var OrderCustomerInvoiceAddress
     */
    protected $invoiceAddress;
    /**
     * If not given the invoice address is used for delivery.
     *
     * @var mixed|null
     */
    protected $deliveryAddress;
    /**
     * 
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
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFirstname() : string
    {
        return $this->firstname;
    }
    /**
     * 
     *
     * @param string $firstname
     *
     * @return self
     */
    public function setFirstname(string $firstname) : self
    {
        $this->initialized['firstname'] = true;
        $this->firstname = $firstname;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastname() : string
    {
        return $this->lastname;
    }
    /**
     * 
     *
     * @param string $lastname
     *
     * @return self
     */
    public function setLastname(string $lastname) : self
    {
        $this->initialized['lastname'] = true;
        $this->lastname = $lastname;
        return $this;
    }
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
        $this->initialized['gender'] = true;
        $this->gender = $gender;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPhone() : ?string
    {
        return $this->phone;
    }
    /**
     * 
     *
     * @param string|null $phone
     *
     * @return self
     */
    public function setPhone(?string $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
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
        $this->initialized['languageCode'] = true;
        $this->languageCode = $languageCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCompany() : ?string
    {
        return $this->company;
    }
    /**
     * 
     *
     * @param string|null $company
     *
     * @return self
     */
    public function setCompany(?string $company) : self
    {
        $this->initialized['company'] = true;
        $this->company = $company;
        return $this;
    }
    /**
     * Company vat number
     *
     * @return string|null
     */
    public function getCompanyVatNumber() : ?string
    {
        return $this->companyVatNumber;
    }
    /**
     * Company vat number
     *
     * @param string|null $companyVatNumber
     *
     * @return self
     */
    public function setCompanyVatNumber(?string $companyVatNumber) : self
    {
        $this->initialized['companyVatNumber'] = true;
        $this->companyVatNumber = $companyVatNumber;
        return $this;
    }
    /**
     * 
     *
     * @return OrderCustomerInvoiceAddress
     */
    public function getInvoiceAddress() : OrderCustomerInvoiceAddress
    {
        return $this->invoiceAddress;
    }
    /**
     * 
     *
     * @param OrderCustomerInvoiceAddress $invoiceAddress
     *
     * @return self
     */
    public function setInvoiceAddress(OrderCustomerInvoiceAddress $invoiceAddress) : self
    {
        $this->initialized['invoiceAddress'] = true;
        $this->invoiceAddress = $invoiceAddress;
        return $this;
    }
    /**
     * If not given the invoice address is used for delivery.
     *
     * @return mixed
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }
    /**
     * If not given the invoice address is used for delivery.
     *
     * @param mixed $deliveryAddress
     *
     * @return self
     */
    public function setDeliveryAddress($deliveryAddress) : self
    {
        $this->initialized['deliveryAddress'] = true;
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNumber() : ?string
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param string|null $number
     *
     * @return self
     */
    public function setNumber(?string $number) : self
    {
        $this->initialized['number'] = true;
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
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}