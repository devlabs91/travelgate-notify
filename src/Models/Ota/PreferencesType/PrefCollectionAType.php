<?php

namespace Devlabs91\TravelgateNotify\Models\Ota\PreferencesType;

/**
 * Class representing PrefCollectionAType
 */
class PrefCollectionAType
{

    /**
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @property string $shareSynchInd
     */
    private $shareSynchInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @property string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * Refer to OpenTravel Code List Travel Purpose (TVP).
     *
     * @property string $travelPurpose
     */
    private $travelPurpose = null;

    /**
     * Supplier-independent preferences.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CommonPrefType[] $commonPref
     */
    private $commonPref = [
        
    ];

    /**
     * A set of preferences for vehicle rental.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleProfileRentalPrefType[] $vehicleRentalPref
     */
    private $vehicleRentalPref = [
        
    ];

    /**
     * A set of preferences for air travel.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\AirlinePrefType[] $airlinePref
     */
    private $airlinePref = [
        
    ];

    /**
     * A set of preferences for hotel stay.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\HotelPrefType[] $hotelPref
     */
    private $hotelPref = [
        
    ];

    /**
     * A set of preferences for other services.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\OtherSrvcPrefType[] $otherSrvcPref
     */
    private $otherSrvcPref = [
        
    ];

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd()
    {
        return $this->shareSynchInd;
    }

    /**
     * Sets a new shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @param string $shareSynchInd
     * @return self
     */
    public function setShareSynchInd($shareSynchInd)
    {
        $this->shareSynchInd = $shareSynchInd;
        return $this;
    }

    /**
     * Gets as shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd()
    {
        return $this->shareMarketInd;
    }

    /**
     * Sets a new shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     * @return self
     */
    public function setShareMarketInd($shareMarketInd)
    {
        $this->shareMarketInd = $shareMarketInd;
        return $this;
    }

    /**
     * Gets as travelPurpose
     *
     * Refer to OpenTravel Code List Travel Purpose (TVP).
     *
     * @return string
     */
    public function getTravelPurpose()
    {
        return $this->travelPurpose;
    }

    /**
     * Sets a new travelPurpose
     *
     * Refer to OpenTravel Code List Travel Purpose (TVP).
     *
     * @param string $travelPurpose
     * @return self
     */
    public function setTravelPurpose($travelPurpose)
    {
        $this->travelPurpose = $travelPurpose;
        return $this;
    }

    /**
     * Adds as commonPref
     *
     * Supplier-independent preferences.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CommonPrefType $commonPref
     */
    public function addToCommonPref(\Devlabs91\TravelgateNotify\Models\Ota\CommonPrefType $commonPref)
    {
        $this->commonPref[] = $commonPref;
        return $this;
    }

    /**
     * isset commonPref
     *
     * Supplier-independent preferences.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommonPref($index)
    {
        return isset($this->commonPref[$index]);
    }

    /**
     * unset commonPref
     *
     * Supplier-independent preferences.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommonPref($index)
    {
        unset($this->commonPref[$index]);
    }

    /**
     * Gets as commonPref
     *
     * Supplier-independent preferences.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CommonPrefType[]
     */
    public function getCommonPref()
    {
        return $this->commonPref;
    }

    /**
     * Sets a new commonPref
     *
     * Supplier-independent preferences.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CommonPrefType[] $commonPref
     * @return self
     */
    public function setCommonPref(array $commonPref)
    {
        $this->commonPref = $commonPref;
        return $this;
    }

    /**
     * Adds as vehicleRentalPref
     *
     * A set of preferences for vehicle rental.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleProfileRentalPrefType $vehicleRentalPref
     */
    public function addToVehicleRentalPref(\Devlabs91\TravelgateNotify\Models\Ota\VehicleProfileRentalPrefType $vehicleRentalPref)
    {
        $this->vehicleRentalPref[] = $vehicleRentalPref;
        return $this;
    }

    /**
     * isset vehicleRentalPref
     *
     * A set of preferences for vehicle rental.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleRentalPref($index)
    {
        return isset($this->vehicleRentalPref[$index]);
    }

    /**
     * unset vehicleRentalPref
     *
     * A set of preferences for vehicle rental.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleRentalPref($index)
    {
        unset($this->vehicleRentalPref[$index]);
    }

    /**
     * Gets as vehicleRentalPref
     *
     * A set of preferences for vehicle rental.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleProfileRentalPrefType[]
     */
    public function getVehicleRentalPref()
    {
        return $this->vehicleRentalPref;
    }

    /**
     * Sets a new vehicleRentalPref
     *
     * A set of preferences for vehicle rental.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleProfileRentalPrefType[] $vehicleRentalPref
     * @return self
     */
    public function setVehicleRentalPref(array $vehicleRentalPref)
    {
        $this->vehicleRentalPref = $vehicleRentalPref;
        return $this;
    }

    /**
     * Adds as airlinePref
     *
     * A set of preferences for air travel.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AirlinePrefType $airlinePref
     */
    public function addToAirlinePref(\Devlabs91\TravelgateNotify\Models\Ota\AirlinePrefType $airlinePref)
    {
        $this->airlinePref[] = $airlinePref;
        return $this;
    }

    /**
     * isset airlinePref
     *
     * A set of preferences for air travel.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAirlinePref($index)
    {
        return isset($this->airlinePref[$index]);
    }

    /**
     * unset airlinePref
     *
     * A set of preferences for air travel.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAirlinePref($index)
    {
        unset($this->airlinePref[$index]);
    }

    /**
     * Gets as airlinePref
     *
     * A set of preferences for air travel.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\AirlinePrefType[]
     */
    public function getAirlinePref()
    {
        return $this->airlinePref;
    }

    /**
     * Sets a new airlinePref
     *
     * A set of preferences for air travel.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\AirlinePrefType[] $airlinePref
     * @return self
     */
    public function setAirlinePref(array $airlinePref)
    {
        $this->airlinePref = $airlinePref;
        return $this;
    }

    /**
     * Adds as hotelPref
     *
     * A set of preferences for hotel stay.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelPrefType $hotelPref
     */
    public function addToHotelPref(\Devlabs91\TravelgateNotify\Models\Ota\HotelPrefType $hotelPref)
    {
        $this->hotelPref[] = $hotelPref;
        return $this;
    }

    /**
     * isset hotelPref
     *
     * A set of preferences for hotel stay.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelPref($index)
    {
        return isset($this->hotelPref[$index]);
    }

    /**
     * unset hotelPref
     *
     * A set of preferences for hotel stay.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelPref($index)
    {
        unset($this->hotelPref[$index]);
    }

    /**
     * Gets as hotelPref
     *
     * A set of preferences for hotel stay.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\HotelPrefType[]
     */
    public function getHotelPref()
    {
        return $this->hotelPref;
    }

    /**
     * Sets a new hotelPref
     *
     * A set of preferences for hotel stay.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\HotelPrefType[] $hotelPref
     * @return self
     */
    public function setHotelPref(array $hotelPref)
    {
        $this->hotelPref = $hotelPref;
        return $this;
    }

    /**
     * Adds as otherSrvcPref
     *
     * A set of preferences for other services.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\OtherSrvcPrefType $otherSrvcPref
     */
    public function addToOtherSrvcPref(\Devlabs91\TravelgateNotify\Models\Ota\OtherSrvcPrefType $otherSrvcPref)
    {
        $this->otherSrvcPref[] = $otherSrvcPref;
        return $this;
    }

    /**
     * isset otherSrvcPref
     *
     * A set of preferences for other services.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherSrvcPref($index)
    {
        return isset($this->otherSrvcPref[$index]);
    }

    /**
     * unset otherSrvcPref
     *
     * A set of preferences for other services.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherSrvcPref($index)
    {
        unset($this->otherSrvcPref[$index]);
    }

    /**
     * Gets as otherSrvcPref
     *
     * A set of preferences for other services.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\OtherSrvcPrefType[]
     */
    public function getOtherSrvcPref()
    {
        return $this->otherSrvcPref;
    }

    /**
     * Sets a new otherSrvcPref
     *
     * A set of preferences for other services.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\OtherSrvcPrefType[] $otherSrvcPref
     * @return self
     */
    public function setOtherSrvcPref(array $otherSrvcPref)
    {
        $this->otherSrvcPref = $otherSrvcPref;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }


}

