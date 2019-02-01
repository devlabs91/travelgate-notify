<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing BaseInvCountType
 *
 * The set of changes in the number of units of base inventory for one inventory type (code) to be made on the server. The server must successfully update all messages. Failure to update any single status message will result in the failure of all messages.
 * XSD Type: BaseInvCountType
 */
class BaseInvCountType
{

    /**
     * Information on what the InvCountNotif Message applies to (i.e. the combination of inventory and/or rate codes) and the period of application.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\StatusApplicationControlType $statusApplicationControl
     */
    private $statusApplicationControl = null;

    /**
     * A collection of inventory counts.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\BaseInvCountType\InvCountsAType\InvCountAType[] $invCounts
     */
    private $invCounts = null;

    /**
     * Communicates additional information about inventory that is not available for sale.Communicates information about inventory that is not available for sale.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\BaseInvCountType\OffSellAType $offSell
     */
    private $offSell = null;

    /**
     * The unique identifier element allows the trading partners to uniquely identify each InvCountNotifRQ, (i.e. the entire message) for transaction traceability.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Gets as statusApplicationControl
     *
     * Information on what the InvCountNotif Message applies to (i.e. the combination of inventory and/or rate codes) and the period of application.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\StatusApplicationControlType
     */
    public function getStatusApplicationControl()
    {
        return $this->statusApplicationControl;
    }

    /**
     * Sets a new statusApplicationControl
     *
     * Information on what the InvCountNotif Message applies to (i.e. the combination of inventory and/or rate codes) and the period of application.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\StatusApplicationControlType $statusApplicationControl
     * @return self
     */
    public function setStatusApplicationControl(\Devlabs91\TravelgateNotify\Models\Ota\StatusApplicationControlType $statusApplicationControl)
    {
        $this->statusApplicationControl = $statusApplicationControl;
        return $this;
    }

    /**
     * Adds as invCount
     *
     * A collection of inventory counts.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BaseInvCountType\InvCountsAType\InvCountAType $invCount
     */
    public function addToInvCounts(\Devlabs91\TravelgateNotify\Models\Ota\BaseInvCountType\InvCountsAType\InvCountAType $invCount)
    {
        $this->invCounts[] = $invCount;
        return $this;
    }

    /**
     * isset invCounts
     *
     * A collection of inventory counts.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvCounts($index)
    {
        return isset($this->invCounts[$index]);
    }

    /**
     * unset invCounts
     *
     * A collection of inventory counts.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvCounts($index)
    {
        unset($this->invCounts[$index]);
    }

    /**
     * Gets as invCounts
     *
     * A collection of inventory counts.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\BaseInvCountType\InvCountsAType\InvCountAType[]
     */
    public function getInvCounts()
    {
        return $this->invCounts;
    }

    /**
     * Sets a new invCounts
     *
     * A collection of inventory counts.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BaseInvCountType\InvCountsAType\InvCountAType[] $invCounts
     * @return self
     */
    public function setInvCounts(array $invCounts)
    {
        $this->invCounts = $invCounts;
        return $this;
    }

    /**
     * Gets as offSell
     *
     * Communicates additional information about inventory that is not available for sale.Communicates information about inventory that is not available for sale.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\BaseInvCountType\OffSellAType
     */
    public function getOffSell()
    {
        return $this->offSell;
    }

    /**
     * Sets a new offSell
     *
     * Communicates additional information about inventory that is not available for sale.Communicates information about inventory that is not available for sale.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\BaseInvCountType\OffSellAType $offSell
     * @return self
     */
    public function setOffSell(\Devlabs91\TravelgateNotify\Models\Ota\BaseInvCountType\OffSellAType $offSell)
    {
        $this->offSell = $offSell;
        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify each InvCountNotifRQ, (i.e. the entire message) for transaction traceability.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify each InvCountNotifRQ, (i.e. the entire message) for transaction traceability.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }


}

