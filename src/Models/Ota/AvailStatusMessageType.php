<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing AvailStatusMessageType
 *
 *
 * XSD Type: AvailStatusMessageType
 */
class AvailStatusMessageType
{

    /**
     * Mechanism to allow the user to override settings at the reservation system and to allow the RMS to replace this overridden values: If value = "false", the reservations system may ignore the settings passed and keep values overridden by the user. If value = "true", the reservations system must replace values overridden by the user.
     *
     * @property bool $override
     */
    private $override = null;

    /**
     * An enumerated type defining the function of the booking limit message. Values: RemoveLimit, SetLimit, AdjustLimit.
     *
     * @property string $bookingLimitMessageType
     */
    private $bookingLimitMessageType = null;

    /**
     * Number of units of inventory that can be sold.
     *
     * @property int $bookingLimit
     */
    private $bookingLimit = null;

    /**
     * Can be used to communicate back to the sender exactly which transaction may have had a problem (e.g. "Message 214 had an invalid date range").
     *
     * @property int $locatorID
     */
    private $locatorID = null;

    /**
     * Number of units down to which inventory can be sold.
     *
     * @property int $bookingThreshold
     */
    private $bookingThreshold = null;

    /**
     * Information on what the AvailStatus Message applies to (i.e. the combination of inventory and rate codes) and the period of application.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\StatusApplicationControlType $statusApplicationControl
     */
    private $statusApplicationControl = null;

    /**
     * Collection of Length of Stay elements. These LOS elements indicate what LOS restrictions are to be added or removed. Some systems include this information directly with the Availability Status as opposed to the booking restriction.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\LengthsOfStayType $lengthsOfStay
     */
    private $lengthsOfStay = null;

    /**
     * A collection of the best rates available.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType[] $bestAvailableRates
     */
    private $bestAvailableRates = null;

    /**
     * Restriction based on the minimum rate to be considered for availability, ex. can sell weekend rate only if charging the hurdle rate or more.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType\HurdleRateAType $hurdleRate
     */
    private $hurdleRate = null;

    /**
     * Incremental amount added to the hurdle rate (e.g. Amount= 20 USD and Ceiling=5, the maximum Delta would be 100 USD).
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType\DeltaAType $delta
     */
    private $delta = null;

    /**
     * The unique identifier element allows the trading partners to uniquely identify each AvailStatusMessage, for tracing of transactions.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Availability status assigned to the room rate combination.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType\RestrictionStatusAType $restrictionStatus
     */
    private $restrictionStatus = null;

    /**
     * Gets as override
     *
     * Mechanism to allow the user to override settings at the reservation system and to allow the RMS to replace this overridden values: If value = "false", the reservations system may ignore the settings passed and keep values overridden by the user. If value = "true", the reservations system must replace values overridden by the user.
     *
     * @return bool
     */
    public function getOverride()
    {
        return $this->override;
    }

    /**
     * Sets a new override
     *
     * Mechanism to allow the user to override settings at the reservation system and to allow the RMS to replace this overridden values: If value = "false", the reservations system may ignore the settings passed and keep values overridden by the user. If value = "true", the reservations system must replace values overridden by the user.
     *
     * @param bool $override
     * @return self
     */
    public function setOverride($override)
    {
        $this->override = $override;
        return $this;
    }

    /**
     * Gets as bookingLimitMessageType
     *
     * An enumerated type defining the function of the booking limit message. Values: RemoveLimit, SetLimit, AdjustLimit.
     *
     * @return string
     */
    public function getBookingLimitMessageType()
    {
        return $this->bookingLimitMessageType;
    }

    /**
     * Sets a new bookingLimitMessageType
     *
     * An enumerated type defining the function of the booking limit message. Values: RemoveLimit, SetLimit, AdjustLimit.
     *
     * @param string $bookingLimitMessageType
     * @return self
     */
    public function setBookingLimitMessageType($bookingLimitMessageType)
    {
        $this->bookingLimitMessageType = $bookingLimitMessageType;
        return $this;
    }

    /**
     * Gets as bookingLimit
     *
     * Number of units of inventory that can be sold.
     *
     * @return int
     */
    public function getBookingLimit()
    {
        return $this->bookingLimit;
    }

    /**
     * Sets a new bookingLimit
     *
     * Number of units of inventory that can be sold.
     *
     * @param int $bookingLimit
     * @return self
     */
    public function setBookingLimit($bookingLimit)
    {
        $this->bookingLimit = $bookingLimit;
        return $this;
    }

    /**
     * Gets as locatorID
     *
     * Can be used to communicate back to the sender exactly which transaction may have had a problem (e.g. "Message 214 had an invalid date range").
     *
     * @return int
     */
    public function getLocatorID()
    {
        return $this->locatorID;
    }

    /**
     * Sets a new locatorID
     *
     * Can be used to communicate back to the sender exactly which transaction may have had a problem (e.g. "Message 214 had an invalid date range").
     *
     * @param int $locatorID
     * @return self
     */
    public function setLocatorID($locatorID)
    {
        $this->locatorID = $locatorID;
        return $this;
    }

    /**
     * Gets as bookingThreshold
     *
     * Number of units down to which inventory can be sold.
     *
     * @return int
     */
    public function getBookingThreshold()
    {
        return $this->bookingThreshold;
    }

    /**
     * Sets a new bookingThreshold
     *
     * Number of units down to which inventory can be sold.
     *
     * @param int $bookingThreshold
     * @return self
     */
    public function setBookingThreshold($bookingThreshold)
    {
        $this->bookingThreshold = $bookingThreshold;
        return $this;
    }

    /**
     * Gets as statusApplicationControl
     *
     * Information on what the AvailStatus Message applies to (i.e. the combination of inventory and rate codes) and the period of application.
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
     * Information on what the AvailStatus Message applies to (i.e. the combination of inventory and rate codes) and the period of application.
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
     * Gets as lengthsOfStay
     *
     * Collection of Length of Stay elements. These LOS elements indicate what LOS restrictions are to be added or removed. Some systems include this information directly with the Availability Status as opposed to the booking restriction.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\LengthsOfStayType
     */
    public function getLengthsOfStay()
    {
        return $this->lengthsOfStay;
    }

    /**
     * Sets a new lengthsOfStay
     *
     * Collection of Length of Stay elements. These LOS elements indicate what LOS restrictions are to be added or removed. Some systems include this information directly with the Availability Status as opposed to the booking restriction.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\LengthsOfStayType $lengthsOfStay
     * @return self
     */
    public function setLengthsOfStay(\Devlabs91\TravelgateNotify\Models\Ota\LengthsOfStayType $lengthsOfStay)
    {
        $this->lengthsOfStay = $lengthsOfStay;
        return $this;
    }

    /**
     * Adds as bestAvailableRate
     *
     * A collection of the best rates available.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType $bestAvailableRate
     */
    public function addToBestAvailableRates(\Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType $bestAvailableRate)
    {
        $this->bestAvailableRates[] = $bestAvailableRate;
        return $this;
    }

    /**
     * isset bestAvailableRates
     *
     * A collection of the best rates available.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBestAvailableRates($index)
    {
        return isset($this->bestAvailableRates[$index]);
    }

    /**
     * unset bestAvailableRates
     *
     * A collection of the best rates available.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBestAvailableRates($index)
    {
        unset($this->bestAvailableRates[$index]);
    }

    /**
     * Gets as bestAvailableRates
     *
     * A collection of the best rates available.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType[]
     */
    public function getBestAvailableRates()
    {
        return $this->bestAvailableRates;
    }

    /**
     * Sets a new bestAvailableRates
     *
     * A collection of the best rates available.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType[] $bestAvailableRates
     * @return self
     */
    public function setBestAvailableRates(array $bestAvailableRates)
    {
        $this->bestAvailableRates = $bestAvailableRates;
        return $this;
    }

    /**
     * Gets as hurdleRate
     *
     * Restriction based on the minimum rate to be considered for availability, ex. can sell weekend rate only if charging the hurdle rate or more.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType\HurdleRateAType
     */
    public function getHurdleRate()
    {
        return $this->hurdleRate;
    }

    /**
     * Sets a new hurdleRate
     *
     * Restriction based on the minimum rate to be considered for availability, ex. can sell weekend rate only if charging the hurdle rate or more.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType\HurdleRateAType $hurdleRate
     * @return self
     */
    public function setHurdleRate(\Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType\HurdleRateAType $hurdleRate)
    {
        $this->hurdleRate = $hurdleRate;
        return $this;
    }

    /**
     * Gets as delta
     *
     * Incremental amount added to the hurdle rate (e.g. Amount= 20 USD and Ceiling=5, the maximum Delta would be 100 USD).
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType\DeltaAType
     */
    public function getDelta()
    {
        return $this->delta;
    }

    /**
     * Sets a new delta
     *
     * Incremental amount added to the hurdle rate (e.g. Amount= 20 USD and Ceiling=5, the maximum Delta would be 100 USD).
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType\DeltaAType $delta
     * @return self
     */
    public function setDelta(\Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType\DeltaAType $delta)
    {
        $this->delta = $delta;
        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify each AvailStatusMessage, for tracing of transactions.
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
     * The unique identifier element allows the trading partners to uniquely identify each AvailStatusMessage, for tracing of transactions.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Devlabs91\TravelgateNotify\Models\Ota\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }

    /**
     * Gets as restrictionStatus
     *
     * Availability status assigned to the room rate combination.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType\RestrictionStatusAType
     */
    public function getRestrictionStatus()
    {
        return $this->restrictionStatus;
    }

    /**
     * Sets a new restrictionStatus
     *
     * Availability status assigned to the room rate combination.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType\RestrictionStatusAType $restrictionStatus
     * @return self
     */
    public function setRestrictionStatus(\Devlabs91\TravelgateNotify\Models\Ota\AvailStatusMessageType\RestrictionStatusAType $restrictionStatus)
    {
        $this->restrictionStatus = $restrictionStatus;
        return $this;
    }


}

