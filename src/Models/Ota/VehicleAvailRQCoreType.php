<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing VehicleAvailRQCoreType
 *
 * The VehicleAvailRQCoreType complex type identifies the data that is common in a request for vehicle availability and rates.
 * XSD Type: VehicleAvailRQCoreType
 */
class VehicleAvailRQCoreType
{

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * To specify from which source the information being requested should be obtained, e.g., vendor, GDS system, etc.
     *
     * @property string $targetSource
     */
    private $targetSource = null;

    /**
     * Information that is common, or core, to all requests and responses associated with the reservation of a vehicle.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalCoreType $vehRentalCore
     */
    private $vehRentalCore = null;

    /**
     * A collection of vendor preferences.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\VendorPrefsAType $vendorPrefs
     */
    private $vendorPrefs = null;

    /**
     * Indicates any preferences for the vehicle, such as type, class, transmission, air conditioning.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType[] $vehPrefs
     */
    private $vehPrefs = null;

    /**
     * Indicates the number of people of each age category associated with this request.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\DriverTypeAType[] $driverType
     */
    private $driverType = [
        
    ];

    /**
     * Indicates the type of rates of interest to the customer, along with any discount number or promotional codes that may affect the rate.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\RateQualifierAType[] $rateQualifier
     */
    private $rateQualifier = [
        
    ];

    /**
     * The minimum and maximum amounts a customer is willing to pay.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\RateRangeAType $rateRange
     */
    private $rateRange = null;

    /**
     * Indicates the preferences for one or more specific items of additional equipment, such as ski racks, child seats, etc.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[] $specialEquipPrefs
     */
    private $specialEquipPrefs = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as targetSource
     *
     * To specify from which source the information being requested should be obtained, e.g., vendor, GDS system, etc.
     *
     * @return string
     */
    public function getTargetSource()
    {
        return $this->targetSource;
    }

    /**
     * Sets a new targetSource
     *
     * To specify from which source the information being requested should be obtained, e.g., vendor, GDS system, etc.
     *
     * @param string $targetSource
     * @return self
     */
    public function setTargetSource($targetSource)
    {
        $this->targetSource = $targetSource;
        return $this;
    }

    /**
     * Gets as vehRentalCore
     *
     * Information that is common, or core, to all requests and responses associated with the reservation of a vehicle.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalCoreType
     */
    public function getVehRentalCore()
    {
        return $this->vehRentalCore;
    }

    /**
     * Sets a new vehRentalCore
     *
     * Information that is common, or core, to all requests and responses associated with the reservation of a vehicle.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalCoreType $vehRentalCore
     * @return self
     */
    public function setVehRentalCore(\Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalCoreType $vehRentalCore)
    {
        $this->vehRentalCore = $vehRentalCore;
        return $this;
    }

    /**
     * Gets as vendorPrefs
     *
     * A collection of vendor preferences.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\VendorPrefsAType
     */
    public function getVendorPrefs()
    {
        return $this->vendorPrefs;
    }

    /**
     * Sets a new vendorPrefs
     *
     * A collection of vendor preferences.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\VendorPrefsAType $vendorPrefs
     * @return self
     */
    public function setVendorPrefs(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\VendorPrefsAType $vendorPrefs)
    {
        $this->vendorPrefs = $vendorPrefs;
        return $this;
    }

    /**
     * Adds as vehPref
     *
     * Indicates any preferences for the vehicle, such as type, class, transmission, air conditioning.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType $vehPref
     */
    public function addToVehPrefs(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType $vehPref)
    {
        $this->vehPrefs[] = $vehPref;
        return $this;
    }

    /**
     * isset vehPrefs
     *
     * Indicates any preferences for the vehicle, such as type, class, transmission, air conditioning.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehPrefs($index)
    {
        return isset($this->vehPrefs[$index]);
    }

    /**
     * unset vehPrefs
     *
     * Indicates any preferences for the vehicle, such as type, class, transmission, air conditioning.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehPrefs($index)
    {
        unset($this->vehPrefs[$index]);
    }

    /**
     * Gets as vehPrefs
     *
     * Indicates any preferences for the vehicle, such as type, class, transmission, air conditioning.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType[]
     */
    public function getVehPrefs()
    {
        return $this->vehPrefs;
    }

    /**
     * Sets a new vehPrefs
     *
     * Indicates any preferences for the vehicle, such as type, class, transmission, air conditioning.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType[] $vehPrefs
     * @return self
     */
    public function setVehPrefs(array $vehPrefs)
    {
        $this->vehPrefs = $vehPrefs;
        return $this;
    }

    /**
     * Adds as driverType
     *
     * Indicates the number of people of each age category associated with this request.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\DriverTypeAType $driverType
     */
    public function addToDriverType(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\DriverTypeAType $driverType)
    {
        $this->driverType[] = $driverType;
        return $this;
    }

    /**
     * isset driverType
     *
     * Indicates the number of people of each age category associated with this request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDriverType($index)
    {
        return isset($this->driverType[$index]);
    }

    /**
     * unset driverType
     *
     * Indicates the number of people of each age category associated with this request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDriverType($index)
    {
        unset($this->driverType[$index]);
    }

    /**
     * Gets as driverType
     *
     * Indicates the number of people of each age category associated with this request.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\DriverTypeAType[]
     */
    public function getDriverType()
    {
        return $this->driverType;
    }

    /**
     * Sets a new driverType
     *
     * Indicates the number of people of each age category associated with this request.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\DriverTypeAType[] $driverType
     * @return self
     */
    public function setDriverType(array $driverType)
    {
        $this->driverType = $driverType;
        return $this;
    }

    /**
     * Adds as rateQualifier
     *
     * Indicates the type of rates of interest to the customer, along with any discount number or promotional codes that may affect the rate.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\RateQualifierAType $rateQualifier
     */
    public function addToRateQualifier(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\RateQualifierAType $rateQualifier)
    {
        $this->rateQualifier[] = $rateQualifier;
        return $this;
    }

    /**
     * isset rateQualifier
     *
     * Indicates the type of rates of interest to the customer, along with any discount number or promotional codes that may affect the rate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRateQualifier($index)
    {
        return isset($this->rateQualifier[$index]);
    }

    /**
     * unset rateQualifier
     *
     * Indicates the type of rates of interest to the customer, along with any discount number or promotional codes that may affect the rate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRateQualifier($index)
    {
        unset($this->rateQualifier[$index]);
    }

    /**
     * Gets as rateQualifier
     *
     * Indicates the type of rates of interest to the customer, along with any discount number or promotional codes that may affect the rate.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\RateQualifierAType[]
     */
    public function getRateQualifier()
    {
        return $this->rateQualifier;
    }

    /**
     * Sets a new rateQualifier
     *
     * Indicates the type of rates of interest to the customer, along with any discount number or promotional codes that may affect the rate.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\RateQualifierAType[] $rateQualifier
     * @return self
     */
    public function setRateQualifier(array $rateQualifier)
    {
        $this->rateQualifier = $rateQualifier;
        return $this;
    }

    /**
     * Gets as rateRange
     *
     * The minimum and maximum amounts a customer is willing to pay.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\RateRangeAType
     */
    public function getRateRange()
    {
        return $this->rateRange;
    }

    /**
     * Sets a new rateRange
     *
     * The minimum and maximum amounts a customer is willing to pay.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\RateRangeAType $rateRange
     * @return self
     */
    public function setRateRange(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\RateRangeAType $rateRange)
    {
        $this->rateRange = $rateRange;
        return $this;
    }

    /**
     * Adds as specialEquipPref
     *
     * Indicates the preferences for one or more specific items of additional equipment, such as ski racks, child seats, etc.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType $specialEquipPref
     */
    public function addToSpecialEquipPrefs(\Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType $specialEquipPref)
    {
        $this->specialEquipPrefs[] = $specialEquipPref;
        return $this;
    }

    /**
     * isset specialEquipPrefs
     *
     * Indicates the preferences for one or more specific items of additional equipment, such as ski racks, child seats, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialEquipPrefs($index)
    {
        return isset($this->specialEquipPrefs[$index]);
    }

    /**
     * unset specialEquipPrefs
     *
     * Indicates the preferences for one or more specific items of additional equipment, such as ski racks, child seats, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialEquipPrefs($index)
    {
        unset($this->specialEquipPrefs[$index]);
    }

    /**
     * Gets as specialEquipPrefs
     *
     * Indicates the preferences for one or more specific items of additional equipment, such as ski racks, child seats, etc.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     */
    public function getSpecialEquipPrefs()
    {
        return $this->specialEquipPrefs;
    }

    /**
     * Sets a new specialEquipPrefs
     *
     * Indicates the preferences for one or more specific items of additional equipment, such as ski racks, child seats, etc.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[] $specialEquipPrefs
     * @return self
     */
    public function setSpecialEquipPrefs(array $specialEquipPrefs)
    {
        $this->specialEquipPrefs = $specialEquipPrefs;
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

