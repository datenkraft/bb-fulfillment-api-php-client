<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class Product extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Type of the product.
     *
     * @var string
     */
    protected $productType = 'standard';
    /**
     * The title of the article variant.
     *
     * @var string|null
     */
    protected $articleVariantTitle;
    /**
     * The type of the article variant.
     *
     * @var string|null
     */
    protected $articleVariantType = 'standard_autotitle';
    /**
     * Status of the article regarding visibility.
     *
     * @var string|null
     */
    protected $articleStatus = 'active';
    /**
     * Amount of the product contents.
     *
     * @var float|null
     */
    protected $contentsAmount = 1;
    /**
     * Unit of the product contents. \
     * Units can be queried with a GET /product-unit call.
     *
     * @var string|null
     */
    protected $contentsUnit = 'piece';
    /**
     * Weight of the product contents in gram.
     *
     * @var int|null
     */
    protected $contentsWeightGram;
    /**
     * Total weight of the product in gram.
     *
     * @var int|null
     */
    protected $weightGram;
    /**
     * The variant group of the product.
     *
     * @var mixed
     */
    protected $variantGroup = 'content';
    /**
     * The EAN of the product.
     *
     * @var string|null
     */
    protected $ean;
    /**
     * The suggested retail price for the product in EUR.
     *
     * @var float|null
     */
    protected $suggestedRetailPriceEUR;
    /**
     * @var list<ProductPurchasePrice>|null
     */
    protected $purchasePrices;
    /**
     * @var list<ProductBundledProduct>|null
     */
    protected $bundledProducts;
    /**
     * Product number of the manufacturer.
     *
     * @var string|null
     */
    protected $productNumberManufacturer;
    /**
     * Country code of the manufacturer (ISO 3166-1 alpha-2).
     *
     * @var string|null
     */
    protected $manufacturerCountryCode = 'AT';
    /**
     * The language code used for the product (ISO 639-1).
     *
     * @var string|null
     */
    protected $languageCode = 'de';
    /**
     * Dimensions of the product
     *
     * @var BaseProductDimensions|null
     */
    protected $dimensions;
    /**
     * @var string
     */
    protected $productNumber;
    /**
     * The shop to which the product belongs.
     *
     * @var string
     */
    protected $shopCode;
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
    protected $productStatus;
    /**
     * Title of the Product.
     *
     * @var string|null
     */
    protected $productTitle;
    /**
     * Original title of the Product.
     *
     * @var string|null
     */
    protected $productTitleOriginal;
    /**
     * @var ProductImage
     */
    protected $image;
    /**
     * Short description of the article.
     *
     * @var string|null
     */
    protected $articleShortDescription;
    /**
     * Long description of the article.
     *
     * @var string|null
     */
    protected $articleLongDescription;
    /**
     * The TARIC Code of the product.
     *
     * @var string|null
     */
    protected $taricCode;
    /**
     * The list price of the product in EUR.
     *
     * @var float|null
     */
    protected $listPriceEUR;
    /**
     * Gross or net.
     *
     * @var string
     */
    protected $priceType = 'gross';
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
    protected $taxCode = 'default';
    /**
     * Number of the manufacturer. \
     * Manufacturers can be queried with a GET /manufacturer call. \
     * Note: This can be null in some cases (e.g. if the product is a bundle).
     *
     * @var string|null
     */
    protected $manufacturerNumber;
    /**
     * Number of the supplier. \
     * Suppliers can be queried with a GET /supplier call. \
     * Note: This can be null in some cases (e.g. if the product is a bundle).
     *
     * @var string|null
     */
    protected $supplierNumber;
    /**
     * The source of the product.
     * - self: Own product
     * - nice: Product of another supplier
     * - bundle: Product that is composed of individual positions
     *
     * @var string
     */
    protected $source;
    /**
     * Number of the brand. \
     * Brands can be queried with a GET /brand call. \
     * Note: This can be null in some cases (e.g. if the product is a bundle).
     *
     * @var string|null
     */
    protected $brandNumber;
    /**
     * Amount stocked in the warehouse
     * - the reserved amount for ongoing orders is NOT subtracted
     *
     * @var int
     */
    protected $stocked;
    /**
     * Amount reserved for ongoing orders
     *
     * @var int
     */
    protected $reserved;
    /**
     * Amount available for orders
     * - the reserved amount for ongoing orders is subtracted
     * - includes the incoming amount if the overbookingPossibilityStatus is 'only_inbound_deliveries'
     *
     * @var int
     */
    protected $available;
    /**
     * Amount in ongoing inbound deliveries and processed in the receiving area but not yet stocked
     *
     * @var int
     */
    protected $incoming;
    /**
     * Amount processed in the receiving area but not yet stocked
     *
     * @var int
     */
    protected $locked;
    /**
     * Status regarding the possibility of overbooking
     * - possible: Overbooking is possible
     * - not_possible: Overbooking is not possible
     * - only_inbound_deliveries: Overbooking is only possible for the amount in ongoing inbound deliveries
     *
     * @var string
     */
    protected $overbookingPossibilityStatus;
    /**
     * Reserved stock of a product for a specific source
     *
     * @var ReservedFor
     */
    protected $reservedFor;
    /**
     * List of external shops where this product is listed.
     *
     * @var list<ExternalListing>|null
     */
    protected $externalListings;
    /**
     * Options for the product
     * - no_external_sales: Product is not available for external sales
     * - no_airmail_shipping: Product is not available for airmail shipping
     * - serial_number_required: Serial number is required for the product
     * - shipped_in_original_packaging: Product is shipped in original packaging
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
    protected $productOptions;
    /**
     * Status of the article item regarding visibility.
     *
     * @var string|null
     */
    protected $articleItemStatus;
    /**
     * Minimum available stock level. \
     * "null" means no value is configured. "0" is a valid value and is distinct from "null":
     * - "null": not configured (cleared)
     * - "0": configured at zero units
     * - positive integer: configured at the given level
     *
     * @var int|null
     */
    protected $minAvailableStock;
    /**
     * Type of the product.
     *
     * @return string
     */
    public function getProductType(): string
    {
        return $this->productType;
    }
    /**
     * Type of the product.
     *
     * @param string $productType
     *
     * @return self
     */
    public function setProductType(string $productType): self
    {
        $this->initialized['productType'] = true;
        $this->productType = $productType;
        return $this;
    }
    /**
     * The title of the article variant.
     *
     * @return string|null
     */
    public function getArticleVariantTitle(): ?string
    {
        return $this->articleVariantTitle;
    }
    /**
     * The title of the article variant.
     *
     * @param string|null $articleVariantTitle
     *
     * @return self
     */
    public function setArticleVariantTitle(?string $articleVariantTitle): self
    {
        $this->initialized['articleVariantTitle'] = true;
        $this->articleVariantTitle = $articleVariantTitle;
        return $this;
    }
    /**
     * The type of the article variant.
     *
     * @return string|null
     */
    public function getArticleVariantType(): ?string
    {
        return $this->articleVariantType;
    }
    /**
     * The type of the article variant.
     *
     * @param string|null $articleVariantType
     *
     * @return self
     */
    public function setArticleVariantType(?string $articleVariantType): self
    {
        $this->initialized['articleVariantType'] = true;
        $this->articleVariantType = $articleVariantType;
        return $this;
    }
    /**
     * Status of the article regarding visibility.
     *
     * @return string|null
     */
    public function getArticleStatus(): ?string
    {
        return $this->articleStatus;
    }
    /**
     * Status of the article regarding visibility.
     *
     * @param string|null $articleStatus
     *
     * @return self
     */
    public function setArticleStatus(?string $articleStatus): self
    {
        $this->initialized['articleStatus'] = true;
        $this->articleStatus = $articleStatus;
        return $this;
    }
    /**
     * Amount of the product contents.
     *
     * @return float|null
     */
    public function getContentsAmount(): ?float
    {
        return $this->contentsAmount;
    }
    /**
     * Amount of the product contents.
     *
     * @param float|null $contentsAmount
     *
     * @return self
     */
    public function setContentsAmount(?float $contentsAmount): self
    {
        $this->initialized['contentsAmount'] = true;
        $this->contentsAmount = $contentsAmount;
        return $this;
    }
    /**
     * Unit of the product contents. \
     * Units can be queried with a GET /product-unit call.
     *
     * @return string|null
     */
    public function getContentsUnit(): ?string
    {
        return $this->contentsUnit;
    }
    /**
    * Unit of the product contents. \
    Units can be queried with a GET /product-unit call.
    *
    * @param string|null $contentsUnit
    *
    * @return self
    */
    public function setContentsUnit(?string $contentsUnit): self
    {
        $this->initialized['contentsUnit'] = true;
        $this->contentsUnit = $contentsUnit;
        return $this;
    }
    /**
     * Weight of the product contents in gram.
     *
     * @return int|null
     */
    public function getContentsWeightGram(): ?int
    {
        return $this->contentsWeightGram;
    }
    /**
     * Weight of the product contents in gram.
     *
     * @param int|null $contentsWeightGram
     *
     * @return self
     */
    public function setContentsWeightGram(?int $contentsWeightGram): self
    {
        $this->initialized['contentsWeightGram'] = true;
        $this->contentsWeightGram = $contentsWeightGram;
        return $this;
    }
    /**
     * Total weight of the product in gram.
     *
     * @return int|null
     */
    public function getWeightGram(): ?int
    {
        return $this->weightGram;
    }
    /**
     * Total weight of the product in gram.
     *
     * @param int|null $weightGram
     *
     * @return self
     */
    public function setWeightGram(?int $weightGram): self
    {
        $this->initialized['weightGram'] = true;
        $this->weightGram = $weightGram;
        return $this;
    }
    /**
     * The variant group of the product.
     *
     * @return mixed
     */
    public function getVariantGroup()
    {
        return $this->variantGroup;
    }
    /**
     * The variant group of the product.
     *
     * @param mixed $variantGroup
     *
     * @return self
     */
    public function setVariantGroup($variantGroup): self
    {
        $this->initialized['variantGroup'] = true;
        $this->variantGroup = $variantGroup;
        return $this;
    }
    /**
     * The EAN of the product.
     *
     * @return string|null
     */
    public function getEan(): ?string
    {
        return $this->ean;
    }
    /**
     * The EAN of the product.
     *
     * @param string|null $ean
     *
     * @return self
     */
    public function setEan(?string $ean): self
    {
        $this->initialized['ean'] = true;
        $this->ean = $ean;
        return $this;
    }
    /**
     * The suggested retail price for the product in EUR.
     *
     * @return float|null
     */
    public function getSuggestedRetailPriceEUR(): ?float
    {
        return $this->suggestedRetailPriceEUR;
    }
    /**
     * The suggested retail price for the product in EUR.
     *
     * @param float|null $suggestedRetailPriceEUR
     *
     * @return self
     */
    public function setSuggestedRetailPriceEUR(?float $suggestedRetailPriceEUR): self
    {
        $this->initialized['suggestedRetailPriceEUR'] = true;
        $this->suggestedRetailPriceEUR = $suggestedRetailPriceEUR;
        return $this;
    }
    /**
     * @return list<ProductPurchasePrice>|null
     */
    public function getPurchasePrices(): ?array
    {
        return $this->purchasePrices;
    }
    /**
     * @param list<ProductPurchasePrice>|null $purchasePrices
     *
     * @return self
     */
    public function setPurchasePrices(?array $purchasePrices): self
    {
        $this->initialized['purchasePrices'] = true;
        $this->purchasePrices = $purchasePrices;
        return $this;
    }
    /**
     * @return list<ProductBundledProduct>|null
     */
    public function getBundledProducts(): ?array
    {
        return $this->bundledProducts;
    }
    /**
     * @param list<ProductBundledProduct>|null $bundledProducts
     *
     * @return self
     */
    public function setBundledProducts(?array $bundledProducts): self
    {
        $this->initialized['bundledProducts'] = true;
        $this->bundledProducts = $bundledProducts;
        return $this;
    }
    /**
     * Product number of the manufacturer.
     *
     * @return string|null
     */
    public function getProductNumberManufacturer(): ?string
    {
        return $this->productNumberManufacturer;
    }
    /**
     * Product number of the manufacturer.
     *
     * @param string|null $productNumberManufacturer
     *
     * @return self
     */
    public function setProductNumberManufacturer(?string $productNumberManufacturer): self
    {
        $this->initialized['productNumberManufacturer'] = true;
        $this->productNumberManufacturer = $productNumberManufacturer;
        return $this;
    }
    /**
     * Country code of the manufacturer (ISO 3166-1 alpha-2).
     *
     * @return string|null
     */
    public function getManufacturerCountryCode(): ?string
    {
        return $this->manufacturerCountryCode;
    }
    /**
     * Country code of the manufacturer (ISO 3166-1 alpha-2).
     *
     * @param string|null $manufacturerCountryCode
     *
     * @return self
     */
    public function setManufacturerCountryCode(?string $manufacturerCountryCode): self
    {
        $this->initialized['manufacturerCountryCode'] = true;
        $this->manufacturerCountryCode = $manufacturerCountryCode;
        return $this;
    }
    /**
     * The language code used for the product (ISO 639-1).
     *
     * @return string|null
     */
    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }
    /**
     * The language code used for the product (ISO 639-1).
     *
     * @param string|null $languageCode
     *
     * @return self
     */
    public function setLanguageCode(?string $languageCode): self
    {
        $this->initialized['languageCode'] = true;
        $this->languageCode = $languageCode;
        return $this;
    }
    /**
     * Dimensions of the product
     *
     * @return BaseProductDimensions|null
     */
    public function getDimensions(): ?BaseProductDimensions
    {
        return $this->dimensions;
    }
    /**
     * Dimensions of the product
     *
     * @param BaseProductDimensions|null $dimensions
     *
     * @return self
     */
    public function setDimensions(?BaseProductDimensions $dimensions): self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * @return string
     */
    public function getProductNumber(): string
    {
        return $this->productNumber;
    }
    /**
     * @param string $productNumber
     *
     * @return self
     */
    public function setProductNumber(string $productNumber): self
    {
        $this->initialized['productNumber'] = true;
        $this->productNumber = $productNumber;
        return $this;
    }
    /**
     * The shop to which the product belongs.
     *
     * @return string
     */
    public function getShopCode(): string
    {
        return $this->shopCode;
    }
    /**
     * The shop to which the product belongs.
     *
     * @param string $shopCode
     *
     * @return self
     */
    public function setShopCode(string $shopCode): self
    {
        $this->initialized['shopCode'] = true;
        $this->shopCode = $shopCode;
        return $this;
    }
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
     * @return string|null
     */
    public function getProductStatus(): ?string
    {
        return $this->productStatus;
    }
    /**
    * Status of the product regarding sales. \
    Available values:
    - enabled: Product is on sale
    - enabled_external_only: Product is only available in external stores
    - deleted: Product is deleted
    - discontinued: Product is discontinued
    - expired: Product is expired
    - incorrect: Product was incorrectly created
    - internal: Product is available for internal sales only
    - preparation: Product is in preparation for sale
    *
    * @param string|null $productStatus
    *
    * @return self
    */
    public function setProductStatus(?string $productStatus): self
    {
        $this->initialized['productStatus'] = true;
        $this->productStatus = $productStatus;
        return $this;
    }
    /**
     * Title of the Product.
     *
     * @return string|null
     */
    public function getProductTitle(): ?string
    {
        return $this->productTitle;
    }
    /**
     * Title of the Product.
     *
     * @param string|null $productTitle
     *
     * @return self
     */
    public function setProductTitle(?string $productTitle): self
    {
        $this->initialized['productTitle'] = true;
        $this->productTitle = $productTitle;
        return $this;
    }
    /**
     * Original title of the Product.
     *
     * @return string|null
     */
    public function getProductTitleOriginal(): ?string
    {
        return $this->productTitleOriginal;
    }
    /**
     * Original title of the Product.
     *
     * @param string|null $productTitleOriginal
     *
     * @return self
     */
    public function setProductTitleOriginal(?string $productTitleOriginal): self
    {
        $this->initialized['productTitleOriginal'] = true;
        $this->productTitleOriginal = $productTitleOriginal;
        return $this;
    }
    /**
     * @return ProductImage
     */
    public function getImage(): ProductImage
    {
        return $this->image;
    }
    /**
     * @param ProductImage $image
     *
     * @return self
     */
    public function setImage(ProductImage $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    /**
     * Short description of the article.
     *
     * @return string|null
     */
    public function getArticleShortDescription(): ?string
    {
        return $this->articleShortDescription;
    }
    /**
     * Short description of the article.
     *
     * @param string|null $articleShortDescription
     *
     * @return self
     */
    public function setArticleShortDescription(?string $articleShortDescription): self
    {
        $this->initialized['articleShortDescription'] = true;
        $this->articleShortDescription = $articleShortDescription;
        return $this;
    }
    /**
     * Long description of the article.
     *
     * @return string|null
     */
    public function getArticleLongDescription(): ?string
    {
        return $this->articleLongDescription;
    }
    /**
     * Long description of the article.
     *
     * @param string|null $articleLongDescription
     *
     * @return self
     */
    public function setArticleLongDescription(?string $articleLongDescription): self
    {
        $this->initialized['articleLongDescription'] = true;
        $this->articleLongDescription = $articleLongDescription;
        return $this;
    }
    /**
     * The TARIC Code of the product.
     *
     * @return string|null
     */
    public function getTaricCode(): ?string
    {
        return $this->taricCode;
    }
    /**
     * The TARIC Code of the product.
     *
     * @param string|null $taricCode
     *
     * @return self
     */
    public function setTaricCode(?string $taricCode): self
    {
        $this->initialized['taricCode'] = true;
        $this->taricCode = $taricCode;
        return $this;
    }
    /**
     * The list price of the product in EUR.
     *
     * @return float|null
     */
    public function getListPriceEUR(): ?float
    {
        return $this->listPriceEUR;
    }
    /**
     * The list price of the product in EUR.
     *
     * @param float|null $listPriceEUR
     *
     * @return self
     */
    public function setListPriceEUR(?float $listPriceEUR): self
    {
        $this->initialized['listPriceEUR'] = true;
        $this->listPriceEUR = $listPriceEUR;
        return $this;
    }
    /**
     * Gross or net.
     *
     * @return string
     */
    public function getPriceType(): string
    {
        return $this->priceType;
    }
    /**
     * Gross or net.
     *
     * @param string $priceType
     *
     * @return self
     */
    public function setPriceType(string $priceType): self
    {
        $this->initialized['priceType'] = true;
        $this->priceType = $priceType;
        return $this;
    }
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
     * @return string|null
     */
    public function getTaxCode(): ?string
    {
        return $this->taxCode;
    }
    /**
    * One of the available tax codes.
    - default: Default tax rate (in e.g. Austria 20 %)
    - reduced1: 1st reduced tax rate (in e.g. Austria 13 %)
    - reduced2: 2nd reduced tax rate (in e.g. Austria 10 %)
    - reduced3: 3rd reduced tax rate (in e.g. Austria 5 %)
    - none: not taxable (0%)
    
    Note: This can be null if the tax code could not be determined.
    *
    * @param string|null $taxCode
    *
    * @return self
    */
    public function setTaxCode(?string $taxCode): self
    {
        $this->initialized['taxCode'] = true;
        $this->taxCode = $taxCode;
        return $this;
    }
    /**
     * Number of the manufacturer. \
     * Manufacturers can be queried with a GET /manufacturer call. \
     * Note: This can be null in some cases (e.g. if the product is a bundle).
     *
     * @return string|null
     */
    public function getManufacturerNumber(): ?string
    {
        return $this->manufacturerNumber;
    }
    /**
    * Number of the manufacturer. \
    Manufacturers can be queried with a GET /manufacturer call. \
    Note: This can be null in some cases (e.g. if the product is a bundle).
    *
    * @param string|null $manufacturerNumber
    *
    * @return self
    */
    public function setManufacturerNumber(?string $manufacturerNumber): self
    {
        $this->initialized['manufacturerNumber'] = true;
        $this->manufacturerNumber = $manufacturerNumber;
        return $this;
    }
    /**
     * Number of the supplier. \
     * Suppliers can be queried with a GET /supplier call. \
     * Note: This can be null in some cases (e.g. if the product is a bundle).
     *
     * @return string|null
     */
    public function getSupplierNumber(): ?string
    {
        return $this->supplierNumber;
    }
    /**
    * Number of the supplier. \
    Suppliers can be queried with a GET /supplier call. \
    Note: This can be null in some cases (e.g. if the product is a bundle).
    *
    * @param string|null $supplierNumber
    *
    * @return self
    */
    public function setSupplierNumber(?string $supplierNumber): self
    {
        $this->initialized['supplierNumber'] = true;
        $this->supplierNumber = $supplierNumber;
        return $this;
    }
    /**
     * The source of the product.
     * - self: Own product
     * - nice: Product of another supplier
     * - bundle: Product that is composed of individual positions
     *
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }
    /**
    * The source of the product.
    - self: Own product
    - nice: Product of another supplier
    - bundle: Product that is composed of individual positions
    *
    * @param string $source
    *
    * @return self
    */
    public function setSource(string $source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
    /**
     * Number of the brand. \
     * Brands can be queried with a GET /brand call. \
     * Note: This can be null in some cases (e.g. if the product is a bundle).
     *
     * @return string|null
     */
    public function getBrandNumber(): ?string
    {
        return $this->brandNumber;
    }
    /**
    * Number of the brand. \
    Brands can be queried with a GET /brand call. \
    Note: This can be null in some cases (e.g. if the product is a bundle).
    *
    * @param string|null $brandNumber
    *
    * @return self
    */
    public function setBrandNumber(?string $brandNumber): self
    {
        $this->initialized['brandNumber'] = true;
        $this->brandNumber = $brandNumber;
        return $this;
    }
    /**
     * Amount stocked in the warehouse
     * - the reserved amount for ongoing orders is NOT subtracted
     *
     * @return int
     */
    public function getStocked(): int
    {
        return $this->stocked;
    }
    /**
    * Amount stocked in the warehouse
    - the reserved amount for ongoing orders is NOT subtracted
    *
    * @param int $stocked
    *
    * @return self
    */
    public function setStocked(int $stocked): self
    {
        $this->initialized['stocked'] = true;
        $this->stocked = $stocked;
        return $this;
    }
    /**
     * Amount reserved for ongoing orders
     *
     * @return int
     */
    public function getReserved(): int
    {
        return $this->reserved;
    }
    /**
     * Amount reserved for ongoing orders
     *
     * @param int $reserved
     *
     * @return self
     */
    public function setReserved(int $reserved): self
    {
        $this->initialized['reserved'] = true;
        $this->reserved = $reserved;
        return $this;
    }
    /**
     * Amount available for orders
     * - the reserved amount for ongoing orders is subtracted
     * - includes the incoming amount if the overbookingPossibilityStatus is 'only_inbound_deliveries'
     *
     * @return int
     */
    public function getAvailable(): int
    {
        return $this->available;
    }
    /**
    * Amount available for orders
    - the reserved amount for ongoing orders is subtracted
    - includes the incoming amount if the overbookingPossibilityStatus is 'only_inbound_deliveries'
    *
    * @param int $available
    *
    * @return self
    */
    public function setAvailable(int $available): self
    {
        $this->initialized['available'] = true;
        $this->available = $available;
        return $this;
    }
    /**
     * Amount in ongoing inbound deliveries and processed in the receiving area but not yet stocked
     *
     * @return int
     */
    public function getIncoming(): int
    {
        return $this->incoming;
    }
    /**
     * Amount in ongoing inbound deliveries and processed in the receiving area but not yet stocked
     *
     * @param int $incoming
     *
     * @return self
     */
    public function setIncoming(int $incoming): self
    {
        $this->initialized['incoming'] = true;
        $this->incoming = $incoming;
        return $this;
    }
    /**
     * Amount processed in the receiving area but not yet stocked
     *
     * @return int
     */
    public function getLocked(): int
    {
        return $this->locked;
    }
    /**
     * Amount processed in the receiving area but not yet stocked
     *
     * @param int $locked
     *
     * @return self
     */
    public function setLocked(int $locked): self
    {
        $this->initialized['locked'] = true;
        $this->locked = $locked;
        return $this;
    }
    /**
     * Status regarding the possibility of overbooking
     * - possible: Overbooking is possible
     * - not_possible: Overbooking is not possible
     * - only_inbound_deliveries: Overbooking is only possible for the amount in ongoing inbound deliveries
     *
     * @return string
     */
    public function getOverbookingPossibilityStatus(): string
    {
        return $this->overbookingPossibilityStatus;
    }
    /**
    * Status regarding the possibility of overbooking
    - possible: Overbooking is possible
    - not_possible: Overbooking is not possible
    - only_inbound_deliveries: Overbooking is only possible for the amount in ongoing inbound deliveries
    *
    * @param string $overbookingPossibilityStatus
    *
    * @return self
    */
    public function setOverbookingPossibilityStatus(string $overbookingPossibilityStatus): self
    {
        $this->initialized['overbookingPossibilityStatus'] = true;
        $this->overbookingPossibilityStatus = $overbookingPossibilityStatus;
        return $this;
    }
    /**
     * Reserved stock of a product for a specific source
     *
     * @return ReservedFor
     */
    public function getReservedFor(): ReservedFor
    {
        return $this->reservedFor;
    }
    /**
     * Reserved stock of a product for a specific source
     *
     * @param ReservedFor $reservedFor
     *
     * @return self
     */
    public function setReservedFor(ReservedFor $reservedFor): self
    {
        $this->initialized['reservedFor'] = true;
        $this->reservedFor = $reservedFor;
        return $this;
    }
    /**
     * List of external shops where this product is listed.
     *
     * @return list<ExternalListing>|null
     */
    public function getExternalListings(): ?array
    {
        return $this->externalListings;
    }
    /**
     * List of external shops where this product is listed.
     *
     * @param list<ExternalListing>|null $externalListings
     *
     * @return self
     */
    public function setExternalListings(?array $externalListings): self
    {
        $this->initialized['externalListings'] = true;
        $this->externalListings = $externalListings;
        return $this;
    }
    /**
     * Options for the product
     * - no_external_sales: Product is not available for external sales
     * - no_airmail_shipping: Product is not available for airmail shipping
     * - serial_number_required: Serial number is required for the product
     * - shipped_in_original_packaging: Product is shipped in original packaging
     * - extra_shipping_only: Extra shipping is required for the product
     * - dangerous_goods: Product is classified as dangerous goods
     * - trace_code_required: Trace code is required for the product
     * - refrigerated_product: Product is refrigerated
     * - heat_sensitive: Product is heat sensitive
     * - spedition_shipping_only: Product is only available for spedition shipping
     * - batch_required: Batch is required for the product
     *
     * @return list<string>
     */
    public function getProductOptions(): array
    {
        return $this->productOptions;
    }
    /**
    * Options for the product
    - no_external_sales: Product is not available for external sales
    - no_airmail_shipping: Product is not available for airmail shipping
    - serial_number_required: Serial number is required for the product
    - shipped_in_original_packaging: Product is shipped in original packaging
    - extra_shipping_only: Extra shipping is required for the product
    - dangerous_goods: Product is classified as dangerous goods
    - trace_code_required: Trace code is required for the product
    - refrigerated_product: Product is refrigerated
    - heat_sensitive: Product is heat sensitive
    - spedition_shipping_only: Product is only available for spedition shipping
    - batch_required: Batch is required for the product
    *
    * @param list<string> $productOptions
    *
    * @return self
    */
    public function setProductOptions(array $productOptions): self
    {
        $this->initialized['productOptions'] = true;
        $this->productOptions = $productOptions;
        return $this;
    }
    /**
     * Status of the article item regarding visibility.
     *
     * @return string|null
     */
    public function getArticleItemStatus(): ?string
    {
        return $this->articleItemStatus;
    }
    /**
     * Status of the article item regarding visibility.
     *
     * @param string|null $articleItemStatus
     *
     * @return self
     */
    public function setArticleItemStatus(?string $articleItemStatus): self
    {
        $this->initialized['articleItemStatus'] = true;
        $this->articleItemStatus = $articleItemStatus;
        return $this;
    }
    /**
     * Minimum available stock level. \
     * "null" means no value is configured. "0" is a valid value and is distinct from "null":
     * - "null": not configured (cleared)
     * - "0": configured at zero units
     * - positive integer: configured at the given level
     *
     * @return int|null
     */
    public function getMinAvailableStock(): ?int
    {
        return $this->minAvailableStock;
    }
    /**
    * Minimum available stock level. \
    "null" means no value is configured. "0" is a valid value and is distinct from "null":
    - "null": not configured (cleared)
    - "0": configured at zero units
    - positive integer: configured at the given level
    *
    * @param int|null $minAvailableStock
    *
    * @return self
    */
    public function setMinAvailableStock(?int $minAvailableStock): self
    {
        $this->initialized['minAvailableStock'] = true;
        $this->minAvailableStock = $minAvailableStock;
        return $this;
    }
}