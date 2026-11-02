<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class Product implements AdditionalPropertiesInterface
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
    /**
     * @var string
     */
    public string $productNumber;
    /**
     * The shop to which the product belongs.
     *
     * @var string
     */
    public string $shopCode;
    /**
     * Status of the product regarding sales. \
     * Available values:
     * - enabled: Product is on sale
     * - enabled_external_only: Product is only available in external stores
     * - deleted: Product is deleted
     * - discontinued: Product is discontinued
     * - expired: Product is expired
     * - incorrect: Product was incorrectly created
     * - internal: Product is available for internal sales only
     * - preparation: Product is in preparation for sale
     *
     * @var string|null
     */
    public ?string $productStatus;
    /**
     * Title of the Product.
     *
     * @var string|null
     */
    public ?string $productTitle;
    /**
     * Original title of the Product.
     *
     * @var string|null
     */
    public ?string $productTitleOriginal;
    /**
     * @var ProductImage
     */
    public ProductImage $image;
    /**
     * Short description of the article.
     *
     * @var string|null
     */
    public ?string $articleShortDescription;
    /**
     * Long description of the article.
     *
     * @var string|null
     */
    public ?string $articleLongDescription;
    /**
     * The TARIC Code of the product.
     *
     * @var string|null
     */
    public ?string $taricCode;
    /**
     * The list price of the product in EUR.
     *
     * @var float|null
     */
    public ?float $listPriceEUR;
    /**
     * Gross or net.
     *
     * @var string
     */
    public string $priceType = 'gross';
    /**
     * One of the available tax codes.
     * - default: Default tax rate (in e.g. Austria 20 %)
     * - reduced1: 1st reduced tax rate (in e.g. Austria 13 %)
     * - reduced2: 2nd reduced tax rate (in e.g. Austria 10 %)
     * - reduced3: 3rd reduced tax rate (in e.g. Austria 5 %)
     * - none: not taxable (0%)
     * 
     * Note: This can be null if the tax code could not be determined.
     *
     * @var string|null
     */
    public ?string $taxCode = 'default';
    /**
     * Number of the manufacturer. \
     * Manufacturers can be queried with a GET /manufacturer call. \
     * Note: This can be null in some cases (e.g. if the product is a bundle).
     *
     * @var string|null
     */
    public ?string $manufacturerNumber;
    /**
     * Number of the supplier. \
     * Suppliers can be queried with a GET /supplier call. \
     * Note: This can be null in some cases (e.g. if the product is a bundle).
     *
     * @var string|null
     */
    public ?string $supplierNumber;
    /**
     * The source of the product.
     * - self: Own product
     * - nice: Product of another supplier
     * - bundle: Product that is composed of individual positions
     *
     * @var string
     */
    public string $source;
    /**
     * Number of the brand. \
     * Brands can be queried with a GET /brand call. \
     * Note: This can be null in some cases (e.g. if the product is a bundle).
     *
     * @var string|null
     */
    public ?string $brandNumber;
    /**
     * Amount stocked in the warehouse
     * - the reserved amount for ongoing orders is NOT subtracted
     *
     * @var int
     */
    public int $stocked;
    /**
     * Amount reserved for ongoing orders
     *
     * @var int
     */
    public int $reserved;
    /**
     * Amount available for orders
     * - the reserved amount for ongoing orders is subtracted
     * - includes the incoming amount if the overbookingPossibilityStatus is 'only_inbound_deliveries'
     *
     * @var int
     */
    public int $available;
    /**
     * Amount in ongoing inbound deliveries and processed in the receiving area but not yet stocked
     *
     * @var int
     */
    public int $incoming;
    /**
     * Amount processed in the receiving area but not yet stocked
     *
     * @var int
     */
    public int $locked;
    /**
     * Status regarding the possibility of overbooking
     * - possible: Overbooking is possible
     * - not_possible: Overbooking is not possible
     * - only_inbound_deliveries: Overbooking is only possible for the amount in ongoing inbound deliveries
     *
     * @var string
     */
    public string $overbookingPossibilityStatus;
    /**
     * Reserved stock of a product for a specific source
     *
     * @var ReservedFor
     */
    public ReservedFor $reservedFor;
    /**
     * List of external shops where this product is listed.
     *
     * @var list<ExternalListing>|null
     */
    public ?array $externalListings;
    /**
     * Options for the product
     * - no_external_sales: Product is not available for external sales
     * - no_airmail_shipping: Product is not available for airmail shipping
     * - serial_number_required: Serial number is required for the product
     * - shipped_in_original_packaging: Single items ship in original packaging; multi-item or mixed orders use outer packaging
     * - extra_shipping_only: Extra shipping is required for the product
     * - dangerous_goods: Product is classified as dangerous goods
     * - trace_code_required: Trace code is required for the product
     * - refrigerated_product: Product is refrigerated
     * - heat_sensitive: Product is heat sensitive
     * - spedition_shipping_only: Product is only available for spedition shipping
     * - batch_required: Batch is required for the product
     *
     * @var list<string>
     */
    public array $productOptions;
    /**
     * Status of the article item regarding visibility.
     *
     * @var string|null
     */
    public ?string $articleItemStatus;
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
    public function definedProperties(): array
    {
        return ['productType' => 'productType', 'articleVariantTitle' => 'articleVariantTitle', 'articleVariantType' => 'articleVariantType', 'articleStatus' => 'articleStatus', 'contentsAmount' => 'contentsAmount', 'contentsUnit' => 'contentsUnit', 'contentsWeightGram' => 'contentsWeightGram', 'weightGram' => 'weightGram', 'variantGroup' => 'variantGroup', 'ean' => 'ean', 'suggestedRetailPriceEUR' => 'suggestedRetailPriceEUR', 'purchasePrices' => 'purchasePrices', 'bundledProducts' => 'bundledProducts', 'productNumberManufacturer' => 'productNumberManufacturer', 'manufacturerCountryCode' => 'manufacturerCountryCode', 'languageCode' => 'languageCode', 'dimensions' => 'dimensions', 'productNumber' => 'productNumber', 'shopCode' => 'shopCode', 'productStatus' => 'productStatus', 'productTitle' => 'productTitle', 'productTitleOriginal' => 'productTitleOriginal', 'image' => 'image', 'articleShortDescription' => 'articleShortDescription', 'articleLongDescription' => 'articleLongDescription', 'taricCode' => 'taricCode', 'listPriceEUR' => 'listPriceEUR', 'priceType' => 'priceType', 'taxCode' => 'taxCode', 'manufacturerNumber' => 'manufacturerNumber', 'supplierNumber' => 'supplierNumber', 'source' => 'source', 'brandNumber' => 'brandNumber', 'stocked' => 'stocked', 'reserved' => 'reserved', 'available' => 'available', 'incoming' => 'incoming', 'locked' => 'locked', 'overbookingPossibilityStatus' => 'overbookingPossibilityStatus', 'reservedFor' => 'reservedFor', 'externalListings' => 'externalListings', 'productOptions' => 'productOptions', 'articleItemStatus' => 'articleItemStatus', 'minAvailableStock' => 'minAvailableStock'];
    }
}