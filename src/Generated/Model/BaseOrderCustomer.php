<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class BaseOrderCustomer extends \ArrayObject
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
    protected $gender;
    /**
     * The language code for any customer communications (ISO 639-1). Currently only 'de' is supported
     *
     * @var string
     */
    protected $languageCode;
    /**
     * The external id of the order customer
     *
     * @var string|null
     */
    protected $externalCustomerId;
    /**
     * 
     *
     * @var OrderCustomerDeliveryAddress
     */
    protected $deliveryAddress;
    /**
     * The customer's email
     *
     * @var string|null
     */
    protected $email;
    /**
     * The customer's phone number, preferably in the DIN 5008 format, like: +43 2236 123456-7890
     *
     * @var string|null
     */
    protected $phone;
    /**
    * The customer's first name.\
    Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
    Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.
    *
    * @var string|null
    */
    protected $firstname;
    /**
    * The customer's last name.\
    Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
    Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.
    *
    * @var string|null
    */
    protected $lastname;
    /**
    * The customer's title.\
    Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
    Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.
    *
    * @var string|null
    */
    protected $title;
    /**
    * The customer's company name.\
    Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
    Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.
    *
    * @var string|null
    */
    protected $company;
    /**
    * The customer's company vat number (might be validated).\
    Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
    Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.
    *
    * @var string|null
    */
    protected $companyVatNumber;
    /**
    * The customer's invoice address.\
    Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
    Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.
    *
    * @var BaseOrderCustomerInvoiceAddress|null
    */
    protected $invoiceAddress;
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
     * The language code for any customer communications (ISO 639-1). Currently only 'de' is supported
     *
     * @return string
     */
    public function getLanguageCode() : string
    {
        return $this->languageCode;
    }
    /**
     * The language code for any customer communications (ISO 639-1). Currently only 'de' is supported
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
     * The external id of the order customer
     *
     * @return string|null
     */
    public function getExternalCustomerId() : ?string
    {
        return $this->externalCustomerId;
    }
    /**
     * The external id of the order customer
     *
     * @param string|null $externalCustomerId
     *
     * @return self
     */
    public function setExternalCustomerId(?string $externalCustomerId) : self
    {
        $this->initialized['externalCustomerId'] = true;
        $this->externalCustomerId = $externalCustomerId;
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
        $this->initialized['deliveryAddress'] = true;
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }
    /**
     * The customer's email
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * The customer's email
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * The customer's phone number, preferably in the DIN 5008 format, like: +43 2236 123456-7890
     *
     * @return string|null
     */
    public function getPhone() : ?string
    {
        return $this->phone;
    }
    /**
     * The customer's phone number, preferably in the DIN 5008 format, like: +43 2236 123456-7890
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
    * The customer's first name.\
    Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
    Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.
    *
    * @return string|null
    */
    public function getFirstname() : ?string
    {
        return $this->firstname;
    }
    /**
    * The customer's first name.\
    Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
    Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.
    *
    * @param string|null $firstname
    *
    * @return self
    */
    public function setFirstname(?string $firstname) : self
    {
        $this->initialized['firstname'] = true;
        $this->firstname = $firstname;
        return $this;
    }
    /**
    * The customer's last name.\
    Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
    Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.
    *
    * @return string|null
    */
    public function getLastname() : ?string
    {
        return $this->lastname;
    }
    /**
    * The customer's last name.\
    Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
    Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.
    *
    * @param string|null $lastname
    *
    * @return self
    */
    public function setLastname(?string $lastname) : self
    {
        $this->initialized['lastname'] = true;
        $this->lastname = $lastname;
        return $this;
    }
    /**
    * The customer's title.\
    Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
    Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.
    *
    * @return string|null
    */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
    * The customer's title.\
    Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
    Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.
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
    * The customer's company name.\
    Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
    Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.
    *
    * @return string|null
    */
    public function getCompany() : ?string
    {
        return $this->company;
    }
    /**
    * The customer's company name.\
    Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
    Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.
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
    * The customer's company vat number (might be validated).\
    Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
    Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.
    *
    * @return string|null
    */
    public function getCompanyVatNumber() : ?string
    {
        return $this->companyVatNumber;
    }
    /**
    * The customer's company vat number (might be validated).\
    Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
    Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.
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
    * The customer's invoice address.\
    Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
    Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.
    *
    * @return BaseOrderCustomerInvoiceAddress|null
    */
    public function getInvoiceAddress() : ?BaseOrderCustomerInvoiceAddress
    {
        return $this->invoiceAddress;
    }
    /**
    * The customer's invoice address.\
    Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
    Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.
    *
    * @param BaseOrderCustomerInvoiceAddress|null $invoiceAddress
    *
    * @return self
    */
    public function setInvoiceAddress(?BaseOrderCustomerInvoiceAddress $invoiceAddress) : self
    {
        $this->initialized['invoiceAddress'] = true;
        $this->invoiceAddress = $invoiceAddress;
        return $this;
    }
}