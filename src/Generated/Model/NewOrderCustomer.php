<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class NewOrderCustomer implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $gender;
    /**
     * The language code for any customer communications (ISO 639-1). Currently only 'de' is supported
     *
     * @var string
     */
    public string $languageCode;
    /**
     * The external id of the order customer
     *
     * @var string|null
     */
    public ?string $externalCustomerId;
    /**
     * @var OrderCustomerDeliveryAddress
     */
    public OrderCustomerDeliveryAddress $deliveryAddress;
    /**
     * The customer's email
     *
     * @var string|null
     */
    public ?string $email;
    /**
     * The customer\'s phone number. Note that only the DIN 5008 format is supported.\
     * Parenthesis for example are not valid.
     *
     * @var string|null
     */
    public ?string $phone;
    /**
     * The customer's first name.\
     * Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
     * Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.\
     * Because of internal requirements, this field may be set with a fallback, if it is not provided.\
     * If a lastname is provided, this field is required.
     *
     * @var string|null
     */
    public ?string $firstname;
    /**
     * The customer's last name.\
     * Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
     * Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.\
     * Because of internal requirements, this field may be set with a fallback, if it is not provided.\
     * If a lastname is provided, this field is required.
     *
     * @var string|null
     */
    public ?string $lastname;
    /**
     * The customer's title.\
     * Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
     * Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.
     *
     * @var string|null
     */
    public ?string $title;
    /**
     * The customer's company name.\
     * Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
     * Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.
     *
     * @var string|null
     */
    public ?string $company;
    /**
     * The customer's company vat number (might be validated).\
     * Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
     * Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.
     *
     * @var string|null
     */
    public ?string $companyVatNumber;
    /**
     * The customer's invoice address.\
     * Note: This field is required for invoicing and whether it is available or not depends on the used shopCode.\
     * Use the GET /shop endpoint to check if the meta.invoiceEnabled of the shop is set to true.\
     * Because of internal requirements, fields of this array may be set with a fallback, if it is not provided.
     *
     * @var NewOrderCustomerInvoiceAddress|null
     */
    public ?NewOrderCustomerInvoiceAddress $invoiceAddress;
    public function definedProperties(): array
    {
        return ['gender' => 'gender', 'languageCode' => 'languageCode', 'externalCustomerId' => 'externalCustomerId', 'deliveryAddress' => 'deliveryAddress', 'email' => 'email', 'phone' => 'phone', 'firstname' => 'firstname', 'lastname' => 'lastname', 'title' => 'title', 'company' => 'company', 'companyVatNumber' => 'companyVatNumber', 'invoiceAddress' => 'invoiceAddress'];
    }
}