<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class ProductImageDetail implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The url of the image.
     *
     * @var string
     */
    public string $url;
    /**
     * Width of the image.
     *
     * @var int
     */
    public int $width;
    /**
     * Height of the image
     *
     * @var int
     */
    public int $height;
    public function definedProperties(): array
    {
        return ['url' => 'url', 'width' => 'width', 'height' => 'height'];
    }
}