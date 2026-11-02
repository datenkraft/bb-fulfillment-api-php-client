<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class StockCheck implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Number of the warehouse list created for the stock check. Only unique per `type`.
     *
     * @var string
     */
    public string $stockCheckNumber;
    /**
     * The product number the stock check was requested for
     *
     * @var string
     */
    public string $productNumber;
    /**
     * The shop the product belongs to
     *
     * @var string
     */
    public string $shopCode;
    /**
     * Kind of stock check performed in the warehouse:
     * - `inventory`: count the stock of the product (inventory list)
     * - `expiration_date`: check the expiration dates of the stock (control list)
     * - `ean`: check the EAN codes of the stock (control list)
     *
     * @var string
     */
    public string $type;
    /**
     * Status of the stock check:
     * - `open`: not yet processed by the warehouse (a newly requested stock check is always `open`)
     * - `finished`: processed by the warehouse
     * - `nullified`: cancelled without processing
     *
     * @var string
     */
    public string $status;
    /**
     * The date (Y-m-d) the stock check was requested.
     *
     * @var \DateTime
     */
    public \DateTime $createdDate;
    /**
     * The date and time the stock check was finished or nullified. Format in ISO 8601. Null while the stock check is open.
     *
     * @var \DateTime|null
     */
    public ?\DateTime $completedAt;
    public function definedProperties(): array
    {
        return ['stockCheckNumber' => 'stockCheckNumber', 'productNumber' => 'productNumber', 'shopCode' => 'shopCode', 'type' => 'type', 'status' => 'status', 'createdDate' => 'createdDate', 'completedAt' => 'completedAt'];
    }
}