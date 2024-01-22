<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class Product extends \ArrayObject
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
    Units can be queried with a GET /product-unit call.
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
     * 
     *
     * @var ProductPurchasePrice[]|null
     */
    protected $purchasePrices;
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
     * 
     *
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
    * One of the available tax codes.
    - default: Default tax rate (in e.g. Austria 20 %)
    - reduced1: 1st reduced tax rate (in e.g. Austria 13 %)
    - reduced2: 2nd reduced tax rate (in e.g. Austria 10 %)
    - none: not taxable (0%)
    
    Note: This can be null if the tax code could not be determined.
    *
    * @var string|null
    */
    protected $taxCode = 'default';
    /**
    * Number of the manufacturer. \
    Manufacturers can be queried with a GET /manufacturer call. \
    Note: This can be null in some cases (e.g. if the product is a bundle).
    *
    * @var string|null
    */
    protected $manufacturerNumber;
    /**
    * Number of the supplier. \
    Suppliers can be queried with a GET /supplier call. \
    Note: This can be null in some cases (e.g. if the product is a bundle).
    *
    * @var string|null
    */
    protected $supplierNumber;
    /**
    * The source of the product.
    - self: Own product
    - nice: Product of another supplier
    - bundle: Product that is composed of individual positions
    *
    * @var string
    */
    protected $source;
    /**
    * Number of the brand. \
    Brands can be queried with a GET /brand call. \
    Note: This can be null in some cases (e.g. if the product is a bundle).
    *
    * @var string|null
    */
    protected $brandNumber;
    /**
     * Type of the product.
     *
     * @return string
     */
    public function getProductType() : string
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
    public function setProductType(string $productType) : self
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
    public function getArticleVariantTitle() : ?string
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
    public function setArticleVariantTitle(?string $articleVariantTitle) : self
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
    public function getArticleVariantType() : ?string
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
    public function setArticleVariantType(?string $articleVariantType) : self
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
    public function getArticleStatus() : ?string
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
    public function setArticleStatus(?string $articleStatus) : self
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
    public function getContentsAmount() : ?float
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
    public function setContentsAmount(?float $contentsAmount) : self
    {
        $this->initialized['contentsAmount'] = true;
        $this->contentsAmount = $contentsAmount;
        return $this;
    }
    /**
    * Unit of the product contents. \
    Units can be queried with a GET /product-unit call.
    *
    * @return string|null
    */
    public function getContentsUnit() : ?string
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
    public function setContentsUnit(?string $contentsUnit) : self
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
    public function getContentsWeightGram() : ?int
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
    public function setContentsWeightGram(?int $contentsWeightGram) : self
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
    public function getWeightGram() : ?int
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
    public function setWeightGram(?int $weightGram) : self
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
    public function setVariantGroup($variantGroup) : self
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
    public function getEan() : ?string
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
    public function setEan(?string $ean) : self
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
    public function getSuggestedRetailPriceEUR() : ?float
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
    public function setSuggestedRetailPriceEUR(?float $suggestedRetailPriceEUR) : self
    {
        $this->initialized['suggestedRetailPriceEUR'] = true;
        $this->suggestedRetailPriceEUR = $suggestedRetailPriceEUR;
        return $this;
    }
    /**
     * 
     *
     * @return ProductPurchasePrice[]|null
     */
    public function getPurchasePrices() : ?array
    {
        return $this->purchasePrices;
    }
    /**
     * 
     *
     * @param ProductPurchasePrice[]|null $purchasePrices
     *
     * @return self
     */
    public function setPurchasePrices(?array $purchasePrices) : self
    {
        $this->initialized['purchasePrices'] = true;
        $this->purchasePrices = $purchasePrices;
        return $this;
    }
    /**
     * Product number of the manufacturer.
     *
     * @return string|null
     */
    public function getProductNumberManufacturer() : ?string
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
    public function setProductNumberManufacturer(?string $productNumberManufacturer) : self
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
    public function getManufacturerCountryCode() : ?string
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
    public function setManufacturerCountryCode(?string $manufacturerCountryCode) : self
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
    public function getLanguageCode() : ?string
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
    public function setLanguageCode(?string $languageCode) : self
    {
        $this->initialized['languageCode'] = true;
        $this->languageCode = $languageCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProductNumber() : string
    {
        return $this->productNumber;
    }
    /**
     * 
     *
     * @param string $productNumber
     *
     * @return self
     */
    public function setProductNumber(string $productNumber) : self
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
    public function getShopCode() : string
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
    public function setShopCode(string $shopCode) : self
    {
        $this->initialized['shopCode'] = true;
        $this->shopCode = $shopCode;
        return $this;
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
    * @return string|null
    */
    public function getProductStatus() : ?string
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
    public function setProductStatus(?string $productStatus) : self
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
    public function getProductTitle() : ?string
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
    public function setProductTitle(?string $productTitle) : self
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
    public function getProductTitleOriginal() : ?string
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
    public function setProductTitleOriginal(?string $productTitleOriginal) : self
    {
        $this->initialized['productTitleOriginal'] = true;
        $this->productTitleOriginal = $productTitleOriginal;
        return $this;
    }
    /**
     * Short description of the article.
     *
     * @return string|null
     */
    public function getArticleShortDescription() : ?string
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
    public function setArticleShortDescription(?string $articleShortDescription) : self
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
    public function getArticleLongDescription() : ?string
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
    public function setArticleLongDescription(?string $articleLongDescription) : self
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
    public function getTaricCode() : ?string
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
    public function setTaricCode(?string $taricCode) : self
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
    public function getListPriceEUR() : ?float
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
    public function setListPriceEUR(?float $listPriceEUR) : self
    {
        $this->initialized['listPriceEUR'] = true;
        $this->listPriceEUR = $listPriceEUR;
        return $this;
    }
    /**
    * One of the available tax codes.
    - default: Default tax rate (in e.g. Austria 20 %)
    - reduced1: 1st reduced tax rate (in e.g. Austria 13 %)
    - reduced2: 2nd reduced tax rate (in e.g. Austria 10 %)
    - none: not taxable (0%)
    
    Note: This can be null if the tax code could not be determined.
    *
    * @return string|null
    */
    public function getTaxCode() : ?string
    {
        return $this->taxCode;
    }
    /**
    * One of the available tax codes.
    - default: Default tax rate (in e.g. Austria 20 %)
    - reduced1: 1st reduced tax rate (in e.g. Austria 13 %)
    - reduced2: 2nd reduced tax rate (in e.g. Austria 10 %)
    - none: not taxable (0%)
    
    Note: This can be null if the tax code could not be determined.
    *
    * @param string|null $taxCode
    *
    * @return self
    */
    public function setTaxCode(?string $taxCode) : self
    {
        $this->initialized['taxCode'] = true;
        $this->taxCode = $taxCode;
        return $this;
    }
    /**
    * Number of the manufacturer. \
    Manufacturers can be queried with a GET /manufacturer call. \
    Note: This can be null in some cases (e.g. if the product is a bundle).
    *
    * @return string|null
    */
    public function getManufacturerNumber() : ?string
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
    public function setManufacturerNumber(?string $manufacturerNumber) : self
    {
        $this->initialized['manufacturerNumber'] = true;
        $this->manufacturerNumber = $manufacturerNumber;
        return $this;
    }
    /**
    * Number of the supplier. \
    Suppliers can be queried with a GET /supplier call. \
    Note: This can be null in some cases (e.g. if the product is a bundle).
    *
    * @return string|null
    */
    public function getSupplierNumber() : ?string
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
    public function setSupplierNumber(?string $supplierNumber) : self
    {
        $this->initialized['supplierNumber'] = true;
        $this->supplierNumber = $supplierNumber;
        return $this;
    }
    /**
    * The source of the product.
    - self: Own product
    - nice: Product of another supplier
    - bundle: Product that is composed of individual positions
    *
    * @return string
    */
    public function getSource() : string
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
    public function setSource(string $source) : self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
    /**
    * Number of the brand. \
    Brands can be queried with a GET /brand call. \
    Note: This can be null in some cases (e.g. if the product is a bundle).
    *
    * @return string|null
    */
    public function getBrandNumber() : ?string
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
    public function setBrandNumber(?string $brandNumber) : self
    {
        $this->initialized['brandNumber'] = true;
        $this->brandNumber = $brandNumber;
        return $this;
    }
}