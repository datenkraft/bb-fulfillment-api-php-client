<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class Product
{
    /**
     * Type of the product
     *
     * @var string
     */
    protected $productType = 'standard';
    /**
    * The title of the article variant. \
    Must not be set when the articleVariantType is 'standard_autotitle'.
    *
    * @var string|null
    */
    protected $articleVariantTitle;
    /**
    * The type of the article variant. \
    The articleVariantType 'standard_autotitle' is only allowed for the variantGroup 'content'
    *
    * @var string|null
    */
    protected $articleVariantType = 'standard_autotitle';
    /**
     * Status of the article regarding visibility ('active' if no value is provided)
     *
     * @var string|null
     */
    protected $articleStatus = 'active';
    /**
     * Amount of the product contents (1 if no value is provided)
     *
     * @var float|null
     */
    protected $contentsAmount = '1';
    /**
     * Unit of the product contents ('stk' if no value is provided).
     *
     * @var string|null
     */
    protected $contentsUnit = 'stk';
    /**
     * Weight of the product contents in gram
     *
     * @var int|null
     */
    protected $contentsWeightGram;
    /**
     * Total weight of the product in gram
     *
     * @var int|null
     */
    protected $weightGram;
    /**
     * The variant group of the product
     *
     * @var mixed
     */
    protected $variantGroup = 'content';
    /**
     * The EAN of the product
     *
     * @var string|null
     */
    protected $ean;
    /**
     * The suggested retail price for the product in EUR
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
     * Country code of the manufacturer (ISO 3166-1 alpha-2)
     *
     * @var string|null
     */
    protected $manufacturerCountryCode = 'AT';
    /**
     * The language code used for the product (ISO 639-1)
     *
     * @var string
     */
    protected $languageCode = 'de';
    /**
    * Title of the product.\
    Note: This can be null if the product was not created via the API.
    *
    * @var string|null
    */
    protected $productTitle;
    /**
    * Original title of the product.\
    Note: This can be null if the product was not created via the API.
    *
    * @var string|null
    */
    protected $productTitleOriginal;
    /**
    * Status of the product regarding sales.\
    Available values:
    - enabled: Product is on sale
    - enabled_external_only: Product is only available in external stores
    - deleted: Product is deleted
    - discontinued: Product is disontinued
    - expired: Product is expired
    - incorrect: Product was incorrectly created
    - internal: Product is available for internal sales only
    - preparation: Product is in preparation for sale
    
    Note: This can be null if the product was not created via the API.
    *
    * @var string|null
    */
    protected $productStatus;
    /**
    * Short description of the article.\
    Note: This can be null if the product was not created via the API.
    *
    * @var string|null
    */
    protected $articleShortDescription;
    /**
    * Long description of the article.\
    Note: This can be null if the product was not created via the API.
    *
    * @var string|null
    */
    protected $articleLongDescription;
    /**
    * The TARIC code of the product.\
    Note: This can be null if the product was not created via the API.
    *
    * @var string|null
    */
    protected $taricCode;
    /**
    * The list price of the product in EUR.\
    Note: This can be null if the product was not created via the API.
    *
    * @var float|null
    */
    protected $listPriceEUR;
    /**
    * One of the available tax codes.
    - std: Standard tax rate (AT 20%)
    - spc: 1st tax rate (AT 13%)
    - erm: 2nd tax rate (AT 10%)
    - erm3: 3rd tax rate (AT 5%)
    - nsp: not taxable (0%)
    
    Note: This can be null if the product was not created via the API.
    *
    * @var string|null
    */
    protected $taxCode;
    /**
    * Number of the manufacturer.\
    Note: This can be null if the product was not created via the API.
    *
    * @var string|null
    */
    protected $manufacturerNumber;
    /**
    * Number of the supplier.\
    Note: This can be null if the product was not created via the API.
    *
    * @var string|null
    */
    protected $supplierNumber;
    /**
     * 
     *
     * @var string
     */
    protected $productNumber;
    /**
     * The shop to which the product belongs
     *
     * @var string
     */
    protected $shopCode;
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
     * Type of the product
     *
     * @return string
     */
    public function getProductType() : string
    {
        return $this->productType;
    }
    /**
     * Type of the product
     *
     * @param string $productType
     *
     * @return self
     */
    public function setProductType(string $productType) : self
    {
        $this->productType = $productType;
        return $this;
    }
    /**
    * The title of the article variant. \
    Must not be set when the articleVariantType is 'standard_autotitle'.
    *
    * @return string|null
    */
    public function getArticleVariantTitle() : ?string
    {
        return $this->articleVariantTitle;
    }
    /**
    * The title of the article variant. \
    Must not be set when the articleVariantType is 'standard_autotitle'.
    *
    * @param string|null $articleVariantTitle
    *
    * @return self
    */
    public function setArticleVariantTitle(?string $articleVariantTitle) : self
    {
        $this->articleVariantTitle = $articleVariantTitle;
        return $this;
    }
    /**
    * The type of the article variant. \
    The articleVariantType 'standard_autotitle' is only allowed for the variantGroup 'content'
    *
    * @return string|null
    */
    public function getArticleVariantType() : ?string
    {
        return $this->articleVariantType;
    }
    /**
    * The type of the article variant. \
    The articleVariantType 'standard_autotitle' is only allowed for the variantGroup 'content'
    *
    * @param string|null $articleVariantType
    *
    * @return self
    */
    public function setArticleVariantType(?string $articleVariantType) : self
    {
        $this->articleVariantType = $articleVariantType;
        return $this;
    }
    /**
     * Status of the article regarding visibility ('active' if no value is provided)
     *
     * @return string|null
     */
    public function getArticleStatus() : ?string
    {
        return $this->articleStatus;
    }
    /**
     * Status of the article regarding visibility ('active' if no value is provided)
     *
     * @param string|null $articleStatus
     *
     * @return self
     */
    public function setArticleStatus(?string $articleStatus) : self
    {
        $this->articleStatus = $articleStatus;
        return $this;
    }
    /**
     * Amount of the product contents (1 if no value is provided)
     *
     * @return float|null
     */
    public function getContentsAmount() : ?float
    {
        return $this->contentsAmount;
    }
    /**
     * Amount of the product contents (1 if no value is provided)
     *
     * @param float|null $contentsAmount
     *
     * @return self
     */
    public function setContentsAmount(?float $contentsAmount) : self
    {
        $this->contentsAmount = $contentsAmount;
        return $this;
    }
    /**
     * Unit of the product contents ('stk' if no value is provided).
     *
     * @return string|null
     */
    public function getContentsUnit() : ?string
    {
        return $this->contentsUnit;
    }
    /**
     * Unit of the product contents ('stk' if no value is provided).
     *
     * @param string|null $contentsUnit
     *
     * @return self
     */
    public function setContentsUnit(?string $contentsUnit) : self
    {
        $this->contentsUnit = $contentsUnit;
        return $this;
    }
    /**
     * Weight of the product contents in gram
     *
     * @return int|null
     */
    public function getContentsWeightGram() : ?int
    {
        return $this->contentsWeightGram;
    }
    /**
     * Weight of the product contents in gram
     *
     * @param int|null $contentsWeightGram
     *
     * @return self
     */
    public function setContentsWeightGram(?int $contentsWeightGram) : self
    {
        $this->contentsWeightGram = $contentsWeightGram;
        return $this;
    }
    /**
     * Total weight of the product in gram
     *
     * @return int|null
     */
    public function getWeightGram() : ?int
    {
        return $this->weightGram;
    }
    /**
     * Total weight of the product in gram
     *
     * @param int|null $weightGram
     *
     * @return self
     */
    public function setWeightGram(?int $weightGram) : self
    {
        $this->weightGram = $weightGram;
        return $this;
    }
    /**
     * The variant group of the product
     *
     * @return mixed
     */
    public function getVariantGroup()
    {
        return $this->variantGroup;
    }
    /**
     * The variant group of the product
     *
     * @param mixed $variantGroup
     *
     * @return self
     */
    public function setVariantGroup($variantGroup) : self
    {
        $this->variantGroup = $variantGroup;
        return $this;
    }
    /**
     * The EAN of the product
     *
     * @return string|null
     */
    public function getEan() : ?string
    {
        return $this->ean;
    }
    /**
     * The EAN of the product
     *
     * @param string|null $ean
     *
     * @return self
     */
    public function setEan(?string $ean) : self
    {
        $this->ean = $ean;
        return $this;
    }
    /**
     * The suggested retail price for the product in EUR
     *
     * @return float|null
     */
    public function getSuggestedRetailPriceEUR() : ?float
    {
        return $this->suggestedRetailPriceEUR;
    }
    /**
     * The suggested retail price for the product in EUR
     *
     * @param float|null $suggestedRetailPriceEUR
     *
     * @return self
     */
    public function setSuggestedRetailPriceEUR(?float $suggestedRetailPriceEUR) : self
    {
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
        $this->purchasePrices = $purchasePrices;
        return $this;
    }
    /**
     * Country code of the manufacturer (ISO 3166-1 alpha-2)
     *
     * @return string|null
     */
    public function getManufacturerCountryCode() : ?string
    {
        return $this->manufacturerCountryCode;
    }
    /**
     * Country code of the manufacturer (ISO 3166-1 alpha-2)
     *
     * @param string|null $manufacturerCountryCode
     *
     * @return self
     */
    public function setManufacturerCountryCode(?string $manufacturerCountryCode) : self
    {
        $this->manufacturerCountryCode = $manufacturerCountryCode;
        return $this;
    }
    /**
     * The language code used for the product (ISO 639-1)
     *
     * @return string
     */
    public function getLanguageCode() : string
    {
        return $this->languageCode;
    }
    /**
     * The language code used for the product (ISO 639-1)
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
    * Title of the product.\
    Note: This can be null if the product was not created via the API.
    *
    * @return string|null
    */
    public function getProductTitle() : ?string
    {
        return $this->productTitle;
    }
    /**
    * Title of the product.\
    Note: This can be null if the product was not created via the API.
    *
    * @param string|null $productTitle
    *
    * @return self
    */
    public function setProductTitle(?string $productTitle) : self
    {
        $this->productTitle = $productTitle;
        return $this;
    }
    /**
    * Original title of the product.\
    Note: This can be null if the product was not created via the API.
    *
    * @return string|null
    */
    public function getProductTitleOriginal() : ?string
    {
        return $this->productTitleOriginal;
    }
    /**
    * Original title of the product.\
    Note: This can be null if the product was not created via the API.
    *
    * @param string|null $productTitleOriginal
    *
    * @return self
    */
    public function setProductTitleOriginal(?string $productTitleOriginal) : self
    {
        $this->productTitleOriginal = $productTitleOriginal;
        return $this;
    }
    /**
    * Status of the product regarding sales.\
    Available values:
    - enabled: Product is on sale
    - enabled_external_only: Product is only available in external stores
    - deleted: Product is deleted
    - discontinued: Product is disontinued
    - expired: Product is expired
    - incorrect: Product was incorrectly created
    - internal: Product is available for internal sales only
    - preparation: Product is in preparation for sale
    
    Note: This can be null if the product was not created via the API.
    *
    * @return string|null
    */
    public function getProductStatus() : ?string
    {
        return $this->productStatus;
    }
    /**
    * Status of the product regarding sales.\
    Available values:
    - enabled: Product is on sale
    - enabled_external_only: Product is only available in external stores
    - deleted: Product is deleted
    - discontinued: Product is disontinued
    - expired: Product is expired
    - incorrect: Product was incorrectly created
    - internal: Product is available for internal sales only
    - preparation: Product is in preparation for sale
    
    Note: This can be null if the product was not created via the API.
    *
    * @param string|null $productStatus
    *
    * @return self
    */
    public function setProductStatus(?string $productStatus) : self
    {
        $this->productStatus = $productStatus;
        return $this;
    }
    /**
    * Short description of the article.\
    Note: This can be null if the product was not created via the API.
    *
    * @return string|null
    */
    public function getArticleShortDescription() : ?string
    {
        return $this->articleShortDescription;
    }
    /**
    * Short description of the article.\
    Note: This can be null if the product was not created via the API.
    *
    * @param string|null $articleShortDescription
    *
    * @return self
    */
    public function setArticleShortDescription(?string $articleShortDescription) : self
    {
        $this->articleShortDescription = $articleShortDescription;
        return $this;
    }
    /**
    * Long description of the article.\
    Note: This can be null if the product was not created via the API.
    *
    * @return string|null
    */
    public function getArticleLongDescription() : ?string
    {
        return $this->articleLongDescription;
    }
    /**
    * Long description of the article.\
    Note: This can be null if the product was not created via the API.
    *
    * @param string|null $articleLongDescription
    *
    * @return self
    */
    public function setArticleLongDescription(?string $articleLongDescription) : self
    {
        $this->articleLongDescription = $articleLongDescription;
        return $this;
    }
    /**
    * The TARIC code of the product.\
    Note: This can be null if the product was not created via the API.
    *
    * @return string|null
    */
    public function getTaricCode() : ?string
    {
        return $this->taricCode;
    }
    /**
    * The TARIC code of the product.\
    Note: This can be null if the product was not created via the API.
    *
    * @param string|null $taricCode
    *
    * @return self
    */
    public function setTaricCode(?string $taricCode) : self
    {
        $this->taricCode = $taricCode;
        return $this;
    }
    /**
    * The list price of the product in EUR.\
    Note: This can be null if the product was not created via the API.
    *
    * @return float|null
    */
    public function getListPriceEUR() : ?float
    {
        return $this->listPriceEUR;
    }
    /**
    * The list price of the product in EUR.\
    Note: This can be null if the product was not created via the API.
    *
    * @param float|null $listPriceEUR
    *
    * @return self
    */
    public function setListPriceEUR(?float $listPriceEUR) : self
    {
        $this->listPriceEUR = $listPriceEUR;
        return $this;
    }
    /**
    * One of the available tax codes.
    - std: Standard tax rate (AT 20%)
    - spc: 1st tax rate (AT 13%)
    - erm: 2nd tax rate (AT 10%)
    - erm3: 3rd tax rate (AT 5%)
    - nsp: not taxable (0%)
    
    Note: This can be null if the product was not created via the API.
    *
    * @return string|null
    */
    public function getTaxCode() : ?string
    {
        return $this->taxCode;
    }
    /**
    * One of the available tax codes.
    - std: Standard tax rate (AT 20%)
    - spc: 1st tax rate (AT 13%)
    - erm: 2nd tax rate (AT 10%)
    - erm3: 3rd tax rate (AT 5%)
    - nsp: not taxable (0%)
    
    Note: This can be null if the product was not created via the API.
    *
    * @param string|null $taxCode
    *
    * @return self
    */
    public function setTaxCode(?string $taxCode) : self
    {
        $this->taxCode = $taxCode;
        return $this;
    }
    /**
    * Number of the manufacturer.\
    Note: This can be null if the product was not created via the API.
    *
    * @return string|null
    */
    public function getManufacturerNumber() : ?string
    {
        return $this->manufacturerNumber;
    }
    /**
    * Number of the manufacturer.\
    Note: This can be null if the product was not created via the API.
    *
    * @param string|null $manufacturerNumber
    *
    * @return self
    */
    public function setManufacturerNumber(?string $manufacturerNumber) : self
    {
        $this->manufacturerNumber = $manufacturerNumber;
        return $this;
    }
    /**
    * Number of the supplier.\
    Note: This can be null if the product was not created via the API.
    *
    * @return string|null
    */
    public function getSupplierNumber() : ?string
    {
        return $this->supplierNumber;
    }
    /**
    * Number of the supplier.\
    Note: This can be null if the product was not created via the API.
    *
    * @param string|null $supplierNumber
    *
    * @return self
    */
    public function setSupplierNumber(?string $supplierNumber) : self
    {
        $this->supplierNumber = $supplierNumber;
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
        $this->productNumber = $productNumber;
        return $this;
    }
    /**
     * The shop to which the product belongs
     *
     * @return string
     */
    public function getShopCode() : string
    {
        return $this->shopCode;
    }
    /**
     * The shop to which the product belongs
     *
     * @param string $shopCode
     *
     * @return self
     */
    public function setShopCode(string $shopCode) : self
    {
        $this->shopCode = $shopCode;
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
        $this->source = $source;
        return $this;
    }
}