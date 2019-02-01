<?php

namespace Devlabs91\TravelgateNotify\Models\Ota;

/**
 * Class representing VehicleSegmentCoreType
 *
 * The VehicleSegmentCoreType complex type identifies the core, or common, data that descibes the information assocated with a vehicle segment. Such information is typically provided in a reservation.
 * XSD Type: VehicleSegmentCoreType
 */
class VehicleSegmentCoreType
{

    /**
     * A unique number (e.g., segment number or index number) used to further identify a booked item within a list of booked items in a multi-segment PNR. Typically not used in messages to car suppliers.
     *
     * @property int $indexNumber
     */
    private $indexNumber = null;

    /**
     * A confirmation number by which this reservation can be uniquely identified. Can also be used for reservation, contract and PNR IDs as well.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleSegmentCoreType\ConfIDAType[] $confID
     */
    private $confID = [
        
    ];

    /**
     * Identifies the vendor associated with this information.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $vendor
     */
    private $vendor = null;

    /**
     * Information that is common, or core, to all requests and responses associated with the reservation of a vehicle.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalCoreType $vehRentalCore
     */
    private $vehRentalCore = null;

    /**
     * Information on one specific vehicle along with detailed information on the charges associated with this vehicle.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleType $vehicle
     */
    private $vehicle = null;

    /**
     * Information on the rates associated with this vehicle. Rate information can include the distance and the base rental cost, along with information on the various factors that may infuence this rate.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType $rentalRate
     */
    private $rentalRate = null;

    /**
     * A collection of special equipment that is part of this reservation, along with the charges associated with this equipment.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleEquipmentPricedType[] $pricedEquips
     */
    private $pricedEquips = null;

    /**
     * A collection of fees associated with this vehicle reservation.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType[] $fees
     */
    private $fees = null;

    /**
     * The total cost of this reservation, the sum of the individual charges, optional charges and associated fees.
     *
     * @property \Devlabs91\TravelgateNotify\Models\Ota\VehicleSegmentCoreType\TotalChargeAType $totalCharge
     */
    private $totalCharge = null;

    /**
     * @property \Devlabs91\TravelgateNotify\Models\Ota\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as indexNumber
     *
     * A unique number (e.g., segment number or index number) used to further identify a booked item within a list of booked items in a multi-segment PNR. Typically not used in messages to car suppliers.
     *
     * @return int
     */
    public function getIndexNumber()
    {
        return $this->indexNumber;
    }

    /**
     * Sets a new indexNumber
     *
     * A unique number (e.g., segment number or index number) used to further identify a booked item within a list of booked items in a multi-segment PNR. Typically not used in messages to car suppliers.
     *
     * @param int $indexNumber
     * @return self
     */
    public function setIndexNumber($indexNumber)
    {
        $this->indexNumber = $indexNumber;
        return $this;
    }

    /**
     * Adds as confID
     *
     * A confirmation number by which this reservation can be uniquely identified. Can also be used for reservation, contract and PNR IDs as well.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleSegmentCoreType\ConfIDAType $confID
     */
    public function addToConfID(\Devlabs91\TravelgateNotify\Models\Ota\VehicleSegmentCoreType\ConfIDAType $confID)
    {
        $this->confID[] = $confID;
        return $this;
    }

    /**
     * isset confID
     *
     * A confirmation number by which this reservation can be uniquely identified. Can also be used for reservation, contract and PNR IDs as well.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConfID($index)
    {
        return isset($this->confID[$index]);
    }

    /**
     * unset confID
     *
     * A confirmation number by which this reservation can be uniquely identified. Can also be used for reservation, contract and PNR IDs as well.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConfID($index)
    {
        unset($this->confID[$index]);
    }

    /**
     * Gets as confID
     *
     * A confirmation number by which this reservation can be uniquely identified. Can also be used for reservation, contract and PNR IDs as well.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleSegmentCoreType\ConfIDAType[]
     */
    public function getConfID()
    {
        return $this->confID;
    }

    /**
     * Sets a new confID
     *
     * A confirmation number by which this reservation can be uniquely identified. Can also be used for reservation, contract and PNR IDs as well.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleSegmentCoreType\ConfIDAType[] $confID
     * @return self
     */
    public function setConfID(array $confID)
    {
        $this->confID = $confID;
        return $this;
    }

    /**
     * Gets as vendor
     *
     * Identifies the vendor associated with this information.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Sets a new vendor
     *
     * Identifies the vendor associated with this information.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $vendor
     * @return self
     */
    public function setVendor(\Devlabs91\TravelgateNotify\Models\Ota\CompanyNameType $vendor)
    {
        $this->vendor = $vendor;
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
     * Gets as vehicle
     *
     * Information on one specific vehicle along with detailed information on the charges associated with this vehicle.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleType
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * Information on one specific vehicle along with detailed information on the charges associated with this vehicle.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleType $vehicle
     * @return self
     */
    public function setVehicle(\Devlabs91\TravelgateNotify\Models\Ota\VehicleType $vehicle)
    {
        $this->vehicle = $vehicle;
        return $this;
    }

    /**
     * Gets as rentalRate
     *
     * Information on the rates associated with this vehicle. Rate information can include the distance and the base rental cost, along with information on the various factors that may infuence this rate.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType
     */
    public function getRentalRate()
    {
        return $this->rentalRate;
    }

    /**
     * Sets a new rentalRate
     *
     * Information on the rates associated with this vehicle. Rate information can include the distance and the base rental cost, along with information on the various factors that may infuence this rate.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType $rentalRate
     * @return self
     */
    public function setRentalRate(\Devlabs91\TravelgateNotify\Models\Ota\VehicleRentalRateType $rentalRate)
    {
        $this->rentalRate = $rentalRate;
        return $this;
    }

    /**
     * Adds as pricedEquip
     *
     * A collection of special equipment that is part of this reservation, along with the charges associated with this equipment.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleEquipmentPricedType $pricedEquip
     */
    public function addToPricedEquips(\Devlabs91\TravelgateNotify\Models\Ota\VehicleEquipmentPricedType $pricedEquip)
    {
        $this->pricedEquips[] = $pricedEquip;
        return $this;
    }

    /**
     * isset pricedEquips
     *
     * A collection of special equipment that is part of this reservation, along with the charges associated with this equipment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPricedEquips($index)
    {
        return isset($this->pricedEquips[$index]);
    }

    /**
     * unset pricedEquips
     *
     * A collection of special equipment that is part of this reservation, along with the charges associated with this equipment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPricedEquips($index)
    {
        unset($this->pricedEquips[$index]);
    }

    /**
     * Gets as pricedEquips
     *
     * A collection of special equipment that is part of this reservation, along with the charges associated with this equipment.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleEquipmentPricedType[]
     */
    public function getPricedEquips()
    {
        return $this->pricedEquips;
    }

    /**
     * Sets a new pricedEquips
     *
     * A collection of special equipment that is part of this reservation, along with the charges associated with this equipment.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleEquipmentPricedType[] $pricedEquips
     * @return self
     */
    public function setPricedEquips(array $pricedEquips)
    {
        $this->pricedEquips = $pricedEquips;
        return $this;
    }

    /**
     * Adds as fee
     *
     * A collection of fees associated with this vehicle reservation.
     *
     * @return self
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType $fee
     */
    public function addToFees(\Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType $fee)
    {
        $this->fees[] = $fee;
        return $this;
    }

    /**
     * isset fees
     *
     * A collection of fees associated with this vehicle reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFees($index)
    {
        return isset($this->fees[$index]);
    }

    /**
     * unset fees
     *
     * A collection of fees associated with this vehicle reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFees($index)
    {
        unset($this->fees[$index]);
    }

    /**
     * Gets as fees
     *
     * A collection of fees associated with this vehicle reservation.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * A collection of fees associated with this vehicle reservation.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleChargePurposeType[] $fees
     * @return self
     */
    public function setFees(array $fees)
    {
        $this->fees = $fees;
        return $this;
    }

    /**
     * Gets as totalCharge
     *
     * The total cost of this reservation, the sum of the individual charges, optional charges and associated fees.
     *
     * @return \Devlabs91\TravelgateNotify\Models\Ota\VehicleSegmentCoreType\TotalChargeAType
     */
    public function getTotalCharge()
    {
        return $this->totalCharge;
    }

    /**
     * Sets a new totalCharge
     *
     * The total cost of this reservation, the sum of the individual charges, optional charges and associated fees.
     *
     * @param \Devlabs91\TravelgateNotify\Models\Ota\VehicleSegmentCoreType\TotalChargeAType $totalCharge
     * @return self
     */
    public function setTotalCharge(\Devlabs91\TravelgateNotify\Models\Ota\VehicleSegmentCoreType\TotalChargeAType $totalCharge)
    {
        $this->totalCharge = $totalCharge;
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

