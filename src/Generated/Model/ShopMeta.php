<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class ShopMeta implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Domain of the Shopify shop.
     *
     * @var string|null
     */
    public ?string $shopifyShopDomain;
    /**
     * Flag to mark a shop used for testing.
     *
     * @var bool|null
     */
    public ?bool $testShop = false;
    /**
     * Date time to indicate that the test shop will not be reset before this time.
     *
     * @var \DateTime|null
     */
    public ?\DateTime $testShopResetNotBefore;
    /**
     * Flag to mark a shop in sandbox mode.
     *
     * @var bool|null
     */
    public ?bool $sandboxMode = false;
    /**
     * Flag to mark if a test suffix should be added to internal references.
     *
     * @var bool|null
     */
    public ?bool $addTestSuffixToInternalReference = false;
    /**
     * Flag to indicate whether firstname, lastname, and invoiceAddress fields are available for order
     * customers or not.
     *
     * @var bool|null
     */
    public ?bool $invoiceEnabled = false;
    /**
     * Overwrite currency of shopify orders.
     *
     * @var string|null
     */
    public ?string $defaultCurrency;
    /**
     * Flag to mark if it is allowed to set a customer's email in a third party app (e.g. Shopify).'
     *
     * @var bool|null
     */
    public ?bool $overwriteCustomerEmailEnabled;
    /**
     * Text to be added to the beginning of the orderNotes of every order created for the shop.
     *
     * @var string|null
     */
    public ?string $orderNotesPrecedingText;
    /**
     * Default notes to be printed on the delivery slip when an order is created without
     * deliverySlipNotes.
     *
     * @var string|null
     */
    public ?string $deliverySlipNotes;
    /**
     * Default for `options.printOrderDocument` of orders of this shop, controlling whether a
     * delivery slip (Lieferschein) is printed and included with the shipment. When unset, the
     * default of `true` applies. Always `true` for orders into customs-required
     * countries.
     *
     * @var bool|null
     */
    public ?bool $printOrderDocument = true;
    public function definedProperties(): array
    {
        return ['shopifyShopDomain' => 'shopifyShopDomain', 'testShop' => 'testShop', 'testShopResetNotBefore' => 'testShopResetNotBefore', 'sandboxMode' => 'sandboxMode', 'addTestSuffixToInternalReference' => 'addTestSuffixToInternalReference', 'invoiceEnabled' => 'invoiceEnabled', 'defaultCurrency' => 'defaultCurrency', 'overwriteCustomerEmailEnabled' => 'overwriteCustomerEmailEnabled', 'orderNotesPrecedingText' => 'orderNotesPrecedingText', 'deliverySlipNotes' => 'deliverySlipNotes', 'printOrderDocument' => 'printOrderDocument'];
    }
}