<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing TravelerInfoSummaryType
 *
 * Specify passenger numbers and types
 * XSD Type: TravelerInfoSummaryType
 */
class TravelerInfoSummaryType
{

    /**
     * Number of seats requested.
     *
     * @property int[] $seatsRequested
     */
    private $seatsRequested = [
        
    ];

    /**
     * Specifies passenger numbers and types.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TravelerInformationType[] $airTravelerAvail
     */
    private $airTravelerAvail = [
        
    ];

    /**
     * Identifies pricing source, if negotiated fares are requested and if it is a reprice request.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TravelerInfoSummaryType\PriceRequestInformationAType $priceRequestInformation
     */
    private $priceRequestInformation = null;

    /**
     * Adds as seatsRequested
     *
     * Number of seats requested.
     *
     * @return self
     * @param int $seatsRequested
     */
    public function addToSeatsRequested($seatsRequested)
    {
        $this->seatsRequested[] = $seatsRequested;
        return $this;
    }

    /**
     * isset seatsRequested
     *
     * Number of seats requested.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSeatsRequested($index)
    {
        return isset($this->seatsRequested[$index]);
    }

    /**
     * unset seatsRequested
     *
     * Number of seats requested.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSeatsRequested($index)
    {
        unset($this->seatsRequested[$index]);
    }

    /**
     * Gets as seatsRequested
     *
     * Number of seats requested.
     *
     * @return int[]
     */
    public function getSeatsRequested()
    {
        return $this->seatsRequested;
    }

    /**
     * Sets a new seatsRequested
     *
     * Number of seats requested.
     *
     * @param int[] $seatsRequested
     * @return self
     */
    public function setSeatsRequested(array $seatsRequested)
    {
        $this->seatsRequested = $seatsRequested;
        return $this;
    }

    /**
     * Adds as airTravelerAvail
     *
     * Specifies passenger numbers and types.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TravelerInformationType $airTravelerAvail
     */
    public function addToAirTravelerAvail(\Devlabs91\TravelgateNotify\Models\Ota\TravelerInformationType $airTravelerAvail)
    {
        $this->airTravelerAvail[] = $airTravelerAvail;
        return $this;
    }

    /**
     * isset airTravelerAvail
     *
     * Specifies passenger numbers and types.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAirTravelerAvail($index)
    {
        return isset($this->airTravelerAvail[$index]);
    }

    /**
     * unset airTravelerAvail
     *
     * Specifies passenger numbers and types.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAirTravelerAvail($index)
    {
        unset($this->airTravelerAvail[$index]);
    }

    /**
     * Gets as airTravelerAvail
     *
     * Specifies passenger numbers and types.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TravelerInformationType[]
     */
    public function getAirTravelerAvail()
    {
        return $this->airTravelerAvail;
    }

    /**
     * Sets a new airTravelerAvail
     *
     * Specifies passenger numbers and types.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TravelerInformationType[] $airTravelerAvail
     * @return self
     */
    public function setAirTravelerAvail(array $airTravelerAvail)
    {
        $this->airTravelerAvail = $airTravelerAvail;
        return $this;
    }

    /**
     * Gets as priceRequestInformation
     *
     * Identifies pricing source, if negotiated fares are requested and if it is a reprice request.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TravelerInfoSummaryType\PriceRequestInformationAType
     */
    public function getPriceRequestInformation()
    {
        return $this->priceRequestInformation;
    }

    /**
     * Sets a new priceRequestInformation
     *
     * Identifies pricing source, if negotiated fares are requested and if it is a reprice request.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TravelerInfoSummaryType\PriceRequestInformationAType $priceRequestInformation
     * @return self
     */
    public function setPriceRequestInformation(\Devlabs91\TravelgateNotify\Models\Ota\TravelerInfoSummaryType\PriceRequestInformationAType $priceRequestInformation)
    {
        $this->priceRequestInformation = $priceRequestInformation;
        return $this;
    }


}

