<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentApi\Generated\Runtime\AdditionalPropertiesInterface;
class ProductJournal implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The API internal id of the journal entry.
     *
     * @var int
     */
    public int $journalId;
    /**
     * The date and time at which the journal entry was created. Format in ISO 8601.
     *
     * @var \DateTime
     */
    public \DateTime $date;
    /**
     * The number of the product which the journal entry refers to.
     *
     * @var string
     */
    public string $productNumber;
    /**
     * The code that defines the reason for the stock change.
     *
     * @var string
     */
    public string $reason;
    /**
     * The change of the stock.\Note: This might not be set for all reasons.
     *
     * @var int|null
     */
    public ?int $stockDelta;
    /**
     * The old value of the stock before applying the delta.\Note: This might not be set for all reasons.
     *
     * @var int|null
     */
    public ?int $stockOld;
    /**
     * The new value of the stock when the journal entry was created.\Note: This might not be set for all reasons.
     *
     * @var int|null
     */
    public ?int $stockNew;
    /**
     * @var ProductJournalReference
     */
    public ProductJournalReference $reference;
    public function definedProperties(): array
    {
        return ['journalId' => 'journalId', 'date' => 'date', 'productNumber' => 'productNumber', 'reason' => 'reason', 'stockDelta' => 'stockDelta', 'stockOld' => 'stockOld', 'stockNew' => 'stockNew', 'reference' => 'reference'];
    }
}