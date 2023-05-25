<?php

namespace Datenkraft\Backbone\Client\FulfillmentApi\Generated\Model;

class NewOrderOptions extends \ArrayObject
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
    * By setting this option, the order will be processed into the defined state.\
    This option is NOT available in the production systems.\
    The autoprocessing of the state happens after the order has been sucessfully created.
    In case of any errors during the autoprocessing of the state, error messages are shown but the order will still have
    been created and will not be rolled back.\
    Available states:
    - order_completed_single_delivery: The order is completely delivered within one delivery.\
    Note that it might not be possible to create a single delivery for the whole order, for example because of weight
    restrictions. In those cases multiple deliveries will be created.
    - order_completed_multiple_deliveries: The order is completely delivered and includes several deliveries.
    - order_partially_delivered: The order is in progress and one of several deliveries is delivered.
    - order_canceled: The order is canceled.
    - order_locked: The order is locked.
    *
    * @var string
    */
    protected $autoProcessState;
    /**
    * By setting this option, the order will be processed into the defined state.\
    This option is NOT available in the production systems.\
    The autoprocessing of the state happens after the order has been sucessfully created.
    In case of any errors during the autoprocessing of the state, error messages are shown but the order will still have
    been created and will not be rolled back.\
    Available states:
    - order_completed_single_delivery: The order is completely delivered within one delivery.\
    Note that it might not be possible to create a single delivery for the whole order, for example because of weight
    restrictions. In those cases multiple deliveries will be created.
    - order_completed_multiple_deliveries: The order is completely delivered and includes several deliveries.
    - order_partially_delivered: The order is in progress and one of several deliveries is delivered.
    - order_canceled: The order is canceled.
    - order_locked: The order is locked.
    *
    * @return string
    */
    public function getAutoProcessState() : string
    {
        return $this->autoProcessState;
    }
    /**
    * By setting this option, the order will be processed into the defined state.\
    This option is NOT available in the production systems.\
    The autoprocessing of the state happens after the order has been sucessfully created.
    In case of any errors during the autoprocessing of the state, error messages are shown but the order will still have
    been created and will not be rolled back.\
    Available states:
    - order_completed_single_delivery: The order is completely delivered within one delivery.\
    Note that it might not be possible to create a single delivery for the whole order, for example because of weight
    restrictions. In those cases multiple deliveries will be created.
    - order_completed_multiple_deliveries: The order is completely delivered and includes several deliveries.
    - order_partially_delivered: The order is in progress and one of several deliveries is delivered.
    - order_canceled: The order is canceled.
    - order_locked: The order is locked.
    *
    * @param string $autoProcessState
    *
    * @return self
    */
    public function setAutoProcessState(string $autoProcessState) : self
    {
        $this->initialized['autoProcessState'] = true;
        $this->autoProcessState = $autoProcessState;
        return $this;
    }
}