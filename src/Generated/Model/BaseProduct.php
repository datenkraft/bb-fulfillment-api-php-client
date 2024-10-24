<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class BaseProduct extends \ArrayObject
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
     * 
     *
     * @var ProductBundledProduct[]|null
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
     * 
     *
     * @return ProductBundledProduct[]|null
     */
    public function getBundledProducts() : ?array
    {
        return $this->bundledProducts;
    }
    /**
     * 
     *
     * @param ProductBundledProduct[]|null $bundledProducts
     *
     * @return self
     */
    public function setBundledProducts(?array $bundledProducts) : self
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
}