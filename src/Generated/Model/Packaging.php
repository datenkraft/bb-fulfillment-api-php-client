<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class Packaging extends \ArrayObject
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
     * Unique code of the packaging material
     *
     * @var string
     */
    protected $packagingCode;
    /**
     * Packaging name
     *
     * @var string|null
     */
    protected $name;
    /**
     * Packaging type / material code (e.g. packaging_definition_type_package for cartons)
     *
     * @var string|null
     */
    protected $type;
    /**
     * Packaging height in cm
     *
     * @var float|null
     */
    protected $height;
    /**
     * Packaging width in cm
     *
     * @var float|null
     */
    protected $width;
    /**
     * Packaging depth in cm
     *
     * @var float|null
     */
    protected $depth;
    /**
     * Packaging weight in kg
     *
     * @var float|null
     */
    protected $weight;
    /**
     * Indicates whether the packaging material is active or not
     *
     * @var bool
     */
    protected $active;
    /**
     * Unique code of the packaging material
     *
     * @return string
     */
    public function getPackagingCode(): string
    {
        return $this->packagingCode;
    }
    /**
     * Unique code of the packaging material
     *
     * @param string $packagingCode
     *
     * @return self
     */
    public function setPackagingCode(string $packagingCode): self
    {
        $this->initialized['packagingCode'] = true;
        $this->packagingCode = $packagingCode;
        return $this;
    }
    /**
     * Packaging name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Packaging name
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Packaging type / material code (e.g. packaging_definition_type_package for cartons)
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Packaging type / material code (e.g. packaging_definition_type_package for cartons)
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Packaging height in cm
     *
     * @return float|null
     */
    public function getHeight(): ?float
    {
        return $this->height;
    }
    /**
     * Packaging height in cm
     *
     * @param float|null $height
     *
     * @return self
     */
    public function setHeight(?float $height): self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
    /**
     * Packaging width in cm
     *
     * @return float|null
     */
    public function getWidth(): ?float
    {
        return $this->width;
    }
    /**
     * Packaging width in cm
     *
     * @param float|null $width
     *
     * @return self
     */
    public function setWidth(?float $width): self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
    /**
     * Packaging depth in cm
     *
     * @return float|null
     */
    public function getDepth(): ?float
    {
        return $this->depth;
    }
    /**
     * Packaging depth in cm
     *
     * @param float|null $depth
     *
     * @return self
     */
    public function setDepth(?float $depth): self
    {
        $this->initialized['depth'] = true;
        $this->depth = $depth;
        return $this;
    }
    /**
     * Packaging weight in kg
     *
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }
    /**
     * Packaging weight in kg
     *
     * @param float|null $weight
     *
     * @return self
     */
    public function setWeight(?float $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * Indicates whether the packaging material is active or not
     *
     * @return bool
     */
    public function getActive(): bool
    {
        return $this->active;
    }
    /**
     * Indicates whether the packaging material is active or not
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
}