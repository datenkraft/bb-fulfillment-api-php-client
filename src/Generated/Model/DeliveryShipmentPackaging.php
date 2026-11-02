<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class DeliveryShipmentPackaging implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Height in cm
     *
     * @var float
     */
    public float $height;
    /**
     * Width in cm
     *
     * @var float
     */
    public float $width;
    /**
     * Depth in cm
     *
     * @var float
     */
    public float $depth;
    /**
     * All packaging materials used for the shipment
     *
     * @var list<DeliveryShipmentPackagingMaterial>
     */
    public array $materials;
    public function definedProperties(): array
    {
        return ['height' => 'height', 'width' => 'width', 'depth' => 'depth', 'materials' => 'materials'];
    }
}