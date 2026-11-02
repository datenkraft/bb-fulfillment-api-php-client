<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class BaseProduct implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Type of the product.
     *
     * @var string
     */
    public string $productType = 'standard';
    /**
     * The title of the article variant.
     *
     * @var string|null
     */
    public ?string $articleVariantTitle;
    /**
     * The type of the article variant.
     *
     * @var string|null
     */
    public ?string $articleVariantType = 'standard_autotitle';
    /**
     * Status of the article regarding visibility.
     *
     * @var string|null
     */
    public ?string $articleStatus = 'active';
    /**
     * Amount of the product contents.
     *
     * @var float|null
     */
    public ?float $contentsAmount = 1.0;
    /**
     * Unit of the product contents. \
     * Units can be queried with a GET /product-unit call.
     *
     * @var string|null
     */
    public ?string $contentsUnit = 'piece';
    /**
     * Weight of the product contents in gram.
     *
     * @var int|null
     */
    public ?int $contentsWeightGram;
    /**
     * Total weight of the product in gram.
     *
     * @var int|null
     */
    public ?int $weightGram;
    /**
     * The variant group of the product.
     *
     * @var string
     */
    public $variantGroup = 'content';
    /**
     * The EAN of the product.
     *
     * @var string|null
     */
    public ?string $ean;
    /**
     * The suggested retail price for the product in EUR.
     *
     * @var float|null
     */
    public ?float $suggestedRetailPriceEUR;
    /**
     * @var list<ProductPurchasePrice>|null
     */
    public ?array $purchasePrices;
    /**
     * @var list<ProductBundledProduct>|null
     */
    public ?array $bundledProducts;
    /**
     * Product number of the manufacturer.
     *
     * @var string|null
     */
    public ?string $productNumberManufacturer;
    /**
     * Country code of the manufacturer (ISO 3166-1 alpha-2).
     *
     * @var string|null
     */
    public ?string $manufacturerCountryCode = 'AT';
    /**
     * The language code used for the product (ISO 639-1).
     *
     * @var string|null
     */
    public ?string $languageCode = 'de';
    /**
     * Dimensions of the product
     *
     * @var BaseProductDimensions|null
     */
    public ?BaseProductDimensions $dimensions;
    public function definedProperties(): array
    {
        return ['productType' => 'productType', 'articleVariantTitle' => 'articleVariantTitle', 'articleVariantType' => 'articleVariantType', 'articleStatus' => 'articleStatus', 'contentsAmount' => 'contentsAmount', 'contentsUnit' => 'contentsUnit', 'contentsWeightGram' => 'contentsWeightGram', 'weightGram' => 'weightGram', 'variantGroup' => 'variantGroup', 'ean' => 'ean', 'suggestedRetailPriceEUR' => 'suggestedRetailPriceEUR', 'purchasePrices' => 'purchasePrices', 'bundledProducts' => 'bundledProducts', 'productNumberManufacturer' => 'productNumberManufacturer', 'manufacturerCountryCode' => 'manufacturerCountryCode', 'languageCode' => 'languageCode', 'dimensions' => 'dimensions'];
    }
}