<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class BaseProductDraftDimensions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Width of the product in cm
     *
     * @var float
     */
    public float $width;
    /**
     * Height of the product in cm
     *
     * @var float
     */
    public float $height;
    /**
     * Depth of the product in cm
     *
     * @var float
     */
    public float $depth;
    public function definedProperties(): array
    {
        return ['width' => 'width', 'height' => 'height', 'depth' => 'depth'];
    }
}