<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing VehicleAvailRQAdditionalInfoType
 *
 * The VehicleAvailRQAdditionalInfoType complex type identifies supplemental information that may be included in a request for vehicle availability and rates.
 * XSD Type: VehicleAvailRQAdditionalInfoType
 */
class VehicleAvailRQAdditionalInfoType
{

    /**
     * @property int $luggageQty
     */
    private $luggageQty = null;

    /**
     * @property int $passengerQty
     */
    private $passengerQty = null;

    /**
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @property bool $smokingAllowed
     */
    private $smokingAllowed = null;

    /**
     * The GasPrePay attribute defines a set of valid values for the choice of prepaying for gas at the time of the pick up of the rental vehicle. This information is useful in that it allows a customer's preference to be made known to the vendor. It also allows the vendor to provide more detailed and accurate pricing up front.
     *  false
     *
     * @property bool $gasPrePay
     */
    private $gasPrePay = null;

    /**
     * Allows the requestor to indicate if the response should contain a single rate for each product or multiple rates for each product. Multiple rates may be offered when different terms and conditions may apply, for example pre-paid versus payment at time of rental. The use of multiple rates may vary from vendor to vendor and is by agreement of the trading partners.
     *
     * @property bool $singleQuote
     */
    private $singleQuote = null;

    /**
     * Information on the one primary driver and, optionally, several additional drivers. This may be used to provide a frequent renter number.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CustomerPrimaryAdditionalType $customer
     */
    private $customer = null;

    /**
     * Indicates the preference associated with special needs or requirements of the customer, described using free text
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleSpecialReqPrefType[] $specialReqPref
     */
    private $specialReqPref = [
        
    ];

    /**
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType[] $coveragePrefs
     */
    private $coveragePrefs = null;

    /**
     * Information on requested off-airport location services, for example, vehicle delivery, customer pickup.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\OffLocationServiceType[] $offLocService
     */
    private $offLocService = [
        
    ];

    /**
     * Details of the arrival transportation, if applicable
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleArrivalDetailsType $arrivalDetails
     */
    private $arrivalDetails = null;

    /**
     * Details of a tour with which this availability information is associated. Availability and rate information may vary if associated with a tour.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleTourInfoType $tourInfo
     */
    private $tourInfo = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as luggageQty
     *
     * @return int
     */
    public function getLuggageQty()
    {
        return $this->luggageQty;
    }

    /**
     * Sets a new luggageQty
     *
     * @param int $luggageQty
     * @return self
     */
    public function setLuggageQty($luggageQty)
    {
        $this->luggageQty = $luggageQty;
        return $this;
    }

    /**
     * Gets as passengerQty
     *
     * @return int
     */
    public function getPassengerQty()
    {
        return $this->passengerQty;
    }

    /**
     * Sets a new passengerQty
     *
     * @param int $passengerQty
     * @return self
     */
    public function setPassengerQty($passengerQty)
    {
        $this->passengerQty = $passengerQty;
        return $this;
    }

    /**
     * Gets as smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @return bool
     */
    public function getSmokingAllowed()
    {
        return $this->smokingAllowed;
    }

    /**
     * Sets a new smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @param bool $smokingAllowed
     * @return self
     */
    public function setSmokingAllowed($smokingAllowed)
    {
        $this->smokingAllowed = $smokingAllowed;
        return $this;
    }

    /**
     * Gets as gasPrePay
     *
     * The GasPrePay attribute defines a set of valid values for the choice of prepaying for gas at the time of the pick up of the rental vehicle. This information is useful in that it allows a customer's preference to be made known to the vendor. It also allows the vendor to provide more detailed and accurate pricing up front.
     *  false
     *
     * @return bool
     */
    public function getGasPrePay()
    {
        return $this->gasPrePay;
    }

    /**
     * Sets a new gasPrePay
     *
     * The GasPrePay attribute defines a set of valid values for the choice of prepaying for gas at the time of the pick up of the rental vehicle. This information is useful in that it allows a customer's preference to be made known to the vendor. It also allows the vendor to provide more detailed and accurate pricing up front.
     *  false
     *
     * @param bool $gasPrePay
     * @return self
     */
    public function setGasPrePay($gasPrePay)
    {
        $this->gasPrePay = $gasPrePay;
        return $this;
    }

    /**
     * Gets as singleQuote
     *
     * Allows the requestor to indicate if the response should contain a single rate for each product or multiple rates for each product. Multiple rates may be offered when different terms and conditions may apply, for example pre-paid versus payment at time of rental. The use of multiple rates may vary from vendor to vendor and is by agreement of the trading partners.
     *
     * @return bool
     */
    public function getSingleQuote()
    {
        return $this->singleQuote;
    }

    /**
     * Sets a new singleQuote
     *
     * Allows the requestor to indicate if the response should contain a single rate for each product or multiple rates for each product. Multiple rates may be offered when different terms and conditions may apply, for example pre-paid versus payment at time of rental. The use of multiple rates may vary from vendor to vendor and is by agreement of the trading partners.
     *
     * @param bool $singleQuote
     * @return self
     */
    public function setSingleQuote($singleQuote)
    {
        $this->singleQuote = $singleQuote;
        return $this;
    }

    /**
     * Gets as customer
     *
     * Information on the one primary driver and, optionally, several additional drivers. This may be used to provide a frequent renter number.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CustomerPrimaryAdditionalType
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * Information on the one primary driver and, optionally, several additional drivers. This may be used to provide a frequent renter number.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CustomerPrimaryAdditionalType $customer
     * @return self
     */
    public function setCustomer(\Devlabs91\TravelgateNotify\Models\Ota\CustomerPrimaryAdditionalType $customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * Adds as specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the customer, described using free text
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleSpecialReqPrefType $specialReqPref
     */
    public function addToSpecialReqPref(\Devlabs91\TravelgateNotify\Models\Ota\VehicleSpecialReqPrefType $specialReqPref)
    {
        $this->specialReqPref[] = $specialReqPref;
        return $this;
    }

    /**
     * isset specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the customer, described using free text
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialReqPref($index)
    {
        return isset($this->specialReqPref[$index]);
    }

    /**
     * unset specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the customer, described using free text
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialReqPref($index)
    {
        unset($this->specialReqPref[$index]);
    }

    /**
     * Gets as specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the customer, described using free text
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleSpecialReqPrefType[]
     */
    public function getSpecialReqPref()
    {
        return $this->specialReqPref;
    }

    /**
     * Sets a new specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the customer, described using free text
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleSpecialReqPrefType[] $specialReqPref
     * @return self
     */
    public function setSpecialReqPref(array $specialReqPref)
    {
        $this->specialReqPref = $specialReqPref;
        return $this;
    }

    /**
     * Adds as coveragePref
     *
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType $coveragePref
     */
    public function addToCoveragePrefs(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType $coveragePref)
    {
        $this->coveragePrefs[] = $coveragePref;
        return $this;
    }

    /**
     * isset coveragePrefs
     *
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCoveragePrefs($index)
    {
        return isset($this->coveragePrefs[$index]);
    }

    /**
     * unset coveragePrefs
     *
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCoveragePrefs($index)
    {
        unset($this->coveragePrefs[$index]);
    }

    /**
     * Gets as coveragePrefs
     *
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType[]
     */
    public function getCoveragePrefs()
    {
        return $this->coveragePrefs;
    }

    /**
     * Sets a new coveragePrefs
     *
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType[] $coveragePrefs
     * @return self
     */
    public function setCoveragePrefs(array $coveragePrefs)
    {
        $this->coveragePrefs = $coveragePrefs;
        return $this;
    }

    /**
     * Adds as offLocService
     *
     * Information on requested off-airport location services, for example, vehicle delivery, customer pickup.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\OffLocationServiceType $offLocService
     */
    public function addToOffLocService(\Devlabs91\TravelgateNotify\Models\Ota\OffLocationServiceType $offLocService)
    {
        $this->offLocService[] = $offLocService;
        return $this;
    }

    /**
     * isset offLocService
     *
     * Information on requested off-airport location services, for example, vehicle delivery, customer pickup.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOffLocService($index)
    {
        return isset($this->offLocService[$index]);
    }

    /**
     * unset offLocService
     *
     * Information on requested off-airport location services, for example, vehicle delivery, customer pickup.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOffLocService($index)
    {
        unset($this->offLocService[$index]);
    }

    /**
     * Gets as offLocService
     *
     * Information on requested off-airport location services, for example, vehicle delivery, customer pickup.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\OffLocationServiceType[]
     */
    public function getOffLocService()
    {
        return $this->offLocService;
    }

    /**
     * Sets a new offLocService
     *
     * Information on requested off-airport location services, for example, vehicle delivery, customer pickup.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\OffLocationServiceType[] $offLocService
     * @return self
     */
    public function setOffLocService(array $offLocService)
    {
        $this->offLocService = $offLocService;
        return $this;
    }

    /**
     * Gets as arrivalDetails
     *
     * Details of the arrival transportation, if applicable
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleArrivalDetailsType
     */
    public function getArrivalDetails()
    {
        return $this->arrivalDetails;
    }

    /**
     * Sets a new arrivalDetails
     *
     * Details of the arrival transportation, if applicable
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleArrivalDetailsType $arrivalDetails
     * @return self
     */
    public function setArrivalDetails(\Devlabs91\TravelgateNotify\Models\Ota\VehicleArrivalDetailsType $arrivalDetails)
    {
        $this->arrivalDetails = $arrivalDetails;
        return $this;
    }

    /**
     * Gets as tourInfo
     *
     * Details of a tour with which this availability information is associated. Availability and rate information may vary if associated with a tour.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleTourInfoType
     */
    public function getTourInfo()
    {
        return $this->tourInfo;
    }

    /**
     * Sets a new tourInfo
     *
     * Details of a tour with which this availability information is associated. Availability and rate information may vary if associated with a tour.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleTourInfoType $tourInfo
     * @return self
     */
    public function setTourInfo(\Devlabs91\TravelgateNotify\Models\Ota\VehicleTourInfoType $tourInfo)
    {
        $this->tourInfo = $tourInfo;
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

