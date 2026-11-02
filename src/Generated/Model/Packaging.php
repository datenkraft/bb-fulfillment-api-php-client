<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class Packaging implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Unique code of the packaging material
     *
     * @var string
     */
    public string $packagingCode;
    /**
     * Packaging name
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * Packaging type / material code (e.g. packaging_definition_type_package for cartons)
     *
     * @var string|null
     */
    public ?string $type;
    /**
     * Packaging height in cm
     *
     * @var float|null
     */
    public ?float $height;
    /**
     * Packaging width in cm
     *
     * @var float|null
     */
    public ?float $width;
    /**
     * Packaging depth in cm
     *
     * @var float|null
     */
    public ?float $depth;
    /**
     * Packaging weight in kg
     *
     * @var float|null
     */
    public ?float $weight;
    /**
     * Indicates whether the packaging material is active or not
     *
     * @var bool
     */
    public bool $active;
    public function definedProperties(): array
    {
        return ['packagingCode' => 'packagingCode', 'name' => 'name', 'type' => 'type', 'height' => 'height', 'width' => 'width', 'depth' => 'depth', 'weight' => 'weight', 'active' => 'active'];
    }
}