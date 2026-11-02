<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class NewProductDraft implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Product number to be used for the final product\
     * This number is user defined, must be unique and has a maximum length (check maxLength field).\
     * Please ensure that it does not contain any of the following character sequences:
     * '/', '%2F', '%2f', '?', '%3F', '%3f',
     * '#', '%23', '&', '%26'. Using any of these will result in the route not being handled correctly.
     *
     * @var string
     */
    public string $productNumber;
    /**
     * Title of the Product
     *
     * @var string
     */
    public string $productTitle;
    /**
     * Amount of the product contents
     *
     * @var float
     */
    public float $contentsAmount = 1.0;
    /**
     * Weight of the product contents in gram
     *
     * @var int
     */
    public int $contentsWeightGram;
    /**
     * Total weight of the product in gram
     *
     * @var int
     */
    public int $weightGram;
    /**
     * The EAN of the product
     *
     * @var string
     */
    public string $ean;
    /**
     * The TARIC Code of the product
     *
     * @var string
     */
    public string $taricCode;
    /**
     * The purchase price for the product in EUR
     *
     * @var float
     */
    public float $supplierPurchasePriceEUR;
    /**
     * The gross list price of the product in EUR
     *
     * @var float
     */
    public float $listPriceEUR;
    /**
     * Deprecated and obsolete. Any value submitted on input is ignored and this field is always
     * returned as `null`.
     *
     * @deprecated
     *
     * @var string|null
     */
    public ?string $taxCode;
    /**
     * Number of the supplier.\
     * Valid suppliers can be queried with a GET /supplier call
     *
     * @var string
     */
    public string $supplierNumber;
    /**
     * Number of the manufacturer.\
     * Valid manufacturers can be queried with a GET /manufacturer call
     *
     * @var string
     */
    public string $manufacturerNumber;
    /**
     * Number of the brand.\
     * Valid brands can be queried with a GET /brand call
     *
     * @var string
     */
    public string $brandNumber;
    /**
     * Dimensions of the product
     *
     * @var BaseProductDraftDimensions
     */
    public BaseProductDraftDimensions $dimensions;
    /**
     * Minimum available stock level. \
     * "null" means no value is configured. "0" is a valid value and is distinct from "null":
     * - "null": not configured (cleared)
     * - "0": configured at zero units
     * - positive integer: configured at the given level
     *
     * @var int|null
     */
    public ?int $minAvailableStock;
    /**
     * Unit of the product contents.\
     * Must be one of the available values specified in the enum.
     *
     * @var string
     */
    public string $contentsUnit = 'piece';
    public function definedProperties(): array
    {
        return ['productNumber' => 'productNumber', 'productTitle' => 'productTitle', 'contentsAmount' => 'contentsAmount', 'contentsWeightGram' => 'contentsWeightGram', 'weightGram' => 'weightGram', 'ean' => 'ean', 'taricCode' => 'taricCode', 'supplierPurchasePriceEUR' => 'supplierPurchasePriceEUR', 'listPriceEUR' => 'listPriceEUR', 'taxCode' => 'taxCode', 'supplierNumber' => 'supplierNumber', 'manufacturerNumber' => 'manufacturerNumber', 'brandNumber' => 'brandNumber', 'dimensions' => 'dimensions', 'minAvailableStock' => 'minAvailableStock', 'contentsUnit' => 'contentsUnit'];
    }
}